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
<title>Content Writing Packages | Web Content Writing plan</title>
<meta name="description" content="We offer Content Writing Packages with SEO Content Writing Services,Website Content Writing,blog writing and press release writing at best suitable prices.">
<meta name="keywords" content="content writing packages, web content writing, seo content writing services, press release writing, seo blog writing, seo web content writing, seo content writing, website content writing, content writing services, article writing packages, web content writing services, content writing prices, seo content writer, web content writer.">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$content_writing_packagesContent="We offer Content Writing Packages with SEO Content Writing Services,Website Content Writing,blog writing and press release writing at best suitable prices.";
$content_writing_packagesTitle="Content Writing Packages | Web Content Writing plan";
$content_writing_packagesContent=substr(strip_tags($content_writing_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$content_writing_packagesImage="$site_url/uploaded_files/custom-portal-development-services.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$content_writing_packagesTitle?>" />
<meta property="og:description"        content="<?=$content_writing_packagesContent?>" />
<meta property="og:image"              content="<?=$content_writing_packagesImage?>" />

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
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a><img src="images/google-partner.png" class="dsp-ptnr"> </div>
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
      <h2>Content Writing Packages</h2>
      <p class="lead no-margin">According many digital marketing experts fresh and good quality content is the best crispy and yummy food for all major search engines. As a best digital marketing agency in India,  WebKeyIndia.Com has expert, experienced and enthoistic content writers. For our clients need we have designed the best content writing packages.</p>
    </div>
    <div class="pricing-area text-center">
      <div>
        <div class="col-sm-6  plan price-two wow fadeInDown">
          <div class="heading-two" style="padding:8px;">
            <h2>Plan-I - Web Content Writing</h2>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">100-200 Words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>12 / 806 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                 <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=806&plan=Web Content Writing(100-200)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
  <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="806">
    <input type="hidden" name="package_name" value="Web Content Writing (100-200 Words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                </p>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">200-300 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>18 / 1209 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">2 days</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                  
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1209&plan=Web Content Writing(200-300)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
                  <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1209">
    <input type="hidden" name="package_name" value="Web Content Writing (200-300 words, 2 Days)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">300-500 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>20 / 1344 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">2 days</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1344&plan=Web Content Writing(300-500)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
                
    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1344">
    <input type="hidden" name="package_name" value="Web Content Writing (300-500 words, 2 Days)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
        </div>
        <div class="col-sm-6  plan price-three wow fadeInDown">
          <div class="heading-three" style="padding:8px;">
            <h2>Plan-II - Article Writing</h2>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">100-200 Words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>10 / 672 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                 <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=672&plan=Article Writing(100-200)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="672">
    <input type="hidden" name="package_name" value="Article Writing (100-200 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                </p>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">200-300 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>15 / 1008 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                  
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1008&plan=Article Writing(200-300)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1008">
    <input type="hidden" name="package_name" value="Article Writing (200-300 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p style="color:#000;">300-500 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;"><i class="fa fa-dollar"></i>18 / 1209 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p style="color:#000;">
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1209&plan=Article Writing(300-500)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1209">
    <input type="hidden" name="package_name" value="Article Writing (300-500 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
        </div>
        <div class="col-sm-6  plan price-four wow fadeInDown">
          <div class="heading-four" style="padding:8px;">
            <h2>Plan-III - Press Release Writing</h2>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">100-200 Words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>12 / 806 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                 <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=806&plan=Press Release Writing(100-200)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
                <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="806">
    <input type="hidden" name="package_name" value="Press Release Writing (100-200 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">200-300 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>18 / 1209 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                  
                  <!--<a href="http://www.astechmedia.in/epay/index.php?planCost=1209&plan=Press Release Writing(200-300)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1209">
    <input type="hidden" name="package_name" value="Press Release Writing (200-300 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">300-500 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>20 / 1344 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">1 day</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                  
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1344&plan=Press Release Writing(300-500)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
                <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1344">
    <input type="hidden" name="package_name" value="Press Release Writing (300-500 words, 1 Day)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
        </div>
        <div class="col-sm-6  plan price-one wow fadeInDown">
          <div class="heading-one" style="padding:8px;">
            <h2>Plan-IV - Business Writing</h2>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">100-200 Words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>12 / 806 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">2 days</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                 <!-- <a href="http://www.astechmedia.in/epay/index.php?planCost=806&plan=Business Writing(100-200)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="806">
    <input type="hidden" name="package_name" value="Business Writing (100-200 words, 2 Days)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                
                </p>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">200-300 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>18 / 1209 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">2 days</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                  <!--<a href="http://www.astechmedia.in/epay/index.php?planCost=1209&plan=Business Writing(200-300)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1209">
    <input type="hidden" name="package_name" value="Business Writing (200-300 words, 2 Days)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
          <div class=" pullmt1">
            <div class="col-md-4 col-sm-3 col-xs-3">
              <p  style="color:#000;">300-500 words</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;"><i class="fa fa-dollar"></i>20 / 1344 INR</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-2">
              <p  style="color:#000;">2 days</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <p  style="color:#000;">
                <!--  <a href="http://www.astechmedia.in/epay/index.php?planCost=1344&plan=Business Writing(300-500)Words" target="_blank">
                <input type="button" name="submit" value="order now" class="btn">
                </a>-->
                
                    <form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="1344">
    <input type="hidden" name="package_name" value="Business Writing (300-500 words, 2 Days)">
    
    <button class="btn" type="submit">Order Now</button>
    </form>
                </p> 
            </div>
            <p class="clearfix"></p>
          </div>
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