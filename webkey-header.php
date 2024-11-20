<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
$page_name=basename($_SERVER['PHP_SELF'],'.php');
$site_url=db_scalar("select admin_website_url from tbl_admin where 1");
$prdct_name=$_REQUEST['cat_name'];
$catgoryID=db_scalar("select category_id from tbl_category where 1 and category_url='$prdct_name'");
?>
<?php
    include("database.php");
    $loc_slug = $_REQUEST['location_url'] ?? null;

    if ($loc_slug !== null) {
        $loc = "SELECT * FROM `tbl_location` WHERE location_url='$loc_slug'";
        $runloc = mysqli_query($db, $loc) or die("Query Not run");
        $dataloc = mysqli_fetch_assoc($runloc);
        $location = $dataloc["location_name"];
    } else {
        $sqldef = "SELECT * FROM `tbl_admin` WHERE admin_id=1"; 
        $rundef = mysqli_query($db, $sqldef) or die("Query Not run");
        $datadef = mysqli_fetch_assoc($rundef);
        $location = $datadef['admin_city'];
    }
?>
<?php include("cat_function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<a href="https://www.webkeyindia.com" hreflang="en">WebKeyIndia</a>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<meta name="robots" content="ALL">
<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<?php if(!empty($catgoryID)){?>
<title><?= str_replace("LOCATION", $location, db_scalar("select category_meta_title from tbl_category where category_status='Active' and category_id='$catgoryID'"));?></title>
<META NAME="description" content="<?= str_replace("LOCATION", $location, db_scalar("select category_meta_description from tbl_category where category_status='Active' and category_id='$catgoryID'"));?>" />
<META NAME="keywords" content="<?= str_replace("LOCATION", $location, db_scalar("select category_meta_keywords from tbl_category where category_status='Active' and category_id='$catgoryID'"));?>" />
<? } ?>

<script src="<?=$site_url?>/js/jquery.js"></script> 
<script type="text/javascript" src="<?=$site_url?>/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
</script>
<!-- SmartMenus core CSS (required) -->
<link href="<?=$site_url?>/amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="<?=$site_url?>/amicss/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- core CSS -->
<link rel="stylesheet" href="<?=$site_url?>/css/bootstrap.min.css">
<link href="<?=$site_url?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "LocalBusiness",
"name": "WebKeyIndia",
"url": "https://www.webkeyindia.com/",
"description": "Best Digital Marketing Company in New Delhi India",
"AggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.9",
  "bestRating": "5",
  "ratingCount": "3170"
 }
}
</script>
</head>
<!--/head-->

<body>
<header id="header" class="no-margin clearfix"> 

<!--/.top-bar-->

<nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
<div id="amiID"  class="top-bar no-margin pullpt2 ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12">
<?php include("webkey-header-top.php");?>
</div>
</div>
</div>
<!--/.container--> 
</div>
<div class="container-fluid bottom-footer">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> 
<img src="<?=$site_url?>/images/google-partner.png" alt="Best Web Design & Digital Marketing Company in Delhi India" class="dsp-ptnr">



</div>
<div class="collapse navbar-collapse navbar-right">
<nav id="main-nav" role="navigation"> 
<!-- Sample menu definition -->
<?php include("webkey-header-menu.php");?>
</nav>
</div>
</div>
<!--/.container--> 
</div>
</nav>
<!--/nav--> 
</header>
<!--/header-->