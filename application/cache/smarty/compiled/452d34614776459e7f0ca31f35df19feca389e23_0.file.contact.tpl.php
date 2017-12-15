<?php /* Smarty version 3.1.27, created on 2017-12-15 08:51:25
         compiled from "/var/www/html/precision/application/views/frontend/layouts/contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14368727025a332a9dabefe2_49701693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452d34614776459e7f0ca31f35df19feca389e23' => 
    array (
      0 => '/var/www/html/precision/application/views/frontend/layouts/contact.tpl',
      1 => 1508410154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14368727025a332a9dabefe2_49701693',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a332a9dabfe90_56668309',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a332a9dabfe90_56668309')) {
function content_5a332a9dabfe90_56668309 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14368727025a332a9dabefe2_49701693';
?>
<!-- begin olark code -->


<?php echo '<script'; ?>
 data-cfasync="false" type='text/javascript'>
function checkOlartLoaded(){
	var olarkMessage = $('.olark-form-message').text();
	if(olarkMessage == undefined || olarkMessage == null || olarkMessage == ''){
		setTimeout(function(){
			checkOlartLoaded();
		}, 1000);
	} else{
		$('.olark-form-message').html('<p>Chúng tôi giúp được gì cho bạn?<br>Xem thêm thông tin về chúng tôi <a href="'+rootBaseUrl+'company">Tại đây</a> hoặc liên hệ số Hotline ở phần Liên hệ nhé!</p>');
		$('.olark-form-send-button').bind('click', function(){
			console.log('hello');
			var oname = $('#olark-form-input-fname').val();
			var oemail = $('#olark-form-input-email').val();
			var omessage = $('#olark-form-input-body').val();
			$.post(rootBaseUrl+"contacts/message", {name: oname, email: oemail, phone: '_', message: omessage}, function(data, status){
	    		console.log(data);
	        }, "json");
		});
	}
}
setTimeout(function(){
/*<![CDATA[*/
	window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
		  f[z]=function(){
		    (a.s=a.s||[]).push(arguments)};var a=f[z]._={
		  },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
		    f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
		    0:+new Date};a.P=function(u){
		    a.p[u]=new Date-a.p[0]};function s(){
		    a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
		    hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
		    return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
		    b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
		    b.contentWindow[g].open()}catch(w){
		    c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
		    var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
		    b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
		  loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
		olark.identify('7830-582-10-3714');

		olark.configure('system.hb_primary_color', '#1F497D');
/*]]>*/
checkOlartLoaded();
}, 6000);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
/* custom configuration goes here (www.olark.com/documentation) */
/* setTimeout(function(){
	$('.olark-launch-button').attr('style', function(i,s) { return s + 'background-color: #646ba2 !important;' });
}, 5000); */
<?php echo '</script'; ?>
>

<!-- end olark code --><?php }
}
?>