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
<title>Best Web Designing & Development Services in Delhi India</title>
<meta name="description" content="Looking for a website, Our expert team specializes in crafting stunning, custom websites that are tailored to your unique brand and business goals.">
<meta name="keywords" content="mobile app development companies in delhi, best search engine optimization companies in delhi india, seo company in delhi india, cms website development in delhi india, software development company in delhi india, web hosting services in delhi, website redesign services in delhi, web application development in delhi india, smo services in delhi india, smm services in delhi india">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$aboutContent="WebKeyIndia Company Develop best Android, IOS Apps in Delhi. And one of the best SEO, SMO, and SMM company in Delhi. We provide affordable web hosting services in Delhi.";
$aboutTitle="Mobile Apps Development | SEO | SMO | SMM | Company in Delhi India";
$aboutContent=substr(strip_tags($aboutContent),0,300);
$aboutImage="$site_url/images/team.jpg";
$pURL="https://www.webkeyindia.com/about-us.html/";
?>
<meta property="og:url"                content="https://www.webkeyindia.com/about-us.html/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$aboutTitle?>" />
<meta property="og:description"        content="<?=$aboutContent?>" />
<meta property="og:image"              content="<?=$aboutImage?>" />

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

<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
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
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?=$site_url?>/css1/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?=$site_url?>/css1/fractionslider.css">
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
  
  <!--/.top-bar-->
  
  <nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
    <div id="amiID"  class="top-bar no-margin pullpt2 ">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 hidden-xs">
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
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a>
			<img src="images/google-partner.png" alt="Google Partner" class="dsp-ptnr"> 
		</div>
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
     <link rel="stylesheet" href="css/bootstrap.min.css">
     
    <style>
           
        
        .industires-inner ul li {
            list-style: none;
            margin: 10px 0;
        }
        .industires-inner ul li a{
            color: #0e0e0e;
            text-decoration: none;
            
        }
        .industires-inner ul li {
              /*list-style-image: url("https://interactive-examples.mdn.mozilla.net/media/examples/rocket.svg") !important;*/
              list-style-image: url("img/ungali.png") !important;
                font-size:16px;
              
          }
    </style>
  <section id="indoo" style="padding-top: 149px !important;">
    
    

    <div class="conatiner">
        <h2 class="text-center">Website Designing Services for Industries  in Locations
        </h2>
        <div class="row">
            <div class="col-lg-3">
                <div class="industires-inner">
                    <ul>
                        <li><a href="">Website Designing in Furniture in Delhi</a></li>
                        <li><a href="">Website Designing in Tour Travels in Delhi</a></li>
                        <li><a href="">Website Designing in Packer Movers in Delhi</a></li>
                        <li><a href="">Website Designing in School & Colleges in Delhi</a></li>
                        <li><a href="">Website Designing in Agricultre in Delhi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
            <div class="industires-inner">
                <ul>
                    <li><a href="">Website Designing For Furniture in Delhi</a></li>
                    <li><a href="">Website Designing For Tour Travels in Delhi</a></li>
                    <li><a href="">Website Designing For Packer Movers in Delhi</a></li>
                    <li><a href="">Website Designing For School & Colleges in Delhi</a></li>
                    <li><a href="">Website Designing For Agricultre in Delhi</a></li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="industires-inner">
                    <ul>
                        <li><a href="">Website Designing For Furniture</a></li>
                        <li><a href="">Website Designing For Tour Travels</a></li>
                        <li><a href="">Website Designing For Packer Movers</a></li>
                        <li><a href="">Website Designing For School & Colleges </a></li>
                        <li><a href="">Website Designing For Agricultre </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="industires-inner">
                    <ul>
                        <li><a href="">Website Designing For Furniture in Delhi</a></li>
                        <li><a href="">Website Designing For Tour Travels in Delhi</a></li>
                        <li><a href="">Website Designing For Packer Movers in Delhi</a></li>
                        <li><a href="">Website Designing For School & Colleges in Delhi</a></li>
                        <li><a href="">Website Designing For Agricultre in Delhi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    
    </section>
    
  <script src="js/bootstrap.min.js"></script>
  
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>