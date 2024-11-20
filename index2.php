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

<?php
    include("database.php");
    $loc_slug = $_REQUEST['location_url'] ?? null;

    if ($loc_slug !== null) {
        $loc = "SELECT * FROM `tbl_location` WHERE location_url='$loc_slug'";
        $runloc = mysqli_query($db, $loc) or die("Query Not run");
        $dataloc = mysqli_fetch_assoc($runloc);
        $location = $dataloc["location_name"];
    } else {
        $sqldef = "SELECT * FROM `tbl_admin` WHERE admin_id=1"; 
        $rundef = mysqli_query($db, $sqldef) or die("Query Not run");
        $datadef = mysqli_fetch_assoc($rundef);
        $location = $datadef['admin_city'];
    }
    $meta_title="Best Website Designing company in LOCATION";
    $meta_desc="WebKey is the Best Web Design & Digital Marketing Company in LOCATION, offers internet marketing services like SEO, SMO, PPC, SMM, SEM & ORM in India.";
    $meta_key="best website designing company in LOCATION, website designing company in LOCATION, web development service in LOCATION, best web designing company in india, best website designing agency in LOCATION, best SEO company in LOCATION, SEO company, best search engine optimization company in LOCATION, website development in LOCATION, software development company in LOCATION, web hosting service in LOCATION, website redesign services in LOCATION";
?>
    <title><?= str_replace("LOCATION",$location,$meta_title);?></title>
    <meta name="description" content="<?= str_replace("LOCATION",$location,$meta_desc);?>">
    <meta name="keywords" content="<?= str_replace("LOCATION",$location,$meta_key);?>">




<!--OG Tag Start-->
<?php include 'headlink.php';?>
<?php
$indexContent="WebKeyIndia is the Best Website Designing Company in Delhi Offering Website Development, Application Development, SEO and Digital Marketing Services in Delhi India.";
$indexTitle="Best Website Designing Company in Delhi India";
$indexContent=substr(strip_tags($indexContent),0,300);
$indexImage="https://www.webkeyindia.com/images/logo.png";
$pURL="https://www.webkeyindia.com/";
?>
<meta property="og:url"                content="https://www.webkeyindia.com/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$indexTitle?>" />
<meta property="og:description"        content="<?=$indexContent?>" />
<meta property="og:image"              content="<?=$indexImage?>" />

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


<link href="https://plus.google.com/+WebKeyIndiaNewDelhi/" rel="publisher" />

<link rel="canonical" href="https://www.webkeyindia.com" />
<link rel="author" href="https://plus.google.com/+WebKeyIndiaNewDelhi/"/>
<meta name="msvalidate.01" content="926B22B71B4EDAC816645CC35B88D8CE" />
<meta property="fb:page_id" content="144176935639967" />
<meta name="revisit-after" content="5 days"/>
<meta name="copyright" content="Webkeyindia.com"/>
<meta name="alexaVerifyID" content="vywgGFwQW4ObVC2IKGfF1qhdiuI"/>
<meta name="distribution" content="global"/>
<meta name="language" content="english" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="WebkeyIndia is best website Designing company in Delhi offering Website Development service,Application Development service,SEO service,Web Services in India" />
<meta name="twitter:title" content="Website Designing Company in Delhi,Website Development india" />
<meta name="twitter:site" content="@Webkeyindia" />
<meta name="twitter:image" content="http://www.webkeyindia.com/images/logo.png" />
<meta name="twitter:creator" content="@Webkeyindia" />
<meta name="p:domain_verify" content="5daa4946c0068e02d8c1517ca338c216"/>
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
<!-- SmartMenus core CSS (required) -->
<link href="<?=$site_url?>/amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="<?=$site_url?>/amicss/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- core CSS -->
<link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">

<link href="<?=$site_url?>/css/home.css" rel="stylesheet"> <!-- extr -->
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?=$site_url?>/css1/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?=$site_url?>/css1/fractionslider.css">
<link rel="stylesheet" type="text/css" href="<?=$site_url?>/portfolio_css/style.css" />


<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "LocalBusiness",
"name": "WebKeyIndia",
"url": "https://www.webkeyindia.com/",
"description": "Best Digital Marketing Company in New Delhi India",
"AggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.9",
  "bestRating": "5",
  "ratingCount": "3170"
 }
}
</script>

</head>
<body class="homepage">
    <div class="ex2">
<header id="header" class="no-margin" > 
  
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
          <a class="navbar-brand" href="<?=$site_url?>" style="padding-top:17px;">
              <img src="<?=$site_url?>/images/logo.png" class="img-responsive" alt="Best web designing company in delhi" title="Best web designing company in delhi"></a><img src="images/google-partner.png" class="dsp-ptnr" alt="google Partner"> </div>
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

