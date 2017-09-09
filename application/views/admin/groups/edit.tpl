<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tài khoản
        <small>Sửa tài khoản</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin cơ bản</h3>
                </div>
                <form action="{base_url()}admin/groups/submit_edit" method="post" id="change-group">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tên nhóm</label>
                            <input type="text" id="group_name" name="group_name" class="form-control" value="{$obj.group_name}">
                        </div>
						<div class="form-group">
							<label>Khóa nhóm</label>
							<select class="form-control" id="locked" name="locked">
								<option value="0" {if $obj.locked == 0}selected{/if}>Không</option>
								<option value="1" {if $obj.locked == 1}selected{/if}>Có</option>
							</select>
						</div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{$obj.id}">
                </form>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success" onclick="submitChange();">Cập nhật</button>
                    <button type="submit" class="btn btn-danger" onclick="cancelChange();">Hủy bỏ</button>
                </div>
            </div>
        </div>
    </div>

    <div class="example-modal">
        <div id="my-modal-alert" class="modal modal-danger">
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
        });

        $("#content-alert").html("<p>" + content + "</p>");
    }

    function submitChange() {
        var group_name = $("#group_name").val();
        if (group_name.trim() == '') {
            showAlert("Bạn cần nhập tên nhóm");
            return;
        }
        var postData = $('#change-group').serializeArray();
        var formURL = $('#change-group').attr("action");
        $.post(formURL, postData, function (data) {
            console.log(data);
            if (data == 2) {
                showAlert("Nhóm đã tồn tại");
                return;
            } else if (data == 0) {
                showAlert("Thêm thất bại");
                return;
            } else{
				var url = '{base_url()}admin/groups/view';
				window.location.href = url;
			}
        });
    }

    function cancelChange() {
        var url = '{base_url()}admin/groups/view';
		window.location.href = url;
    }
</script>