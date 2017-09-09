<style>
    .photo-list{
        -webkit-background-size: contain !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
        height: 100px !important;
        cursor: pointer;
    }
    .larger-photo-list{
        -webkit-background-size: contain !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
        height: 300px !important;
        cursor: pointer;
        background-position: center;
    }
    .table-responsive .table tr td {
   		vertical-align: middle;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('document')}
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
                                <th col-id="ip">{lang('ipaddress')}</th>
                                <th col-id="su" col-sel="1" col-multi="multiple">{lang('subject')}</th>
                                <th col-id="cl" col-sel="1" col-multi="multiple">{lang('class')}</th>
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
        cl: '{$classSel}',
        su: '{$subjectSel}'
    };
    var areYouSure = '{lang('are_u_sure')}';
    var okButton = '{lang('ok')}';
    var cancelButton = '{lang('cancel')}';
    var langSeek = '{lang('seek')}';
    var filterBy = '{lang('filter_by')}';
    var includeLang = '{lang('include')}';
    var langCapatity = '{lang('capacity')}';
    var langColor = '{lang('color')}';
    var langPrice = '{lang('price')}';
    var langFeature = '{lang('feature')}';
    var langRate = '{lang('rate')}';
    var langNotFound = '{lang('not_found')}';

    function viewLargerPhoto(that){
    	var photo = $(that).css('background-image');
    	$('.modal-body').html("<div class='larger-photo-list' style='background-image:"+photo+";'></div>");
        $("#myModal").modal();
    }
    function viewFullCaption(that){
    	var caption = $(that).text();
    	$('.modal-body').html(caption);
        $("#myModal").modal();
    }
    function listingPrice(that){
        event.preventDefault();
        initLoading($(that));
        var brand = $(that).attr('brand');
        var model = $(that).attr('model');
        $.ajax({
            url: 'pricing',
            type: 'POST',
            data: { brand: brand, model: model },
            dataType: 'JSON',
            async: true,
            success: function (data) {
                showPricing(brand, model, data);
                destroyLoading($(that));
            },
            error: function(err){
                console.log(err.message);
            },
        });
    }
    function showPricing(brand, model, listing){
        if(listing.length < 1){
            $('.modal-body').html(brand+' '+model+': '+langNotFound);
        } else{
            var html = '<br />';
            html += '<table class="table">';
            html += '<thead> <tr><th>'+langColor+'</th> <th>'+langCapatity+'</th> <th>'+langPrice+'</th> </tr> </thead><tbody>';
            try{
                for(var key in listing){
                    if(listing.hasOwnProperty(key)){
                        var item = listing[key];
                        html += '<tr><td>'+item.color+'</td> <td>'+item.capacity+'</td> <td>'+item.price+'</td> </tr>';
                    }
                }
                $('.modal-body').html(brand+' '+model+': <br />'+html+'</tbody></table>');
            } catch (e){
                console.log(e.message);
                $('.modal-body').html(brand+' '+model+': '+langNotFound);
            }
        }
        $("#myModal").modal();
    }
    function listingRate(that){
        event.preventDefault();
        initLoading($(that));
        var brand = $(that).attr('brand');
        var model = $(that).attr('model');
        var summary = $(that).text();
        $.ajax({
            url: 'rating',
            type: 'POST',
            data: { brand: brand, model: model },
            dataType: 'JSON',
            async: true,
            success: function (data) {
                showRating(brand, model, summary, data);
                destroyLoading($(that));
            },
            error: function(err){
                console.log(err.message);
            },
        });
    }
    function showRating(brand, model, summary, listing){
        if(listing.length < 1){
            $('.modal-body').html(brand+' '+model+': '+langNotFound);
        } else{
            var html = '<br />';
            html += '<table class="table">';
            html += '<thead> <tr><th>'+langFeature+'</th> <th>'+langRate+'</th></tr> </thead><tbody>';
            try{
                for(var key in listing){
                    if(listing.hasOwnProperty(key)){
                        var item = listing[key];
                        html += '<tr><td>'+item.feature+'</td> <td>'+item.rate+'</td></tr>';
                    }
                }
                $('.modal-body').html(brand+' '+model+': '+summary+'<br />'+html+'</tbody></table>');
            } catch (e){
                console.log(e.message);
                $('.modal-body').html(brand+' '+model+': '+langNotFound);
            }
        }
        $("#myModal").modal();
    }
    function initLoading(dom){
        dom.block({
            message: '<i class="fa fa-spinner fa-pulse fa-fw"></i>',
            themedCSS: {
                width:  '30%',
                top:    '0%',
                left:   '0%'
            },
            css: {
                border: 'none',
                background: 'none',
                color: '#ffffff'
            }
        });
    }
    function destroyLoading(dom){
        dom.unblock();
    }

    $(document).ready(function() {
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

        optimizer.getData(filterList['page']);
    });
</script>