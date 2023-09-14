<?php

include(substr(dirname(__FILE__), 0, strpos(dirname(__FILE__), '/www')) . '/www/php/_config.php');
include(dirname(__FILE__)."/php/_functions.php");

$title = $siteTitle . '';
$pageDescription = $siteDescription;
$categoryName = "top";
$pageName = "";

include(dirname(__FILE__)."/php/_variables.php");
$isCommon = false;

?>
<?php include("modules/_header.php"); ?>






<?php include("modules/_footer.php"); ?>
