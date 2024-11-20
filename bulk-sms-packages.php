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
<title>Promotional Bulk SMS Packages in India | webkeyindia</title>
<meta name="description" content="webkeyindia offers best Bulk SMS Packages plans. Choose our affordable Bulk SMS packages India to maximize your ROI at just $32. Enquire now">
<meta name="keywords" content="Bulk SMS Packages, Bulk SMS, Bulk SMS Packages in India, Bulk SMS in India, Best Bulk SMS Packages, Custom Bulk SMS packages Delhi, Affordable Bulk SMS Packages.">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$bulksms_packagesContent="webkeyindia offers best Bulk SMS Packages plans. Choose our affordable Bulk SMS packages India to maximize your ROI at just $32. Enquire now";
$bulksms_packagesTitle="Promotional Bulk SMS Packages in India | webkeyindia";
$bulksms_packagesContent=substr(strip_tags($bulksms_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$bulksms_packagesImage="$site_url/uploaded_files/bulk-sms-packages.png";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$bulksms_packagesTitle?>" />
<meta property="og:description"        content="<?=$bulksms_packagesContent?>" />
<meta property="og:image"              content="<?=$bulksms_packagesImage?>" />

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
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> <img src="images/google-partner.png" class="dsp-ptnr">  </div>
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
    <div class="center no-margin pullmt2">
      <h2>Bulk SMS Packages</h2>
      <p class="lead ">WebKeyIndia.Com is a Leading Tele Media Marketer who deals in Bulk SMS , Bulk Email & Bulk Whatsapp which helps you to promote your business in all over India. We would like to share our Services and respective Quotation with you. Please find the details as below.</p>
    </div>
    <div class="pullbottom">
      <h2 >Features of SMS Panel</h2>
      <ul style="list-style:none;">
        <li><i class="fa fa-hand-o-right"></i> Multiple SMS Sending.</li>
        <li><i class="fa fa-hand-o-right"></i> Send SMS using Excel / CSV File.</li>
        <li><i class="fa fa-hand-o-right"></i> Campaign in any city of India.</li>
        <li><i class="fa fa-hand-o-right"></i> Send Custom SMS to your Customers.</li>
        <li><i class="fa fa-hand-o-right"></i> Live Reports</li>
        <li><i class="fa fa-hand-o-right"></i> Daily sent Message Report.</li>
        <li><i class="fa fa-hand-o-right"></i> Download Center for all Reports.</li>
        <li><i class="fa fa-hand-o-right"></i> Add Contacts ( Individual ).</li>
        <li><i class="fa fa-hand-o-right"></i> Add Groups.</li>
        <li><i class="fa fa-hand-o-right"></i> Add Contacts ( By Txt or CSV File ).</li>
        <li><i class="fa fa-hand-o-right"></i> Integration of SMS Panel in your Software or Web Based Application.</li>
        <li><i class="fa fa-hand-o-right"></i> Hard Cored Database of All Cities of India.</li>
      </ul>
    </div>
    <div class="pricing-area text-center">
      <div>
        <div class="col-sm-6  plan price-two wow fadeInDown">
          <div class="heading-two" style="padding:8px;">
            <h2>Plan-I - Promotional Plans</h2>
          </div>
          <ul>
            <li>
              <div class="">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <h5 style="color:#27AE60;">Quantity</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <h5 style="color:#27AE60;">Cost/SMS</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <h5 style="color:#27AE60;">Total Cost</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">10,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">22 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">2,200 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                     <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=2200&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="2200">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (10,000 Quantity, 22 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">25,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">20 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">5,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
<!--                      <a href="http://www.astechmedia.in/epay/index.php?planCost=5000&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>
-->                    
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="5000">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (25,000 Quantity, 20 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">50,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">18 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">9,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                      
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=9000&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="9000">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (50,000 Quantity, 18 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
    
    
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">1,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">14 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">14,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                   <!--   <a href="http://www.astechmedia.in/epay/index.php?planCost=14000&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="14000">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (1,00,000 Quantity, 14 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">5,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">12.5 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">62,500 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                   <!--   <a href="http://www.astechmedia.in/epay/index.php?planCost=62500&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
                    
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="62500">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (5,00,000 Quantity, 12.5 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">10,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">12 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">1,20,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=120000&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="120000">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (10,00,000 Quantity, 12 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class="row pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">25,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">11.5 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">2,87,500 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=287500&plan=Promotional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="287500">
    <input type="hidden" name="package_name" value="Bulk SMS Promotional Plans (25,00,000 Quantity, 11.5 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6  plan price-three wow fadeInDown">
          <div class="heading-three" style="padding:8px;">
            <h2>Plan-II - Transactional Plans</h2>
          </div>
          <ul>
            <li>
              <div class="">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <h5 style="color:#f39c12;">Quantity</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <h5 style="color:#f39c12;">Cost/SMS</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <h5 style="color:#f39c12;">Total Cost</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">10,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">22 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">2,200 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                     <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=2200&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="2200">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (10,000 Quantity, 22 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">25,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">20 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">5,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=5000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="5000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (25,000 Quantity, 20 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">50,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">18 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">9,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                      
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=9000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
                    
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="9000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (50,000 Quantity, 18 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">1,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">15 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">15,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                   <!--   <a href="http://www.astechmedia.in/epay/index.php?planCost=15000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="15000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (1,00,000 Quantity, 15 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">5,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">13 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">65,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=65000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="65000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (5,00,000 Quantity, 13 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
    
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">10,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">12.5 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">1,25,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                     <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=125000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="125000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (10,00,000 Quantity, 12.5 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt1">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">25,00,000</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">12 Paisa</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-2">
                  <p style="color:#000;">3,00,000 INR</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=300000&plan=Transactional SMS Plan" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="300000">
    <input type="hidden" name="package_name" value="Bulk SMS Transactional Plans (25,00,000 Quantity, 12 Paisa)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <h5>Terms & Conditions</h5>
    <ul>
      <li>100% Payment would be in Advance.</li>
      <li>Validity time period would be 1 Year.</li>
      <li>Area wise Database of all cities is included in Bulk SMS Panel free of Cost.</li>
      <li>You can make the online payment through Credit Cards/DebitCards NetBanking from</li>
    </ul>
    <!--/pricing-area--> 
  </div>
  <!--/container--> 
</section>
<!--/pricing-page--> 

<!--/#bottom-->

<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>