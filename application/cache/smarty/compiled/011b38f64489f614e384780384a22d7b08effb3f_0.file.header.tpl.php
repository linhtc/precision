<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:25
         compiled from "/var/www/html/precision/application/views/frontend/layouts/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4659155075a332a9da5ebb0_63263121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011b38f64489f614e384780384a22d7b08effb3f' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/header.tpl',
      1 => 1510557591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4659155075a332a9da5ebb0_63263121',
  'variables' => 
  array (
    'uuid' => 0,
    'finalPhoto' => 0,
    'isub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9daadf10_53151037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9daadf10_53151037')) {
function content_5a332a9daadf10_53151037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4659155075a332a9da5ebb0_63263121';
?>
<!--========================================================
                            HEADER
  =========================================================-->
  <header>
  	
  	<div class="top-header">
  		<div style="padding: 5px 5px 0px 70px;overflow: hidden;">
  			<div class="row">
	          <div class="col-lg-2 col-sm-2 text-center" style="position: relative;">
	            <div class="brand">
	              <h1 class="brand_name" style="margin: 0; padding: 0; margin-top: -10px; margin-left: 20px;">
	                <a href="./">TTP</a>
	              </h1>
	              <h5 style="margin: 0; padding: 0; margin-top: -10px; margin-left: 20px;">Leading Quality</h5>
	            </div>
	            <!-- <div class="header-slash-line"></div>
	            <div class="header-slash-line2"></div> -->
	          </div>
	          <div class="col-lg-4 col-sm-4 header-border-bt2">
	            <div class="brand">
	              <h1 class="brand_name">
	                <a href="./">Toan Thang Precision</a>
	              </h1>
	            </div>
	          </div>
	          <div class="col-lg-2 col-sm-2 header-border-bt2">
	          	<div class="quick-intro" style="background-image:url(<?php echo base_url();?>
media/images/phone-call.png);">
		          	<p class="moto-text_system_11">
		          		<span lang-key="phone colon"><?php echo lang('phone colon');?>
</span><br><a class="moto-link" data-action="url" target="_self" href="<?php echo $_SESSION['sys_cnf']->cnf_hotline->v2;?>
"><?php echo $_SESSION['sys_cnf']->cnf_hotline->v1;?>
</a><br>
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-3 col-sm-3 header-border-bt2">
	          	<div class="quick-intro" style="background-image:url(<?php echo base_url();?>
media/images/placeholder.png);">
		          	<p class="moto-text_system_11">
		          		<span lang-key="address colon"><?php echo lang('address colon');?>
</span> <a has-alias="true" id="header-address" class="moto-link" data-action="url" target="_blank" href="<?php echo $_SESSION['sys_cnf']->cnf_address->v2;?>
"><?php echo $_SESSION['sys_cnf']->cnf_address->v1;?>
</a>
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-1 col-sm-1 header-border-bt2">
	            <input id="lang_en" onclick="changeMyLanguage();" type="radio" name="language" value="EN" <?php if (!empty($_SESSION['lang_prefix'])) {?>checked="checked"<?php }?>>
	            <label for="lang_en"> EN</label><br>
  				<input id="lang_vi" onclick="changeMyLanguage();" type="radio" name="language" value="VN" <?php if (empty($_SESSION['lang_prefix'])) {?>checked="checked"<?php }?>>
  				 <label for="lang_vi"> VN</label><br>
	          </div>
  			</div>
  		</div>
  	</div>
  	
  	
    <div id="stuck_container" class="stuck_container">
      <div class="container no-padding">
        <div class="row"> 
          <div class="col-lg-12 col-sm-12 no-padding text-center">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home') {?>active<?php }?>">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
" class="sf-with-ul" lang-key="home"><?php echo lang('home');?>
</a>
				    <ul style="display: none;">
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
#home-s1" lang-key="gioi thieu"><?php echo lang('gioi thieu');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
#home-s2" lang-key="san pham"><?php echo lang('san pham');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
#home-s3" lang-key="nang luc"><?php echo lang('nang luc');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
#home-s4" lang-key="dich vu"><?php echo lang('dich vu');?>
</a>
				        </li>
				    </ul>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'company') {?>active<?php }?>">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
