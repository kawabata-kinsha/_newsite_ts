<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title><?php echo $title; ?></title>
<meta content="<?php echo $siteKeywords; ?>" name="keywords" />
<meta content="<?php echo $pageDescription; ?>" name="description" />
<meta name="format-detection" content="telephone=no">

<!-- ogp -->
<meta content="<?php echo $siteTitle; ?>" property="og:title" />
<meta content="website" property="og:type" />
<meta content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $rootImg; ?>/common/ogp.png" property="og:image" />
<meta content="<?php echo $siteDescription; ?>" property="og:description" />
<meta content="" property="og:url" />
<meta content="<?php echo $siteTitle; ?>" property="og:site_name" />

<!-- twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta content="<?php echo $twitterId; ?>" name="twitter:site" />
<meta property="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $root; ?>/" />
<meta property="twitter:title" content="<?php echo $siteTitle; ?>" />
<meta property="twitter:description" content="<?php echo $siteDescription; ?>" />
<meta property="twitter:image" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $rootImg; ?>/common/ogp.png" />

<!-- icon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootImg; ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $rootImg; ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $rootImg; ?>/favicons/favicon-16x16.png">
<link rel="manifest" crossorigin="use-credentials" href="<?php echo $rootImg; ?>/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo $rootImg; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link href="<?php echo $rootImg; ?>/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- css -->
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/style.css?ver=<?php echo $cssVer;?>" />

</head>


<body class="<?php echo $isCommon ? "category--common " : ""; ?>category--<?php echo $categoryName; ?> page--<?php echo $categoryName; ?>__<?php echo $pageName; ?>">


	<div class="loading">
		<div class="sk-fading-circle">
		<div class="sk-circle1 sk-circle"></div>
		<div class="sk-circle2 sk-circle"></div>
		<div class="sk-circle3 sk-circle"></div>
		<div class="sk-circle4 sk-circle"></div>
		<div class="sk-circle5 sk-circle"></div>
		<div class="sk-circle6 sk-circle"></div>
		<div class="sk-circle7 sk-circle"></div>
		<div class="sk-circle8 sk-circle"></div>
		<div class="sk-circle9 sk-circle"></div>
		<div class="sk-circle10 sk-circle"></div>
		<div class="sk-circle11 sk-circle"></div>
		<div class="sk-circle12 sk-circle"></div>
		</div>
	</div>
	<!-- /loading -->


<div class="wrap">



