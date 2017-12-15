<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:24
         compiled from "/var/www/html/precision/application/views/frontend/home/view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7253201845a332a9cbfe557_00157723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1069c333dd1bfcaabfce7b1c40d86ea5be22b3dd' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/home/view.tpl',
      1 => 1508410154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7253201845a332a9cbfe557_00157723',
  'variables' => 
  array (
    'ksub' => 0,
    'isub' => 0,
    'finalPhoto' => 0,
    'curr' => 0,
    'finalList' => 0,
    'curricon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9d83f014_77297812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9d83f014_77297812')) {
function content_5a332a9d83f014_77297812 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/precision/application/third_party/smarty/libs/plugins/function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '7253201845a332a9cbfe557_00157723';
?>
<!--======================well=========================-->

    <section class="well-1 bg-primary" id="home-s1">
      <div class="container">
	      <div class="row offset">
	      	<div class="col-lg-3 col-xs-3">
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" lang-key="ho tro truc tuyen"><?php echo lang('ho tro truc tuyen');?>
</div>
				  <div class="panel-body">
			  		<div class="online-support" style="background-image:url(<?php echo base_url();?>
media/uploads/images/phone2.png);">
				  		<h4 class="blink_me">
		                	<span><small style="font-size: 80%;">Hotline:</small> 
		                	<br><a href="<?php echo $_SESSION['sys_cnf']->cnf_hotline->v2;?>
"><?php echo $_SESSION['sys_cnf']->cnf_hotline->v1;?>
</a></span>
		                </h4>
			  		</div>
					<span style="color: #272d33; display: block; margin-top: 3px;" lang-key="phong ky thuat">
					<?php echo lang('phong ky thuat');?>

					</span>
	                <?php
$_from = $_SESSION['sys_cnf']->tphone;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
			  		<p style="position: relative; margin-top: 5px; <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] : null)) {?> border-bottom: thin dotted; <?php }?>">
	                	<span>
	                		<label has-alias="true" has-html="true" id="home-left-tphone-<?php echo $_smarty_tpl->tpl_vars['ksub']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['isub']->value->n;?>
</label>
	                		<a style="padding-left: 5px;" href="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
" class="anchor-contact">
	                			<img src="<?php echo base_url();?>
media/images/zalo.png" />
	                		</a>
	                		<a style="padding-left: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
" class="anchor-contact">
	                			<img src="<?php echo base_url();?>
media/images/skype.png" />
	                		</a>
	                	</span>
	                </p>
			      	<?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
					<span style="color: #272d33; display: block; margin-top: 3px;" lang-key="phong kinh doanh">
					<?php echo lang('phong kinh doanh');?>

					</span>
	                <?php
$_from = $_SESSION['sys_cnf']->sphone;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
			  		<p style="position: relative; margin-top: 5px; <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] : null)) {?> border-bottom: thin dotted; <?php }?>">
	                	<span>
	                		<label has-alias="true" has-html="true" id="home-left-sphone-<?php echo $_smarty_tpl->tpl_vars['ksub']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['isub']->value->n;?>
</label>
	                		<a style="padding-left: 5px;" href="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
" class="anchor-contact">
	                			<img src="<?php echo base_url();?>
media/images/zalo.png" />
	                		</a>
	                		<a style="padding-left: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
" class="anchor-contact">
	                			<img src="<?php echo base_url();?>
media/images/skype.png" />
	                		</a>
	                	</span>
	                </p>
			      	<?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
	                <span style="color: #272d33; display: block; margin-top: 3px;" lang-key="thong tin lien he">
					<?php echo lang('thong tin lien he');?>

					</span>
			  		<p style="position: relative;">
	                	<span>
	                		<b>Email: </b><?php echo $_SESSION['sys_cnf']->cnf_email->v1;?>

	                	</span>
	                </p>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" style="border-bottom: 0px;">Video Clip</div>
				  <div class="panel-body" style="padding: 0px;">
				  	<iframe id="youtube-iframe" style="width: 100%; height: 215px;" src=""></iframe>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp" style="min-height: 216px;">
				  <div class="panel-heading" style="display:none;">Facebook</div>
				  <div class="panel-body" style="padding: 0px;">
				  	<div id="fb-root"></div>
						<?php echo '<script'; ?>
>setTimeout(function(){
							(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1701436310107866";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
						}, 2000);<?php echo '</script'; ?>
>
						<div class="fb-page" data-href="<?php echo $_SESSION['sys_cnf']->cnf_facebook_page->v1;?>
" data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" lang-key="thong ke"><?php echo lang('thong ke');?>
</div>
				  <div class="panel-body" style="padding-bottom: 0;padding-top: 0;">
			  		<div class="statistic-request" style="background-image:url(<?php echo base_url();?>
media/uploads/images/online.png);">
				  		<span><label lang-key="dang online"><?php echo lang('dang online');?>
