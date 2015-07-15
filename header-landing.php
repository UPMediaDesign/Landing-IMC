<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/images/favicon.ico"/>
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory')?>/images/favicon.png" />

<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=1, user-scalable=no">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/bootstrap/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/landing.css">

<!-- FontAwesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!--Otros -->
<?php wp_head()?>

<!-- scripts -->
<?php call_scripts()?>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/bootstrap/bootstrap.min.js?ver=3.8.1"></script>



</head>

<body>

	<header class="">
		<div class="logo-banmedicalanding">
			<img src="<?php bloginfo('template_directory')?>/images/logo-banmedicald.png;?>" alt="Logo Fundación Banmédica 10 Años" />
		</div>
		<div class="logo-davilalanding">
			<img src="<?php bloginfo('template_directory')?>/images/logo-davilald.png;?>" alt="Logo Clinica Davila" />
		</div>

	</header>


