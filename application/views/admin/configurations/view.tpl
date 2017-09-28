<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('setup')}
        {*<small>Danh sách</small>*}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Tài khoản</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">{lang('list')}</h3>
                    <div class="pull-right box-tools">
                    {if (not empty($permission['export'])) or $permission eq 1}
                    <button onclick="optimizer.exportData();" class="btn btn-info btn-xs" data-widget="export" data-toggle="tooltip" title="{lang('export')}"><i class="fa fa-download"></i></button>
                    {/if}  
                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-folder"></i></button>
                    </div>
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
                                <th col-id="key">{lang('key')}</th>
                                <th col-id="name">{lang('name')}</th>
                                <th col-id="value">{lang('value')}</th>
                                <th col-id="value2">{lang('value2')}</th>
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
<input id="fieldID" type="hidden" value="">
<style>
.modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}
.modal-body {
    min-height: calc(100vh - 56px);
    overflow-y: auto; 
}
</style>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" style="position: relative;">
        <iframe frameborder="0" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;"
			src="{base_url()}media/filemanager/filemanager/dialog.php?type=0&field_id=fieldID&relative_url=1">
		</iframe>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script>
    var selMap = {

    };
    var areYouSure = '{lang('are_u_sure')}';
    var okButton = '{lang('ok')}';
    var cancelButton = '{lang('cancel')}';
    var filterBy = '{lang('filter_by')}';

    function responsive_filemanager_callback(field_id){
    	console.log(field_id);
    	var url=jQuery('#'+field_id).val();
    	console.log(url);
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
            if(tmpID == 'action'){ element = '<span>-</span>'; }
            $(this).html( element );
            $(dTable+' thead tr').append('<th>'+tmpTitle+'</th>');
            if(tmpID == 'dt'){ optimizer.genDatePicker(tmpID); }
            if(tmpSel == 1){
                $('#'+tmpID).selectpicker({
                    size: 10,
                    liveSearch: true,
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