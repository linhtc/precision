<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:25
         compiled from "/var/www/html/precision/application/views/frontend/layouts/social.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3651164555a332a9d9f89a5_64357448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71534220c1ee7bfe9664acaf2d9612fab8faa8e' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/social.tpl',
      1 => 1510557662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3651164555a332a9d9f89a5_64357448',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9da5d7b0_48894120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9da5d7b0_48894120')) {
function content_5a332a9da5d7b0_48894120 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3651164555a332a9d9f89a5_64357448';
?>
<section class="socialBtns">
        <?php echo '<script'; ?>
>
function eventTrackingSocialMenu(action, label) {
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        'event' : 'Social Interaction',
        'eventCategory' : 'Social Interaction',
        'eventAction' : action,
        'eventLabel': label,
        'eventValue': 0
    });
}

function mailShare()
{
    eventTrackingSocialMenu('Share', 'Mail');
    document.location.href = "mailto:info@toanthangprecision.com?subject=Fanuc.EU&body="  + document.location;
}
<?php echo '</script'; ?>
>
<ul class="ul-social">
	<li>
		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ffanuc-europe">
			<img height="48" alt="LinkedIn" width="48" src="<?php echo base_url();?>
media/uploads/images/ico_in.png">
		</a>
	</li>
	<!--<li>
		<a target="_blank" href="https://www.facebook.com/toanthangprecision/" onclick="eventTrackingSocialMenu('Share', 'Facebook');">
			<img width="48" height="48" alt="Facebook Share" src="<?php echo base_url();?>
media/uploads/images/ico_FB_share.png">
		</a>
	</li>-->
	<li>
		<a target="_blank" href="https://www.facebook.com/toanthangprecision/">
			<img width="48" height="48" alt="Facebook Share" src="<?php echo base_url();?>
media/uploads/images/ico_FB_share.png">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.youtube.com/watch?v=bCym01myYow">
			<img width="48" height="48" alt="YouTube" src="<?php echo base_url();?>
media/uploads/images/ico_yt_share.png">
		</a>
	</li>
	<li>
		<a target="_self" href="#" onclick="mailShare();">
			<img height="48" alt="Mail" width="48" src="<?php echo base_url();?>
media/uploads/images/ico_mail_share.png">
		</a>
	</li>
</ul>
</section><?php }
}
?>