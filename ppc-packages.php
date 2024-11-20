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
<title>PPC Packages india | Pay per Plick Packages | Webkeyindia</title>
<meta name="description" content="Get the best PPC management packages India for your online business and start earning instantly. PPC packages India start from $250 only.">
<meta name="keywords" content="Pay Per Click Advertising Agency, PPC India, PPC Firm India, PPC Services India, PPC Packages, PPC Packages in India, PPC in India, Best PPC Packages, Custom PPC packages Delhi, Affordable PPC Packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$ppc_packagesContent="Get the best PPC management packages India for your online business and start earning instantly. PPC packages India start from $250 only.";
$ppc_packagesTitle="PPC Packages india | Pay per Plick Packages | Webkeyindia";
$ppc_packagesContent=substr(strip_tags($ppc_packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$ppc_packagesImage="$site_url/uploaded_files/ppc-packages.png";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$ppc_packagesTitle?>" />
<meta property="og:description"        content="<?=$ppc_packagesContent?>" />
<meta property="og:image"              content="<?=$ppc_packagesImage?>" />

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
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
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

<section class="pricing-page sectyd">
  <div class="container">
    <div class="center">
      <h2>PPC Packages</h2>
      <p class="lead no-margin">If you are looking for the quality and dictated web promotion including matirialised business enquiries then our quality PPC PACKAGES are perfect for your esteemed organization.</p>
    </div>
    <div class="pricing-area text-center">
      <div class="row">
        <div class="col-sm-4 plan price-two wow fadeInDown">
          <ul>
            <li class="heading-two">
              <h2>Plan-I - Basic</h2>
              <span><i class="fa fa-dollar"></i>250 / 16838 INR</span> </li>
            <li>Any 1 Network Account Set-up <br/>
              (Google Adwords, Microsoft Adcenter, Facebook)</li>
            <li> 100 Keywords</li>
            <li> Text Ads<br>
              <i class="fa fa-check" clrgreen></i></li>
            <li> Banner Ads<br>
              <strong>1</strong></li>
            <li> Landing Page Selection<br>
              <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> GEO Targeting Setup<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Setup Conversion Code <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Competitor Analysis<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> Keyword Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Ad Copy Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Bid Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Landing Page Optimization Consultation</li>
            <li> Landing page design<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> CTR Analysis<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> A/B Testing<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> Keyword Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Bid Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Google Analytics Setup Basic</li>
            <li> Google Adwords Conversion Setup<br>
              <i class="fa fa-cross" style="color:red; font-size:16px;"></i></li>
            <li> Weekly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Monthly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Advanced Reports<br>
              <i class="fa fa-cross" style="color:red; font-size:16px;"></i></li>
            <li> Dedicated Account Manager<br>
              <i class="fa fa-cross" style="color:red; font-size:16px;"></i></li>
            <li> Support<br/>
              Email and Chat</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=16838&plan=PPC Packages" class="btn btn-primary" target="_blank">Proceed Now</a> 
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="16838">
    <input type="hidden" name="package_name" value="Basic PPC Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
          </ul>
        </div>
        <div class="col-sm-4 plan price-three wow fadeInDown"> <!--<img src="images/ribon_one.png">-->
          <ul>
            <li class="heading-three">
              <h2>Plan-II - Standard</h2>
              <span><i class="fa fa-dollar"></i>450 / 30309 INR</span> </li>
            <li>Any 1 Network Account Set-up <br/>
              (Google Adwords, Microsoft Adcenter, Facebook)</li>
            <li> 100 Keywords</li>
            <li> Text Ads<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Banner Ads<br>
              <strong>3</strong></li>
            <li> Landing Page Selection<br>
              <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> GEO Targeting Setup<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Setup Conversion Code <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Competitor Analysis<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Ad Copy Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Bid Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Landing Page Optimization Consultation</li>
            <li> Landing page design<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> CTR Analysis<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> A/B Testing<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> Keyword Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Bid Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Google Analytics Setup Basic</li>
            <li> Google Adwords Conversion Setup<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Weekly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Monthly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Advanced Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Dedicated Account Manager<br>
              <i class="fa fa-close" style="color:red; font-size:16px;"></i></li>
            <li> Support<br/>
              Email and Chat</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=30309&plan=PPC Packages" class="btn btn-primary" target="_blank">Proceed Now</a>
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="30309">
    <input type="hidden" name="package_name" value="Standard PPC Plan">
    
    <button class="btn btn-primary" type="submit">Proceed Now</button>
    </form>
</li>
          </ul>
        </div>
        <div class="col-sm-4 plan price-three wow fadeInDown"> <!--<img src="images/ribon_one.png">-->
          <ul>
            <li class="heading-one">
              <h2>Plan-III - Professional</h2>
              <span><i class="fa fa-dollar"></i>800 / 53883 INR</span> </li>
            <li>All Network Account Set-up <br/>
              (Google Adwords, Microsoft Adcenter, Facebook)</li>
            <li> 100 Keywords</li>
            <li> Text Ads<br>
              <i class="fa fa-check clrgreen"></i> </li>
            <li> Banner Ads<br>
              <strong>5</strong></li>
            <li> Landing Page Selection<br>
              <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> GEO Targeting Setup<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Setup Conversion Code <br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Competitor Analysis<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Ad Copy Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Bid Optimization<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Landing Page Optimization Consultation</li>
            <li> Landing page design<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> CTR Analysis<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> A/B Testing<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Keyword Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Bid Refinements (if required)<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Google Analytics Setup Basic</li>
            <li> Google Adwords Conversion Setup<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Weekly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Monthly Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Advanced Reports<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Dedicated Account Manager<br>
              <i class="fa fa-check clrgreen"></i></li>
            <li> Support<br/>
              Email and Chat</li>
            <li class="plan-action"> 
<!--<a href="http://www.astechmedia.in/epay/index.php?planCost=53883&plan=PPC Packages" class="btn btn-primary" target="_blank" style="background:#e24f43">Proceed Now</a>
-->
<form target="_blank" action="<?=$site_url?>/ccard/index.html" method="post">
    <input type="hidden" name="package_amount" value="53883">
    <input type="hidden" name="package_name" value="Professional PPC Plan">
    
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