</label> <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
visitors.php"><?php echo '</script'; ?>
></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url(<?php echo base_url();?>
media/uploads/images/homqua.png);">
				  		<span><label lang-key="hom qua"><?php echo lang('hom qua');?>
</label> <label id="count-yesterday"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url(<?php echo base_url();?>
media/uploads/images/tuan.png);">
				  		<span><label lang-key="tuan nay"><?php echo lang('tuan nay');?>
</label> <label id="count-thisweek"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url(<?php echo base_url();?>
media/uploads/images/tong.png);">
				  		<span><label lang-key="tong truy cap"><?php echo lang('tong truy cap');?>
</label> <label id="count-total"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
				  </div>
				</div>
	      	</div>
	      	<div class="col-lg-9 col-xs-9 offset-6">
		        <?php $_smarty_tpl->tpl_vars["curr"] = new Smarty_Variable(0, null, 0);?>
		        <?php
$_from = $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_1;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
		        <?php echo smarty_function_math(array('assign'=>"curr",'equation'=>'x+y','x'=>$_smarty_tpl->tpl_vars['curr']->value,'y'=>1),$_smarty_tpl);?>

		        <?php echo smarty_function_math(array('assign'=>"currdevide",'equation'=>'x%y','x'=>$_smarty_tpl->tpl_vars['curr']->value,'y'=>3),$_smarty_tpl);?>

		        	<?php if ($_smarty_tpl->tpl_vars['curr']->value == 1) {?>
		          	<div class="row offset">
		          	<?php }?>
			          <div class="col-lg-6 col-xs-6 offset-6">
			            <div class="product bg-cover pr-img-04 wow fadeInUp" 
			            	style="background-image: url(<?php echo base_url();?>
media/filemanager/thumbs/<?php echo $_smarty_tpl->tpl_vars['isub']->value->v3;?>
);" 
			            	bg-src="<?php echo base_url();?>
media/filemanager/source/<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
">
			              <a href="#" class="product_cont product_cont_mode">
			                <h3 lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h3>
			                <p has-html="true" lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v4;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v4);?>
</p>
			                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
			              </a>
			            </div>
			          </div>
		          	<?php if ($_smarty_tpl->tpl_vars['curr']->value >= 2) {?>
		          	<?php $_smarty_tpl->tpl_vars["curr"] = new Smarty_Variable(0, null, 0);?>
		          	</div>
		          	<?php }?>
		        <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
	      	</div>
	      </div>
      </div>
    </section>
<!--======================End well=========================-->
<!--======================well_1=========================-->
    <section class="well-3" id="home-s2">
      <div class="container center_text">
        <h2 class="secondary_color" lang-key="san pham"><?php echo lang('san pham');?>
</h2>
        <?php $_smarty_tpl->tpl_vars["curr"] = new Smarty_Variable(0, null, 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_2;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
        <?php echo smarty_function_math(array('assign'=>"curr",'equation'=>'x+y','x'=>$_smarty_tpl->tpl_vars['curr']->value,'y'=>1),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('assign'=>"currdevide",'equation'=>'x%y','x'=>$_smarty_tpl->tpl_vars['curr']->value,'y'=>3),$_smarty_tpl);?>

        	<?php if ($_smarty_tpl->tpl_vars['curr']->value == 1) {?>
          	<div class="row offset">
          	<?php }?>
	          <div class="col-lg-4 col-xs-4">
	            <div class="product bg-100p bg-shadow pr-img-01 wow fadeInUp" 
	            style="background-image: url(<?php echo base_url();?>
media/filemanager/thumbs/<?php echo $_smarty_tpl->tpl_vars['isub']->value->v3;?>
);" 
	            bg-src="<?php echo base_url();?>
media/filemanager/source/<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
">
	              <a href="#" class="product_cont product_cont_mode no-all-padding">
	                <h3><?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
</h3>
	                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
	              </a>
	            </div>
	          </div>
          	<?php if ($_smarty_tpl->tpl_vars['curr']->value >= 3) {?>
          	<?php $_smarty_tpl->tpl_vars["curr"] = new Smarty_Variable(0, null, 0);?>
          	</div>
          	<?php }?>
        <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
      </div>
    </section>
<!--======================End well_1=========================-->
<!--======================well_1=========================-->
    <section class="well-2 bg-primary center_text" id="home-s3">
    <h2 class="secondary_color wow fadeInRight" lang-key="chung toi se giai quyet"><?php echo lang('chung toi se giai quyet');?>
</h2>
    <h3 class="primary_color wow fadeInLeft" lang-key="cac yeu cau cua khach hang"><?php echo lang('cac yeu cau cua khach hang');?>