<div class="slider-wrapper clearfix hidden-xs" style="margin-top:100px;">
  <link rel='stylesheet' id='config-css' href='amislidercss/ts-config.css' type='text/css' media='all'/>
  <link rel='stylesheet' id='styles-css' href='amislidercss/styles.css' type='text/css' media='all'/>
  <div id="wrapper">
    <div id="container_full">
      <div class="ts-slideshow">
        <div class="row">
          <div class="col-sm-12">
            <div id="rev_slider_9_1" class="rev_slider fullwidthabanner">
              <ul>
                <li data-transition="fade" data-slotamount="9" data-masterspeed="300" data-thumb="images/slideshow/slide11.png" data-saveperformance="off" data-title="Slide"> <img src="images/slideshow/slide11.png" alt="Web solution company in delhi" title="Web solution company in delhi" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption tp-fade" data-x="right" data-hoffset="0" data-y="145" data-speed="900" data-start="500" data-easing="easeOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="900" style="z-index: 5;"><img src="images/slideshow/imgslide1.png" alt="Best web Designing Company in Delhi" title="Best Web Designing Company in Delhi" style="height:460px;"> </div>
                  <div class="tp-caption ts-big-caption tp-fade tp-resizeme" data-x="0" data-y="100" data-speed="900" data-start="800" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1700" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">As a Global <span> Digital Marketing Solution </span>Company 
                    <!-- cloud hosting --></div>
                  <div class="tp-caption ts-caption-medium tp-fade tp-resizeme" data-x="0" data-y="160" data-speed="900" data-start="1100" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1700" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">We help to grow your business and help to take it to the next level</div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="220" data-speed="900" data-start="1400" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2100" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> Having 15+ Years Experience </div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="260" data-speed="900" data-start="1700" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2200" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> 10000+ Projects Delivered Successfully </div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="300" data-speed="900" data-start="2000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> 24*7 Live Client Support </div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="340" data-speed="900" data-start="2300" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2400" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> An ISO Certified Organization </div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="380" data-speed="900" data-start="2600" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2500" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> Award Winning Web Designing Comapny </div>
                  <div class="tp-caption ts-caption-small tp-fade tp-resizeme" data-x="0" data-y="420" data-speed="900" data-start="2900" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2600" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i> 5000+ Satisfied Clients From 72 Countries </div>
                  <div class="tp-caption ts-button-slide tp-fade tp-resizeme" data-x="150" data-y="480" data-speed="300" data-start="3200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2700" style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><a href="<?=$site_url?>/about-us.html">More Info</a> </div>
                  <div class="tp-caption ts-price-rev tp-fade tp-resizeme" data-x="0" data-y="470" data-speed="300" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3300" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Ask For <br/>
                    <span style="font-size:20px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">FREE Quote </span> </div>
                </li>
                <li data-transition="fade" data-slotamount="9" data-masterspeed="300" data-thumb="images/slideshow/slide21.png" data-saveperformance="off" data-title="Slide"> <img src="images/slideshow/slide21.png" alt="Online Reputation Management Company" title="Online Reputation Management Company" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption tp-fade" data-x="0" data-y="70" data-speed="900" data-start="500" data-easing="easeOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="900" style="z-index: 5;"><img src="images/slideshow/imgslide2.png" alt="Online Reputation Management Company in Delhi" title="Online Reputation Management Company in Delhi" style="width:500px; margin-top:100px;"> </div>
                  <div class="tp-caption ts-big-caption tp-fade tp-resizeme" data-x="right" data-hoffset="6" data-y="80" data-speed="900" data-start="800" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">We are Specilized in Online <span> Reputation Management</span> </div>
                  <div class="tp-caption ts-caption-medium tp-fade tp-resizeme" data-x="right" data-hoffset="-3" data-y="150" data-speed="900" data-start="1100" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1700" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">As a digital marketing company we infect business with our passion and expertise<br>
                  </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="220" data-speed="900" data-start="1400" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2100" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Online Branding<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="260" data-speed="900" data-start="1700" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2200" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">SEO/SMO/SEM<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="300" data-speed="900" data-start="2000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Adword/PPC<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="340" data-speed="900" data-start="2300" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2800" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">On Page and OFF Page SEO<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="380" data-speed="900" data-start="2600" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3000" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Social Video Sharing and Promotion<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-caption-small-right tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="420" data-speed="900" data-start="2900" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Blog Promotion Services<i class="fa fa-star"></i> </div>
                  <div class="tp-caption ts-button-slide-2 tp-fade tp-resizeme" data-x="right" data-hoffset="0" data-y="470" data-speed="300" data-start="3300" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><a href="<?=$site_url?>/digital-marketing-services.html">More Info</a> </div>
                  <div class="tp-caption ts-price-rev-right tp-fade tp-resizeme" data-x="right" data-hoffset="-151" data-y="460" data-speed="300" data-start="2300" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Ask For <br/>
                    <span style="font-size:20px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">FREE Quote </span> </div>
                </li>
                <li data-transition="fade" data-slotamount="9" data-masterspeed="300" data-thumb="images/f9c22c58.jpg" data-saveperformance="off" data-title="Slide"> <img src="images/f9c22c58.jpg" alt="Digital marketing company in delhi" title="Digital marketing company in delhi" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <div class="tp-caption ts-big-caption-center tp-fade tp-resizeme" data-x="center" data-hoffset="1" data-y="102" data-speed="900" data-start="500" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">We Provide Complete<span> Digital Marketing Solutions</span> </div>
                  <div class="tp-caption ts-caption-medium tp-fade tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-121" data-speed="900" data-start="800" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1700" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Every-thing that we do for our customers happen IN-HOUSE</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="-400" data-y="215" data-speed="900" data-start="1100" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2100" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Website Designing</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="-250" data-y="215" data-speed="900" data-start="1400" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2200" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Web Development</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="-100" data-y="215" data-speed="900" data-start="1700" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Digital Marketing</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="50" data-y="215" data-speed="900" data-start="2000" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2400" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Ecommerce Solution</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="200" data-y="215" data-speed="900" data-start="2300" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2400" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Apps Development</div>
                  <div class="tp-caption ts-caption-small-center tp-fade tp-resizeme" data-x="center" data-hoffset="380" data-y="215" data-speed="900" data-start="2600" data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="2400" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><i class="fa fa-star"></i>Domain-Hosting Solution</div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="-400" data-y="269" data-speed="300" data-start="2900" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3300" style="z-index: 10;"><img src="images/slideshow/icon-slide1.png" alt="Website Designing Company in Delhi" title="Website Designing Company in Delhi"> </div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="-240" data-y="269" data-speed="300" data-start="3300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3600" style="z-index: 11;"><img src="images/slideshow/icon-slide2.png" alt="Website Development Company in Delhi" title="Website Development Company in Delhi"> </div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="-95" data-y="269" data-speed="300" data-start="3600" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="3900" style="z-index: 12;"><img src="images/slideshow/icon-slide3.png" alt="Digital Marketing Company in Delhi" title="Digital Marketing Company in Delhi"> </div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="60" data-y="269" data-speed="300" data-start="3900" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="4200" style="z-index: 13;"><img src="images/slideshow/icon-slide4.png" alt="Ecommerce Solution Company in Delhi" title="Ecommerce Solution Company in Delhi"> </div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="210" data-y="269" data-speed="300" data-start="4200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="4500" style="z-index: 14;"><img src="images/slideshow/icon-slide5.png" alt="Apps Development Company in Delhi" title="Apps Development Company in Delhi"> </div>
                  <div class="tp-caption sfb" data-x="center" data-hoffset="390" data-y="269" data-speed="300" data-start="4500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="4800" style="z-index: 14;"><img src="images/slideshow/icon-slide6.png" alt="Domain Hosting Solution Company in Delhi" title="Domain Hosting Solution Company in Delhi"> </div>
                  <div class="tp-caption ts-button-slide sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="408" data-speed="300" data-start="4800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="5100" style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;"><a href="<?=$site_url?>/services.html">More Info</a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!----tab---> 
      
    </div>
    
    <!-----------dolly--------------> 
    
  </div>
  <script type='text/javascript' src='amisliderjs/jquery.js'></script> 
  <script type='text/javascript' src='amisliderjs/jquery.themepunch.tools.min.js'></script> 
  <script type='text/javascript' src='amisliderjs/jquery.themepunch.revolution.min.js'></script> 
  <script type="text/javascript" src="amisliderjs/slideshow-homepage.js"></script> 
</div>
<!--/#main-slider-->


<section class="no-margin pullpt1 hidden-lg hidden-md hidden-sm visible-xs" style="margin-top:55px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12" style="position:relative;">
      <img src="images/web-banner.jpg" class="img-responsive" style="width:100%; margin-top:-10px;" alt="WebKeyIndia">
      </div>
      <!--/.services--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<section style="padding:0px;">
		    <div class="container">
				   <div class="row">
					    <div class="col-md-12">
							<img src="images/1.jpg" style="width:100%" class="hidden-xs hidden-sm" alt="WebKeyIndia">
								<img src="images/2.jpg" style="width:100%; padding:10px 0px; 10px 0px" class="hidden-lg hidden-md" alt="WebKeyIndia">
					   </div>
				</div>
		   </div>
	   </section>


      <?php
     $query=mysqli_query($db,"SELECT * FROM tbl_country_vishal where id = ".$_GET['id']);
    while($about=mysqli_fetch_assoc($query))
    {
        
  ?>
  
  
  
  

                                     





<section id="feature" class="no-margin pullpt1">
  <div class="container">
    <div class="center  pullmt1 ">
      <h2>"Google Partner Company in India"</h2> <h1 class="amiBlck">Best Web Design & Digital Marketing Company in  <?php echo $about['cntryName'];?> </h1>
      <hr>
      <p class="lead wow fadeInDown"> We are specialized in developing websites that works for the online promotion of your business as a eshop. We've the proven experience and expertise in designing website that succeed by bringing in enquiries, which generate sales and are an asset to your business.</p>
    </div>
    <div class="row">
      <div class="features">
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa fa-inr"></i>
            <h2 >Quality Work in Reasonable Cost</h2>
            <h3>We develop effective quality websites to our clients.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa fa-code"></i>
            <h2>Customized Website Solutions</h2>
            <h3>Specialized in custom website designs and development</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa fa-history"></i>
            <h2>Having 15+ Years Experience</h2>
            <h3>Have well trained experinced website developers</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa  fa-cogs"></i>
            <h2>Updated To Latest Technologies</h2>
            <h3>We use latest technology to develope the websites</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa fa-thumbs-o-up "></i>
            <h2>2500 Websites/Portals Delivered Successfully</h2>
            <h3>Delivered 2500+ websites Successfully on time</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="feature-wrap"> <i class="fa fa-support"></i>
            <h2>24*7 Live Client Support</h2>
            <h3>Provide dedicated support round the clock for all clients</h3>
          </div>
        </div>
        <!--/.col-md-4--> 
      </div>
      <!--/.services--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>


<?php } ?>

