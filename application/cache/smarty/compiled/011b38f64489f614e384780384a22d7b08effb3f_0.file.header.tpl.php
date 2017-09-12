<?php /* Smarty version 3.1.27, created on 2017-09-12 09:02:49
         compiled from "/var/www/html/precision/application/views/frontend/layouts/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20544782359b74049a81689_55198042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011b38f64489f614e384780384a22d7b08effb3f' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/header.tpl',
      1 => 1505141839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20544782359b74049a81689_55198042',
  'variables' => 
  array (
    'uuid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b74049aa94f7_91247046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b74049aa94f7_91247046')) {
function content_59b74049aa94f7_91247046 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20544782359b74049a81689_55198042';
?>
<!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <div id="stuck_container" class="stuck_container">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-3 col-sm-3 no-padding">
            <div class="brand">
              <h1 class="brand_name">
                <a href="./">CNC</a>
              </h1>
              <h5>technology for life</h5>
            </div>
          </div>
          <div class="col-lg-9 col-sm-9 no-padding">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'home') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
"><?php echo lang('home');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'company') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
company"><?php echo lang('company');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'product') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
products-services"><?php echo lang('product_and_service');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'technology') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
design-technology-transfer"><?php echo lang('design_and_technology_transfer');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'gallery') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
gallery"><?php echo lang('project');?>
</a>
                </li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['uuid']->value == 'contact') {?>active<?php }?>">
                  <a href="<?php echo base_url();?>
contacts"><?php echo lang('contact');?>
</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li>
                <!--
                <li>
                  <a href="<?php echo base_url();?>
company"><?php echo lang('company');?>
</a>
                  <ul>
                    <li>
                      <a href="#">What We Do</a>
                    </li>
                    <li>
                      <a href="#">What We Offer</a>
                      <ul>
                        <li>
                          <a href="#">News</a>
                        </li>
                        <li>
                          <a href="#">Our Standards</a>
                        </li>
                        <li>
                          <a href="#">Useful Links</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Forum</a>
                    </li>
                  </ul>
                </li>
                -->
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
          <div data-src="<?php echo base_url();?>
media/uploads/images/CNC.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Providing premium</h2>
                  <h3>products of exceptional value</h3>
                  <p>We are committed to the highest quality, reliability, responsibility, continuous improvement.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="<?php echo base_url();?>
media/uploads/images/maxresdefault.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_3">
                  <h2>Offering the best level of</h2>
                  <h3>excellence in steel fabrication</h3>
                  <p>Our company can boast the reputation of the trusted partner known worldwide.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="<?php echo base_url();?>
media/uploads/images/154479068494.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_1">
                  <h2>A wide range</h2>
                  <h3>of high quality structural steel projects</h3>
                  <p>Welcome to the number 1 company in the industry! Looking for some helpful advice? Go no further; you've come to the right place. </p>
                  <a href="#" class="btn btn-primary btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php }?>
<!--======================End Camera=========================-->
  </header><?php }
}
?>