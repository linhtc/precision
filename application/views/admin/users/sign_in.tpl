<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{full_url()}"><b>Gia sư</b> Sáng tạo Việt</a>
            {$listCss}
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{base_url()}admin/users/sign_in" method="post">
                <div class="form-group has-feedback">
                    <input tabindex="1" type="username" id="username" name="username" class="form-control" placeholder="Username"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input tabindex="2" type="password" id="password" name ="password" class="form-control" placeholder="Password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                {$recaptcha_html}
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group" style="text-align: center;">
                            <label>
                                <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input tabindex="3" type="radio" name="language" value="vi" checked="checked" class="minimal">
                                    Bản Tiếng Việt
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group" style="text-align: center;">
                            <label>
                                <div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input tabindex="3" type="radio" name="language" value="en" class="minimal">
                                    English version
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button tabindex="4" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
                <div class="error"><strong>{$errorCapchar}</strong></div>
                <input type="hidden" value="{$r}" name="r" />
            </form>

            <div class='lockscreen-footer text-center'>
                Power by <b><a href="http://giasusangtaoviet.edu.vn" class='text-black' target="_blank">Sáng tạo Việt</a></b>
            </div>
        </div>
    </div>
<script src="{base_url()}static/default/template/main/js/jquery.min.js"></script>
<script src="{base_url()}static/default/template/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{base_url()}static/default/template/main/js/google.js"></script>
</body>