<!--/#feature-->
<section class="seobg1 wow fadeIn animated" data-wow-duration="1500ms" data-wow-delay="400ms">
<div class="container">
<h2><strong>SEO Portfolio</strong></h2>
<div class="clear"></div>
<ul class="nav nav-tabs seotab wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="400ms">
<li class="active"><a data-toggle="tab" href="#astrology_seo"><div class="img"><img src="images/seo-icons/Astrology.png" width="37" height="32" alt="Best SEO Company in Delhi, Webkeyindia"/></div><span>Astrology</span></a></li>
<li><a data-toggle="tab" href="#caterers_seo"><div class="img"><img src="images/seo-icons/ambulance.png" width="43" height="39" alt="Best Designing Company in Delhi, Webkeyindia"/></div><span>Ambulance</span></a></li>
<li><a data-toggle="tab" href="#crane_seo"><div class="img"><img src="images/seo-icons/Crane.png" width="42" height="36" alt="Best Development Company in Delhi, Webkeyindia"/></div><span>Crane</span></a></li>
<li><a data-toggle="tab" href="#electronics_seo"><div class="img"><img src="images/seo-icons/Electronics.png" width="35" height="38" alt="Best Local SEO Company in Delhi, Webkeyindia"/></div><span>Electronics</span></a></li>
<li><a data-toggle="tab" href="#elevator_seo"><div class="img"><img src="images/seo-icons/Elevator2.png" width="35" height="38" alt="Best Web Designing Company in Delhi, Webkeyindia"/></div><span>Elevator</span></a></li>
<li><a data-toggle="tab" href="#interior_seo"><div class="img"><img src="images/seo-icons/Interior2.png" width="35" height="38" alt="Best Web Design Company in Delhi, Webkeyindia"/></div><span>Interior</span></a></li>
<li><a data-toggle="tab" href="#pest_seo"><div class="img"><img src="images/seo-icons/Pest-Control.png" width="35" height="38" alt="Best Web Development Company in Delhi, Webkeyindia"/></div><span>Pest Control</span></a></li>
<li><a data-toggle="tab" href="#travel_seo"><div class="img"><img src="images/seo-icons/Travel1.png" width="35" height="38" alt="Web Design Company in Delhi, Webkeyindia"/></div><span>Travel</span></a></li>
</ul>
<div class="clear"></div>
<div class="tab-content tabseo wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="400ms">
<div id="astrology_seo" class="tab-pane fade in active">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/mangaldoshshantiujjain.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Astrology Service provider in ujjain</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Astrology+Service+provider+in+ujjain&oq=Astrology+Service+provider+in+ujjain&aqs=chrome..69i57.655j0j7&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Janampatri Service in madhya pradesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=83EQXbG3GMrbrQGR-bDwBQ&q=Janampatri+Service+in+madhya+pradesh&oq=Janampatri+Service+in+madhya+pradesh&gs_l=psy-ab.3..35i39.20923.20923..21560...0.0..0.167.167.0j1......0....2j1..gws-wiz.......0i71.PM363d0eAWU" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Puja Pandit in madhya pradesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=G3IQXeGWO9n99QO7jKZQ&q=Puja+Pandit+in+madhya+pradesh&oq=Puja+Pandit+in+madhya+pradesh&gs_l=psy-ab.3..0i71l5.0.0..9739...0.0..0.0.0.......0....2..gws-wiz.Asebjj4_iBo" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Service of Janampatri in ujjain</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=G3IQXeGWO9n99QO7jKZQ&q=Service+of+Janampatri+in+ujjain&oq=Service+of+Janampatri+in+ujjain&gs_l=psy-ab.3..35i39.22341.22341..22923...0.0..0.320.320.3-1......0....2j1..gws-wiz.......0i71.6tdJWhov9Ko" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Service provider of Astrology in madhya pradesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=QHIQXZWhA8a-9QOU3LnYCw&q=Service+provider+of+Astrology+in+madhya+pradesh&oq=Service+provider+of+Astrology+in+madhya+pradesh&gs_l=psy-ab.3..35i39.13933.13933..14652...0.0..0.147.147.0j1......0....2j1..gws-wiz.......0i71.pqzq1tOimTI" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Service provider of Jyotish in ujjain</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=UHIQXeeOJpqm9QPis7zoDA&q=Service+provider+of+Jyotish+in+ujjain&oq=Service+provider+of+Jyotish+in+ujjain&gs_l=psy-ab.3..35i39.20723.20723..21313...0.0..0.184.184.0j1......0....2j1..gws-wiz.Kz89h2kLlM0" target="_blank">google.com</a></td>
</tr>

<tr>
<td class="amiTblTD" valign="middle">Jyotish Service provider in ujjain</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=Z3IQXYqBOpn0rAGlqgI&q=Jyotish+Service+provider+in+ujjain&oq=Jyotish+Service+provider+in+ujjain&gs_l=psy-ab.3...25163.25163..25878...0.0..0.242.242.2-1......0....2j1..gws-wiz.......0i71.SwuG4V49H80" target="_blank">google.com</a></td>
</tr>

