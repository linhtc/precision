<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:01
         compiled from "/var/www/html/precision/application/views/admin/users/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:40532760859f81a85b7c173_91376715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee2754b5f6ebec6bc63469e492d994a0beeeef0' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/users/login.tpl',
      1 => 1506656624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40532760859f81a85b7c173_91376715',
  'variables' => 
  array (
    'listCss' => 0,
    'recaptcha_html' => 0,
    'errorCapchar' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a85cf81d0_26717610',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a85cf81d0_26717610')) {
function content_59f81a85cf81d0_26717610 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40532760859f81a85b7c173_91376715';
?>
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo full_url();?>
"><b>CNC</b> Backend</a>
            <?php echo $_smarty_tpl->tpl_vars['listCss']->value;?>

        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?php echo base_url();?>
admin/users/login" method="post">
                <div class="form-group has-feedback">
                    <input tabindex="1" type="username" id="username" name="username" class="form-control" placeholder="Username"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input tabindex="2" type="password" id="password" name ="password" class="form-control" placeholder="Password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['recaptcha_html']->value;?>

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
                <div class="error"><strong><?php echo $_smarty_tpl->tpl_vars['errorCapchar']->value;?>
</strong></div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" name="r" />
            </form>

            <div class='lockscreen-footer text-center'>
                Power by <b><a href="<?php echo base_url();?>
" class='text-black' target="_blank">Toan Thang Precision</a></b>
            </div>
        </div>
    </div>
    
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/template/main/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/template/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
</body><?php }
}
?>