<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {lang('my_profile')}
        {*<small>Thông tin cá nhân</small>*}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading...</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img width="128" class="profile-user-img img-responsive img-circle" src="/media/images/profiles/{$user.avatar}" alt="User profile picture">

                    <h3 class="profile-username text-center">{$user.full_name}</h3>

                    <p class="text-muted text-center">{$user.group_name}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>{lang('username')}</b> <a class="pull-right">{$user.username}</a>
                        </li>
                        <li class="list-group-item">
                            <b>{lang('right')}</b> <a class="pull-right">{if $user.admin == 1} Quản trị {else} - {/if}</a>
                        </li>
                    </ul>

                    <a href="#" onclick="changeAvatar();" class="btn btn-primary btn-block"><b>{lang('change_avatar')}</b></a>
                    <input id="src_avatar" type="file" class="form-control"  style="opacity:0; pointer-events: none; position: absolute;" />
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#information" data-toggle="tab" aria-expanded="true">{lang('info')}</a></li>
                    <li class=""><a href="#security" data-toggle="tab" aria-expanded="false">{lang('change_pw')}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane information active" id="information">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">{lang('full_name')}</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="full_name" placeholder="{lang('full_name')}" value="{$user.full_name}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">{lang('email')}</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="{lang('email')}" value="{$user.email}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">{lang('phone')}</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="{lang('phone')}" value="{$user.phone}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">{lang('dob')}</label>

                                <div class="col-sm-10">
                                    <input class="form-control" id="dob" placeholder="{lang('dob')} (yyyy-mm-dd)" value="{$user.dob}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">{lang('save')}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane security" id="security">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">{lang('pw')}</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" placeholder="{lang('pw')}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">{lang('re_pw')}</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="confirm-password" placeholder="{lang('re_pw')}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">{lang('save')}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<style>
    .profile-user-img {
        margin: 0 auto;
        width: 100px;
        padding: 3px;
        border: 3px solid #d2d6de;
    }
</style>

<script>
    function changeAvatar() {
        $("#src_avatar").click();
    }
    function initLoading(element){
        $('.'+element).block({
            message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            themedCSS: {
                width:  '30%',
                top:    '45%',
                left:   '45%'
            },
            css: {
                border: 'none',
                background: 'none',
                color: '#ffffff'
            }
        });
    }
    function destroyLoading(element){
        $('.'+element).unblock();
    }
    function getParam(element){
        var data = { };
        $( "."+element+" .form-control" ).each(function( index ) {
            var proptype = $( this ).prop('type'), cvalue = $( this ).val(), cid = $( this ).attr('id');
            if(proptype == undefined){ proptype = ''; }
            if(proptype.indexOf('select') >= 0){ cvalue = $( this ).selectpicker('val'); }
            if(cvalue === null){ cvalue= ''; }
            if(cid != null && cid != '') { data[cid] = cvalue; }
        });
        return data;
    }

    $(document).ready(function() {
        $("#src_avatar").change(function (e) {
            var element = 'box-profile';
            files = e.target.files;
            var formData = new FormData();
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                formData.append('upfiles', file, file.name);
            }

            initLoading(element);

            $.ajax({
                url: 'avatar',
                type: 'POST',
                data: formData,
                success: function (data) {

                    if(data > 0){
                        toastr.success('Cập nhật thành công!', 'Thông báo');
                        console.log(data);
                        /*setTimeout(function(){ location.reload(); }, 1000);*/
                    } else{
                        toastr.warning('Cập nhật chưa được!', 'Thông báo');
                    }
                    destroyLoading(element);
                },
                error: function(err){
                    console.log(err.message);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        $('#information form').submit(function(e){
            e.preventDefault();

            var element = 'information';
            initLoading(element);
            var data = getParam(element);
            $.ajax({
                url: 'set',
                type: 'POST',
                data: data,
                /*dataType: 'JSON',*/
                async: true,
                success: function (data) {
                    if(data > 0){
                        toastr.success('Cập nhật thành công!', 'Thông báo');
                        console.log(data);
                        /*setTimeout(function(){ location.reload(); }, 1000);*/
                    } else{
                        toastr.warning(data, 'Thông báo');
                    }
                    destroyLoading(element);
                },
                error: function(err){
                    console.log(err.message);
                    destroyLoading(element);
                },
            });
        });

        $('#security form').submit(function(e){
            e.preventDefault();

            var element = 'security';
            initLoading(element);
            var data = getParam(element);
            $.ajax({
                url: 'set',
                type: 'POST',
                data: data,
                /*dataType: 'JSON',*/
                async: true,
                success: function (data) {
                    if(data > 0){
                        toastr.success('Cập nhật thành công!', 'Thông báo');
                        console.log(data);
                        /*setTimeout(function(){ location.reload(); }, 1000);*/
                    } else{
                        toastr.warning(data, 'Thông báo');
                    }
                    destroyLoading(element);
                },
                error: function(err){
                    console.log(err.message);
                    destroyLoading(element);
                },
            });
        });
    });
</script>