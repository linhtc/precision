<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{full_url()}"><b>Mobiistar</b> CMS</a>
            {$listCss}
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{base_url()}admin/users/sign_in" method="post">
                <div class="form-group has-feedback">
                    <input type="username" id="username" name="username" class="form-control" placeholder="Username"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" name ="password" class="form-control" placeholder="Password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                {$recaptcha_html}
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
                <div class="error"><strong>{$errorCapchar}</strong></div>
            </form>

            <div class='lockscreen-footer text-center'>
                Made with <i class="fa fa-heart"></i> by <b><a href="http://site.500bits.com" class='text-black' target="_blank">Mobiistar</a></b>
            </div>
        </div>
    </div>
<script src="{base_url()}static/default/template/main/js/jquery.min.js"></script>
<script src="{base_url()}static/default/template/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{base_url()}static/default/template/main/js/google.js"></script>
</body>