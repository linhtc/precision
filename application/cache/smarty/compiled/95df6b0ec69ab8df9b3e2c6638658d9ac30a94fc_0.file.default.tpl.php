<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:25
         compiled from "/var/www/html/precision/application/views/frontend/layouts/default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16489684105a332a9d8e3e98_27439417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95df6b0ec69ab8df9b3e2c6638658d9ac30a94fc' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/default.tpl',
      1 => 1510557593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16489684105a332a9d8e3e98_27439417',
  'variables' => 
  array (
    'subtitle' => 0,
    'listCss' => 0,
    'content' => 0,
    'listJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9d9f6c99_08548463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9d9f6c99_08548463')) {
function content_5a332a9d9f6c99_08548463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16489684105a332a9d8e3e98_27439417';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Công ty TNHH Cơ Khí Chính Xác Toàn Thắng <?php if ($_smarty_tpl->tpl_vars['subtitle']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
 <?php }?></title>
  <meta charset="utf-8"/>
  <meta name="format-detection" content="telephone=no"/>
  <link rel="canonical" href="http://www.mobiistar.vn/" />
	<link rel="author" href="https://plus.google.com/+MobiistarOfficial" />
	<meta name="description" content="Công ty TNHH Cơ Khí Chính Xác Toàn Thắng - Dẫn đầu chất lượng" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Công ty TNHH Cơ Khí Chính Xác Toàn Thắng - Dẫn đầu chất lượng" />
	<meta property="og:description" content="Công ty TNHH Cơ Khí Chính Xác Toàn Thắng - Dẫn đầu chất lượng" />
	<meta property="og:url" content="<?php echo base_url();?>
" />
	<meta property="og:image" content="<?php echo base_url();?>
media/filemanager/source/home/introduce.jpg" />
	<meta property="article:published_time" content="2017-10-19" />
	<meta property="article:modified_time" content="2017-10-20" />
	<meta property="og:site_name" content="Toan Thang Precision" />
	<meta property="fb:app_id" content="472186849643124" />
  
  <link rel="icon" href="<?php echo base_url();?>
static/default/frontend/images/favicon.ico" type="image/x-icon"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/grid.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/style.css"/>
  <link rel='stylesheet' href="<?php echo base_url();?>
static/default/frontend/css/material-icons.css">
  <!-- <link rel='stylesheet' href="<?php echo base_url();?>
static/default/frontend/css/google-map.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/camera.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>
static/default/frontend/css/custom.css"/>
  <?php echo $_smarty_tpl->tpl_vars['listCss']->value;?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
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
  <?php echo '<script'; ?>
 type="text/javascript">
  	var rootBaseUrl = '<?php echo base_url();?>
';
  	var googleMapIframe = '<?php echo $_SESSION['sys_cnf']->cnf_google_map->v1;?>
';
  	var youtubeIframe = '<?php echo $_SESSION['sys_cnf']->cnf_video_youtube->v1;?>
';
  <?php echo '</script'; ?>
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
<!-- <div class="loading">Loading&#8230;</div> -->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/template/plugins/blockui/jquery.blockUI.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/frontend/js/script.js"><?php echo '</script'; ?>
>
	<?php echo $_smarty_tpl->tpl_vars['listJs']->value;?>

	
  <?php echo $_smarty_tpl->getSubTemplate ('frontend/layouts/contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
setTimeout(function(){
	var giframe = document.getElementById('google-map-iframe');
    if(giframe != null){
        giframe.setAttribute('src', googleMapIframe);
	}
}, 3000);
setTimeout(function(){
	var yiframe = document.getElementById('youtube-iframe');
	if(yiframe != null){
		yiframe.setAttribute('src', youtubeIframe);
	}
}, 1000);
<?php echo '</script'; ?>
>
</body><?php }
}
?>