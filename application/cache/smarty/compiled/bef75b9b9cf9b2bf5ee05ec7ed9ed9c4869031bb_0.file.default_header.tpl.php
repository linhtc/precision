<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:07
         compiled from "/var/www/html/precision/application/views/admin/layouts/default_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187187878759f81a8b105639_44364958%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef75b9b9cf9b2bf5ee05ec7ed9ed9c4869031bb' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/layouts/default_header.tpl',
      1 => 1506564062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187187878759f81a8b105639_44364958',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a8b10c236_77818223',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a8b10c236_77818223')) {
function content_59f81a8b10c236_77818223 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187187878759f81a8b105639_44364958';
?>
<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>STV</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>STV</b> Tool</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li>
                <a href="/admin/users/language/vi" title="Tiếng Việt" <?php if ($_SESSION['lang_key'] == 'vi') {?>style="text-decoration: underline; pointer-events: none; cursor: text;"<?php }?>>Vi</a>
            </li>
            <li>
                <a href="/admin/users/language/en" title="English" <?php if ($_SESSION['lang_key'] == 'en') {?>style="text-decoration: underline; pointer-events: none; cursor: text;"<?php }?>>En</a>
            </li>
            <li>
                <a href="/admin/profiles/logout" title="Logout"><i class="fa fa-sign-out"></i></a>
            </li>
        </ul>
    </div>

</nav>
<?php }
}
?>