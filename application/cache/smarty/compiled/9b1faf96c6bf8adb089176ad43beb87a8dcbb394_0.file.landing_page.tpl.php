<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:01
         compiled from "/var/www/html/precision/application/views/admin/layouts/landing_page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46408480159f81a85d239d4_59284846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1faf96c6bf8adb089176ad43beb87a8dcbb394' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/layouts/landing_page.tpl',
      1 => 1506564062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46408480159f81a85d239d4_59284846',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a85d4d2b0_29049875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a85d4d2b0_29049875')) {
function content_59f81a85d4d2b0_29049875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46408480159f81a85d239d4_59284846';
?>
<!DOCTYPE html>

<!--

╔═══╦═══╦═══╦╗──╔╗
║╔══╣╔═╗║╔═╗║║─╔╝╚╗
║╚══╣║║║║║║║║╚═╬╗╔╬══╗╔══╦══╦╗╔╗
╚══╗║║║║║║║║║╔╗╠╣║║══╣║╔═╣╔╗║╚╝║
╔══╝║╚═╝║╚═╝║╚╝║║╚╬══╠╣╚═╣╚╝║║║║
╚═══╩═══╩═══╩══╩╩═╩══╩╩══╩══╩╩╩╝

http://500bits.com

Hello you! I'm Kinh Luân.

-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <title>Canvas</title>


        <meta name="googlebot" content="noindex" />

        
        <!-- Bootstrap 3.3.7 -->
        <link href="<?php echo base_url();?>
static/default/template/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
static/default/template/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url();?>
static/default/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


        <!-- Theme style -->
        <link href="<?php echo base_url();?>
static/default/admin/template/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url();?>
static/default/admin/template/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
        <!-- Theme style Hóa-->
        <link href="<?php echo base_url();?>
static/default/admin/template/css/config.css.css" rel="stylesheet" type="text/css" />


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</html><?php }
}
?>