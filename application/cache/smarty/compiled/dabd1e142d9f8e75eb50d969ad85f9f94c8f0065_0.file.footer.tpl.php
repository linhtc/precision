<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:25
         compiled from "/var/www/html/precision/application/views/frontend/layouts/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15479899085a332a9dab2450_02593550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabd1e142d9f8e75eb50d969ad85f9f94c8f0065' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/footer.tpl',
      1 => 1508410154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15479899085a332a9dab2450_02593550',
  'variables' => 
  array (
    'uuid' => 0,
    'isub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9dabd932_11715186',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9dabd932_11715186')) {
function content_5a332a9dabd932_11715186 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15479899085a332a9dab2450_02593550';
?>
<footer>
    <?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home' || $_smarty_tpl->tpl_vars['uuid']->value == 'contact') {?>
    <div class="container no-padding">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-3 col-xs-12 icon-hover" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3 lang-key="address colon"><?php echo lang('address colon');?>
</h3>
          <p>
          	<a href="<?php echo $_SESSION['sys_cnf']->cnf_address->v2;?>
" target="_blank" has-alias="true" id="footer-address" >
          	<?php echo $_SESSION['sys_cnf']->cnf_address->v1;?>

         	</a>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3 lang-key="phone colon"><?php echo lang('phone colon');?>
</h3>
          <p>
          	<?php
$_from = $_SESSION['sys_cnf']->fphone;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
	          <a href="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
"><?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
</a><br>
	      	<?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-email"></i>
          <h3 lang-key="contact colon"><?php echo lang('contact colon');?>
</h3>
          <p style="white-space: pre;">
          <a href="<?php echo base_url();
echo $_SESSION['sys_cnf']->cnf_email->v2;?>
"><?php echo $_SESSION['sys_cnf']->cnf_email->v1;?>
</a><br>
          <a href="<?php echo $_SESSION['sys_cnf']->cnf_hotline->v2;?>
">Hotline: <?php echo $_SESSION['sys_cnf']->cnf_hotline->v1;?>
</a></p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3 lang-key="open colon"><?php echo lang('open colon');?>
</h3>
          <p lang-key="open time text" has-html="true"><?php echo lang('open time text');?>
</p>
        </div>
      </div>
    </div>
    <section class="map">
    	<iframe id="google-map-iframe" src="" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen></iframe>
    </section>
    <?php }?>
    <div class="footer-cnt center_text">
      <p class="copyright">Toan Thang Precision © 2017. <a href="index-5.html" class="rights">Privacy Policy</a></p>
    </div>
  </footer><?php }
}
?>