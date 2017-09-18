
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
  <link rel='stylesheet' href="{base_url()}static/default/frontend/css/google-map.css">
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/camera.css"/>
  <link rel="stylesheet" href="{base_url()}static/default/frontend/css/custom.css"/>
  {$listCss}

<!-- 
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700,400'>
 -->
 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<!-- 	
<link rel='stylesheet' href='{base_url()}static/default/frontend/css/montserrat_alternates.css'>
<link rel='stylesheet' href='{base_url()}static/default/frontend/css/montserrat.css'>
-->
<!-- 
<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates" rel="stylesheet">
 -->
  <script src="{base_url()}static/default/frontend/js/jquery.js"></script>
  <script src="{base_url()}static/default/frontend/js/jquery-migrate-1.2.1.js"></script> 
  <script src='{base_url()}static/default/frontend/js/device.min.js'></script>
  <script type="text/javascript">
  	var rootBaseUrl = '{base_url()}';
  	var googleMapIframe = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7835.292095563145!2d106.74764670062788!3d10.914481504147462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d84b4148ff51%3A0x14fbe01f763034f4!2zNjggTmd1eeG7hW4gVGjhu4sgTWluaCBLaGFpLCBwaMaw4budbmcgVMOibiDEkMO0bmcgSGnhu4dwLCBI4buTIENow60gTWluaCwgQsOsbmggRMawxqFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1505235671396';
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
<script src="{base_url()}static/default/frontend/js/script.js"></script>
	{$listJs}
	
  {include file='frontend/layouts/contact.tpl'}
<script type="text/javascript">
	setTimeout(function(){
		var iframe = document.getElementById('google-map-iframe');
        iframe.setAttribute('src', googleMapIframe);
	}, 3000);
</script>
</body>