</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.mangaldoshshantiujjain.com" target="_blank">http://www.mangaldoshshantiujjain.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/haridwartirithpurohit.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Haridwar pandit</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Haridwar%20pandit" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Best Astrologer Haridwar</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Best%20astrologer%20Haridwar" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Best Pandit in Rishikesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Best%20pandit%20in%20rishikesh" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Best Pandit in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Best%20pandit%20in%20uttarakhand" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Mrityu Karma in haridwar</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=Dr0cXNSkIc32rQGrmqTwDQ&q=Mrityu+Karma+in+haridwar&oq=Mrityu+Karma+in+haridwar&gs_l=psy-ab.3...1421618.1421618..1422017...0.0..0.236.236.2-1......0....1j2..gws-wiz.......0i71.iQ9DSuE7noY" target="_blank">google.co.in</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Maa Ganga Pooja services in haridwar</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=ncIcXLm2Gs74rQGFgLeQBQ&q=Maa+Ganga+Pooja+services+in+haridwar&oq=Maa+Ganga+Pooja+services+in+haridwar&gs_l=psy-ab.3...19486.19486..19899...0.0..0.142.142.0j1......0....1j2..gws-wiz.......0i71.5V2cdOFVIwc" target="_blank">google.co.in</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Remedial Ceremonies in rishikesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=ssIcXNuVLpb-rQHcv5PYBw&q=Remedial+Ceremonies+in+rishikesh&oq=Remedial+Ceremonies+in+rishikesh&gs_l=psy-ab.3...15963.15963..16345...0.0..0.163.163.0j1......0....1j2..gws-wiz.......0i71.PkTe3uwl9bw" target="_blank">google.co.in</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.haridwartirithpurohit.com" target="_blank">http://www.haridwartirithpurohit.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="caterers_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/sankatmochanambulance.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Ac Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Ac+Ambulance+in+Chhattisgarh&oq=Ac+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.319j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Bolero Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Bolero+Ambulance+in+Chhattisgarh&oq=Bolero+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.543j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Critical Care Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Critical+Care+Ambulance+in+Chhattisgarh&oq=Critical+Care+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.415j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Echo Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Echo+Ambulance+in+Chhattisgarh&oq=Echo+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.335j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Freezer Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Freezer+Ambulance+in+Chhattisgarh&oq=Freezer+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.415j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Ice Box Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Ice+Box+Ambulance+in+Chhattisgarh&oq=Ice+Box+Ambulance+in+Chhattisgarh&aqs=chrome..69i57.367j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Innova Ambulance in Chhattisgarh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=Z84hXLbJKNKoyAOIl6SYBg&q=Innova+Ambulance+in+Chhattisgarh&oq=Innova+Ambulance+in+Chhattisgarh&gs_l=psy-ab.3...557934.557934..558253...0.0..0.187.187.0j1......0....1j2..gws-wiz.......0i71.BAuZZQ08xk0" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.sankatmochanambulance.com" target="_blank">http://www.sankatmochanambulance.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/naveenambulance.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">24x7 Ambulance Hearse</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=24x7+Ambulance+Hearse&oq=24x7+Ambulance+Hearse&aqs=chrome..69i57.616j0j4&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">AC and Non AC Ambulance Services in Bhopal</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=RXMQXYvELMqo9QOJt7a4Aw&q=AC+and+Non+AC+Ambulance+Services+in+Bhopal&oq=AC+and+Non+AC+Ambulance+Services+in+Bhopal&gs_l=psy-ab.3..35i39.23051.23051..23728...0.0..0.188.188.0j1......0....2j1..gws-wiz.......0i71.BVwhrJ43Jqs" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Accident Care Ambulance Services in Madhya Pradesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=X3MQXcfiLIi-9QPF2b6IDw&q=Accident+Care+Ambulance+Services+in+Madhya+Pradesh&oq=Accident+Care+Ambulance+Services+in+Madhya+Pradesh&gs_l=psy-ab.3..35i39.31688.31688..32302...0.0..0.342.342.3-1......0....2j1..gws-wiz.i49Pm6Nzg5M" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Body Freezer Box Ambulance Services in Bhopal</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=gnMQXdyJEMmw9QODw6HoDw&q=Body+Freezer+Box+Ambulance+Services+in+Bhopal&oq=Body+Freezer+Box+Ambulance+Services+in+Bhopal&gs_l=psy-ab.3..35i39.93101.93101..93796...0.0..0.311.311.3-1......0....2j1..gws-wiz.......0i71.uWYude8sWyo" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Cardiac Care Ambulance Services in Bhopal</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=4XMQXYC9K4i5rQGi3beQCA&q=Cardiac+Care+Ambulance+Services+in+Bhopal&oq=Cardiac+Care+Ambulance+Services+in+Bhopal&gs_l=psy-ab.3...15083.15083..15598...0.0..0.0.0.......0....2j1..gws-wiz.S9_UqtvMd6A" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Oxygen System Ambulance Services in Bhopal</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=8nMQXfGDL9uH9QPP7rjwBw&q=Oxygen+System+Ambulance+Services+in+Bhopal&oq=Oxygen+System+Ambulance+Services+in+Bhopal&gs_l=psy-ab.3..35i39.20330.20330..20983...0.0..0.393.393.3-1......0....2j1..gws-wiz.......0i71.NeYZGHpcd1A" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Ventilator Ambulance Services in Bhopal</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=CXQQXdHcMY70rQH00qKoDw&q=Ventilator+Ambulance+Services+in+Bhopal&oq=Ventilator+Ambulance+Services+in+Bhopal&gs_l=psy-ab.3..0i71l2.18432.18432..18981...0.0..0.0.0.......0....2j1..gws-wiz.VQdy_BGbqmc" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.naveenambulance.com" target="_blank">http://www.naveenambulance.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="crane_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/garima-crane-service.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Underlift Crane</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Underlift%20Crane" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Underlift Crane Services</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Underlift%20Crane%20services" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Underlift Crane in india</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Underlift%20Crane%20in%20india" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Underlift Crane in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Underlift%20Crane%20in%20rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Sky Lift Crane in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Sky%20Lift%20Crane%20in%20rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Sky Lift Crane Services in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Sky%20Lift%20Crane%20services%20in%20rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Safety Crane in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Safety%20Crane%20in%20rajasthan" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.garimacranes.com" target="_blank">http://www.garimacranes.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/billu-crane.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Bolero Recovery Van</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Bolero%20Recovery%20Van" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Motorcycle Recovery Van in india</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Motorcycle%20Recovery%20Van%20in%20india" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Recovery Van in Haryana</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Recovery%20Van%20in%20haryana" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Recovery Van Services in Haryana</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Recovery%20Van%20services%20in%20haryana" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Zero Degree Crane</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Zero%20Degree%20Crane" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Zero Degree Crane in India</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Zero%20Degree%20Crane%20in%20India" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Zero Degree Crane Services</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Zero%20Degree%20Crane%20Services" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.billucraneservice.com" target="_blank">http://www.billucraneservice.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="electronics_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/nicecoolingcare.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Ac Installation services in guwahati</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=H3UQXYvXKJffrQG6vJGICA&q=Ac+Installation+services+in+guwahati&oq=Ac+Installation+services+in+guwahati&gs_l=psy-ab.3..35i39.67627.67627..68241...0.0..0.236.236.2-1......0....2j1..gws-wiz.......0i71.2rl4_wIM1EA" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Ac Repair Services in assam</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=ZXUQXZP_Lpn59QPCuLDoCg&q=Ac+Repair+Services+in+assam&oq=Ac+Repair+Services+in+assam&gs_l=psy-ab.3..35i39j0i22i30.26660.26660..27251...0.0..0.167.167.0j1......0....2j1..gws-wiz.......0i71.Xkm8mV2LbGc" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Cassette Ac Repair and Services in assam</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=gnUQXdiVMNK89QPC9LKYBA&q=Cassette+Ac+Repair+and+Services+in+assam&oq=Cassette+Ac+Repair+and+Services+in+assam&gs_l=psy-ab.3..35i39.17103.17103..17701...0.0..0.135.135.0j1......0....2j1..gws-wiz.......0i71.Lk3VJcDl8Io" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Service of Refrigerator Repair in assam</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=lnUQXb_8EsKw9QOt46yoDA&q=Service+of+Refrigerator+Repair+in+assam&oq=Service+of+Refrigerator+Repair+in+assam&gs_l=psy-ab.3..35i39.31734.31734..32349...0.0..0.196.196.0j1......0....2j1..gws-wiz.......0i71.fma5jjx2YAQ" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Service provider of Plant Ac Repair</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=uHUQXd-nDZee9QPCuLmABg&q=Service+provider+of+Plant+Ac+Repair&oq=Service+provider+of+Plant+Ac+Repair&gs_l=psy-ab.3..35i39.14367.14367..14981...0.0..0.146.146.0j1......0....2j1..gws-wiz.hKYVngePOUw" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Tower Ac Repair And Service</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=yHUQXbbqLZL-9QPPvam4Cg&q=Tower+Ac+Repair+And+Service&oq=Tower+Ac+Repair+And+Service&gs_l=psy-ab.3..35i39.19517.19517..20147...0.0..0.175.175.0j1......0....2j1..gws-wiz.r2yq_nZcOBo" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Window Ac Repair And Services in assam</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=3nUQXd3fIpL1rQHx5ZgQ&q=Window+Ac+Repair+And+Services+in+assam&oq=Window+Ac+Repair+And+Services+in+assam&gs_l=psy-ab.3...33459.33459..34056...0.0..0.207.207.2-1......0....2j1..gws-wiz.......0i71.jGLGnr6tmbY" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.nicecoolingcare.com" target="_blank">http://www.nicecoolingcare.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/ssrefrigeration.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">D Freezer Repairing in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=D+Freezer+Repairing+in+gonda&oq=D+Freezer+Repairing+in+gonda&aqs=chrome..69i57j69i64.584j0j4&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Dealer of IFB in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=bnYQXfvcAcm7rQGaiZKYAQ&q=Dealer+of+IFB+in+gonda&oq=Dealer+of+IFB+in+gonda&gs_l=psy-ab.3...20606.20606..21186...0.0..0.289.289.2-1......0....2j1..gws-wiz.......0i71.wW2g4osEcLw" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Refrigerator Repairing in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=hXYQXY3fD9mf9QOA1prYBQ&q=Refrigerator+Repairing+in+gonda&oq=Refrigerator+Repairing+in+gonda&gs_l=psy-ab.3...14707.14707..15304...0.0..0.207.207.2-1......0....2j1..gws-wiz.CjQsw41OhfY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">service provider of AC Repairing in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=lnYQXbTeE822rQHSl7vgAQ&q=service+provider+of+AC+Repairing+in+gonda&oq=service+provider+of+AC+Repairing+in+gonda&gs_l=psy-ab.3...23837.23837..24506...0.0..0.213.213.2-1......0....2j1..gws-wiz.DAVtJpWelDU" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">service provider of RO Repairing in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=sHYQXbm-M9L0rAHKzpaADA&q=service+provider+of+RO+Repairing+in+gonda&oq=service+provider+of+RO+Repairing+in+gonda&gs_l=psy-ab.3...19845.19845..20450...0.0..0.262.262.2-1......0....2j1..gws-wiz.......0i71.zB0HJOY2fv4" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">services of AC Installation in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=6HYQXYreNof6rQHBpJWwBw&q=services+of+AC+Installation+in+gonda&oq=services+of+AC+Installation+in+gonda&gs_l=psy-ab.3...0.0..4124...0.0..0.0.0.......0......gws-wiz.SXtDaam4UPY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Water Cooler Repairing in gonda</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=6HYQXYreNof6rQHBpJWwBw&q=Water+Cooler+Repairing+in+gonda&oq=Water+Cooler+Repairing+in+gonda&gs_l=psy-ab.3..33i160.18053.18053..18611...0.0..0.386.386.3-1......0....2j1..gws-wiz.61QOCKSLQVo" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.ssrefrigeration.co.in" target="_blank">http://www.ssrefrigeration.co.in</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="elevator_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/shivangi-enterprises.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Auto Door Capsule Elevator</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Auto%20Door%20Capsule%20Elevator" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Home Lift in gujarat</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Home+Lift+in+gujarat&spell=1&sa=X&ved=0ahUKEwid0vvYiLPfAhUWXSsKHSBKDMYQBQgrKAA&biw=1360&bih=626" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Auto Door Glass Elevator</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Auto%20Door%20Glass%20Elevator" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Hydraulic Auto Door Lift</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Hydraulic%20Auto%20Door%20Lift" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Capsule Lift manufacturer in Gujarat</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Capsule%20Lift%20manufacturer%20in%20gujarat" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Car lift in Gujarat</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=car+lift+ingujrat&oq=car+lift+ingujrat&aqs=chrome..69i57j33.5839j0j4&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Glass Lift in Gujarat</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Glass%20Lift%20in%20gujarat" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.shivangienterprises.co.in" target="_blank">http://www.shivangienterprises.co.in</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/starelevators.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Commercial Elevator in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Commercial%20Elevator%20in%20Rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Glass Elevator in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Glass%20Elevator%20in%20Rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Home Elevator in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=6v0dXMPqO4XgrQHMobqoCw&q=Home+Elevator+in+Rajasthan&oq=Home+Elevator+in+Rajasthan&gs_l=psy-ab.3..33i22i29i30l2.4061.9102..9422...1.0..0.172.1444.0j10......0....1..gws-wiz.......0i22i30.Y_k8L5CmUSA" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Mrl Lift in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Mrl%20Lift%20in%20Rajasthan" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Residential Elevator in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=R_4dXOesI9j0rAGy9Z2QDw&q=Residential+Elevator+in+Rajasthan&oq=Residential+Elevator+in+Rajasthan&gs_l=psy-ab.3...3714.5907..6162...0.0..0.218.1351.0j8j1......0....1..gws-wiz.......0i22i30j33i22i29i30.fuDXoVR5KaY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Passenger Elevator in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=Yf4dXNSaFc27rQGJ8pMg&q=Passenger+Elevator+in+Rajasthan&oq=Passenger+Elevator+in+Rajasthan&gs_l=psy-ab.3...4385.6561..6833...0.0..0.166.1263.0j9......0....1..gws-wiz.......33i22i29i30.C-fTi5H6qXA" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Best Capsule Lift in Rajasthan</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=uP4dXLbIEZOkyAPI3pCAAQ&q=best+Capsule+Lift+in+Rajasthan&oq=best+Capsule+Lift+in+Rajasthan&gs_l=psy-ab.3...2990.3982..4302...0.0..1.428.982.0j2j0j1j1......0....1..gws-wiz.......0i71.cZ7FUs1pilo" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.starelevators.co.in" target="_blank">http://www.starelevators.co.in</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="interior_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/brmarketingindia.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Awnings Dealer in Noida</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Awnings+Dealer+in+Noida&oq=Awnings+Dealer+in+Noida&aqs=chrome..69i57.687j0j4&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Car Parking Awnings in sadarpur</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=rnkQXYfyIMT8rQG7mYS4CQ&q=Car+Parking+Awnings+in+sadarpur&oq=Car+Parking+Awnings+in+sadarpur&gs_l=psy-ab.3...27977.27977..28557...0.0..0.342.342.3-1......0....2j1..gws-wiz.......0i71.ye961pWbM4E" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Drop Arm Awnings in Uttar Pradesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=-3kQXeDBL5n0rAGlqgI&q=Drop+Arm+Awnings+in+Uttar+Pradesh&oq=Drop+Arm+Awnings+in+Uttar+Pradesh&gs_l=psy-ab.3..0i71l8.0.0..65366...0.0..0.0.0.......0......gws-wiz.opVgY_ioUkU" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Drop Awnings Dealer in Noida</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=-3kQXeDBL5n0rAGlqgI&q=Drop+Awnings+Dealer+in+Noida&oq=Drop+Awnings+Dealer+in+Noida&gs_l=psy-ab.3..33i22i29i30.24079.24079..24679...0.0..0.170.170.0j1......0....2j1..gws-wiz.......0i71.beoU1LOqvuU" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Fixed Awnings in Sadarpur</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=WnoQXb-GF9WCyAOW363YDQ&q=Fixed+Awnings+in+Sadarpur&oq=Fixed+Awnings+in+Sadarpur&gs_l=psy-ab.3...22055.22055..22732...0.0..0.211.211.2-1......0....2j1..gws-wiz.......0i71.lcmOLa6Fzdw" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Fixed Structure Awnings in Noida</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=c3oQXYrIEJqoyAP9sKbACg&q=Fixed+Structure+Awnings+in+Noida&oq=Fixed+Structure+Awnings+in+Noida&gs_l=psy-ab.3...18439.18439..19172...0.0..0.209.209.2-1......0....2j1..gws-wiz.dx3_Ab2OOH4" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Garden Umbrella Awnings in Noida</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=iHoQXcrJBZeS9QOKmoHwBg&q=Garden+Umbrella+Awnings+in+Noida&oq=Garden+Umbrella+Awnings+in+Noida&gs_l=psy-ab.3...77019.77019..77607...0.0..0.216.216.2-1......0....2j1..gws-wiz.......0i71.G8zN4V8ol8c" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.brmarketingindia.com" target="_blank">http://www.brmarketingindia.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/semi.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Blue Carnelian Slab</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=kRIeXOr3I8G5rQHZzov4BQ&q=Blue+Carnelian+Slab&oq=Blue+Carnelian+Slab&gs_l=psy-ab.3..35i39.54968.54968..55352...0.0..0.274.274.2-1......0....1j2..gws-wiz.......0i71.igixuPFL9qY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Agate Stone Slabs</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=AGATE%20SLABS%20exporter" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Agate Slabs exporter</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=6v0dXMPqO4XgrQHMobqoCw&q=Home+Elevator+in+Rajasthan&oq=Home+Elevator+in+Rajasthan&gs_l=psy-ab.3..33i22i29i30l2.4061.9102..9422...1.0..0.172.1444.0j10......0....1..gws-wiz.......0i22i30.Y_k8L5CmUSA" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Apatite Slab in india</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Apatite%20Slab%20in%20india" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Apatite Slab exporter</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?ei=LRMeXOmsAo-GyAPFu7X4Cg&q=Apatite+Slab+exporter&oq=Apatite+Slab+exporter&gs_l=psy-ab.3..33i160.2928.4911..5297...0.0..0.246.1357.0j8j1......0....1..gws-wiz.......0i71j35i39j0i22i30j33i21.DVZOG3PIIS8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Black Jasper Slab exporter</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Black%20Jasper%20Slab%20exporter" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Cherry Quartz Slab</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Cherry%20Quartz%20Slab" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.semipreciousslab.com" target="_blank">http://www.semipreciousslab.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="pest_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/oraclepestcontrol.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Fogging in chirag delhi</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=AI8QXa7TB4Td9QP9pLbgAw&q=Fogging+in+chirag+delhi&oq=Fogging+in+chirag+delhi&gs_l=psy-ab.3..35i39j0i22i30.37823.37823..38581...0.0..0.145.145.0j1......0....2j1..gws-wiz.......0i71.jmkCH67EloE" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Garden Treatment service provider in delhi</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=KI8QXZe2JNTZrQHnrJ2IDg&q=Garden+Treatment+service+provider+in+delhi&oq=Garden+Treatment+service+provider+in+delhi&gs_l=psy-ab.3..35i39.28619.28619..29225...0.0..0.165.165.0j1......0....2j1..gws-wiz.c3I14YFSCIY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Pre Construction Anti Termite Treatment in chirag delhi</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=SI8QXZC0BZWvyAOMgJSABA&q=Pre+Construction+Anti+Termite+Treatment+in+chirag+delhi&oq=Pre+Construction+Anti+Termite+Treatment+in+chirag+delhi&gs_l=psy-ab.3..35i39.15408.15408..15975...0.0..0.226.226.2-1......0....2j1..gws-wiz.......0i71.T3TRuNpjnQc" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Rats and Rodent Control in chirag delhi</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=WY8QXaGCM9Sb9QP8l4qoCQ&q=Rats+and+Rodent+Control+in+chirag+delhi&oq=Rats+and+Rodent+Control+in+chirag+delhi&gs_l=psy-ab.3..35i39.21230.21230..21820...0.0..0.189.189.0j1......0....2j1..gws-wiz.TmnNJ_TRHEs" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">service provider of Fogging in lajpat nagar</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=so4QXcv7EYOkyAPB266ABg&q=service+provider+of+Fogging+in+lajpat+nagar&oq=service+provider+of+Fogging+in+lajpat+nagar&gs_l=psy-ab.3..35i39.48365.48365..48979...0.0..0.143.143.0j1......0....2j1..gws-wiz.......0i71.G12bd08ha_4" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">services of Garden Treatment in lajpat nagar</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=8I4QXeC4Bc26rQG76aq4Ag&q=services+of+Garden+Treatment+in+lajpat+nagar&oq=services+of+Garden+Treatment+in+lajpat+nagar&gs_l=psy-ab.3..35i39.17403.17403..18066...0.0..0.383.383.3-1......0....2j1..gws-wiz.Uk-LO_DYI9M" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">service provider of General Pest Control in chirag delhi</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=AI8QXa7TB4Td9QP9pLbgAw&q=service+provider+of+General+Pest+Control+in+chirag+delhi&oq=service+provider+of+General+Pest+Control+in+chirag+delhi&gs_l=psy-ab.3...23305.23305..24317...0.0..0.256.256.2-1......0....2j1..gws-wiz.......0i71.Yjnp1DrlRac" target="_blank">google.com</a></td>
</tr>

