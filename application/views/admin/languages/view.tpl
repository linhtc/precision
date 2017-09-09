<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('language')}
        {*<small>Danh sách</small>*}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading...</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">{lang('list')}</h3>
                    {if (not empty($permission['export'])) or $permission eq 1}
                    <div class="pull-right box-tools">
                        <button onclick="optimizer.exportData();" class="btn btn-info btn-xs" data-widget="export" data-toggle="tooltip" title="{lang('export')}">
                            <i class="fa fa-download"></i>
                        </button>
                    </div>
                    {/if}
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered nowrap" cellspacing="0" id="data-table">
                            <thead>
                                <tr>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th col-id="id">{lang('id')}</th>
                                    <th col-id="dt">{lang('last_update')}</th>
                                    <th col-id="k" col-sel="1" col-multi="multiple">{lang('kind')}</th>
                                    <th col-id="l">{lang('keyword')}</th>
                                    <th col-id="v">{lang('vi')}</th>
                                    <th col-id="e">{lang('en')}</th>
                                    <th col-id="action">{lang('action')}</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div id="page-detail" style="float:left;">
                        <ul class="pagination bootpag"><li data-lp="10">{lang('record_found')} <p class="total-rows" style="display: inline;"></p></li></ul>
                    </div>
                    <div id="page-selection" style="float:right;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{lang('info')}</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{lang('close')}</button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- Include Date Range Picker -->
{*<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />*}
<script type="text/javascript" src="{base_url()}static/default/admin/template/plugins/daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="{base_url()}static/default/admin/template/plugins/daterangepicker/daterangepicker.css" />

<script>
    var selMap = {
        k: '{$lHtml}'
    };
    var areYouSure = '{lang('are_u_sure')}';
    var okButton = '{lang('ok')}';
    var cancelButton = '{lang('cancel')}';
    var langSeek = '{lang('seek')}';
    var filterBy = '{lang('filter_by')}';
    var includeLang = '{lang('include')}';
    var keyLang = '{lang('key')}';
    var valueLang = '{lang('value')}';
    var baseUrl = '{base_url()}';

    function showConfig(config){
        var html = '<table class="table table-bordered"> <thead> <tr><th>'+keyLang+'</th> <th>'+valueLang+'</th> </tr> </thead><tbody>';
        try{
            config = JSON.parse(config);
            for(var key in config){
                if(config.hasOwnProperty(key)){
                    if(config[key] == ''){
                        config[key] = '-';
                    }
                    html += '<tr><td>'+key+'</td> <td>'+config[key]+'</td> </tr>';
                }
            }
        } catch (e){
            console.log(e.message);
        }
        $('.modal-body').html(includeLang+': <br />'+html+'</tbody></table>');
        $("#myModal").modal();
    }
    function playback(){
        console.log('Hi there!');
        rebuildLang();
    }
    function rebuildLang(){
        console.log('rebuild lang...');
        $.ajax({
            url: baseUrl+'api/crontabs/languages/hello',
            type: 'GET',
            async: true,
            success: function (data) {
                console.log(data);
            },
            error: function(err){
                console.log(err.message);
            },
        });
    }

    $(document).ready(function() {
        filterList['k'] = 'spec';
        optimizer.prepare();

        $(dTable+' tfoot th').each( function () {
            var tmpTitle = $(this).text();
            var tmpID = $(this).attr('col-id');
            var tmpVal = typeof filterList[tmpID] !== 'undefined' ? filterList[tmpID] : '';
            var tmpSel = $(this).attr('col-sel');
            var tmpMulti = $(this).attr('col-multi');
            var element = '<input class="filter-data params" type="text" placeholder="'+filterBy+' '+tmpTitle+'" id="'+tmpID+'" value="'+tmpVal+'" />';
            if(tmpSel == 1){ element = '<select '+tmpMulti+' class="filter-data params selectpicker" id="'+tmpID+'" data-container="body">'+selMap[tmpID]+'</select>'; }
            if(tmpID == 'gift'){ optimizer.getGiftByCampaign(tmpVal); }
            if(tmpID == 'action' || tmpID == 'location'){ element = '<span>-</span>'; }
            $(this).html( element );
            $(dTable+' thead tr').append('<th>'+tmpTitle+'</th>');
            if(tmpID == 'action' || tmpID == 'dt' || tmpID == 'ol' || tmpID == 'config'){ optimizer.genDatePicker(tmpID); }
            if(tmpSel == 1){
                $('#'+tmpID).selectpicker({
                    size: 10,
                    liveSearch: true,
                    liveSearchPlaceholder: langSeek,
                    noneSelectedText: filterBy+' '+tmpTitle
                }).on('hide.bs.select', function () {
                    var tmpVal = $( this ).selectpicker('val');
                    var tmpVal2 = filterList[tmpID];
                    if(tmpVal == null){ tmpVal = ''; }
                    if(typeof tmpVal == 'object' && typeof tmpVal2 == 'object'){ if(tmpVal.sort().toString() == tmpVal2.sort().toString()){ return false; } }
                    if(tmpVal != tmpVal2){ optimizer.getData(1); }
                });
                $('#'+tmpID).selectpicker('val', tmpVal.split(','));
            }
        } );
        $('.params').on('keyup', function (e) { if(e.keyCode == 13){ optimizer.getData(1); } });
        currTable = $(dTable).dataTable({ filter: false, bPaginate: false, bInfo: false });

        filterList['k'] = 'spec';
        optimizer.getData(filterList['page']);
    });
</script>