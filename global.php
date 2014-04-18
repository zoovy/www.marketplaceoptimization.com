<?
$URL = '';
if ($_SERVER['SERVER_NAME'] != "www.marketplaceoptimization.com") {
  $URL = "http://www.marketplaceoptimization.com".$_SERVER['REQUEST_URI'];
  }
if ($URL != '') {
  header("Location: $URL"); 
  }
?>
