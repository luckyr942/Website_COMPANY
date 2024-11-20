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
<title>Best SMO Service Delhi,Social Media Optimization Packages india</title>
<meta name="description" content="Webkeyindia offers SMO Packages Delhi.WebKeyIndia.Com is specialised in providing good quality SMO Services in all over the world.">
<meta name="keywords" content="Social Media Optimization Service, SMO, SMO Packages delhi, SMO Packages in India, SMO in India, Best SMO Packages, Custom SMO packages Delhi, Affordable SMO Packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$smo_packagesContent="Webkeyindia offers SMO Packages Delhi.WebKeyIndia.Com is specialised in providing good quality SMO Services in all over the world.";
$smo_packagesTitle="SMO Packages Delhi,Social Media Optimization Packages india";
$smo_packagesContent=substr(strip_tags($smo_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$smo_packagesImage="$site_url/uploaded_files/smo-packages.png";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$smo_packagesTitle?>" />
<meta property="og:description"        content="<?=$smo_packagesContent?>" />
<meta property="og:image"              content="<?=$smo_packagesImage?>" />

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
<link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
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
<!--/head-->

<body>
<header id="header" class="no-margin clearfix"> 
  
  <!--/.top-bar-->
  
  <nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
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
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a><img src="images/google-partner.png" class="dsp-ptnr">  </div>
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
    <div class="center">
      <h2>SMO Packages</h2>
      <p class="lead no-margin">In this Internet marketing trend, it is the time of social media. WebKeyIndia.Com is specialised in providing good quality SMO Services in all over the world. For our valuable clients we have designed some special and standard SMO PACKAGES.</p>
    </div>
    <div class="pricing-area text-center ">
      <div class="row"> 
        
        <!--FIRST PACK-->
        <div class="col-sm-3 plan price-four wow fadeInDown">
          <ul>
            <li class="heading-four">
              <h2>Basic SMO Plan</h2>
              <span><i class="fa fa-inr"></i> 40,995 / Year</span> </li>
<!--            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Google Plus Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Account Set-Up</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Write applicable posts</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Post Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Maintain profile</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Like</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Followers</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Google Plus Community Followers</li>-->
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Facebook Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Application Integration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Fans/Likes</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> FB Timeline Design</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> FB Profile Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Friends</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Twitter Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Design Intergration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Tweet Favourite</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter List Management</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Submission</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Pinterest Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Account Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sourcing of pin board content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Creation of custom business URL</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Re-pinning of relevant content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Updating of pin boards</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Following of relevant Pinners</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Linkedin Marketing</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Creation </li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Account Management</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Regular Updates</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Maintenance</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#5c5c5c;"><i class="fa fa-hand-o-right"></i> Youtube Marketing</li>
            <li class="ami-price" ><i class="fa fa-close clrclose" ></i> You Tube Channel Creation</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> You Tube Background Design</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> Video Optimization</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Submission</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Like or Subscribers</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Views</li>
            <li class="plan-action"> 
            <!--<a href="" class="btn btn-primary">Book Now</a> 
            -->
    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="40995">
    <input type="hidden" name="package_name" value="Basic SMO Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
            </li>
          </ul>
        </div>
        
        <!--SECOND PACK-->
        <div class="col-sm-3 plan price-three wow fadeInDown">
          <ul>
            <li class="heading-three">
              <h2>Standard SMO Plan</h2>
              <span><i class="fa fa-inr"></i> 60,995 / Year</span> </li>
<!--            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Google Plus Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Account Set-Up</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Write applicable posts</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Post Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Maintain profile</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Like</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Followers</li>
            <li  class="ami-price"><i class="fa fa-close clrclose"></i> Google Plus Community Followers</li>-->
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Facebook Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Application Integration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Fans/Likes</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> FB Timeline Design</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> FB Profile Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Friends</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Twitter Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Design Intergration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Tweet Favourite</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter List Management</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Submission</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Pinterest Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Account Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sourcing of pin board content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Creation of custom business URL</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Re-pinning of relevant content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Updating of pin boards</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Following of relevant Pinners</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Linkedin Marketing</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Creation </li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Account Management</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Regular Updates</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Maintenance</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#f39c12;"><i class="fa fa-hand-o-right"></i> Youtube Marketing</li>
            <li class="ami-price" ><i class="fa fa-close clrclose" ></i> You Tube Channel Creation</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> You Tube Background Design</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> Video Optimization</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Submission</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Like or Subscribers</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Views</li>
            <li class="plan-action"> 
            <!--<a href="" class="btn btn-primary">Book Now</a> 
            -->
            
    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="60995">
    <input type="hidden" name="package_name" value="Standard SMO Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
            </li>
          </ul>
        </div>
        
        <!--THIRD PACK-->
        <div class="col-sm-3 plan price-two wow fadeInDown">
          <ul>
            <li class="heading-two">
              <h2>Professional SMO Plan</h2>
              <span><i class="fa fa-inr"></i> 75,995 / Year</span> </li>
<!--            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Google Plus Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Account Set-Up</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Write applicable posts</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Post Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Maintain profile</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Like</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Followers</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Google Plus Community Followers</li>-->
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Facebook Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Creation</li>
            <li class="ami-price"><i class="fa fa-check  clrright"></i> FB Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Application Integration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Fans/Likes</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Profile Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Friends</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Twitter Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Design Intergration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Tweet Favourite</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter List Management</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Submission</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Pinterest Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Account Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sourcing of pin board content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Creation of custom business URL</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Re-pinning of relevant content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Updating of pin boards</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Following of relevant Pinners</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Linkedin Marketing</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Creation </li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Account Management</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Regular Updates</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Linkedin Profile Maintenance</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#27AE60;"><i class="fa fa-hand-o-right"></i> Youtube Marketing</li>
            <li class="ami-price" ><i class="fa fa-close clrclose" ></i> You Tube Channel Creation</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> You Tube Background Design</li>
            <li class="ami-price" ><i class="fa fa-close clrclose"></i> Video Optimization</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Submission</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Like or Subscribers</li>
            <li class="ami-price"><i class="fa fa-close clrclose"></i> Video Views</li>
            <li class="plan-action"> <!--<a href="" class="btn btn-primary">Book Now</a>--> 
    
    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="75995">
    <input type="hidden" name="package_name" value="Professional SMO Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
    
            </li>
          </ul>
        </div>
        
        <!--FOURTH PACK-->
        <div class="col-sm-3 plan price-one wow fadeInDown">
          <ul>
            <li class="heading-one">
              <h2>Enterprise SMO Plan</h2>
              <span><i class="fa fa-inr"></i> 99,995 / Year</span> </li>
<!--            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Google Plus Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Account Set-Up</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Write applicable posts</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google+ Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Post Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Maintain profile</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Like</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Goolge Plus Page Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Community Followers</li>-->
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Facebook Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Application Integration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Page Fans/Likes</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> FB Profile Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Friends</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Twitter Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Page Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Design Intergration</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Tweet Favourite</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter List Management</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Profile Submission</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Pinterest Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Account Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sourcing of pin board content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Creation of custom business URL</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Pinterest Followers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Re-pinning of relevant content</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Updating of pin boards</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Following of relevant Pinners</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Linkedin Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Linkedin Profile Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Linkedin Account Management</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Linkedin Regular Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Linkedin Profile Maintenance</li>
            <li class="ami-price" style="font-weight:bold; font-size:14px; color:#e24f43;"><i class="fa fa-hand-o-right"></i> Youtube Marketing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> You Tube Channel Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> You Tube Background Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Video Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Video Submission</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Video Like or Subscribers</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Video Views</li>
            <li class="plan-action"> <!--<a href="" class="btn btn-primary">Book Now</a>-->
              
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="99995">
    <input type="hidden" name="package_name" value="Enterprise SMO Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
            </li>
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