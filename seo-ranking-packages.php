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
<title>Best SEO Service Delhi,SEO Packages Delhi,SEO Plans delhi</title>
<meta name="description" content="As a best digital marketing company,webkeyindia is providing the best search engine (SEO) ranking packages to its domestic as well as international clients.">
<meta name="keywords" content="Best SEO Service provider in delhi, Top SEO packages Delhi, Best SEO Packages, Affordable SEO Packages, Delhi SEO Packages, Discount SEO Packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$seoRanking_packagesContent="As a best digital marketing company,webkeyindia is providing the best search engine (SEO) ranking packages to its domestic as well as international clients.";
$seoRanking_packagesTitle="SEO Packages Delhi,Custom SEO packages,SEO Plans india";
$seoRanking_packagesContent=substr(strip_tags($seoRanking_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$seoRanking_packagesImage="$site_url/uploaded_files/on-page-seo-services.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$seoRanking_packagesTitle?>" />
<meta property="og:description"        content="<?=$seoRanking_packagesContent?>" />
<meta property="og:image"              content="<?=$seoRanking_packagesImage?>" />

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
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> <img src="images/google-partner.png" class="dsp-ptnr"></div>
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
      <h2>SEO Ranking Packages</h2>
      <p class="lead">As a best digital marketing company, webkeyindia is providing the best search engine (SEO) ranking packages to its domestic as well as international clients.</p>
    </div>
    <div class="pricing-area text-center">
      <div class="row"> 
        
        <!--FIRST PACK-->
        <div class="col-sm-3 plan price-two wow fadeInDown">
          <ul>
            <li class="heading-two">
              <h2>Basic SEO Plan</h2>
              <span><i class="fa fa-dollar"></i>225 - 15,000 INR / 3 Months</span> </li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> <strong>5</strong> Keywords</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> In-depth Site Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Content Duplicacy Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Backlinks Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Penalty Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Competition Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Keyword Research</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Canonicalization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Website Page Load Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Header Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML Code Cleanup & Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Internal link structuring & optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Image & Hyperlink Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Robots.txt Creation/Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML & XML Sitemap</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google & Bing Webmaster Tools</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Title & Meta Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Page Speed Optimization Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sitemap Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Blog Writing <strong>(1)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Informational Article Writing & Submission <strong>(4)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Writing & Submission <strong>(2)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Guest Blog Posting <strong>(1)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Premium PR Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Infographic Creation & Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Social Bookmarking <strong>(5)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Social Bookmarking <strong>(40)</strong></li>
           <!-- <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Business Page Setup</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook & Twitter Account Setup</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Profile Content Writing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Wall Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Updates</li>
         <!--   <li class="ami-price"><i class="fa fa-check clrright"></i> Google + Update</li>-->
            <li class="ami-price"><i class="fa fa-chec clrrightk"></i> Custom Twitter Background</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> SEO Reports</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Activitiy Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Action Plan</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Email/Chat/Online</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> 24/7 Live Project Tracking</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=15000&plan=Basic SEO Plan" target="_blank" class="btn btn-primary">Proceed Now</a> 
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="15000">
    <input type="hidden" name="package_name" value="Basic SEO Plan (3 Months)">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
          </ul>
        </div>
        
        <!--SECOND PACK-->
        <div class="col-sm-3 plan price-three wow fadeInDown"> <img src="<?=$site_url?>/images/ribon_one.png">
          <ul>
            <li class="heading-three">
              <h2>Standard SEO Plan</h2>
              <span><i class="fa fa-dollar"></i>374 - 25,000 INR / 3 Months</span> </li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> <strong>10</strong> Keywords</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> In-depth Site Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Content Duplicacy Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Backlinks Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Penalty Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Competition Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Keyword Research</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Canonicalization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Website Page Load Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Header Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML Code Cleanup & Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Internal link structuring & optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Image & Hyperlink Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Robots.txt Creation/Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML & XML Sitemap</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google & Bing Webmaster Tools</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Title & Meta Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Page Speed Optimization Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sitemap Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Blog Writing <strong>(1)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Informational Article Writing & Submission <strong>(5)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Writing & Submission <strong>(3)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Guest Blog Posting <strong>(1)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Premium PR Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Infographic Creation & Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Social Bookmarking <strong>(10)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Social Bookmarking <strong>(70)</strong></li>
           <!-- <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Business Page Setup</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook & Twitter Account Setup</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Profile Content Writing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Wall Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Updates</li>
          <!--  <li class="ami-price"><i class="fa fa-check clrright"></i> Google + Update</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Custom Twitter Background</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> SEO Reports</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Activitiy Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Action Plan</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Email/Chat/Online</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> 24/7 Live Project Tracking</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=25000&plan=Standard SEO Plan" target="_blank" class="btn btn-primary">Proceed Now</a> 
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="25000">
    <input type="hidden" name="package_name" value="Standard SEO Plan (3 Months)">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
          </ul>
        </div>
        
        <!--THIRD PACK-->
        <div class="col-sm-3 plan price-three wow fadeInDown"> <!--<img src="images/ribon_one.png">-->
          <ul>
            <li class="heading-one">
              <h2>Professional SEO Plan</h2>
              <span><i class="fa fa-dollar"></i>598 - 40,000 INR / 3 Months</span> </li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> <strong>15</strong> Keywords</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> In-depth Site Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Content Duplicacy Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Backlinks Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Penalty Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Competition Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Keyword Research</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Canonicalization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Website Page Load Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Header Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML Code Cleanup & Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Internal link structuring & optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Image & Hyperlink Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Robots.txt Creation/Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML & XML Sitemap</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google & Bing Webmaster Tools</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Title & Meta Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Page Speed Optimization Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sitemap Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Blog Writing <strong>(2)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Informational Article Writing & Submission <strong>(6)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Writing & Submission <strong>(4)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Guest Blog Posting <strong>(2)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Premium PR Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Infographic Creation & Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Social Bookmarking <strong>(20)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Social Bookmarking <strong>(80)</strong></li>
          <!--  <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Business Page Setup</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook & Twitter Account Setup</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Profile Content Writing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Wall Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Updates</li>
          <!--  <li class="ami-price"><i class="fa fa-check clrright"></i> Google + Update</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Custom Twitter Background</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> SEO Reports</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Activitiy Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Action Plan</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Email/Chat/Online</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> 24/7 Live Project Tracking</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=40000&plan=Professional SEO Plan" target="_blank" class="btn btn-primary" style="background:#e24f43">Proceed Now</a> 
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="40000">
    <input type="hidden" name="package_name" value="Professional SEO Plan (3 Months)">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
          </ul>
        </div>
        
        <!--FOURTH PACK-->
        <div class="col-sm-3 plan price-four wow fadeInDown">
          <ul>
            <li class="heading-four">
              <h2>Enterprise SEO Plan</h2>
              <span><i class="fa fa-dollar"></i>748 - 50,000 INR / 3 Months</span> </li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> <strong>20</strong> Keywords</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> In-depth Site Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Content Duplicacy Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Backlinks Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Penalty Check</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Competition Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Initial Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Keyword Research</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Canonicalization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Website Page Load Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Header Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML Code Cleanup & Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Internal link structuring & optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Image & Hyperlink Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Robots.txt Creation/Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> HTML & XML Sitemap</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google & Bing Webmaster Tools</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Title & Meta Tags Optimization</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Page Speed Optimization Analysis</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Sitemap Creation</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Blog Writing <strong>(2)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Informational Article Writing & Submission <strong>(7)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Writing & Submission <strong>(5)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Guest Blog Posting <strong>(3)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Premium PR Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Infographic Creation & Distribution</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Press Release Social Bookmarking <strong>(30)</strong></li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Social Bookmarking <strong>(100)</strong></li>
         <!--   <li class="ami-price"><i class="fa fa-check clrright"></i> Google Plus Business Page Setup</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook & Twitter Account Setup</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Profile Content Writing</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Wall Updates</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Twitter Updates</li>
           <!-- <li class="ami-price"><i class="fa fa-check clrright"></i> Google + Update</li>-->
            <li class="ami-price"><i class="fa fa-check clrright"></i> Custom Twitter Background</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Facebook Timeline Design</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Search Engine Rank Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> SEO Reports</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Google Analytics Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Activitiy Report</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Monthly Action Plan</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> Email/Chat/Online</li>
            <li class="ami-price"><i class="fa fa-check clrright"></i> 24/7 Live Project Tracking</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=50000&plan=Enterprise SEO Plan" target="_blank" class="btn btn-primary">Proceed Now</a> 
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="50000">
    <input type="hidden" name="package_name" value="Enterprise SEO Plan (3 Months)">
    
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