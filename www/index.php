<?php

include(dirname(__FILE__)."/php/config.php");

$title = $siteTitle . '';
$pageDescription = $siteDescription;
$categoryName = "top";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<?php include("modules/head.php"); ?>
</head>
<body class="category--<?php echo $categoryName; ?>">


<div class="wrap" id='current--mainvisual'>


</div>
<!-- /wrap -->


<?php include("modules/js.php"); ?>
</body>
</html>