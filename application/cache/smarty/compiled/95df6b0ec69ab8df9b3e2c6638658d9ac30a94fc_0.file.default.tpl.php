<?php /* Smarty version 3.1.27, created on 2017-09-13 00:09:58
         compiled from "/var/www/html/precision/application/views/frontend/layouts/default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1254861359b814e64678a0_37978155%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95df6b0ec69ab8df9b3e2c6638658d9ac30a94fc' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/default.tpl',
      1 => 1505133760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254861359b814e64678a0_37978155',
  'variables' => 
  array (
    'listCss' => 0,
    'content' => 0,
    'listJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b814e647d027_63587114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b814e647d027_63587114')) {
function content_59b814e647d027_63587114 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1254861359b814e64678a0_37978155';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo lang('home');?>
</title>
  <meta charset="utf-8"/>
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="<?php echo base_url();?>
static/default/frontend/images/favicon.ico" type="image/x-icon"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/grid.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/style.css"/>
  <link rel='stylesheet' href="<?php echo base_url();?>
static/default/frontend/css/material-icons.css">
  <link rel='stylesheet' href="<?php echo base_url();?>
static/default/frontend/css/google-map.css">
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/camera.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/custom.css"/>
  <?php echo $_smarty_tpl->tpl_vars['listCss']->value;?>


<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700,400'>

  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/frontend/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/frontend/js/jquery-migrate-1.2.1.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 src='<?php echo base_url();?>
static/default/frontend/js/device.min.js'><?php echo '</script'; ?>
>
</head>
<body>
<div class="page">
  <?php echo $_smarty_tpl->getSubTemplate ('frontend/layouts/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <?php echo $_smarty_tpl->getSubTemplate ('frontend/layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <main>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  </main>
  <?php echo $_smarty_tpl->getSubTemplate ('frontend/layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/frontend/js/script.js"><?php echo '</script'; ?>
>
	<?php echo $_smarty_tpl->tpl_vars['listJs']->value;?>

</body><?php }
}
?>