<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title><?php echo $title; ?></title>
<meta content="<?php echo $siteKeywords; ?>" name="keywords" />
<meta content="<?php echo $pageDescription; ?>" name="description" />
<meta name="format-detection" content="telephone=no">

<!-- ogp -->
<meta content="<?php echo $siteTitle; ?>" property="og:title" />
<meta content="website" property="og:type" />
<meta content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $img_folder; ?>/common/ogp.png" property="og:image" />
<meta content="<?php echo $siteDescription; ?>" property="og:description" />
<meta content="" property="og:url" />
<meta content="<?php echo $siteTitle; ?>" property="og:site_name" />

<!-- twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta content="<?php echo $twitterId; ?>" name="twitter:site" />
<meta property="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $root_folder; ?>/" />
<meta property="twitter:title" content="<?php echo $siteTitle; ?>" />
<meta property="twitter:description" content="<?php echo $siteDescription; ?>" />
<meta property="twitter:image" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $img_folder; ?>/common/ogp.png" />

<!-- icon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $img_folder; ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $img_folder; ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $img_folder; ?>/favicons/favicon-16x16.png">
<link rel="manifest" crossorigin="use-credentials" href="<?php echo $img_folder; ?>/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo $img_folder; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link href="<?php echo $img_folder; ?>/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- css -->
<link rel="stylesheet" href="<?php echo $root_folder; ?>/assets/css/style.css?ver=<?php echo $cssVer;?>" />

<?php include("ga.php"); ?>
