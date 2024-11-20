<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
$page_name=basename($_SERVER['PHP_SELF'],'.php');
$site_url=db_scalar("select admin_website_url from tbl_admin where 1");
$prdct_name=$_REQUEST['cat_name'];
$catgoryID=db_scalar("select category_id from tbl_category where 1 and category_url='$prdct_name'");
?>
<?php include("cat_function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<meta name="robots" content="ALL">
<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<?php if(!empty($catgoryID)){?>
<title><?=db_scalar("select category_meta_title from  tbl_category where category_status='Active' and category_id='$catgoryID'")?></title>
<META NAME="description" content="<?=db_scalar("select category_meta_description from  tbl_category where category_status='Active' and category_id='$catgoryID'")?>" />
<META NAME="keywords" content="<?=db_scalar("select category_meta_keywords from  tbl_category where category_status='Active' and category_id='$catgoryID'")?>" />
<? } ?>

<script src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
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
<link href="amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="amicss/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "LocalBusiness",
"name": "WebKeyIndia",
"url": "https://www.webkeyindia.com/",
"description": "Best Digital Marketing Company in New Delhi India",
"pricerange":"Affordable | Call: +91-9958276296 | Mail Us: support@webkeyindia.com",
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
	<div class="col-md-12">
		<?php include("googleptnr.php");?>
	</div>
<div class="container-fluid bottom-footer">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> </div>
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