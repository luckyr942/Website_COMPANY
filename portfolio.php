<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
$page_name=basename($_SERVER['PHP_SELF'],'.php');
$site_url=db_scalar("select admin_website_url from tbl_admin where 1");
?>
<?php
function query($pid){
$query = mysqli_query("select * from tbl_category where 1 and category_parent_id='$pid' and category_status='Active' order by category_order_by asc");
return $query;
}  
function has_child($query){
$numRows = mysqli_num_rows($query);
if($numRows > 0){
return true;
}else{
return false;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<title>Our Work | Best Digital Marketing Company In Delhi</title>
<meta name="description" content="Check out our portfolio of successful digital marketing campaigns and see how we've helped businesses like yours grow and thrive online.">
<meta name="keywords" content="Website design portfolio, web design portfolio India, web design company India, web design company portfolio, web design companies in Delhi, Web Development Portfolio, E-commerce Development Portfolio.">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$portfolioContent="Webkeyindia is Leading web Designing Company in India specializes in Web Portal Development,E-commerce Development.View some our Web Development Portfolio Here";
$portfolioTitle="Web Designing,Web Development Portfolio,E-commerce Development";
$portfolioContent=substr(strip_tags($portfolioContent),0,300);
$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$portfolioImage="$site_url/portfolio_image/$sql_categ1";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$portfolioTitle?>" />
<meta property="og:description"        content="<?=$portfolioContent?>" />
<meta property="og:image"              content="<?=$portfolioImage?>" />

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
<link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
<link href="<?=$site_url?>/css/main.css" rel="stylesheet">
<link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?=$site_url?>/css1/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?=$site_url?>/css1/fractionslider.css">
<link rel="stylesheet" href="<?=$site_url?>/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="<?=$site_url?>/portfolio_css/style.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
html, body {
overflow-x: hidden;}
/************/
		div.ex2 {
  overflow-x: hidden;
}
		.sectyd2{margin-top:130px;}
		
		@media (min-width:320px) and (max-width:767px) 
{
	.sectyd2{margin-top:60px;}
	.navbar-toggle {
    position: relative;
    /* float: right; */
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    top: 10px;
}}
	</style>
</head>
<!--/head-->
<body>
	<div class="ex2">
<header id="header" class="no-margin"> 
  <!--/.top-bar-->
  <nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
    <div class="top-bar no-margin pullpt2">
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
<script type="text/javascript">
function disableState(cntryVal){
  if(cntryVal=='India' || cntryVal==''){
	  document.getElementById("portfolio_state").disabled = false;	
  }else{
	  document.getElementById("portfolio_state").disabled = true;
  }
}
</script>
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
</header>

<!--/header-->
<section class="no-margin pullpt pullbottom1 sectyd2">
  <div class="container" >
    <div class="center wow fadeInDown no-margin">
      <h2>Our Portfolio</h2>
      <p class="lead">We Design Custom Websites and Branding Systems for Businesses of All Sizes.Browse our<br>
        website portfolio below to see a range of what we can produce.</p>
    </div>
    <?php
if($_REQUEST['MainTag']!=''){
	$maintag = $_REQUEST['MainTag'];
	$addSql = " and (portfolio_type='$maintag' OR portfolio_type='Both')";
}else{
	$addSql = " ";
}

if(isset($_POST['SearchSubmit'])){
	$kewWrd = $_POST['searchKeyword'];
	$indstrY = $_POST['portfolio_industry'];
	$pfCntry = $_POST['portfolio_country'];
	$pfSt = $_POST['portfolio_state'];
	/******** FOR KEYWORD ********/
	if($kewWrd!=''){
	 $addSql1 = " and (portfolio_description LIKE ('%$kewWrd%') OR portfolio_tags LIKE ('%$kewWrd%')) ";
	}
	/******** FOR INDUSTRY ********/
	if($indstrY!=''){
     if($indstrY!='All Industries'){
		$addSql1 .= " and portfolio_industry LIKE ('%$indstrY%')";
	 }else{
		 $addSql1 .= "";
       }
     }	
	 /******** FOR COUNTRY ********/
	if($pfCntry!=''){
	 $addSql1 .= " and portfolio_country='$pfCntry' ";
	}
	/******** FOR STATE ********/
	if($pfSt!=''){
	 $addSql1 .= " and portfolio_state='$pfSt' ";
	}
}
?>
    <div align="center" class=""> <a class="btn btn-danger" href="<?=$site_url?>/portfolio.html" style="margin-top:10px;">All Work</a> <a class="btn btn-danger" href="<?=$site_url?>/portfolio.html?MainTag=Website Design/Development" style="margin-top:10px;">Designing / Development Work</a> <a class="btn btn-danger" href="<?=$site_url?>/portfolio.html?MainTag=SEO" style="margin-top:10px;">Google Promotion Work</a></div>
    <div align="center" class="pullmt2">
      <form class="form-inline" name="frm" action="" method="post">
        <div class="col-md-12" style="background-color:#E9E9E9;border:1px solid #C3C3C3; padding:15px 5px 5px 5px; border-radius:10px;">
            <!--<div class="col-md-2" style="padding:0 !important; font-weight:600; color:green; float:left; margin-bottom:10px; margin-top:5px;">Search Projects :</div>-->
            <div class="col-md-4" style="padding:0 !important;">
            <input type="text" placeholder="Enter Keyword" name="searchKeyword" value="<?=$_POST['searchKeyword']?>" id="searchKeyword" class="form-control" style="border:1px solid #D1D1D1; margin-bottom:10px; width:99%; font-weight:600; border-radius:0px; color:#7A7A7A;">
            </div>
            <div class="col-md-2" style="padding:0 !important;">
            <select class="form-control" name="portfolio_industry" id="portfolio_industry" style="border:1px solid #D1D1D1; border-radius:0px; margin-bottom:10px; width:98%; font-weight:600; color:#7A7A7A;">
            <option value="">Select Industry</option>
            <option value="E-commerce" <?php if($_POST['portfolio_industry']=='E-commerce'){ ?>selected<? } ?>>E-commerce</option>
            <option value="Corporate & Manufacturing/Traders/Industrial/FMCG/Technology" <?php if($_POST['portfolio_industry']=='Corporate & Manufacturing/Traders/Industrial/FMCG/Technology'){ ?>selected<? } ?>>Corporate & Manufacturing/Traders/Industrial/FMCG/Technology</option>
            <option value="Portals & Directory" <?php if($_POST['portfolio_industry']=='Portals & Directory'){ ?>selected<? } ?>>Portals & Directory</option>
            <option value="Jobs & Eductaion/Institues" <?php if($_POST['portfolio_industry']=='Jobs & Eductaion/Institues'){ ?>selected<? } ?>>Jobs & Eductaion/Institues</option>
            <option value="Astrology/Matrimonial" <?php if($_POST['portfolio_industry']=='Astrology/Matrimonial'){ ?>selected<? } ?>>Astrology/Matrimonial</option>
            <option value="Realestate & Construction" <?php if($_POST['portfolio_industry']=='Realestate & Construction'){ ?>selected<? } ?>>Realestate & Construction</option>
            <option value="Health/ Beauty & Sports" <?php if($_POST['portfolio_industry']=='Health/Beauty & Sports'){ ?>selected<? } ?>>Health/Beauty & Sports</option>
            <option value="Services & Consultancy / Agency" <?php if($_POST['portfolio_industry']=='Services & Consultancy/Agency'){ ?>selected<? } ?>>Services & Consultancy/Agency</option>
            <option value="Tour & Travel" <?php if($_POST['portfolio_industry']=='Tour & Travel'){ ?>selected<? } ?>>Tour & Travel</option>
            <option value="Packers & Movers" <?php if($_POST['portfolio_industry']=='Packers & Movers'){ ?>selected<? } ?>>Packers & Movers</option>
            <option value="Others" <?php if($_POST['portfolio_industry']=='Others'){ ?>selected<? } ?>>Others</option>
            </select>
            </div>
            <div class="col-md-2" style="padding:0 !important;">
            <select class="form-control" name="portfolio_country" id="portfolio_country" style="border:1px solid #D1D1D1; border-radius:0px; margin-bottom:10px; width:98%; font-weight:600; color:#7A7A7A;" onChange="return disableState(this.value);">
            <?php if($_POST['portfolio_country']!=''){ ?>
              <option value="<?=$_POST['portfolio_country']?>"><?=$_POST['portfolio_country']?></option>
              <? }else{ ?>
              <option value="">Select Country</option>
              <? } ?>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Africa" >Africa</option>
              <option value="America" >America</option>
              <option value="Argentina" >Argentina</option>
              <option value="Australia" >Australia</option>
              <option value="Bangladesh" >Bangladesh</option>
              <option value="Benin" >Benin</option>
              <option value="Brazil" >Brazil</option>
              <option value="Canada" >Canada</option>
              <option value="China" >China</option>
              <option value="Denmark" >Denmark</option>
              <option value="Egypt" >Egypt</option>
              <option value="Germany" >Germany</option>
              <option value="Ghana" >Ghana</option>
              <option value="Hong Kong" >Hong Kong</option>
              <option value="India">India</option>
              <option value="Indonesia" >Indonesia</option>
              <option value="Iran" >Iran</option>
              <option value="Italy" >Italy</option>
              <option value="Japan" >Japan</option>
              <option value="Korea" >Korea</option>
              <option value="Kuwait" >Kuwait</option>
              <option value="Malaysia" >Malaysia</option>
              <option value="Mexico" >Mexico</option>
              <option value="Nepal" >Nepal</option>
              <option value="New Zealand" >New Zealand</option>
              <option value="Nigeria" >Nigeria</option>
              <option value="Others" >Others</option>
              <option value="Pakistan" >Pakistan</option>
              <option value="Philippines" >Philippines</option>
              <option value="Russia" >Russia</option>
              <option value="Saudi Arabia" >Saudi Arabia</option>
              <option value="Singapore" >Singapore</option>
              <option value="South Africa" >South Africa</option>
              <option value="Sri Lanka" >Sri Lanka</option>
              <option value="Taiwan" >Taiwan</option>
              <option value="Thailand" >Thailand</option>
              <option value="Turkey" >Turkey</option>
              <option value="Ukraine" >Ukraine</option>
              <option value="United Arab Emirates" >United Arab Emirates</option>
              <option value="United Kingdom" >United Kingdom</option>
              <option value="United States" >United States</option>
            </select>
            </div>
            <div class="col-md-2" style="padding:0 !important;">
            <select class="form-control" name="portfolio_state" id="portfolio_state" style="border:1px solid #D1D1D1; margin-bottom:10px; border-radius:0px; width:98%; font-weight:600; color:#7A7A7A;">
              <?php if($_POST['portfolio_state']!=''){ ?>
              <option value="<?=$_POST['portfolio_state']?>"><?=$_POST['portfolio_state']?></option>
              <? }else{ ?>
              <option value="">Select State</option>
              <? } ?>
              <option value="Andaman and Nicobar Islands" >Andaman and Nicobar Islands</option>
              <option value="Andhra Pradesh" >Andhra Pradesh</option>
              <option value="Arunachal Pradesh" >Arunachal Pradesh</option>
              <option value="Assam" >Assam</option>
              <option value="Bihar" >Bihar</option>
              <option value="Chandigarh" >Chandigarh</option>
              <option value="Chhattisgarh" >Chhattisgarh</option>
              <option value="Dadra and Nagar Haveli" >Dadra and Nagar Haveli</option>
              <option value="Daman and Diu" >Daman and Diu</option>
              <option value="Delhi" >Delhi</option>
              <option value="Goa" >Goa</option>
              <option value="Gujarat" >Gujarat</option>
              <option value="Haryana" >Haryana</option>
              <option value="Himachal Pradesh" >Himachal Pradesh</option>
              <option value="Jammu and Kashmir" >Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka" >Karnataka</option>
              <option value="Kerala" >Kerala</option>
              <option value="Lakshadweep" >Lakshadweep</option>
              <option value="Madhya Pradesh" >Madhya Pradesh</option>
              <option value="Maharashtra" >Maharashtra</option>
              <option value="Manipur" >Manipur</option>
              <option value="Meghalaya" >Meghalaya</option>
              <option value="Mizoram" >Mizoram</option>
              <option value="Nagaland" >Nagaland</option>
              <option value="Odisha" >Odisha</option>
              <option value="Puducherry" >Puducherry</option>
              <option value="Punjab" >Punjab</option>
              <option value="Rajasthan" >Rajasthan</option>
              <option value="Sikkim" >Sikkim</option>
              <option value="Tamil Nadu" >Tamil Nadu</option>
              <option value="Telangana" >Telangana</option>
              <option value="Tripura" >Tripura</option>
              <option value="Uttar Pradesh" >Uttar Pradesh</option>
              <option value="Uttarakhand" >Uttarakhand</option>
              <option value="West Bengal" >West Bengal</option>
            </select>
            </div>
            <div class="col-md-2" style="padding:0 !important;"><button type="submit" name="SearchSubmit" class="btn btn-info" style="margin-bottom:10px; width:80%;">Search Projects</button></div>            
          <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
          <div class="text-center" style="margin:20px 0; font-size:22px; font-weight:600; color:#0067CE; text-transform:uppercase;">
            <?php if($maintag=='SEO'){ ?>
            Digital Marketing
            <? }elseif($maintag==''){ ?>
            ALL
            <? }else{ ?>
            Website Designing/Development
            <? } ?>
            Portfolio</div>
        </div>
      </form>
    </div>
    <div style="margin-top:40px; margin-bottom:47px;" id="reloadmyPortfolio">
      <div class="row">
        <?php
//echo $pfSql = "select * from tbl_portfolio where 1 and portfolio_ststus='Active' $addSql $addSql1";
$pfSql = db_query("select * from tbl_portfolio where 1 and portfolio_ststus='Active' $addSql $addSql1");
 if(mysqli_num_rows($pfSql) > 0){
	 $i = 0;
  while($PFDATA=mysqli_fetch_array($pfSql)){
	  $i++;
	  $id = 'image-'.$i;
?>
        <div class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom:20px;">
          <div class="col-md-12 mp-0" style="margin:0 !important;">
            <div class=" lb-album size-pomg"> <a href="#<?=$id?>"> <img src="<?=$site_url?>/portfolio_image/<?=$PFDATA['portfolio_image_name']?>" title="<?=$PFDATA['portfolio_title']?>" alt="<?=$PFDATA['portfolio_title']?>"> <span>
              <h2>
                <?=$PFDATA['portfolio_title']?>
              </h2>
              <p style="text-transform:none;">
                <?php $desc = substr($PFDATA['portfolio_description'],0,110);?>
                <?=$desc?>
              </p>
              <p><i class="fa fa-eye"></i> Zoom</p>
              </span> </a>
              <div class="lb-overlay" id="<?=$id?>"> <a href="#page" class="lb-close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a> <img src="<?=$site_url?>/portfolio_image/<?=$PFDATA['portfolio_image_name']?>"  title="<?=$PFDATA['portfolio_title']?>" alt="<?=$PFDATA['portfolio_title']?>"/> </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0 !important; margin-top:4px;">
          <div class="pull-left" style="font-size:12px; font-weight:600; color:#005CB9;"><a href="#<?=$id?>" style="color:#CC0000; border:1px solid #CC0000; padding:0 5px;"><i class="fa fa-eye"></i> ZOOM</a></div>
          <div class="pull-right" style="font-size:12px; font-weight:600; color:#005CB9;"><a href="<?=$site_url?>/<?=$PFDATA['portfolio_url'];?>/" style="color:#0069D2; border:1px solid #0069D2; padding:0 5px;"><i class="fa fa-edit"></i> VIEW DETAIL</a></div>
          </div>
        </div>
        <? }} ?>
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<?php include("contact-us-footer.php");?>
<script type="text/javascript">
function getXMLHTTP() {
var xmlhttp=false;	
try{
xmlhttp=new XMLHttpRequest();
}
catch(e){
try{	
xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e){
try{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e1){
xmlhttp=false;
}
}
}
return xmlhttp;
}
function redirectURL(industryVal,urlTag){
//alert(industryVal);
var req=new getXMLHTTP();
var str="<?=$site_url?>/reload_portfolio.php?industry="+industryVal+"&tag="+urlTag;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
//alert(req.responseText);
document.getElementById('reloadmyPortfolio').innerHTML=req.responseText;
} 
}
}
req.open("GET",str,true);
req.send(null);
}
</script>
	</div>
<?php include("webkey-footer.php");?>
