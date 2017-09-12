<?php /* Smarty version 3.1.27, created on 2017-09-13 00:09:58
         compiled from "/var/www/html/precision/application/views/frontend/layouts/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75669972059b814e64abcb3_39657446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabd1e142d9f8e75eb50d969ad85f9f94c8f0065' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/footer.tpl',
      1 => 1505235836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75669972059b814e64abcb3_39657446',
  'variables' => 
  array (
    'uuid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b814e64b6157_30681630',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b814e64b6157_30681630')) {
function content_59b814e64b6157_30681630 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75669972059b814e64abcb3_39657446';
?>
<footer>
    <?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home' || $_smarty_tpl->tpl_vars['uuid']->value == 'contact') {?>
    <div class="container">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-4 col-xs-12 icon-hover" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Địa chỉ:</h3>
          <p><a href="#">68 Nguyễn Thị Minh Khai, Khu Phố Tân Long, Tân Đông Hiệp, Dĩ An, BD</a>
          </p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Điện thoại:</h3>
          <p><a href="callto:#">0963 693 626</a><br>
          <a href="callto:#">0982 791 717</a></p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Mở cửa:</h3>
          <p>24/7<br>
          Tất cả các ngày trong tuần</p>
        </div>
      </div>
    </div>
    <section class="map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7835.292095563145!2d106.74764670062788!3d10.914481504147462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d84b4148ff51%3A0x14fbe01f763034f4!2zNjggTmd1eeG7hW4gVGjhu4sgTWluaCBLaGFpLCBwaMaw4budbmcgVMOibiDEkMO0bmcgSGnhu4dwLCBI4buTIENow60gTWluaCwgQsOsbmggRMawxqFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1505235671396" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen></iframe>
      <div id="google-map" class="map_model" style="display: none;"></div>
      <ul class="map_locations" style="display: none;">
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