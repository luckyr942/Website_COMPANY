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
<title>Best Digital Marketing Agency in Delhi | WebKeyIndia</title>
<?php include 'headlink.php';?>
<meta name="description" content="From SEO and PPC to social media and content marketing, we offer a wide range of services that can boost your business and help you reach target audience.">
<meta name="keywords" content="software development company in delhi india, web portal development company in delhi india, web design services in delhi, website design services in delhi, website development services in delhi india, best website designing company in Delhi, website designing firms in delhi, web application development in delhi, mobile app development companies in delhi india, portal development services in delhi india
">

<!--OG Tag Start-->

<?php
$serviceContent="Affordable web portal development company in Delhi, WebKeyIndia is a leading Software company providing best web design services. Contact us 9999065097.";
$serviceTitle="Software Development | Web Portal Development | Company in Delhi India";
$serviceContent=substr(strip_tags($serviceContent),0,300);
$sql_categ=db_scalar("select category_image_name from tbl_category where category_parent_id=0");
$serviceImage="$site_url/uploaded_files/$sql_categ";
$pURL="https://www.webkeyindia.com/services.html/";

?>
<meta property="og:url"                content="https://www.webkeyindia.com/services.html/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$serviceTitle?>" />
<meta property="og:description"        content="<?=$serviceContent?>" />
<meta property="og:image"              content="<?=$serviceImage?>" />

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
<!-- SmartMenus core CSS (required) -->
<link href="https://www.webkeyindia.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
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
<style>
.myclass {transition: 1s ease;}
.myclass:hover {
	-moz-box-shadow: 0 0 40px #C60000;
	-webkit-box-shadow: 0 0 40px #C60000;
	box-shadow: 0 0 40px #C60000;
	transition: box-shadow 0.5s ease;
	
	border-radius:8%;
transition: 1s ease;
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
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> <img src="images/google-partner.png" class="dsp-ptnr"> </div>
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

<section id="services" class="service-item pullpt pricing-page sectyd">
  <div class="container">
    <div class="center">
      <h2 class="pullpt4">Our Services</h2>
      <p class="lead">WebKeyIndia is a New Delhi based best Web Hosting Company which provides economical Web Hosting Solutions for Budget, Business and Enterprise clients from New Delhi, India. Our focus is on providing a simple, easy to follow site to help users choose the best web hosting plan most suitable for a small site or for a large e-commerce website. We are friendly and efficient with knowledgeable support staff and provide excellent uptime on fast dedicated servers. We provide one stop shop for complete Web Hosting Services and Cheap Web Hosting services.</p>
    </div>
    <div>
      <div class="col-md-12">
        <div class="row">
          <div class="features">
            <?php
	 $sql_category=db_query("select category_id,category_parent_id,category_status,category_order_by,category_url,category_name,category_image_name,category_description from tbl_category where 1 and category_parent_id='0' and category_status='Active' order by category_order_by asc");
	 if(mysqli_num_rows($sql_category)>0){
		 $cnt = 0;
	 while($MAIN_CAT=mysqli_fetch_array($sql_category)){
		 $cnt++;
	 @extract($MAIN_CAT);
	?>
            <div class="col-sm-6 col-md-4">
              <div class="services-wrap1 wow fadeInDown myclass">
                <div >
                  <h3 id="newhover" class="media-heading "><img src="<?=$site_url?>/images/icon.png" class="text-right"> <a href="<?=$site_url?>/<?=$MAIN_CAT['category_url']?>.html">
                    <?=$MAIN_CAT['category_name'];?>
                    </a></h3>
                  <p><img src="<?=$site_url?>/uploaded_files/<?=$MAIN_CAT['category_image_name']?>" alt="Service Provider of <?=$MAIN_CAT['category_name']?>" title="Service Provider of <?=$MAIN_CAT['category_name']?>" class="img-responsive"></p>
                  <?php $description=strip_tags($MAIN_CAT['category_description']);?>
                  <div class="text-a" style="word-spacing:.6px;">
                    <?=substr($description,0,130);?>
                    ...</div>
                </div>
              </div>
            </div>
            <?php if($cnt%3==0){ ?>
             <div class="clearfix"></div>
             <? } ?>
            <? }} ?>
          </div>
          <!--/.services--> 
        </div>
      </div>
    </div>
    <!--/pricing-area--> 
  </div>
  <!--/container--> 
</section>


<!--/pricing-page--> 
<!--/#bottom-->

<?php include("industries.php");?>
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>