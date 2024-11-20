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
<title>Email Marketing Packages | Bulk Email Packages | Webkeyindia</title>
<meta name="description" content="Webkeyindia offer best and cheap email marketing services and Packages at affordable price with easy to use.">
<meta name="keywords" content="Email Marketing Packages, Email Marketing, Email Marketing Packages, Email Marketing Packages in India, SMO in India, Best SMO Packages, Custom SMO packages Delhi, Affordable SMO Packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$emailmarketing_packagesContent="Webkeyindia offer best and cheap email marketing services and Packages at affordable price with easy to use.";
$emailmarketing_packagesTitle="Email Marketing Packages | Bulk Email Packages | Webkeyindia";
$emailmarketing_packagesContent=substr(strip_tags($emailmarketing_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$emailmarketing_packagesImage="$site_url/uploaded_files/email-marketing-packages.png";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$emailmarketing_packagesTitle?>" />
<meta property="og:description"        content="<?=$emailmarketing_packagesContent?>" />
<meta property="og:image"              content="<?=$emailmarketing_packagesImage?>" />

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

<section class="pricing-page" style="margin-top:80px;">
  <div class="container">
    <div class="center">
      <h2>Email Marketing Packages</h2>
      <p class="lead">If we promote your business through net, you would have the opportunity to come out of local market and grab the opportunities of outside world, thus increasing your business potential. Business is all about grabbing the right opportunity and reaching the target customers in a minimum span of time. A person who lags behind his competitor is always a looser.
        
        If we talk about communication through internet, the cheapest and easiest way of communication that strikes our mind is E-mail. It has revolutionized the business world and has changed the way people communicate, by changing the whole working environment. 
        
        WebKeyIndia.com is into the field of promoting business houses since many years. People say that it takes a long time to establish a new business but we at WebKeyIndia totally condemn this notion. Business Houses, becoming our registered members grow exponentially.
        
        E-mail Marketing on WebKeyIndia means that you can send business e-mails to the business houses listed with us in bulk. We offer an effective e-mail promotion campaign that reaches focused customers related to your business, generating maximum business response for you.</p>
    </div>
    <div class="pricing-area text-center">
      <div class="no-margin">
        <div class="col-sm-12 col-md-12 row  plan price-two wow fadeInDown">
          <div class="heading-three" style="padding:8px;">
            <h2>Email Marketing Packages Detail</h2>
          </div>
          <ul>
            <li>
              <div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5 style="color:#f39c12;">Features</h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5 style="color:#f39c12;">Prices</h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <h5 style="color:#f39c12;">Order</h5>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">Upto 10000 Mailers</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">7000 INR or 104 USD </p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">
                   <!--   <a href="http://www.astechmedia.in/epay/index.php?planCost=7000&plan=Email Marketing Packages" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="7000">
    <input type="hidden" name="package_name" value="Email Marketing Package (Upto 10000 Mailers)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">Upto 25000 Mailers</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">14000 INR or 208 USD </p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=14000&plan=Email Marketing Packages" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="14000">
    <input type="hidden" name="package_name" value="Email Marketing Package (Upto 25000 Mailers)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">Upto 50000 Mailers</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">25000 INR or 373 USD </p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">
                    <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=25000&plan=Email Marketing Packages" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="25000">
    <input type="hidden" name="package_name" value="Email Marketing Package (Upto 50000 Mailers)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                    </p>
                </div>
                <p class="clearfix"></p>
              </div>
            </li>
            <li>
              <div class=" pullmt">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">Upto 100000 Mailers</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">45000 INR or 671 USD </p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <p style="color:#000;">
                   <!--   <a href="http://www.astechmedia.in/epay/index.php?planCost=45000&plan=Email Marketing Packages" target="_blank">
                    <input type="button" name="submit" value="order now" class="btn">
                    </a>-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="45000">
    <input type="hidden" name="package_name" value="Email Marketing Package (Upto 100000 Mailers)">
    
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
    <p class="clearfix"></p>
    
    <!--/pricing-area--> 
  </div>
  
  <!--/container--> 
</section>
<!--/pricing-page--> 
<!--/#bottom-->

<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>