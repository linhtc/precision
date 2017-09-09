<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Login
        <small>Test login</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Login</li>
    </ol>
    <div id="response-div">


    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Mobiistar 500CMS</h4>
            </div>
            <div class="modal-body">
                <p>Đăng nhập tài khoản Mobiistar</p>
                <div class="form-group">
                    <label for="username">Tên đăng nhập:</label>
                    <input type="text" id="username" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" class="form-control" id="pwd">
                </div>
                <p class="error" style="color:red;"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
                <button type="button" class="btn btn-success" onclick="exeLogin()">Đăng nhập</button>
            </div>
        </div>

    </div>
</div>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script>
    console.log('test login...');
    var baseUrl = '{base_url()}';
    function exeLogin(){
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        if(username != '' && password != ''){
            $('.modal-content').block({
                message: '<i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>',
                css: {
                    border: 'none',
                    padding: 0,
                    margin: 0,
                    width: '100%',
                    height: '100%',
                    paddingTop: '10%',
                    left: '35%',
                    textAlign: 'center',
                    color: '#000',
                    backgroundColor:'#fff',
                    cursor: 'wait'
                }
            });
            $.post(baseUrl+"admin/groups/exe_login_popup", {
                    username: username,
                    password: password
                },
                function(data, status){
                    console.log(data);
                    $('.modal-content').unblock({});
                    if(data.status == 1){
                        /*window.location = data.redirect;*/
                    } else{
                        $('.error').text(data.message);
                    }
                    $('#response-div').html(JSON.stringify(data));
                },
                'json'
            );
        } else{
            $('.error').text('Vui lòng điền đầy đủ thông tin!');
        }
    }
</script>