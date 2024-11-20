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
<title>Top 10 Web Designing Company in Delhi, Website Design Packages Delhi</title>
<meta name="description" content="Webkeyindia is a web designing company based in Delhi offers affordable website design packages and designs your website search engine friendly at lowest prices">
<meta name="keywords" content="Website Designing Packages, Web Design Packages India, Website Design Packages in Delhi, Web Design Plans in India, Affordable Web Designing Packages India, Cheap Website Design Packages, Website Design Prices.">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$websiteDesign_packagesContent="Webkeyindia is a web designing company based in Delhi offers affordable website design packages and designs your website search engine friendly at lowest prices";
$websiteDesign_packagesTitle="Web Designing Package India | Website Design Packages Delhi";
$websiteDesign_packagesContent=substr(strip_tags($websiteDesign_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$websiteDesign_packagesImage="$site_url/uploaded_files/website-designing-packages.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$websiteDesign_packagesTitle?>" />
<meta property="og:description"        content="<?=$websiteDesign_packagesContent?>" />
<meta property="og:image"              content="<?=$websiteDesign_packagesImage?>" />

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
<script type="text/javascript">
$(function() {
$('#main-menu').smartmenus({
subMenusSubOffsetX: 1,
subMenusSubOffsetY: -8
});
});
</script>
<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="<?=$site_url?>/amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<link href="<?=$site_url?>/amicss/sm-blue.css" rel="stylesheet" type="text/css" />
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
<body>
<header id="header" class="no-margin clearfix"> 
<nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
<div id="amiID"  class="top-bar no-margin pullpt2 ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-xs-12">
<?php include("webkey-header-top.php");?>
</div>
</div>
</div>
</div>
<div class="container-fluid bottom-footer">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> <img src="images/google-partner.png" class="dsp-ptnr"></div>
<div class="collapse navbar-collapse navbar-right">
<nav id="main-nav" role="navigation">
<?php include("webkey-header-menu.php");?>
</nav>
</div>
</div> 
</div>
</nav>
</header>
<section class="pricing-page sectyd">
<div class="container">
<div class="center">
<h2>Web Designing Packages</h2>
<p class="lead">WebKeyIndia is a India based leading global digital marketing company, which provide best quality responsive website designing services. As a best Web design company in India we provide website designing packages on effective prices to our global clients.</p>
</div>
<div class="pricing-area text-center ">
<div class="row ">
<div class="col-sm-4 plan price-two wow fadeInDown">
<ul>
<li class="heading-two">
<h2>Plan-I - Static Website Package</h2>
<span><i class="fa fa-dollar"></i>151 / 9995 INR</span> </li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 1 Domain Name of your choice like .com .in .co.in etc.</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 500 MB Web Space</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 1000 MB Monthly Web Bandwidth</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 10 Business Email Accounts</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 1 Theme Based Logo Designing</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Attractive Home Page Designing</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Hot/Featured Product Display on Home Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 15 Static Pages for Products/Services</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> About Us/Company Profile/Terms & Conditions Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Contact Us/Enquiry Page/Quick Enquiry</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Products/Services Search Bar</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Language Converter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Visitor Hits Counter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Social Media Follow Us Links (<i class="fa fa-facebook clrfac"></i> <i class="fa fa-twitter clrtwi"></i> <i class="fa fa-linkedin clrli"></i> <i class="fa fa-instagram clrins"></i> <i class="fa fa-pinterest clrpin"></i> <i class="fa fa-youtube clryou"></i>)</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Web Mail Login from Website</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Friendly Web Pages</li>
<li class="plan-action">
     <!--<a href="http://www.astechmedia.in/epay/index.php?planCost=9995&plan=Static Website" class="btn btn-primary" target="_blank">Proceed Now</a>
     -->
  <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="9995">
    <input type="hidden" name="package_name" value="Static Website Package">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
     </li>
</ul>
</div>
<div class="col-sm-4 plan price-three wow fadeInDown">
<ul>
<li class="heading-three">
<h2>Plan-II - Dynamic Website</h2>
<span><i class="fa fa-dollar"></i>226 / 14995 INR</span> </li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 1 Domain Name of your choice like .com .in .co.in etc.</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 2000 MB Web space</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 4000 MB Monthly Web Bandwidth</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 25 Business Email Accounts</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 3 Theme Based Logo Designing</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Attractive Home Page Designing with Flash Effects</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Hot/Featured Product Display on Home Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Category Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Products/Services Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Products/Services Search Bar</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> About Us/Company Profile/Terms & Conditions Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Contact Us/Enquiry Page with Google Location Map</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Our Clients Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Client Testimonials Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Career/Current Jobs Opening Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company News Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company Videos Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company Photo Gallery Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Language Converter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Visitor Hits Counter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Social Media Follow Us Links (<i class="fa fa-facebook clrfac"></i> <i class="fa fa-twitter clrtwi"></i> <i class="fa fa-linkedin clrli"></i> <i class="fa fa-instagram clrins"></i> <i class="fa fa-pinterest clrpin"></i> <i class="fa fa-youtube clryou"></i>)</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Web Mail Login from Website</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Friendly Web Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Business Listing Submission</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytic Integration</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Webmaster Integration</li>
<li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Dynamic Admin/Control Panel Features</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Home Page Content And Flash</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Other CMS Pages Content</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Categories/Products Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Hot/Featured Products</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Contact Information</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Our Clients Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Client Testimonials Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Career/Current Jobs Opening Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company News Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company Videos Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company Photo Gallery Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Meta Tags (Title,Description And Keywords)</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Social Media Follow Us Links (<i class="fa fa-facebook clrfac"></i> <i class="fa fa-twitter clrtwi"></i> <i class="fa fa-linkedin clrli"></i> <i class="fa fa-instagram clrins"></i> <i class="fa fa-pinterest clrpin"></i> <i class="fa fa-youtube clryou"></i>)</li>
<li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=14995&plan=Dynamic Website" target="_blank" class="btn btn-primary">Proceed Now</a>
-->
  <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="14995">
    <input type="hidden" name="package_name" value="Dynamic Website">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
</ul>
</div>
<div class="col-sm-4 plan price-three wow fadeInDown">
<ul>
<li class="heading-one">
<h2>Plan-III - eCommerce Website</h2>
<span><i class="fa fa-dollar"></i>377 / 24995 INR</span> </li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 1 Domain Name of your choice like .com .in .co.in etc.</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Web space</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Monthly Web Bandwidth</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Business Email Accounts</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> 5 Theme Based Logo Designing</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Customized Home Page Designing with Flash Effects</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Hot/Featured Product Display on Home Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Category Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Unlimited Products/Services Pages</li>
<li class="ami-price"><i class="fa fa-check  clrright"></i> Products/Services Search Bar</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> About Us/Company Profile/Terms & Conditions Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Contact Us/Enquiry Page with Google Location Map</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Our Clients Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Client Testimonials Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Career/Current Jobs Opening Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company News Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company Videos Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Company Photo Gallery Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Language Converter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Visitor Hits Counter Facility</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Social Media Follow Us Links (<i class="fa fa-facebook clrfac"></i> <i class="fa fa-twitter clrtwi"></i> <i class="fa fa-linkedin clrli"></i> <i class="fa fa-instagram clrins"></i> <i class="fa fa-pinterest clrpin"></i> <i class="fa fa-youtube clryou"></i>)</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Web Mail Login from Website</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Friendly Web Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Business Listing Submission</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytic Integration</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Google Webmaster Integration</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Attractive Product final page with zooming option</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Customer Login/Signup/Forgot Password Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Add to Cart Option</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Update Cart Option</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Checkout Option</li>
<li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Member Folder Features</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Update Profile</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Order</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Change Password</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Logout</li>
<li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Dynamic Admin/Control Panel Features</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Users</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Orders</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Home Page Content And Flash</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Other CMS Pages Content</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Categories/Products Pages</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Hot/Featured Products</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Contact Information</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Our Clients Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Client Testimonials Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Career/Current Jobs Opening Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company News Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company Videos Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Company Photo Gallery Page</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Manage Meta Tags (Title,Description And Keywords)</li>
<li class="ami-price"><i class="fa fa-check clrright"></i> Social Media Follow Us Links (<i class="fa fa-facebook clrfac"></i> <i class="fa fa-twitter clrtwi"></i> <i class="fa fa-linkedin clrli"></i> <i class="fa fa-instagram clrins"></i> <i class="fa fa-pinterest clrpin"></i> <i class="fa fa-youtube clryou"></i>)</li>
<li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=24995&plan=eCommerce Website" class="btn btn-primary" target="_blank" style="background:#e24f43">Proceed Now</a>
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="24995">
    <input type="hidden" name="package_name" value="eCommerce Website">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>

</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>