company" class="sf-with-ul" lang-key="company"><?php echo lang('company');?>
</a>
				    <ul style="display: none;">
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
company#company-s1" lang-key="cong ty chung toi"><?php echo lang('cong ty chung toi');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
company#company-s2" lang-key="tai sao chon chung toi"><?php echo lang('tai sao chon chung toi');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
company#company-s3" lang-key="triet ly kinh doanh"><?php echo lang('triet ly kinh doanh');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
company#company-s4" lang-key="vai loi ve chung toi"><?php echo lang('vai loi ve chung toi');?>
</a>
				        </li>
				    </ul>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'rd') {?>active<?php }?>" style="display:none;">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
rd" class="sf-with-ul" lang-key="r_and_d"><?php echo lang('r_and_d');?>
</a>
				    <ul style="display: none;">
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
rd#rd-s1" lang-key="nghien cuu va phat trien"><?php echo lang('nghien cuu va phat trien');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
rd#rd-s2">Team work</a>
				        </li>
				    </ul>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'product') {?>active<?php }?>">
				    <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
products-services" class="sf-with-ul" lang-key="product_and_service"><?php echo lang('product_and_service');?>
</a>
				    <ul style="display: none;">
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
products-services#product-s1" lang-key="gia cong chinh xac"><?php echo lang('gia cong chinh xac');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
products-services#product-s2" lang-key="thiet ke va cgcn"><?php echo lang('thiet ke va cgcn');?>
</a>
				        </li>
				        <li>
				            <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
products-services#product-s3" lang-key="dich vu"><?php echo lang('dich vu');?>
</a>
				        </li>
				    </ul>
				</li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'project') {?>active<?php }?>" style="display:none;">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
projects" lang-key="project"><?php echo lang('project');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'career') {?>active<?php }?>">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
careers" lang-key="recruit"><?php echo lang('recruit');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'contact') {?>active<?php }?>">
                  <a href="<?php echo base_url();
echo $_SESSION['lang_prefix'];?>
contacts" lang-key="contact"><?php echo lang('contact');?>
</a>
                </li>
                <li class="nav-search">
                  <input type="text" lang-key="input a value colon" has-placeholder="true" placeholder="<?php echo lang('input a value colon');?>
" />
                  <i class="fa fa-search" aria-hidden="true"></i>
                </li>
                <li style="display: none;" class="nation-flag">
                <?php if (empty($_SESSION['lang_prefix'])) {?>
                  <a onclick="changeMyLanguage();return false;" style="cursor: pointer;">
                  	<img class="national-flag" key="vn" src="<?php echo base_url();?>
media/images/vn.svg" />
                  </a>
                <?php } else { ?>
                  <a onclick="changeMyLanguage();return false;" style="cursor: pointer;">
                  	<img class="national-flag" key="en" src="<?php echo base_url();?>
media/images/eng.svg" />
                  </a>
                <?php }?>  
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
<!--========================Camera===========================-->
<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home') {?>
      <div class="camera_container">
        <div id="camera" class="camera_wrap">
          <?php
$_from = $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_0;
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
		  	  <div data-src="<?php echo base_url();?>
media/filemanager/source/<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
">
	            <div class="camera_caption fadeIn">
	              <div class="container">
	                <div class="camera_cont cam_ins_2">
	                  <h2 lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h2>
	                  <h3 style="display:none;">Chúng tôi cam kết</h3>
	                  <h4 lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v4;?>
" has-html="true"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v4);?>
</h4>
	                  <a lang-key="xem them" href="#" class="btn btn-default btn-sm"><?php echo lang('xem them');?>
</a>
	                </div>
	              </div>
	            </div>
	          </div>        
	      <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
        </div>
      </div>
<?php }?>
<!--======================End Camera=========================-->
  </header><?php }
}
?>