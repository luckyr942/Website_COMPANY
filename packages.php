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
<title>Boost Your Online Presence with Best Digital Marketing Package</title>
<meta name="description" content="Transform Your Online Presence with Our Winning Digital marketing and Web Designing Package. We are expert in Website Designing SEO, SMO, PPC.">
<meta name="keywords" content="Web Design package India, Cheap Web designing package, Web Designing Package, Web development packages, SEO packages, SMO packages, PPC Packages in india, Content writing packages, Bulk sms Packages, Email marketing packages">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$packagesContent="webkeyindia website design company Delhi India offers Web Design package,affordable Web Development Packages, professional website design packages in Delhi";
$packagesTitle="Web Design package | SEO Packages | Web development packages";
$packagesContent=substr(strip_tags($packagesContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$packagesImage="$site_url/images/packages/website-designing-services.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$packagesTitle?>" />
<meta property="og:description"        content="<?=$packagesContent?>" />
<meta property="og:image"              content="<?=$packagesImage?>" />

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
<link href="<?=$site_url?>/amicss/sm-core-css.css" rel="stylesheet" type="text/css" />
<link href="<?=$site_url?>/amicss/sm-blue.css" rel="stylesheet" type="text/css" />
<link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?=$site_url?>/css1/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?=$site_url?>/css1/fractionslider.css">
<style type="text/css">
#amiHover:hover{color:#D70000;transition: color 1s ease; border:#ff716c solid 1px;box-shadow: inset 0px 0px 4px rgba(0,0,0,0.5);transition: box-shadow 4s ease;}
#amiHover img {
	  -webkit-filter: grayscale(80%);  
}
#amiHover:hover img {
	  -webkit-filter: grayscale(0%);  
}
</style>
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
<header id="header" class="no-margin">
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
<a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" class="logostydr"></a> <img src="images/google-partner.png" class="dsp-ptnr">  </div>
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
</header>
<section id="about-us" class="no-margin pullmt1 bgwhite">
  <div class="container sectyd1">
    <div class=" clearfix ">
      <div class="center wow fadeInDown">
        <h2>Our Packages</h2>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/website-designing-packages.html"><i class="fa fa-hand-o-right"></i> Web Designing Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/website-designing-services.jpg" alt="Web Designing Packages" title="Web Designing Packages" class="img-responsive"></p>
                <p class="text-center"> WebKeyIndia is a India based leading global digital marketing company, which provide best quality responsive website designing services.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/seo-ranking-packages.html"><i class="fa fa-hand-o-right"></i> SEO Ranking Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/social-media-optimization.jpg" alt="SEO Ranking Packages" title="SEO Ranking Packages" class="img-responsive"></p>
                <p class="text-center">As a best digital marketing company, webkeyindia is providing the best search engine (SEO) ranking packages.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/smo-packages.html"><i class="fa fa-hand-o-right"></i> SMO Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/digital-marketing-services.jpg" alt="SMO Packages" title="SMO Packages" class="img-responsive"></p>
                <p class="text-center">In this Internet marketing trend, it is the time of social media. WebKeyIndia.Com is specialised in providing good quality SMO Services in all over the world.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/ppc-packages.html"><i class="fa fa-hand-o-right"></i> PPC Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/ppc-services.jpg" alt="PPC Packages" title="PPC Packages" class="img-responsive"></p>
                <p class="text-center">If you are looking for the quality and dictated web promotion including matirialised business enquiries then our quality PPC PACKAGES are perfect for your.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/content-writing-packages.html"><i class="fa fa-hand-o-right"></i> Content Writning Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/website-designing-services.jpg" alt="Web Designing Packages" title="Web Designing Packages" class="img-responsive"></p>
                <p class="text-center">According many digital marketing experts fresh and good quality content is the best crispy and yummy food for all major search engines.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/bulk-sms-packages.html"><i class="fa fa-hand-o-right"></i> Bulk SMS Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/bulk-sms-solutions.jpg" alt="Bulk SMS Packages" title="Bulk SMS Packages" class="img-responsive"></p>
                <p class="text-center"> WebKeyIndia.Com is a Leading Tele Media Marketer who deals in Bulk SMS , Bulk Email & Bulk Whatsapp which helps you to promote your business.</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor5 bdrcorner1" id="amiHover">
                <h3 id="newhover2" class="media-heading pullmian"><strong><a href="<?=$site_url?>/email-marketing-packages.html"><i class="fa fa-hand-o-right"></i> Email Marketing Packages</a></strong></h3>
                <p align="center"><img src="<?=$site_url?>/images/packages/email-marketing-services.jpg" alt="Email Marketing Packages" title="Email Marketing Packages" class="img-responsive"></p>
                <p class="text-center">If we promote your business through net, you would have the opportunity to come out of local market and grab the opportunities of outside world, thus .</p>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>