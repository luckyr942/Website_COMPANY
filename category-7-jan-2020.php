<?php include("webkey-header.php");?>


<?php

$prd_name=$_REQUEST['cat_name'];

$catID=db_scalar("select category_id from tbl_category where 1 and category_url='$prd_name'");

$countSubCat=db_scalar("select count(*) from tbl_category where category_parent_id='$catID' and category_status='Active'");

if($catID==''){

header("location:index.html");

exit;	

}

?>

<?php if($countSubCat > 0){ ?>

<style>

.myclass {transition: 1s ease;border:1px solid #E0E0E0; margin-top:17px;}

.myclass:hover {

	-moz-box-shadow: 0 0 40px #F20000;

	-webkit-box-shadow: 0 0 40px #F20000;

	box-shadow: 0 0 40px #3A3A3A;

	transition: box-shadow 0.5s ease;

}

</style>

<?php 

$sql_cat=db_query("select * from tbl_category where 1 and category_id='$catID'");

if(mysqli_num_rows($sql_cat) > 0){

$CAT_DATA=mysqli_fetch_array($sql_cat);

@extract($CAT_DATA);

}	  

$parentID = $CAT_DATA['category_parent_id'];

?>

<?php if($CAT_DATA['category_banner_image_name']!=''){ ?>

<div class="slider-wrapper clearfix" style="margin-top:100px;">

  <div class="responisve-container">

    <img src="images/category_banner/<?=$CAT_DATA['category_banner_image_name']?>" class="img-responsive">    

  </div>

</div>

<? } ?>

<section class="pricing-page sectyd" <?php if($CAT_DATA['category_banner_image_name']==''){ ?>style=""<? } ?>>

<div class="container">

<div class="center no-margin">

<h2>

<?php if($CAT_DATA['category_display_name']==''){ ?>

<?=$CAT_DATA['category_name'];?>

<? }else{ ?>

<?=$CAT_DATA['category_display_name']?>

<? } ?>

</h2>

<div class="lead" align="left">

<?=$CAT_DATA['category_description']?>

</div>

</div>

<div>

<div class="col-md-12">

<div class="row">

<div class="features">

<?php

$sql_subcat=db_query("select * from tbl_category where 1 and category_parent_id='$catID' and category_status='Active' order by category_id asc");

$cnt = 0;

while($SUBCAT_DATA=mysqli_fetch_array($sql_subcat)){

$cnt++;

@extract($SUBCAT_DATA);

?>

<div class="col-sm-4 col-md-4">

<div class=" bdrcorner1 wow no-margin fadeInDown myclass">

<div class="bdrcorner1">

<h3 id="newhover" class="media-heading pullmian white-clr"><img src="<?=$site_url?>/images/folder.png" class="text-right"> <a href="<?=$site_url?>/<?=$SUBCAT_DATA['category_url']?>.html">

<?=$SUBCAT_DATA['category_name'];?>

</a></h3>

<p class="text-center"><img src="<?=$site_url?>/uploaded_files/<?=$SUBCAT_DATA['category_image_name']?>" alt="Service Provider of <?=$SUBCAT_DATA['category_name']?>" title="Service Provider of <?=$SUBCAT_DATA['category_name']?>" height="106" width="280" /></p>

<?php $description=strip_tags($SUBCAT_DATA['category_description']);?>

<div class="process-mrleft4" style="word-spacing:.6px;">

<?=substr($description,0,130);?>

...</div>

</div>

<p class="clearfix"></p>

</div>

</div>

<?php if($cnt%3==0){ ?>

<div class="clearfix"></div>

<? } ?>

<? } ?>

</div>

</div>

</div>

</div>

</div>

</section>

<? }else{ ?>

<?php

if(!empty($catID)){

$sql_final=db_query("select * from tbl_category where 1 and category_id='$catID'");

$FINAL_DATA=mysqli_fetch_array($sql_final);

@extract($FINAL_DATA);

$productName=$FINAL_DATA['category_name'];

$productDisplayName=$FINAL_DATA['category_display_name'];

$productPID=$FINAL_DATA['category_parent_id'];

$productImageName=$FINAL_DATA['category_image_name'];

$productDescription=$FINAL_DATA['category_description'];

}



?>

<section  style="margin-top:80px;">

<div class="container">

<div>

<div class="col-md-8 ">

<div class="row">

<h1 class="text-danger bdr-lineami">

<?php if($productDisplayName==''){ ?>

<?=$productName?>

<? }else{ ?>

<?=$productDisplayName?>

<? } ?>

</h1>

<h5><a href="<?=$site_url?>" style="color:brown;">Home</a> &raquo; <a href="<?=$site_url?>/services.html" style="color:brown;">Services</a> &raquo; <a href="<?=$site_url?>/<?=db_scalar("select category_url from tbl_category where 1 and category_id='$productPID'");?>.html" style="color:brown;">

<?=db_scalar("select category_name from tbl_category where 1 and category_id='$productPID'");?>

</a> &raquo;

<?php if($productDisplayName==''){ ?>

<?=$productName?>

<? }else{ ?>

<?=$productDisplayName?>

<? } ?>

</h5>

<div class="col-md-12" style="margin:0 !important; padding:0 !important; margin:20px 0px !important;"><img src="<?=$site_url?>/uploaded_files/<?=$productImageName?>" alt="Service Provider of <?=$FINAL_DATA['category_name']?>" title="Service Provider of <?=$FINAL_DATA['category_name']?>" style="width:100%;" /></div>

<div class="features text-alignpro1 wow fadeInDown">



<?=$productDescription?>

</div>

<!--/.services--> 

</div>

<div class="row pullmt2">

<a href="javascript:void(0);" onClick="document.getElementById('uname').focus();"><div class="pull-clr16 bdrcorner1"><p class="white-clr pullmian text-center" style="font-size:19px;"><strong > <i class="fa fa-hand-o-right"></i> Click Here to Request a free Quote Now or <i class="fa fa-phone  process-mrleft3"></i>  +91-9958276296</strong></p> </div></a>

</div>

</div>

<div class="col-md-4" style="margin-top:30px;">

<div class="row">

<div class="features">

<div class="col-sm-12 col-md-12">

<div class="wow fadeInDown">

<div class="pull-clr15 boxshad bdrcorner">

<div class="pull-clr14 pullmian bdrcorner">

<h5 class="white-clr no-margin">RELATED CATEGORIES</h5>

</div>

<div class="pullpt1">

<?php

$sql_menu=db_query("select * from tbl_category where 1 and category_id!='$catID' and category_parent_id='$productPID' and category_status='Active' order by category_id asc");

while($MENU_DATA=mysqli_fetch_array($sql_menu)){

@extract($MENU_DATA);

?>

<div class="amiSubHover"><a href="<?=$site_url?>/<?=$MENU_DATA['category_url']?>.html"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i>

<?=$MENU_DATA['category_name']?>

</a></div>

<? } ?>

</div>

</div>

</div>

</div>

</div>

<!--/.services--> 

</div>

</div>

</div>

<!--/pricing-area--> 

</div>

<!--/container--> 

</section>

<? } ?>

<style type="text/css">

.amiSubHover{margin-left:10px; background-color:#E2E2E2; padding:10px; margin-bottom:10px; transition:all 0.7s;}

.amiSubHover a{color:#000; transition:all 0.7s;}

.amiSubHover:hover{background-color:#000; border-radius:5px; transition:all 0.7s;}

.amiSubHover:hover a{color:#fff; transition:all 0.7s;}

</style>

<?php include("contact-us-footer.php");?>

<?php include("webkey-footer.php");?>