<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Quản lý hình ảnh
        <small>Thêm mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Cấu hình</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Các thành phần</h3>
                    <div class="pull-right box-tools" style="">
                        <button id="btn-choose-photo" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-folder"></i></button>
                    </div>
                </div>

                <div class="box-body pad">
                	<form>
                		<div class="row">
	                		<div class="col-md-6">
							    <div class="form-group">
	                                <label for="page_type">Trang (*)</label>
	                                <select id="page_type" class="form-control selectpicker params" notnull>
	                                    <option value=""></option>
	                                    {foreach from=$pageList key=i item=item}
	                                         <optgroup label="{$i}">
	                                        {foreach from=$item key=ii item=iitem}
	                                        <option value="{$ii}">{$iitem}</option>
	                                        {/foreach}
	                                        </optgroup>
	                                    {/foreach}
	                                </select>
	                            </div>
	                		</div>
	                		<div class="col-md-6">
							    <div class="form-group">
							        <label for="apply_key">Sắp xếp</label>
							        <input id="sort" placeholder="Nhập một giá trị..." type="text" class="form-control params">
							    </div>
	                		</div>
                		</div>
                		<div class="row">
	                		<div class="col-md-6">
							    <div class="form-group">
							        <label for="apply_value">Tên/Mô tả</label>
							        <input id="apply_value" notnull placeholder="Nhập một giá trị..." type="text" class="form-control params">
							    </div>
	                		</div>
	                		<div class="col-md-6">
							    <div class="form-group">
							        <label for="apply_value2">Giá trị 2 (Ảnh)</label>
							        <input onclick="$('#btn-choose-photo').click();" id="apply_value2" notnull placeholder="Chọn một ảnh..." readonly="readonly" type="text" class="form-control params">
							    </div>
	                		</div>
                		</div>
					</form>
                </div>

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success" onclick="funcSubmit();">Thực hiện</button>
                    <button type="submit" class="btn btn-danger" onclick="funcCancel();">Hủy bỏ</button>
                </div>
            </div>
        </div>
    </div>

    <div class="example-modal">
        <div id="my-modal-alert" class="modal modal-primary">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Thông báo!</h4>
                    </div>
                    <div class="modal-body">
                        <div id="content-alert"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Ok!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
			src="{base_url()}media/filemanager/filemanager/dialog.php?type=0&field_id=apply_value2&relative_url=1">
		</iframe>
      </div>
    </div>

  </div>
</div>

<script>
    var permissionList = '{json_encode($permissionList)}';

    function responsive_filemanager_callback(field_id){
    	console.log(field_id);
    	var url=jQuery('#'+field_id).val();
    	console.log(url);
    }
    
    function funcSubmit() {
        var params = getParams();
        if(params === false){
            toastr.warning('Kiểm tra lại dữ liệu nhập vào', 'Thông báo');
            return false;
        }
        params['permissionList'] = permissionList;
        initLoading();
        $.post('add', params, function (data) {
            destroyLoading();
            if (data == 1) {
                toastr.success('Thực hiện thành công!', 'Thông báo');
            } else{
                toastr.error(data, 'Thông báo');
            }
        });
    }

    function funcCancel() {
        window.location = '{base_url()}{$viewPath}view';
    }

    function initLoading(){
        $('.content').block({
            message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            themedCSS: { width:  '30%', top:    '45%', left:   '45%' },
            css: { border: 'none', background: 'none', color: '#ffffff' }
        });
    }

    function destroyLoading(){
        $('.content').unblock();
    }

    function getParams(){
        var params = { };
        $( ".params" ).each(function( index ) {
            var proptype = $( this ).prop('type'), cvalue = $( this ).val(), cid = $( this ).attr('id');
            if(proptype == undefined){ proptype = ''; }
            if(proptype.indexOf('select') >= 0){ cvalue = $( this ).selectpicker('val'); }
            var notnull = $( this ).attr('notnull');
            if(notnull != undefined && cid != null && (cvalue == null || cvalue == '')){ params = false; return; }
            if(cid != null && cid != '') { params[cid] = cvalue; }
        });
        return params;
    }

    $(document).ready(function() {
        $('#page_type').selectpicker({
            size: 10,
            liveSearch: true,
            noneSelectedText: 'Chọn một sự kiện'
        }).on('hidden.bs.select', function (e){
            /*console.log($('#slModule').selectpicker('val'));*/
        });
        $('.selectpicker').selectpicker('deselectAll');
    });
</script>