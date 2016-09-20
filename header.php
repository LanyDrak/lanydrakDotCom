<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>LanyDrak.com</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/hover.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" href="css/timeline-style.css">
		<link rel="stylesheet" href="css/style.css">

		<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet' type='text/css'>

		<!-- Favicons -->

		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-16x16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-24x24.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-48x48.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-64x64.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-128x128.png">
		<link rel="manifest" href="favicons/manifest.json">

		<!-- For Portofolio -->
		<link rel="stylesheet" type="text/css" href="css/stylePortfolio.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>

		<script src="js/modernizr.js"></script>
	</head>
<body>
	<header>
		<div class="wrapper">
			<nav class="">
				<h1>logo</h1>
				<ul>
					<li><a href="index.php?page=home"><i class="fa fa-home"></i><span>home</span></a></li>
					<li><a href="index.php?page=about"><i class="fa fa-male"></i><span>about me</span></a></li>
					<li><a href="index.php?page=portfolio"><i class="fa fa-briefcase"></i><span>portfolio</span></a></li>
					<li><a href="index.php?page=blog"><i class="fa fa-bullhorn"></i><span>blog</span></a></li>
					<li><a href="index.php?page=contact"><i class="fa fa-envelope-o"></i><span>contact</span></a></li>
				</ul>
			</nav>
		</div>
		<div class="bandeau"><div>
	</header>
	<main id="<?= $template ?>page" class="wrapper">

