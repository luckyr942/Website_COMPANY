
<style>

#main-menu{
    position: relative;
    left: -22px;} 
    .dsp-ptnr {
    display:none;}
    .logostydr{margin-top:19px;}
    .sectyd{margin-top:80px !important;}
     .sectyd1{margin-top:140px !important;}
      .center h2 {
    font-size: 30px;
}
.center{padding-bottom:20px;}
    
	@media (min-width:320px) and (max-width:767px) 
{
    .shortcode-item {
    margin-top: 50px;
}
    .skill-wrap {
   
    margin: -30px 0;
}
      .center h2 {
    font-size: 25px;
}
.center {
    text-align: center;
    padding-bottom:10px; */
}
.sectyd{margin-top:0px !important;}
.sectyd1{margin-top:80px !important;}
#amiID{display:none;}
	.navbar-toggle {
    position: relative;
    top:3px;
}
	.navbar-brand img{position:relative; top:-3px;}
	.menucss-blue{background-color:#2B2B2B!important;}
	#main-menu {
    position: relative;
		left:0px;}
	.navbar-header {
    height: 60px !important;
}
.bottom-footer {
    min-height: 57px !important;
}
.navbar-brand img {
    position: relative;
    top: -5px;
}
.dsp-ptnr {
    display: block;
    width: 100px;
    position: relative;
    top: -44px;
    right: 60px;
}

.navbar {
    background: #2b2b2b;
    height: 57px;
}
	}
</style>


<ul id="main-menu" class="sm menucss-blue">
  <li><a href="<?=$site_url?>" <?php if(($page_name=='index') || ($page_name=='sitemap') || ($page_name=='training') || ($page_name=='disclaimer')){ ?>class="current"<? } ?>>Home</a></li>
  <li> <a href="<?=$site_url?>/about-us.html" <?php if($page_name=='about-us'){ ?>class="current"<? } ?>>About Us</a></li>
<li>
    <a href="<?=$site_url?>/services.html" <?php if(($page_name=='services') || ($page_name=='category')){ ?>class="current"<? } ?>>Our Services <i class="fa fa-angle-down"></i></a>
    <ul>
        <?php 
        
        include("database.php");

        $sql = "SELECT * FROM `tbl_category` WHERE `category_parent_id`='0'";
        $run = mysqli_query($db, $sql) or die("Query not run");

        while($data = mysqli_fetch_assoc($run)){
            if(mysqli_num_rows($run) > 0){
                ?>
                <li>
                    <a href="<?=$site_url?>/<?php echo $data['category_url']?>.html"><?php echo $data['category_name']?></a>
                    <ul>
                        <?php
                           
                            $parentId = $data['category_id'];
                            $childSql = "SELECT * FROM `tbl_category` WHERE `category_parent_id` = $parentId";
                            $childRun = mysqli_query($db, $childSql) or die("Child query not run");
                            while($childData = mysqli_fetch_assoc($childRun)){
                            $serviceUrl = $site_url . '/';
                            if (isset($_REQUEST['location_url'])) {
                                $loc_slug = htmlspecialchars($_REQUEST['location_url']);
                                $serviceUrl .=  $loc_slug. '/';
                            }
                        
                            $serviceUrl .= '' . $childData['category_url'] . '.html';
                        ?>
                            <li>
                                <a href="<?php echo $serviceUrl; ?>"><?php echo $childData['category_name']?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</li>

  <!-----<li><a href="<?=$site_url?>/portfolio.html" <?php if($page_name=='portfolio'){ ?>class="current"<? } ?>>Our Work</a></li>------>
  <li><a href="<?=$site_url?>/packages.html" <?php if(($page_name=='packages') || ($page_name=='website-designing-packages') || ($page_name=='website-hosting-packages') || ($page_name=='seo-ranking-packages') || ($page_name=='smo-packages') || ($page_name=='ppc-packages') || ($page_name=='content-writing-packages') || ($page_name=='bulk-sms-packages') || ($page_name=='email-marketing-packages')){ ?>class="current"<? } ?>>Our Packages <i class="fa fa-angle-down"></i></a>
    <ul>
      <li ><a href="<?=$site_url?>/website-designing-packages.html">Web Designing Packages </a></li>
      <li ><a href="<?=$site_url?>/website-hosting-packages.html">Web Hosting Packages </a></li>
      <li><a href="<?=$site_url?>/seo-ranking-packages.html">SEO Ranking Packages</a></li>
      <li><a href="<?=$site_url?>/smo-packages.html">SMO Packages</a></li>
      <li><a href="<?=$site_url?>/ppc-packages.html">PPC Packages</a></li>
      <?php /*?><li><a href="<?=$site_url?>/data-entry-packages.html">DATA Entry Packages</a></li><?php */?>
      <li><a href="<?=$site_url?>/content-writing-packages.html">Content Writing Packages</a></li>
      <li><a href="<?=$site_url?>/bulk-sms-packages.html">Bulk SMS Packages</a></li>
      <li><a href="<?=$site_url?>/email-marketing-packages.html">Email Marketing Packages</a></li>
    </ul>
  </li>
  
  <li><a href="<?=$site_url?>/portfolio.html" <?php if($page_name=='portfolio'){ ?>class="current"<? } ?>>Our Work <i class="fa fa-angle-down"></i></a>
    <ul>
     
      <li><a href="<?=$site_url?>/portfolio.html?MainTag=Website%20Design/Development">Web Development Work</a></li>
      <li><a href="<?=$site_url?>/portfolio.html?MainTag=SEO">Digital Marketing Work</a></li>
    </ul>
  </li>


  <!------<li><a href="https://blogs.webkeyindia.com/" target="_blank">Blogs</a></li>------>
  <li><a href="<?=$site_url?>/career.html" <?php if($page_name=='career'){ ?>class="current"<? } ?>>Career</a></li>
  <li <?php if($page_name=='contact-us'){ ?>class="current"<? } ?>><a href="<?=$site_url?>/contact-us.html">Contact</a></li>
	  <li class="hidden-xs" style="margin-left:10px;"><img src="<?=$site_url?>/images/google-partner.png" style="width:100px; margin-top:-4px;"></li>
</ul>
</div>

<!------------->

