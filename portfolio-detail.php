<?php 

ob_start();

require_once("includes/dbsmain.inc.php");

$page_name=basename($_SERVER['PHP_SELF'],'.php');



$site_url=db_scalar("select admin_website_url from tbl_admin where 1");



$prdct_name=$_REQUEST['cat_name'];

$catgoryID=db_scalar("select category_id from tbl_category where 1 and category_url='$prdct_name'");

?>

<?php

  function query($pid){

    $query = mysqli_query("select * from tbl_category where 1 and category_parent_id='$pid' and category_status='Active' order by category_order_by asc");

	return $query;

  }  

  function has_child($query){

    $numRows = mysql_num_rows($query);

	if($numRows > 0){

	return true;

	}else{

	return false;

	}

  }

?>

<?php

$upperWaliID = $_REQUEST['cid'];

$portfolioID = db_scalar("select portfolio_id from tbl_portfolio where 1 and portfolio_url='$upperWaliID'");

?>

<?php

if(!empty($portfolioID)){

$sql_final=db_query("select * from tbl_portfolio where 1 and portfolio_id='$portfolioID'");

$PORT_DATA=mysqli_fetch_array($sql_final);

@extract($PORT_DATA);

}



?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="robots" content="index, follow" />

<title><?=$PORT_DATA['portfolio_title'];?> Portfolio | Clients Reviews and Complaints | WebKeyIndia</title>

<META NAME="description" content="<?=db_scalar("select category_meta_description from  tbl_category where category_status='Active' and category_id='$catgoryID'")?>" />

<META NAME="keywords" content="<?=$PORT_DATA['portfolio_title'];?> Portfolio, tradekeyindia.com Reviews, webkeyindia.com Reviews, trade key india Client Feedbacks, tradekey india negative Feedbacks, web key india negative Feedbacks, tradekeyindia negative Reviews, webkey india negative Reviews, TradeKeyIndia Clients Complaints, Webkeyindia clients Complaints, Web Key Network Clients Reviews and Complaints" />

<script src="<?=$site_url?>/js/jquery.js"></script> 
<?php include 'headlink.php';?>

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

<script src='https://www.google.com/recaptcha/api.js'></script>

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

<section  style="margin-top:80px;">

  <div class="container">

    <div>

      <div class="col-md-12">

        <div class="row">

          <h1 class="text-danger bdr-lineami">

            <?=$portfolio_title?>

          </h1>

          <h5><a href="<?=$site_url?>" style="color:#006BD7;">Home</a> &raquo; <a href="<?=$site_url?>/portfolio.html" style="color:#006BD7;">Our Work</a> &raquo;

            <?=$portfolio_title?>

          </h5>

          <div class="row">

            <div class="col-md-7 pullpt4">

              <div class="features text-alignpro1 wow fadeInDown">

                <div>

                  <?=$portfolio_description?>

                </div>

                <div>

                  <p class="text-alignpro1"><strong>Industry :</strong><br>

                    <?=$portfolio_industry=preg_replace('/\s\s+/', ' ', $portfolio_industry)?>

                  </p>

                </div>

                <div>

                  <p><strong>Tool Used :</strong><br>

                    <?=$portfolio_tool_used?>

                  </p>

                </div>

                <?php if($portfolio_website_url!='http://www.'){ ?>

                <div>

                  <p><strong>Website URL :</strong><br>

                    <a href="<?=$portfolio_website_url?>" target="_blank" style="color:#006BD7;">

                    <?=$portfolio_website_url?>

                    </a></p>

                </div>

                <? } ?>

                <?php if($portfolio_type=='SEO' || $portfolio_type=='Both'){ ?>

                <div class="clearfix">

                <?php

			  		$portfolio_tags = explode(',',$portfolio_tags);

			 	 ?>

                 <?php if($portfolio_tags[0]!=''){ ?>

                

                

                <div><strong>Promoted Keywords <span style="font-size:11px;">(Click To Show On Google)</span> :</strong></div>

                <?php foreach($portfolio_tags as $key=>$value){ ?>

                   <div class="pull-left" style="margin-top:15px; margin-left:10px; margin-bottom:5px;"><a href="http://www.google.com/search?q=<?=$value?>" target="_blank" class="tagClass">

                    <?=$value?>

                    </a>

                    </div>

                      

                    <? }} ?>

                    </div>

                    

                    <div style="margin-top:20px; margin-bottom:25px;">

                  <p><strong>Download Ranking Report :</strong><br>

                  <?php if($portfolio_seo_file_name){ ?>

                    <a href="<?=$site_url?>/download.php?f=<?=$portfolio_seo_file_name;?>" style="color:#0069D2;"><b><?=$portfolio_seo_file_name?> <i class="fa fa-download" style="font-size:25px;"></i></b></a>

                    <? }else{ ?>

                    <b style="color:#F00;">No File Found</b>

                    <? } ?>

                  </p>

                </div>

                    

                    <? } ?>

              

                

              </div>

            </div>

            <div class="col-md-5">

              <div class="features text-alignpro1 wow fadeInDown"> <img class="img-responsive wow fadeInDown" src="<?=$site_url?>/portfolio_image/<?=$portfolio_image_name?>" alt="<?=$portfolio_title?>" width="350px;" title="<?=$portfolio_title?>">

                <?=$productDescription?>

              </div>

            </div>

          </div>

          

          <!--/.services--> 

        </div>

        <div class="row pullmt2"> <a href="javascript:void(0);" onClick="document.getElementById('uname').focus();">

          <div class="pull-clr16 bdrcorner1">

            <p class="white-clr pullmian text-center" style="font-size:19px;"><strong > <i class="fa fa-hand-o-right"></i> Click Here to Request a free Quote Now or <i class="fa fa-phone  process-mrleft3"></i> +91 9999 414 160</strong></p>

          </div>

          </a> </div>

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