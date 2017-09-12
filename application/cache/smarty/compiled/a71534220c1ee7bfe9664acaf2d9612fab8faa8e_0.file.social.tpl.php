<?php /* Smarty version 3.1.27, created on 2017-09-12 09:02:49
         compiled from "/var/www/html/precision/application/views/frontend/layouts/social.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:73978976459b74049a61363_61966846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71534220c1ee7bfe9664acaf2d9612fab8faa8e' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/social.tpl',
      1 => 1505141839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73978976459b74049a61363_61966846',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b74049a80201_08745807',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b74049a80201_08745807')) {
function content_59b74049a80201_08745807 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73978976459b74049a61363_61966846';
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
    document.location.href = "mailto:?subject=Fanuc.EU&body="  + document.location;
}
<?php echo '</script'; ?>
>
<ul>
	<li>
		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ffanuc-europe" onclick="eventTrackingSocialMenu('Share', 'LinkedIn');">
			<img height="48" alt="LinkedIn" width="48" src="<?php echo base_url();?>
media/uploads/images/ico_in.png">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.facebook.com/pages/FANUC-Europe/844403015605689" onclick="eventTrackingSocialMenu('Share', 'Facebook');">
			<img width="48" height="48" alt="Facebook Share" src="<?php echo base_url();?>
media/uploads/images/ico_FB_share.png">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.youtube.com/user/FANUCEurope" onclick="eventTrackingSocialMenu('Follow', 'YouTube');">
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