<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dạng danh sách
        <small>Sửa lại</small>
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
                    <div class="pull-right box-tools" style="display: none;">
                        <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body pad">
                	<form>
						<input id="id" type="hidden" class="form-control params" value="{$thisItem->id}">
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
							        <input id="sort" placeholder="Nhập một giá trị..." type="text" class="form-control params" value="{$thisItem->sort}">
							    </div>
	                		</div>
                		</div>
                		<div class="row">
	                		<div class="col-md-6">
							    <div class="form-group">
							        <label for="apply_value">Giá trị</label>
							        <textarea id="apply_value" placeholder="Nhập một giá trị..." rows="5" cols="1" notnull class="form-control params">{$thisItem->page_content}</textarea>
							    </div>
	                		</div>
	                		<div class="col-md-6">
							    <div class="form-group">
							        <label for="apply_value">Giá trị 2</label>
							        <textarea id="apply_value2" placeholder="Nhập một giá trị..." rows="5" cols="1" notnull class="form-control params">{$thisItem->page_content2}</textarea>
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

<script>
    var permissionList = '{json_encode($permissionList)}';
    var pageType = '{$thisItem->page_type}';
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
        window.location = '{base_url()}admin/manage-list/view';
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
            noneSelectedText: 'Chọn một mục...'
        }).on('hidden.bs.select', function (e){
            /*console.log($('#slModule').selectpicker('val'));*/
        });
        $('#page_type').selectpicker('val', pageType);
        $('.selectpicker').selectpicker('deselectAll');
    });
</script>