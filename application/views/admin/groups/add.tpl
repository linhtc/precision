<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Nhóm người dùng
        <small>Tạo mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Tạo mới</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Tạo nhóm mới</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body pad">
                    <div class="col-md-6">
                        <form action="{base_url()}admin/groups/submit_add_new" method="post" id="change-group">
                            <div class="form-group">
                                <label>Tên nhóm</label>
                                <input id="group_name" name="group_name" type="text" class="form-control" placeholder="...">
                            </div>

                            <div class="form-group">
                                <label>Khóa nhóm</label>
                                <select class="form-control" id="locked" name="locked">
                                    <option value="0">Không</option>
                                    <option value="1">Có</option>
                                </select>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-success" onclick="submitChange();">Thêm vào</button>
                    <button type="submit" class="btn btn-danger" onclick="cancelChange();">Hủy bỏ</button>
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
            if (data == 1) {
                var url = '{base_url()}admin/groups/view';
                window.location.href = url;
            } else if (data == 2) {
                showAlert("Nhóm đã tồn tại");
                return;
            } else if (data == 0) {
                showAlert("Thêm thất bại");
                return;
            }

        });
    }

    function cancelChange() {
        $("#group_name").val("");
        var url = '{base_url()}admin/groups/view';
        window.location.href = url;
    }
</script>