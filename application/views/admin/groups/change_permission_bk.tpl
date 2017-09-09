<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Nhóm người dùng
        <small>Phân quyền</small>
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
                    <h3 class="box-title">Ghi chú: Chọn các mục bên dưới để phân quyền</h3>
                </div>

                <div class="box-body table-responsive no-padding">
					<form action="{base_url()}admin/groups/submit_change_permission" method="post" id="change-permission">
						<table class="table table-hover">
							<tbody>
								<tr class="accordion-toggle"  >
									<th>STT</th>
									<th>Tên module/Quyền</th>
								</tr>
								{foreach from=$moduleList key=i item=module}
									<tr class="accordion-toggle" style="cursor:pointer;background:#DCDCDC;" >
										<td data-toggle="collapse" data-target="#collapse_{$module.class_name}">{$i+1}</td>
										<td data-toggle="collapse" data-target="#collapse_{$module.class_name}">{$module.module_name} (+/-)</td>
									</tr>
									{$moduleFunction = json_decode($module.module_function)}
									<tr>
										<td></td>
										<td>
											<div id="collapse_{$module.class_name}" class="collapse in">
												{foreach $moduleFunction as $functionKey=>$functionName}
													<div style="width:auto;float:left;text-align:middle;margin-right:12em;">
														<input id="id_{$module.class_name}_{$functionKey}" type="checkbox" 
															name="__{$module.class_name}[]" value="{$functionKey}" style="cursor:pointer;" 
															{if not empty($listPermission[$module.class_name][$functionKey])}checked{/if}
														/>
														<label for="id_{$module.class_name}_{$functionKey}" style="cursor:pointer;margin:1px 5px;position:absolute;" >
															{$functionName}
														</label>
													</div>
												{/foreach}
											</div>
										</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
						<input type="hidden" name="id" id="id" value="{$id}">
					</form>
                </div>
				
				<div class="box-footer">
                    <button type="submit" class="btn btn-success" onclick="submitChange();">Cập nhật</button>
                    <button type="submit" class="btn btn-danger" onclick="cancelChange();">Hủy bỏ</button>
                </div>

                <div class="box-footer clearfix">
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
    function showAlert(content) {
        $('#my-modal-alert').modal({
            backdrop: 'static',
            keyboard: false
        }).on('hidden.bs.modal', function(event, modal) {
			window.location = '{base_url()}admin/groups/list_view';
		});

        $("#content-alert").html("<p>" + content + "</p>");
    }

    function submitChange() {
        var postData = $('#change-permission').serializeArray();
        var formURL = $('#change-permission').attr("action");
        $.post(formURL, postData, function (data) {
            $("#password-1").val("");
            $("#password-2").val("");
            $("#password-3").val("");

            if (data == 1) {
                showAlert("Cập nhật thành công");
            } else{
				showAlert("Đã có lỗi xãy ra");
			}
        });
    }

    function cancelChange() {
        window.location = '{base_url()}admin/groups/list_view';
    }
</script>