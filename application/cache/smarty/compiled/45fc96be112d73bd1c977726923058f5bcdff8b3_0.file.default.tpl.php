<?php /* Smarty version 3.1.27, created on 2017-10-31 13:39:07
         compiled from "/var/www/html/precision/application/views/admin/layouts/default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127669423059f81a8b089948_38967683%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45fc96be112d73bd1c977726923058f5bcdff8b3' => 
    array (
      0 => '/var/www/html/precision/application/views/admin/layouts/default.tpl',
      1 => 1506564062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127669423059f81a8b089948_38967683',
  'variables' => 
  array (
    'listCss' => 0,
    'content' => 0,
    'listJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f81a8b103ef1_26332190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f81a8b103ef1_26332190')) {
function content_59f81a8b103ef1_26332190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127669423059f81a8b089948_38967683';
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

Hello you! We're VAS of Mobiistar Corp.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>STV Tool</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


        <meta name="googlebot" content="noindex" />

        <!-- Bootstrap 3.3.7 -->
        <link href="<?php echo base_url();?>
static/default/template/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
static/default/template/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url();?>
static/default/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />



        <!-- Select 2 -->
        <link href="<?php echo base_url();?>
static/default/template/select2/css/select2.min.css" rel="stylesheet" type="text/css" />


        <!-- Theme style -->
        <link href="<?php echo base_url();?>
static/default/admin/template/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url();?>
static/default/admin/template/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" type="image/x-icon" href="http://muahang.mobiistar.vn/image/data/Banner/favicon.png">

        <!-- jQuery 2.2.4 -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/template/main/js/jquery.min.js"><?php echo '</script'; ?>
>

        <!-- Bootstrap 3.3.7 JS -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/template/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <?php echo $_smarty_tpl->tpl_vars['listCss']->value;?>


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
        <style>
            .sidebar-collapse .li-level1 a{
                color: transparent !important;
            }
            .sidebar-collapse .li-level1 a i{
                color: #b8c7ce;
            }
            .sidebar-collapse .user-panel {
                padding-left: 3px;
            }
            .sidebar-collapse .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a>i{
                color: #fff;
            }
            .bs-searchbox .form-control {
                border: none;
                border-bottom: thin solid silver;
            }
            .filter-data .filter-option {
                font-weight: 900;
                color: gray;
            }
            @media (max-width: 767px){
                .main-header .logo {
                    display: none;
                }
                .fixed .content-wrapper, .fixed .right-side {
                    padding-top: 50px !important;
                }
                .main-sidebar, .left-side {
                    padding-top: 50px!important;
                }
                .main-header .sidebar-toggle:before {
                    content: "Canvas Tool";
                }
                .main-header .sidebar-toggle {
                    font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
                    font-weight: 400;
                }
            }
            
            .content{
            	padding: 10px 15px !important;
            }
        </style>
    </head>
    <body class="skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <?php echo $_smarty_tpl->getSubTemplate ('admin/layouts/default_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </header>

            <aside class="main-sidebar">
                <?php echo $_smarty_tpl->getSubTemplate ('admin/layouts/default_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> beta3
                </div>
                <strong>Copyright &copy; 2017 <a href="http://mobiistar.vn" target="_blank">STV</a>.</strong> All rights reserved.
            </footer>


        </div><!-- ./wrapper -->

        <!-- AdminLTE App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/template/js/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- SlimScroll 1.3.0 -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/template/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Select 2 -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/template/select2/js/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- AdminLTE for demo purposes -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/template/js/demo.js" type="text/javascript"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            langRootDaysOfWeek = ["<?php echo lang('Sun');?>
", "<?php echo lang('Mon');?>
", "<?php echo lang('Tue');?>
", "<?php echo lang('Wed');?>
", "<?php echo lang('Thu');?>
", "<?php echo lang('Fri');?>
", "<?php echo lang('Sat');?>
"];
            langRootMonthNames = ["<?php echo lang('Jan');?>
", "<?php echo lang('Feb');?>
", "<?php echo lang('Mar');?>
", "<?php echo lang('Apr');?>
", "<?php echo lang('May');?>
", "<?php echo lang('Jun');?>
", "<?php echo lang('Jul');?>
", "<?php echo lang('Aug');?>
", "<?php echo lang('Sep');?>
", "<?php echo lang('Oct');?>
", "<?php echo lang('Nov');?>
", "<?php echo lang('Dec');?>
"];
            langRootOK = '<?php echo lang("ok");?>
';
            langRootCancel = '<?php echo lang("cancel");?>
';
            langRootFrom = '<?php echo lang("from");?>
';
            langRootTo = '<?php echo lang("to");?>
';
            langRootDateFormat = '<?php echo lang("MM-DD-YYYY");?>
';
            langRootNotify = '<?php echo lang('notify');?>
';
            langRootComplete = '<?php echo lang('complete');?>
';
            langRootError = '<?php echo lang('error');?>
';
            langRootAreYouSure = '<?php echo lang('are_u_sure');?>
';
            langRootOkButton = '<?php echo lang('ok');?>
';
            langRootCancelButton = '<?php echo lang('cancel');?>
';
            rootBaseUrl = '<?php echo base_url();?>
';
        <?php echo '</script'; ?>
>

        <?php echo $_smarty_tpl->tpl_vars['listJs']->value;?>



        <!-- Main -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/js/main.js" type="text/javascript"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
static/default/admin/js/scrolltop.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
}
?>