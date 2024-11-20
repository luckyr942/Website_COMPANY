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
<title>Sitemap of webkeyindia.com</title>
<meta name="description" content="sitemap of tradekeyindia.com- contain all links of website such as Home,About us,our services, our work, our packages, Blogs, Career">
<meta name="keywords" content="sitemap of tradekeyindia.com- contain all links of website such as Home,About us,our services, our work, our packages, Blogs, Career.">
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
  <style type="text/css">
  .margnTp10{margin-top:10px;}
  </style>
</header>

<section id="about-us" class="no-margin pullmt1 bgwhite">
  <div class="container sectyd1"> 
    
  
    
    <div class=" clearfix ">
      <div class=" wow fadeInDown">
        <div class="center no-margin">
          <h2>Site Map</h2>
        </div>
        <div class="row">
          <div class="col-sm-4  col-md-3">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor1 bdrcorner1">
                <h3 id="newhover2" class="media-heading pullmian"><strong><i class="fa fa-hand-o-right"></i> Nevigation</strong></h3>
                <ul >
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/">Home</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/about-us.html">About Us</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/portfolio.html">Our Work</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="http://blogs.webkeyindia.com/" target="_blank">Blog</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/career.html">Career</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/training.html">Training</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/disclaimer.html">Disclaimer</a></li>
                </ul>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4  col-md-3">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor1 bdrcorner1">
                <h3 id="newhover2" class="media-heading pullmian"><strong><i class="fa fa-hand-o-right"></i> <a href="<?=$site_url?>/packages.html">Our Packages</a></strong></h3>
                <ul >
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/website-designing-packages.html"> Web Designing Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/seo-ranking-packages.html"> SEO Ranking Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/smo-packages.html"> SMO Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/ppc-packages.html"> PPC Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/content-writing-packages.html"> Content Writning Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/bulk-sms-packages.html"> Bulk SMS Packages</a></li>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/email-marketing-packages.html"> Email Marketing Packages</a></li>
                </ul>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
          <div class="col-sm-4  col-md-6">
            <div class=" bdrcorner1 wow no-margin fadeInDown ">
              <div class="bdrcolor1 bdrcorner1">
                <h3 id="newhover2" class="media-heading pullmian"><strong><i class="fa fa-hand-o-right"></i> <a href="<?=$site_url?>/services.html">Our Services</a></strong></h3>
                <ul >
                  <?php
$sql_cat=db_query("select * from tbl_category where 1 and category_parent_id='0' and category_status='Active' order by category_order_by");
if(mysqli_num_rows($sql_cat)>0){
while($CAT_DATA=mysqli_fetch_array($sql_cat)){
@extract($CAT_DATA);
?>
                  <li type="disc" class="margnTp10" id="newhover"><a href="<?=$site_url?>/<?=$CAT_DATA['category_url']?>.html">
                    <strong><?=$CAT_DATA['category_name']?></strong>
                    </a>
                    <?php
$sql_sbcat=db_query("select * from tbl_category where 1 and category_parent_id='$CAT_DATA[category_id]' and category_status='Active' order by category_order_by");
if(mysqli_num_rows($sql_sbcat)>0){
?>
                    <ul >
                      <?php
while($SBCAT_DATA=mysqli_fetch_array($sql_sbcat)){
@extract($SBCAT_DATA);
?>
                      <li type="circle" class="margnTp10" id="newhover"><a href="<?=$site_url?>/<?=$SBCAT_DATA['category_url']?>.html">
                        <?=$SBCAT_DATA['category_name']?>
                        </a></li>
                      <? } ?>
                    </ul>
                    <? } ?>
                  </li>
                  <? }} ?>
                </ul>
              </div>
            </div>
            <p class="clearfix"></p>
          </div>
        </div>
      </div>
    </div> 
    
    <section id="sitemap-industires" class="py-4">
        
    <?php include("industries.php");?>
    
    </section>
  </div>
  </div>
</section>
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>