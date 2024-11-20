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
<meta name="robots" content="index, follow" />
<title>Website Hosting Packages Delhi,Web Hosting packages,Web Hosting Plans india</title>
<meta name="description" content="As a best digital marketing company,webkeyindia is providing the best Website Hosting Packages to its domestic as well as international clients.">
<meta name="keywords" content="Website Hosting Packages India, Custom Website Hosting packages Delhi, Best Website Hosting Packages, Affordable Web Hosting Packages, India Website Hosting Packages, Discount Website Hosting Packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$websiteHosting_packagesContent="As a best digital marketing company,webkeyindia is providing the best Website Hosting Packages to its domestic as well as international clients.";
$websiteHosting_packagesTitle="Website Hosting Packages Delhi,Web Hosting packages,Web Hosting Plans india";
$websiteHosting_packagesContent=substr(strip_tags($websiteHosting_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$websiteHosting_packagesImage="$site_url/uploaded_files/custom-oscommerce-website-development-services.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$websiteHosting_packagesTitle?>" />
<meta property="og:description"        content="<?=$websiteHosting_packagesContent?>" />
<meta property="og:image"              content="<?=$websiteHosting_packagesImage?>" />

<?php
//Provide a URL in $url to empty the OG cache
function clear_open_graph_cache($url) {
  $vars = array('id' => $url, 'scrape' => 'true');
  $body = http_build_query($vars);

  $fp = fsockopen('ssl://graph.facebook.com', 443);
  fwrite($fp, "POST / HTTP/1.1\r\n");
  fwrite($fp, "Host: graph.facebook.com\r\n");
  fwrite($fp, "Content-Type: application/x-www-form-urlencoded\r\n");
  fwrite($fp, "Content-Length: ".strlen($body)."\r\n");
  fwrite($fp, "Connection: close\r\n");
  fwrite($fp, "\r\n");
  fwrite($fp, $body);
  fclose($fp);
}

clear_open_graph_cache($pURL);
?>

<!--OG Tag End-->

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
<link rel="stylesheet" href="<?=$site_url?>/css/bootstrap.min.css">
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
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> <img src="images/google-partner.png" class="dsp-ptnr"> </div>
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

<section class="pricing-page sectyd">
  <div class="container">
    <div class="center  no-margin">
      <h2>Web Hosting Packages</h2>
      <p class="lead">As a best digital marketing company, webkeyindia is providing the best <strong>Website Hosting Packages</strong> to its domestic as well as international clients.</p>
    </div>
    <div class="row"> 
        <!--FIRST PACK-->
        
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Single Domain Hosting (Linux/Windows)</div></h2>
        <table class="table table-bordered table-striped amitable">
              
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>BAND</th>
            <th>WEB SPACE</th>
            <th>DATA TRANSFER</th>
            <th>NO OF EMAIL ACCOUNT</th>
            <th>PRICING/MONTH</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Up to 1 GB</td>
            <td>Up to 10GB</td>
            <td>Unlimited</td>
            <td><i class="fa fa-inr"></i> 200/mo</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1 GB -20 GB</td>
            <td>10 GB - 200 GB</td>
            <td>Unlimited</td>
            <td><i class="fa fa-inr"></i> 270/mo</td>
        </tr>
        <tr>
            <td>3</td>
            <td>20 GB - 100 GB</td>
            <td>200 GB - 1000 GB</td>
            <td>Unlimited</td>
            <td><i class="fa fa-inr"></i> 330/mo</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Unlimited</td>
            <td>Unlimited</td>
            <td>Unlimited</td>
            <td><i class="fa fa-inr"></i> 470/mo</td>
        </tr>
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <!--FIRST PACK-->
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Multiple Domain Hosting (Linux/Windows)</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLAN</th>
            <th>BUSINESS HOSTING</th>
            <th>PRO HOSTING</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bandwidth</td>
            <td>Unlimited</td>
            <td>Unlimited</td>
        </tr>
         <tr>
            <td>Disk Space</td>
            <td>Unlimited</td>
            <td>Unlimited</td>
        </tr>
        <tr>
            <td>Addon Domains</td>
            <td>3</td>
            <td>Unlimited</td>
        </tr>
        <tr>
            <td>Pricing per Month</td>
            <td><i class="fa fa-inr"></i> 670/mo</td>
            <td><i class="fa fa-inr"></i> 880/mo</td>
        </tr>
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <!--FIRST PACK-->
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Reseller Hosting (Linux/Windows)</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLAN</th>
            <th>R1</th>
            <th>R2</th>
             <th>R3</th>
            <th>R4</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Disk Space</td>
            <td>40 GB</td>
            <td>50 GB</td>
            <td>100 GB</td>
            <td>200 GB</td>
        </tr>
         <tr>
            <td>Bandwidth</td>
            <td>700 GB</td>
            <td>900 GB</td>
            <td>1200 GB</td>
            <td>1400 GB</td>
        </tr>
        <tr>
             <td>WHMCS</td>
            <td><i class="fa fa-close"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
        </tr>
        <tr>
            <td>Pricing per Month</td>
            <td><i class="fa fa-inr"></i> 3395</td>
            <td><i class="fa fa-inr"></i> 4070</td>
            <td><i class="fa fa-inr"></i> 5160</td>
            <td><i class="fa fa-inr"></i> 6795</td>
        </tr>
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          <div class="table-responsive">
          <h2><div class="text-center text-danger">VPS</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLANS</th>
            <th>CPU</th>
            <th>RAM</th>
             <th>DISK SPACE</th>
            <th>BANDWIDTH</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>VPS 1</td>
            <td>0.88 GHz</td>
            <td>512 MB</td>
            <td>20 GB</td>
            <td>100 GB</td>
            <td>Rs. 2030/mo</td>
        </tr>
         <tr>
             <td>VPS 2</td>
            <td>1.17 GHz</td>
            <td>768 MB</td>
            <td>30 GB</td>
            <td>150 GB</td>
            <td>Rs. 2850/mo</td>
        </tr>
        <tr>
             <td>VPS 3</td>
            <td>1.47 GHz</td>
            <td>1024 MB</td>
            <td>40 GB</td>
            <td>200 GB</td>
            <td>Rs. 3395/mo</td>
        </tr>
        <tr>
             <td>VPS 4</td>
            <td>1.96 GHz</td>
            <td>1536 MB</td>
            <td>60 GB</td>
            <td>300 GB</td>
            <td>Rs. 5030/mo</td>
        </tr>
        <tr>
             <td>VPS 5</td>
            <td>2.43 GHz</td>
            <td>2048 MB</td>
            <td>80 GB</td>
            <td>400 GB</td>
            <td>Rs. 6520/mo</td>
        </tr>
        <tr>
             <td>VPS 6</td>
            <td>3.20 GHz</td>
            <td>2560 MB</td>
            <td>100 GB</td>
            <td>500 GB</td>
            <td>Rs. 7750/mo</td>
        </tr>
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Managed Servers</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLANS</th>
            <th>CPU</th>
            <th>RAM</th>
             <th>DISK SPACE</th>
            <th>BANDWIDTH</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>MD 1</td>
            <td>2.30 GHz</td>
            <td>4 GB</td>
            <td>1 TB</td>
            <td>5 TB</td>
            <td>Rs. 23120/mo</td>
        </tr>
         <tr>
             <td>MD 2</td>
            <td>2.50 GHz</td>
            <td>4 GB</td>
            <td>1 TB</td>
            <td>5 TB</td>
            <td>Rs. 27200/mo</td>
        </tr>
        <tr>
             <td>MD 3</td>
            <td>2.50 GHz</td>
            <td>8 GB</td>
            <td>1 TB</td>
            <td>10 TB</td>
            <td>Rs. 29960/mo</td>
        </tr>
        <tr>
             <td>MD 4</td>
            <td>3.20 GHz</td>
            <td>16 GB</td>
            <td>1 TB</td>
            <td>15 TB</td>
            <td>Rs. 34000/mo</td>
        </tr>
       
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Dedicated Servers</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLANS</th>
            <th>CPU</th>
            <th>RAM</th>
             <th>DISK SPACE</th>
            <th>BANDWIDTH</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>D 1</td>
            <td>3.10 GHz</td>
            <td>6 GB</td>
            <td>1 TB</td>
            <td>1 TB</td>
            <td>Rs. 15000/mo</td>
        </tr>
         <tr>
             <td>D 2</td>
            <td>2.50 GHz</td>
            <td>14 GB</td>
            <td>1 TB</td>
            <td>1 TB</td>
            <td>Rs. 17600/mo</td>
        </tr>
        <tr>
             <td>D 3</td>
            <td>2.50 GHz</td>
            <td>22 GB</td>
            <td>2 TB</td>
            <td>2 TB</td>
            <td>Rs. 24700/mo</td>
        </tr>
        <tr>
             <td>D 4</td>
            <td>3.20 GHz</td>
            <td>30 GB</td>
            <td>2 TB</td>
            <td>2 TB</td>
            <td>Rs. 27200/mo</td>
        </tr>
    </tbody>
</table>
</div>
        </div>
      </div>
    <div class="row"> 
        <div class="col-sm-12 col-md-12 col-xs-12 wow fadeInDown">
          <div class="table-responsive">
          <h2><div class="text-center text-danger">Cloud</div></h2>
        <table class="table table-bordered table-striped amitable">
    <thead>
        <tr bgcolor="#333333" style="color:white;">
            <th>PLANS</th>
            <th>CPU</th>
            <th>RAM</th>
             <th>DISK SPACE</th>
            <th>BANDWIDTH</th>
            <th>PRICE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Personal Cloud</td>
            <td>2 CPU Cores</td>
            <td>2 GB</td>
            <td>Unlimited Disk Space</td>
            <td>Unlimited Bandwidth</td>
            <td>Rs. 830/mo</td>
        </tr>
         <tr>
             <td>Business Cloud</td>
            <td>4 CPU Cores</td>
            <td>4 GB</td>
            <td>Unlimited Disk Space</td>
            <td>Unlimited Bandwidth</td>
            <td>Rs. 1050/mo</td>
        </tr>
        <tr>
             <td>Pro Cloud</td>
            <td>6 CPU Cores</td>
            <td>6 GB</td>
            <td>Unlimited Disk Space</td>
            <td>Unlimited Bandwidth</td>
            <td>Rs. 1500/mo</td>
        </tr>
    </tbody>
</table>
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