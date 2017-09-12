<?php /* Smarty version 3.1.27, created on 2017-09-12 09:02:49
         compiled from "/var/www/html/precision/application/views/frontend/layouts/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71421322859b74049aaa9c0_88231755%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabd1e142d9f8e75eb50d969ad85f9f94c8f0065' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/footer.tpl',
      1 => 1505095624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71421322859b74049aaa9c0_88231755',
  'variables' => 
  array (
    'uuid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b74049aad479_18621778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b74049aad479_18621778')) {
function content_59b74049aad479_18621778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71421322859b74049aaa9c0_88231755';
?>
<footer>
    <?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home' || $_smarty_tpl->tpl_vars['uuid']->value == 'contact') {?>
    <div class="container">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-4 col-xs-12 icon-hover">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Address:</h3>
          <p><a href="#">4578 Marmora Road,
          Glasgow D04 89GR</a>
          </p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Phones:</h3>
          <p><a href="callto:#">800-2345-6789;</a><br>
          <a href="callto:#">800-2345-6790</a></p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Hours:</h3>
          <p>24/7 from<br>
          8:00 am  to  7:00 pm</p>
        </div>
      </div>
    </div>
    <section class="map">
      <div id="google-map" class="map_model"></div>
      <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
          <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
        </li>
      </ul>
    </section>
    <?php }?>
    <div class="footer-cnt center_text">
      <p class="copyright">Toan Thang Precision © 2017. <a href="index-5.html" class="rights">Privacy Policy</a></p>
    </div>
  </footer><?php }
}
?>