</h3>
    <div class="container text-left offset-1">
      <div class="row icon-hover_2 flow-offset-1">
          <?php
$_from = $_smarty_tpl->tpl_vars['finalList']->value->home_section_3;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
          <?php if ($_smarty_tpl->tpl_vars['ksub']->value == 0) {?>
          <?php $_smarty_tpl->tpl_vars["curricon"] = new Smarty_Variable("material-icons-toys", null, 0);?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['ksub']->value == 1) {?>
          <?php $_smarty_tpl->tpl_vars["curricon"] = new Smarty_Variable("material-icons-access_alarm", null, 0);?>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['ksub']->value == 2) {?>
          <?php $_smarty_tpl->tpl_vars["curricon"] = new Smarty_Variable("material-icons-tonality", null, 0);?>
          <?php }?>
           <div class="col-lg-4 col-xs-12 wow fadeInUp offset-6" data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['ksub']->value*0.2;?>
s">
	          <i class="icon primary-icon icon-md <?php echo $_smarty_tpl->tpl_vars['curricon']->value;?>
"></i>
	          <h3 class="secondary_color" style='font: 400 34px/48px "Open Sans", sans-serif;' lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h3>
	          <p>&nbsp;</p>
	          <h4 class="primary_color inset-3" lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v2;?>
" has-html="true"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v2);?>
</h4>
	        </div>
          <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
      </div>
    </div>
    <a href="#" class="btn btn-default btn-md wow fadeIn" lang-key="xem them"><?php echo lang('xem them');?>
</a>
    </section>
<!--======================End well_1=========================-->
<!--======================parallax=========================-->
    <section class="parallax well-3" data-url="<?php echo base_url();?>
media/filemanager/source/<?php echo $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_4[0]->v2;?>
" data-mobile="true" data-speed="0.6" id="home-s4">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-6">
            <!-- <h2 class="wow fadeInLeft ls-1">Chúng tôi phục vụ các nhu cầu chế tạo</h2> -->
            <!-- <h3 class="wow fadeInLeft">các nhau cầu chế tạo</h3> -->
	        <?php
$_from = $_smarty_tpl->tpl_vars['finalList']->value->home_section_4;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
	          <?php if ($_smarty_tpl->tpl_vars['isub']->value->v2 == 'left') {?>
		          <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] : null)) {?>
		          <h2 class="wow fadeInLeft ls-1" lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h2>
		          <?php } else { ?>
		          <h4 class="wow fadeIn offset-8" lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h4> <br />
		          <?php }?>
	          <?php }?>
	          <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
          </div>
          <div class="col-lg-6">
            <ul class="index-list icon-hover_3">
              <?php
$_from = $_smarty_tpl->tpl_vars['finalList']->value->home_section_4;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['isub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['isub']->_loop = false;
$_smarty_tpl->tpl_vars['ksub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['ksub']->value => $_smarty_tpl->tpl_vars['isub']->value) {
$_smarty_tpl->tpl_vars['isub']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_foo']->value['total'];
$foreach_isub_Sav = $_smarty_tpl->tpl_vars['isub'];
?>
	          <?php if ($_smarty_tpl->tpl_vars['isub']->value->v2 == 'right') {?>
	          <li class="wow fadeInRight" data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['ksub']->value*0.2;?>
s">
              	<h4 lang-key="<?php echo $_smarty_tpl->tpl_vars['isub']->value->v1;?>
"><?php echo lang($_smarty_tpl->tpl_vars['isub']->value->v1);?>
</h4>
              </li>
	          <?php }?>
	          <?php
$_smarty_tpl->tpl_vars['isub'] = $foreach_isub_Sav;
}
?>
            </ul>
          </div>
        </div>
      </div>
    </section>
<!--======================End parallax=========================-->
<!--======================End well=========================-->
    <section class="well-4" id="company-s4">
      <div class="container">
        <div class="row flow-offset-1 text-center text-lg-left">
          <div class="col-lg-5">
            <img src="<?php echo base_url();?>
media/filemanager/source/<?php echo $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_5[0]->v2;?>
" alt="" class="wow fadeInLeft">
          </div>
          <div class="col-lg-7">
            <h2 class="secondary_color wow fadeInRight" style="margin-top: -20px;" lang-key="<?php echo $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_5[0]->v1;?>
">
            	<?php echo lang($_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_5[0]->v1);?>

            </h2>
            <h3 class="primary_color wow fadeInRight"></h3>
            <h4 class="primary_color offset-1 inset-3" lang-key="<?php echo $_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_5[0]->v4;?>
" has-html="true">
            	<?php echo lang($_smarty_tpl->tpl_vars['finalPhoto']->value->home_section_5[0]->v4);?>

            </h4>
          </div>
        </div>
      </div>
    </section>
<!--======================End well=========================--><?php }
}
?>