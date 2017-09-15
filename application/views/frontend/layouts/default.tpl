
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

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700,400'>

  <script src="{base_url()}static/default/frontend/js/jquery.js"></script>
  <script src="{base_url()}static/default/frontend/js/jquery-migrate-1.2.1.js"></script> 
  <script src='{base_url()}static/default/frontend/js/device.min.js'></script>
  <script type="text/javascript">
	var rootBaseUrl = '{base_url()}';
  </script>
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

</body>