</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.oraclepestcontrol.com" target="_blank">http://www.oraclepestcontrol.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/termokil.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Anti Termite Treatment Service in Dehradun</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Anti%20Termite%20Treatment%20Service%20in%20Dehradun" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Anti Termite Treatment Service in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Anti%20Termite%20Treatment%20Service%20in%20Uttarakhand" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Carpet Beetles Pest Control Services in Dehradun</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Carpet%20Beetles%20Pest%20Control%20Services%20in%20Dehradun" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Carpet Beetles Pest Control Services in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Carpet%20Beetles%20Pest%20Control%20Services%20in%20Uttarakhand" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Flies Pest Control Services in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Flies%20Pest%20Control%20Services%20in%20Uttarakhand" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Mosquitoes Pest Control Services in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Mosquitoes%20Pest%20Control%20Services%20in%20Uttarakhand" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Rodents Pest Control Services in Uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Rodents%20Pest%20Control%20Services%20in%20Uttarakhand" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.termokil.in" target="_blank">http://www.termokil.in</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div id="travel_seo" class="tab-pane fade">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/indiatourismincredible.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Delhi darshan tour by ac bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Delhi%20darshan%20tour%20by%20ac%20bus" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Delhi sightseeing by luxury bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Delhi+sightseeing+tour+by+luxury+bus&oq=Delhi+sightseeing+tour+by+luxury+bus&aqs=chrome..69i57j69i60.479j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Delhi to agra same day tour by luxury bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.co.in/search?q=Delhi%20to%20agra%20same%20day%20tour%20by%20luxury%20bus" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Delhi city tour by luxury bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=PsshXJDmN4e4rQHkqb6wBA&q=Delhi+city+tour+by+luxury+bus&oq=Delhi+city+tour+by+luxury+bus&gs_l=psy-ab.3...6622.6622..6878...0.0..0.131.131.0j1......0....1..gws-wiz.......0i71.fs91RaZ23L4" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Same day rishikesh tour by ac bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=08shXO7YMYiy9QPe74O4BQ&q=Same+day+rishikesh+tour+by+ac+bus&oq=Same+day+rishikesh+tour+by+ac+bus&gs_l=psy-ab.3...8928.8928..9168...0.0..0.130.130.0j1......0....1..gws-wiz.......0i71.iwdJnkoMdX8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Delhi city tour by ac bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=PsshXJDmN4e4rQHkqb6wBA&q=Delhi+city+tour+by+ac+bus&oq=Delhi+city+tour+by+ac+bus&gs_l=psy-ab.3..0i22i30l2.26449.26449..26976...0.0..0.146.146.0j1......0....1j2..gws-wiz.......0i71.qcQ6BbrSyrk" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Jaipur tour same day by luxury bus</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Jaipur+tour+same+day+by+luxury+bus&oq=Jaipur+tour+same+day+by+luxury+bus&aqs=chrome..69i57.255j0j9&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="https://www.indiatourismincredible.com" target="_blank">https://www.indiatourismincredible.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="seoport">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
<img src="images/seo-icons/raftingpackagesinrishikesh.png" class="responsive-img" alt="SEO Portfolio" style="height:55px"/>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright">
<table width="100%" border="1" align="left" style="border:1px solid #d0d0d0; border-collapse:collapse;">
<tr>
<td class="amiTblTH1">Keyword</td>
<td class="amiTblTH">Ranking</td>
<td class="amiTblTH">Search Engine</td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Body Surfing service provider</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?q=Body+Surfing+service+provider&oq=Body+Surfing+service+provider&aqs=chrome..69i57j33.695j0j4&sourceid=chrome&ie=UTF-8" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Bungee Jumping services in uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=n5AQXcalK5qoyAP9sKbACg&q=Bungee+Jumping+services+in+uttarakhand&oq=Bungee+Jumping+services+in+uttarakhand&gs_l=psy-ab.3..33i22i29i30.19734.19734..20373...0.0..0.162.162.0j1......0....2j1..gws-wiz.......0i71.bfgky2vBPaE" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Cliff Jumping services</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=tZAQXa7bPNP5rQGg3YDwBw&q=Cliff+Jumping+services&oq=Cliff+Jumping+services&gs_l=psy-ab.3...14759.14759..15397...0.0..0.214.214.2-1......0....2j1..gws-wiz.......0i71.NvZMoLZmHsY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Flying Fox service provider in uttarakhand</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=x5AQXdDiDcjerQHvi4mYBQ&q=Flying+Fox+service+provider+in+uttarakhand&oq=Flying+Fox+service+provider+in+uttarakhand&gs_l=psy-ab.3..0i71l8.29300.29300..29889...0.0..0.0.0.......0....2j1..gws-wiz.oApOePPpYkY" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Jungle Camping service provider</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=5pAQXfeJKI_-9QPWsYXwDQ&q=Jungle+Camping+service+provider&oq=Jungle+Camping+service+provider&gs_l=psy-ab.3..33i160l2.26120.26120..26766...0.0..0.218.218.2-1......0....2j1..gws-wiz.......0i71.AiI_lj-P8Bc" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">Paint Ball service provider in rishikesh</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=A5EQXZacK42v9QP8j5LoAg&q=Paint+Ball+service+provider+in+rishikesh&oq=Paint+Ball+service+provider+in+rishikesh&gs_l=psy-ab.3...15252.15252..15850...0.0..0.256.256.2-1......0....2j1..gws-wiz.......0i71.40Q8AU9joxU" target="_blank">google.com</a></td>
</tr>
<tr>
<td class="amiTblTD" valign="middle">service provider of Luxury Camping</td>
<td valign="middle" class="amiTblTD1">1st Page</td>
<td valign="middle" class="amiTblTD1">
<a href="https://www.google.com/search?ei=FZEQXfL7EIf9rQHh8KuYBQ&q=service+provider+of+Luxury+Camping&oq=service+provider+of+Luxury+Camping&gs_l=psy-ab.3..33i160.42044.42044..42716...0.0..0.220.220.2-1......0....2j1..gws-wiz.......0i71.aR_DtTr9FBM" target="_blank">google.com</a></td>
</tr>
</table>
</div>
<div class="clear"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pleft pright seoname">
Astech Media (P) Limited (<a href="http://www.raftingpackagesinrishikesh.com" target="_blank">http://www.raftingpackagesinrishikesh.com</a>)
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section style="padding-top:20px !important">
<div class="container text-center">
<h2 style="font-size:40px !important; color:#000;"><strong>Outstanding Reviews</strong></h2>
<div class="clear"></div>

                <div class="col-md-4"><a href="#">
                                    <img src="images/googlerating-1.png" alt="google rating">
                                </a></div>
                        <div class="col-md-4"><a href="#">
                                    <img src="images/justdialrating-3.png" alt="justdial rating">
                                </a></div>    
                                <div class="col-md-4"><a href="#">
                                    <img src="images/facebookrating-2.png" alt="facebok rating">
                                </a></div>    
                    </div>
</section>
<section id="services" class="service-item no-margin pullpt" style="padding:50px 0 30px 0;">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>We offer complete professional web & digital marketing solutions</h2>
      <p class="lead">As a website design company we offer a full-circle approach in responsive website designing and web development services. Our website designing services covers strategic planning, business intelligence, creative, application development, digital marketing, seo services and e-commerce solutions.</p>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <div class="media services-wrap wow fadeInDown pull-clr">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/web-services.png" alt="Best Website Designing Company in Delhi" title="Best Website Designing Company in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/website-designing-services.html">Website Designing Services</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/mobile-responsive-web-designs-service.html">Responsive Web Designs</a> <a href="<?=$site_url?>/dynamic-website-designing.html">Dynamic Website</a> <a href="<?=$site_url?>/custom-website-designing-service.html">Custom Website </a> <a href="<?=$site_url?>/website-designing-packages.html">Website Designing Packages </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr1">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/app-services.png" alt="Mobile Apps Development in Delhi" title="Mobile Apps Development in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/mobile-application-development.html">Mobile Apps Development</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/iphone-ios-application-development-services.html">IOS Application Development</a> <a href="<?=$site_url?>/android-apps-development.html">Android Apps Development</a> <a href="<?=$site_url?>/windows-apps-development.html">Windows Apps Development </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr2">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/e-commerce-development.png" alt="E-Commerce Web Development in Delhi" title="E-Commerce Web Development in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/ecommerce-web-development.html">E-Commerce Web Development</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/ecommerce-website-development.html">e-commerce Website Development</a> <a href="<?=$site_url?>/ecommerce-portal-development.html">eCommerce Portal Development</a> <a href="<?=$site_url?>/opencart-ecommerce-web-development-services.html">OpenCart </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr3">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/cms-development.png" alt="CMS Website Development in Delhi" title="CMS Website Development in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/cms-website-development-services.html">CMS Website Development</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/wordpress-website-development.html">Wordpress Website Development</a> <a href="<?=$site_url?>/joomla-custom-development.html">Joomla Custom Development </a> <a href="<?=$site_url?>/magento-development-services.html">Magento development services</a> <a href="<?=$site_url?>/durpal-development-service.html">Durpal Development Service</a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr4">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/web-portal-developement.png" alt="Web Portal Development in Delhi" title="Web Portal Development in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/web-portal-development.html">Web Portal Development</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/b2b-portal-development.html">B2B Portal Development</a> <a href="<?=$site_url?>/b2c-portal-development.html">B2C Portal Development </a> <a href="<?=$site_url?>/travel-portal-development.html">Travel Portal Development</a> <a href="<?=$site_url?>/recharge-portal-development.html">Recharge Portal Development </a> <a href="<?=$site_url?>/job-portal-development-services.html">Jobs Portal </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr5">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/software-development.png" alt="Software Development Services in Delhi" title="Software Development Services in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/software-development-services.html">Software Development Services</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/erp-software-development.html">ERP Software Development</a> <a href="<?=$site_url?>/crm-software-development-services.html">CRM Software Development</a> <a href="<?=$site_url?>/custom-software-development-services.html">Custom Software Development </a> <a href="<?=$site_url?>/school-management-software.html">School Management Software </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr6">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/search-engine-optimization.png" alt="Digital Marketing Services in Delhi" title="Digital Marketing Services in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/digital-marketing-services.html">Digital Marketing Services</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/seo-services.html">SEO Services </a><a href="<?=$site_url?>/seo-ranking-packages.html">SEO Packages </a> <a href="<?=$site_url?>/ppc-services.html">PPC Services</a> <a href="<?=$site_url?>/ppc-packages.html">PPC Packages </a> <a href="<?=$site_url?>/online-branding-reputation-management-services.html">Online Reputation Management </a> <a href="<?=$site_url?>/online-branding-reputation-management-services.html">Online Brand Promotion </a> <a href="<?=$site_url?>/local-seo-services.html">Local SEO Service </a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr7 ">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/social-medai-optimazation.png" alt="Social Media Optimization in Delhi" title="Social Media Optimization in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/social-media-optimization.html">Social Media Optimization</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/social-media-page-creation.html">Social Media Page Creation</a> <a href="<?=$site_url?>/smo-packages.html">SMO Packages</a> <a href="<?=$site_url?>/social-video-promotion.html">Social Video Promotion</a> <a href="<?=$site_url?>/facebook-business-page-management-services.html">Facebook Page Promotion</a> <a href="<?=$site_url?>/linkedin-business-page-management-services.html"> LinkedIN Page Management</a> </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr8 ">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/bulk-sms.png" alt="Bulk SMS Solutions in Delhi" title="Bulk SMS Solutions in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/bulk-sms-solutions.html">Bulk SMS Solutions</a></h3>
            <p class="white-clr"><a href="<?=$site_url?>/promotional-bulk-sms.html">Promotional Bulk SMS</a> <a href="<?=$site_url?>/bulk-sms-software.html">Bulk SMS Software</a> <a href="<?=$site_url?>/bulk-sms-packages.html">Bulk SMS Packages </a> <a href="<?=$site_url?>/resale-bulk-sms.html">Resale Bulk SMS </a> <a href="<?=$site_url?>/email-marketing-services.html">Email Marketing </a> <a href="<?=$site_url?>/bulk-sms-packages.html">Transactionl Bulk SMS Packages </a> </p>
          </div>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<?php include("home-packages.php");?>
<section id="process-bgclr" style="margin:0 !important; padding-top:40px; padding-bottom:20px;" class="no-margin wow fadeInDown">
  <div class="center" style="padding:0 !important;">
    <h2 class="white-clr">Our process involved in delivering best quality website design services</h2>
    <p class="lead container  white-clr">We as best website designg firm in India use the quality procees to ensure the delevery of website to our clients including good planing, designing and testing.  Most of our time goes in understanding your business objectives and then defining the problem and finally design the best website for your company.</p>
  </div>
  <div class="container">
    <div class="wow fadeInDown">
      <div class="row">
          <div class="col-md-1"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <h3  class=" white-clr">Planing</h3>
          <div align="center" class="workimg-circle " >
            <p><img src="<?=$site_url?>/images/services/planing.png" class="img-responsive" alt="Planing" title="Planing"></p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <h3  class=" white-clr ">Design</h3>
          <div align="center" class="workimg-circle " >
            <p><img src="<?=$site_url?>/images/services/desigining.png" class="img-responsive" alt="Design" title="Design"></p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <h3  class=" white-clr">Development</h3>
          <div align="center" class="workimg-circle " >
            <p><img src="<?=$site_url?>/images/services/development.png" class="img-responsive" alt="Development" title="Development"></p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <h3  class=" white-clr ">Testing</h3>
          <div align="center" class="workimg-circle " >
            <p><img src="<?=$site_url?>/images/services/testing.png" class="img-responsive" alt="Testing" title="Testing"></p>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 ">
          <h3  class=" white-clr ">Delivery</h3>
          <div align="center" class="workimg-circle " >
            <p><img src="<?=$site_url?>/images/services/deleverd.png" class="img-responsive" alt="Delivery" title="Delivery"></p>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    <p>&nbsp;</p>
  </div>
  
  <!--/.container--> 
</section>
<section id="services" class="service-item" style="padding:35px 0;">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Having magnificent trending in Digital Marketing</h2>
      <p class="lead">We as a professional website designing and development company based in India expert in all type of Mobile Responsive Websites Desinging Services, Website Designing & Development, Website Maintinence Services and Online Shopping Cart Solution services including Payment Gateway Integration services.</p>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <div class="media services-wrap wow fadeInDown pull-clr9">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/redesign-servies.png" alt="Website Redesigning Services in Delhi" title="Website Designing & Development in Delhi" height: auto; max-width: 100%;> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/web-re-designing-service.html">Website Designing</a></h3>
            <p class="white-clr">If you are looking for attrative and creative website designing, then we have experties in designing and development of the websites</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr10">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/responsive-design.png" alt="Digital Marketing in Delhi" title="Digital Marketing in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/mobile-responsive-web-designs-service.html">Digital Marketing</a></h3>
            <p class="white-clr">We offer Digital Marketing strategy, Online Advertising, Social Media Marketing, SEO Services, E-commerce Marketing, PPC Service. </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown pull-clr11">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/services/payment-gatway.png" alt="Social Media Marketing in Delhi" title="Social Media Marketing in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/ecommerce-web-development.html">Social Media Marketing</a></h3>
            <p class="white-clr">Our company WebKeyIndia provides affordable social media marketing, we have social media marketing expert team for your business.</p>
          </div>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
		
<section id="hireservices" class="service-item no-margin pullpt">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Hire Dedicated Team / Resource</h2>
      <p class="lead">Why should you hire a dedicated resource? Businesses that have adopted this model have witnessed a surge in productivity and a drop in the project development cost by 40%. So, instead of splurging on training and technological resources, WebKeyIndia’s “Hiring Dedicated Team/ Resource” model enables businesses to choose the best from a pool of unrivaled resources and couple them with state-of-the-art infrastructure to form a remote team</p>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 ">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(0,82,164,1);">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Website-Developer.png" alt="Hire Web Designing & Development Team in Delhi" title="Hire Web Designing & Development Team in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/hire-dedicated.html">Hire Web Designing & Development Team</a></h3>
            <p class="white-clr">PHP Application Development, Custom PHP Programming, PHP/MySQL Web Development, Open Source CMS Solutions</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(60,60,60,1);">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Digital Marketing-Expert.png" alt="Hire a Dedicated Digital Marketing Team in Delhi" title="Hire a Dedicated Digital Marketing Team in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/hire-dedicated.html">Hire a Dedicated Digital Marketing Team</a></h3>
            <p class="white-clr">Our dedicated SEO experts have an extensive practice of minimal 5 years and are up-to-date with latest web marketing techniques.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(0,108,108,1);">
          <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Data-Entry-Operator.png" alt="Hire Content Creation Team in Delhi" title="Hire Content Creation Team in Delhi"> </div>
          <div class="media-body">
            <h3 class="media-heading white-clr"><a href="<?=$site_url?>/hire-dedicated.html"> Hire Content Creation Team</a></h3>
            <p class="white-clr">Written posts, blogs, articles, guides, Images, Videos, Producing effective, high-performing content, however, presents a number of challenges for your businesses.</p>
          </div>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<section class="clients-area center wow fadeInDown">
  <div class="row ">
  <div class="col-md-6 wow fadeInDown ">
    <div class="text-center">
        <h3 style="font-size:22px; text-transform:uppercase; font-weight:600;">Web Key India Blogs</h3>
        <!-- <p class="lead">We always try to keep you update about the latest trends in internet marketing industry, here you can brows the latest blogs regarding the website solutions, digital marketing solutions, seach engine optimization solutions, domain and web hosting solutions and ecommerce solutions etc posted by our tech experts. </p>--> 
      </div>
    <div class="col-md-6 col-sm-6">
      
      <div class="single-profile-top wow fadeInDown mrbtm35 myclass clearfix" data-wow-duration="1000ms" data-wow-delay="300ms">
        <p><img src="<?=$site_url?>/images/Internet-marketing.jpg" class="img-responsive" alt="Importance of internet marketing" title="Importance of internet marketing"></p>
        <h4 class="text-danger">Importance of internet marketing</h4>
        
        <!--/.media -->
        
        <p class=" center text-alignpro no-margin">Web Key India, an IT company in India has well-built team of Internet Marketing Experts who are well conscious of all development and emerging trends. We have to cater our approach as per your business requirements and goals. Our professional internet marketing team is expertise in acquisition of affordable and result oriented online marketing campaigns.
          
          Internet marketing is...<a href="http://blogs.webkeyindia.com/webkeyindia-com-importance-of-internet-marketing/" target="_blank"><span class="text-primary" style="font-size:11px; font-weight:bold;">read more</span></a> 
      </div>
      
    </div>
    <div class="col-md-6 col-sm-6">
      
      <div class="single-profile-top wow fadeInDown mrbtm35 myclass clearfix" data-wow-duration="1000ms" data-wow-delay="300ms">
        <p><img src="<?=$site_url?>/images/Linux-Web-Hosting1.jpeg" class="img-responsive" alt="Linux Web Hosting With cPanel in Delhi India" title="Linux Web Hosting With cPanel in Delhi India"></p>
        <h4 class="text-danger">Linux Web Hosting With cPanel in Delhi India</h4>
        
        <!--/.media -->
        
        <p class=" center text-alignpro no-margin">Linux Web Hosting is a champion among st the most generally perceived sorts of encouraging people is scanning for on the web. Regardless of whether you are endeavoring to have WordPress or Joomla, Drupal or Magento, they all continue running on Linux servers. Since 2003, WebKeyIndia has been bringing you world class quality Linux shared web...
          
          encouraging advantages...<a href="https://blogs.webkeyindia.com/linux-web-hosting-with-cpanel-in-delhi-india/" target="_blank"><span class="text-primary" style="font-size:11px; font-weight:bold;">read more</span></a> 
      </div>
      
    </div>
    </div>
     <div class="col-md-6 wow fadeInDown ">
     <div>
        <h3 style="font-size:22px; text-transform:uppercase; font-weight:600;">reviews & feedbacks</h3>
        <!-- <p class="lead">We always try to keep you update about the latest trends in internet marketing industry, here you can brows the latest blogs regarding the website solutions, digital marketing solutions, seach engine optimization solutions, domain and web hosting solutions and ecommerce solutions etc posted by our tech experts. </p>--> 
      </div>
      <?php
   $testSql = db_query("select * from tbl_testimonials where 1 and testimonials_status='Active' order by rand() limit 0,2");
    if(mysqli_num_rows($testSql)>0){
		while($testDATA=mysqli_fetch_array($testSql)){
  ?>  
    <div class="col-md-6 wow fadeInDown ">
      <div class="single-profile-top clients-comments myclass"> <img src="<?=$site_url?>/images/testimonial/<?=$testDATA['testimonials_image_name'];?>" class="img-circle" alt="Reviews and Feedback - WebKeyIndia.Com" title="Reviews and Feedback - WebKeyIndia.Com">
        <?php $tDesc = substr($testDATA['testimonials_description'],0,100);?>
        <h3>
          <?=$tDesc;?>
          ...<a href="<?=$site_url?>/testimonial.html"><span class="text-primary" style="font-size:11px; font-weight:bold;">read more</span></a></h3>
        <h4><span class="text-danger">
          <?=$testDATA['testimonials_name'];?>
          / </span>
          <?=$testDATA['testimonials_designation'];?>
          -
          <?=$testDATA['testimonials_comp_name'];?>
        </h4>
      </div>     
    </div>
     <? }} ?>    
    </div>
  </div>
</section>


<div class="clearfix"></div>
<?php include("contact-us-footer.php");?>
<!--/#conatcat-info--> 
<script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<?php include("locations.php");?>
<?php include("webkey-footer.php");?>
		
<!--</div>-->