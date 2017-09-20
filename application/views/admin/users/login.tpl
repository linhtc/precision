<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{full_url()}"><b>CNC</b> Backend</a>
            {$listCss}
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{base_url()}admin/users/login" method="post">
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
<input id="fieldID" type="text" value="">
                        <a data-toggle="modal" data-target="#myModal" class="btn iframe-btn" type="button">Open Filemanager</a>
                    </div>
                </div>
                <div class="error"><strong>{$errorCapchar}</strong></div>
                <input type="hidden" value="{$r}" name="r" />
            </form>

            <div class='lockscreen-footer text-center'>
                Power by <b><a href="{base_url()}" class='text-black' target="_blank">Toan Thang Precision</a></b>
            </div>
        </div>
    </div>
    
<!--  href="media/filemanager/filemanager/dialog.php?type=0" -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <iframe  width="765" height="550" frameborder="0"
	src="media/filemanager/filemanager/dialog.php?type=0&field_id=fieldID&relative_url=1">
</iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    
<script src="{base_url()}static/default/template/main/js/jquery.min.js"></script>
<script src="{base_url()}static/default/template/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{base_url()}static/default/template/main/js/google.js"></script>
<script>
function responsive_filemanager_callback(field_id){
	console.log(field_id);
	var url=jQuery('#'+field_id).val();
	console.log(url);
}
</script>
</body>