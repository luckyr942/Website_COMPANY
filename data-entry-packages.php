<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
$page_name=basename($_SERVER['PHP_SELF'],'.php');

$site_url=db_scalar("select admin_website_url from tbl_admin where 1");
?>
<?php include("cat_function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow" />
<meta name="description" content="">
<meta name="author" content="">
<title>Data Entry Packages</title>
<?php include 'headlink.php';?>
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
<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<!-- SmartMenus core CSS (required) -->
<link href="<?=$site_url?>/amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="<?=$site_url?>/amicss/sm-blue.css" rel="stylesheet" type="text/css" />
<!-- core CSS -->
<link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
</head>
<!--/head-->

<body>
<header id="header" class="no-margin clearfix"> 

<!--/.top-bar-->

<nav  class="navbar navbar-inverse no-margin pullpt1 navbar-fixed-top" role="banner">
<div class="top-bar no-margin pullpt2 ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12">
<?php include("webkey-header-top.php");?>
</div>
</div>
</div>
<!--/.container--> 
</div>
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

</nav>
<!--/nav--> 

</header>
<!--/header-->

<section class="pricing-page sectyd">
<div class="container">
<div class="center">
<h2>Data Entry Packages</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
et dolore magna aliqua. Ut enim ad minim veniam</p>
</div>
<div class="pricing-area text-center">
<div class="row">
<div class="col-sm-4 plan price-one wow fadeInDown">
<ul>
<li class="heading-one">
<h1>Start Up</h1>
<span>$6/Month</span> </li>
<li>5 Gb Disk Space</li>
<li>1GB Dadicated Ram</li>
<li>10 Addon Domain</li>
<li>10 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-4 plan price-two wow fadeInDown">
<ul>
<li class="heading-two">
<h1>Standerd</h1>
<span>$12/Month</span> </li>
<li>10 Gb Disk Space</li>
<li>2GB Dadicated Ram</li>
<li>20 Addon Domain</li>
<li>20 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-4 plan price-three wow fadeInDown"> <img src="<?=$site_url?>/images/ribon_one.png">
<ul>
<li class="heading-three">
<h1>Premium</h1>
<span>$24/Month</span> </li>
<li>50 Gb Disk Space</li>
<li>8GB Dadicated Ram</li>
<li>Unlimited Addon Domain</li>
<li>Unlimited Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
<ul>
<li class="heading-four">
<h1>Basic</h1>
<span>$3/Month</span> </li>
<li>5 Gb Disk Space</li>
<li>1GB Dadicated Ram</li>
<li>10 Addon Domain</li>
<li>10 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-6 col-md-3 plan price-five wow fadeInDown">
<ul>
<li class="heading-five">
<h1>Standerd</h1>
<span>$6/Month</span> </li>
<li>5 Gb Disk Space</li>
<li>1GB Dadicated Ram</li>
<li>10 Addon Domain</li>
<li>10 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-6 col-md-3 plan price-six wow fadeInDown"> <img src="<?=$site_url?>/images/ribon_two.png">
<ul>
<li class="heading-six">
<h1>Premium</h1>
<span>$12/Month</span> </li>
<li>5 Gb Disk Space</li>
<li>1GB Dadicated Ram</li>
<li>10 Addon Domain</li>
<li>10 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
<div class="col-sm-6 col-md-3 plan price-seven wow fadeInDown">
<ul>
<li class="heading-seven">
<h1>Developer</h1>
<span>$19/Month</span> </li>
<li>5 Gb Disk Space</li>
<li>1GB Dadicated Ram</li>
<li>10 Addon Domain</li>
<li>10 Email Account</li>
<li>24/7 Support</li>
<li class="plan-action"> <a href="" class="btn btn-primary">Book Now</a> </li>
</ul>
</div>
</div>
</div>
<!--/pricing-area--> 
</div>
<!--/container--> 
</section>
<!--/pricing-page-->


<!--/#bottom-->

<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>