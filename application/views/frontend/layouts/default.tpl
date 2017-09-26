<!DOCTYPE html>
<html lang="en">
<head>
  <title>Toàn Thắng Precision</title>
  <meta charset="utf-8"/>
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="{base_url()}static/default/frontend/images/favicon.ico" type="image/x-icon"/>
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/grid.css"/>
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/style.css"/>
  <link rel='stylesheet' href="{base_url()}static/default/frontend/css/material-icons.css">
  <!-- <link rel='stylesheet' href="{base_url()}static/default/frontend/css/google-map.css"> -->
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/camera.css"/>
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/custom.css"/>
  {$listCss}
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="{base_url()}static/default/frontend/js/jquery.js"></script>
  <script src="{base_url()}static/default/frontend/js/jquery-migrate-1.2.1.js"></script> 
  <script src='{base_url()}static/default/frontend/js/device.min.js'></script>
  <script type="text/javascript">
  	var rootBaseUrl = '{base_url()}';
  	var googleMapIframe = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15670.17865806714!2d106.7512509!3d10.9221681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d9b3bfa24799%3A0x3b917588638fd72f!2zTmd1eeG7hW4gVGjhu4sgTWluaCBLaGFpLCBraHUgcGjhu5EgxJDDtG5nIENoacOqdSwgcGjGsOG7nW5nIFTDom4gxJDDtG5nIEhp4buHcCwgVHguIETEqSBBbiwgQsOsbmggRMawxqFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1506074560878';
  	var youtubeIframe = 'https://www.youtube.com/embed/NwOtZnjqKGA?autoplay=0';
  </script>
  {include file='frontend/layouts/language.tpl'}
</head>
<body>
<div class="page">
  {include file='frontend/layouts/social.tpl'}
  {include file='frontend/layouts/header.tpl'}
  <main>
	{$content}
  </main>
  {include file='frontend/layouts/footer.tpl'}
</div>
<!-- <div class="loading">Loading&#8230;</div> -->
<script src="{base_url()}static/default/admin/template/plugins/blockui/jquery.blockUI.js"></script>
<script src="{base_url()}static/default/frontend/js/script.js"></script>
	{$listJs}
	
  {include file='frontend/layouts/contact.tpl'}
<script type="text/javascript">
setTimeout(function(){
	var giframe = document.getElementById('google-map-iframe');
    if(giframe != null){
        giframe.setAttribute('src', googleMapIframe);
	}
}, 3000);
setTimeout(function(){
	var yiframe = document.getElementById('youtube-iframe');
	if(yiframe != null){
		yiframe.setAttribute('src', youtubeIframe);
	}
}, 1000);
</script>
</body>