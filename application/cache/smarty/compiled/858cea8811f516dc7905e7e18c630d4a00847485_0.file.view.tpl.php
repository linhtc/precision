<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:07
         compiled from "/var/www/html/precision/application/views/admin/photo/view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157014528659f81a8b03c302_36222882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '858cea8811f516dc7905e7e18c630d4a00847485' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/photo/view.tpl',
      1 => 1506653334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157014528659f81a8b03c302_36222882',
  'variables' => 
  array (
    'permission' => 0,
    'photoHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a8b088005_33300208',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a8b088005_33300208')) {
function content_59f81a8b088005_33300208 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157014528659f81a8b03c302_36222882';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo lang('setup');?>

        
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
                    <h3 class="box-title"><?php echo lang('list');?>
</h3>
                    <div class="pull-right box-tools">
                    <?php if ((!empty($_smarty_tpl->tpl_vars['permission']->value['export'])) || $_smarty_tpl->tpl_vars['permission']->value == 1) {?>
                    <button onclick="optimizer.exportData();" class="btn btn-info btn-xs" data-widget="export" data-toggle="tooltip" title="<?php echo lang('export');?>
"><i class="fa fa-download"></i></button>
                    <?php }?>  
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
                                <th col-id="id"><?php echo lang('id');?>
</th>
                                <th col-id="dt"><?php echo lang('modified');?>
</th>
                                <th col-id="p" col-sel="1" col-multi="multiple"><?php echo lang('key');?>
</th>
                                <th col-id="c1"><?php echo lang('value');?>
</th>
                                <th col-id="c2"><?php echo lang('value2');?>
</th>
                                <th col-id="action"><?php echo lang('action');?>
</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div id="page-detail" style="float:left;">
                        <ul class="pagination bootpag"><li data-lp="10"><?php echo lang('record_found');?>
 <p class="total-rows" style="display: inline;"></p></li></ul>
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
			src="<?php echo base_url();?>
media/filemanager/filemanager/dialog.php?type=0&field_id=fieldID&relative_url=1">
		</iframe>
      </div>
    </div>

  </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"><?php echo '</script'; ?>
>
<!-- Include Date Range Picker -->
<?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<?php echo '<script'; ?>
>
    var selMap = {
        p: '<?php echo $_smarty_tpl->tpl_vars['photoHtml']->value;?>
'
    };
    var areYouSure = '<?php echo lang('are_u_sure');?>
';
    var okButton = '<?php echo lang('ok');?>
';
    var cancelButton = '<?php echo lang('cancel');?>
';
    var filterBy = '<?php echo lang('filter_by');?>
';

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
<?php echo '</script'; ?>
><?php }
}
?>