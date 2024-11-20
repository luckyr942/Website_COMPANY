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
<title>Mobile Apps Development | SEO | SMO | SMM | Company in Delhi India</title>
<meta name="description" content="WebKeyIndia Company Develop best Android, IOS Apps in Delhi. And one of the best SEO, SMO, and SMM company in Delhi. We provide affordable web hosting services in Delhi.">
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
	  <style>
		  .dsp-ptnr{display: none;}
		  @media only screen and (max-width: 700px)
		  { .dsp-ptnr{display:block; position: relative;
    top: -37px; width:100px;
    right: 56px;}}
	  </style>
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a>
			<img src="images/google-partner.png" class="dsp-ptnr"> 
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
<!--/header-->
<section id="about-us" class="no-margin pullmt1 bgwhite">
  <div class="container" style="margin-top:140px;">
    <div class="center wow fadeInDown">
      <h2>About Web Key India</h2>
      <p class="lead">When we think about websites, the very first thing which clicks our mind is that it should not be the image of the company only, instead it should reflect our soul, motto , aim, message and many other vital things which the reader just not read but feel also. </p>
    </div>
    
    <!-- about us slider -->
    <div id="about-slider" class="no-margin">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active"> <img src="<?=$site_url?>/images/team.jpg" class="img-responsive" alt=""> </div>
          <div class="item"> <img src="<?=$site_url?>/images/team1.jpg" class="img-responsive" alt=""> </div>
          <div class="item"> <img src="<?=$site_url?>/images/team2.jpg" class="img-responsive" alt=""> </div>
          <div class="item"> <img src="<?=$site_url?>/images/team3.jpg" class="img-responsive" alt=""> </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
      <!--/#carousel-slider--> 
    </div>
    <!--/#about-slider--> 
    
    <!-- Our Skill -->
    <div class=" pullpt clearfix no-margin">
      <div class="center wow fadeInDown no-margin">
        <h2>Our Mission</h2>
        <p class="lead text-alignpro1">When we think about websites, the very first thing which clicks our mind is that it should not be the image of the company only, instead it should reflect our soul, motto , aim, message and many other vital things which the reader just not read but feel also. 
          
          Well, this is the reason we at Webkeyindia do things totally different than what a regular trend is about and also followed by many others. We know that simplicity speaks more than anything and thus keeps this idea as our soul aim and we are committed to structure such designs which are ease to grab by the people when they visit our website. All essential covering along with the details still very simple to handle with so the message conveyed is straight and simple to the person. We built website that looks Unique, Creative, useful according to the client's business and market as well. 
          
          Webkeyindia believe in one mantra "Service Speaks more than Words" and we are here in Webkekindia oathed to provide Service to our Clients. <br>
          <strong>Action</strong>: We not only design client's business websites and promote them but we give them our personal touch and necessary implementations just to provide our client the outmost benefit of each penny he/she invests with us on our words. </p>
      </div>
    </div>
    <div class=" clearfix no-margin">
      <div class="center wow fadeInDown no-margin">
        <h2>Our Vision</h2>
        <p class="lead text-alignpro1"> We are focused to provide IT solutions for businesses for solving (regular and complex) both business problems believing that Investments in technologies can only be downsized when it results in better and quick resolution, and revenue generation. With this motive, we build agile database driven website / Software applications that can suit to your needs and can grow with your requirements. Webkeyindia's core strength lies in providing agile, highly reliable, constantly evolving software and web application solutions to our clients. We reach this through continuously pursuing understanding of your business processes and converting them into custom website or software applications. 
          
          The reason why we have been successfully delivering solutions to our clients is because our focus is always on constant study of latest developments in technologies and finding ways and means to leverage them to enable us to serve you better. Moreover, we constantly work and research simultaneously what suits for the betterment of our client's business time to time. 
          
          Today where Internet is nopt only a source or means of business or just a media to present corporate information, we help our Business clients by providing them dynamic web solutions that their customers expect from clients r website at affordable rates.</p>
      </div>
    </div>
    <div class="skill-wrap clearfix no-margin">
      <div class=" wow fadeInDown no-margin">
        <h2>Our Advantages:</h2>
        <ul>
          <li>Focusing and implementing on client's feedback</li>
          <li>Generating flow through diverting web traffic to concerned Businesses.</li>
          <li>Generating huge prospective of business in the market through providing Pay Per Click Tool (PPC)</li>
          <li>Promoting the website in such a way so it retains Top ranking which increase max visibillity and interest as well.</li>
          <li>Service Assistance 24x7</li>
        </ul>
      </div>
    </div>
    
    <!--/.our-skill-->
    <section id="content" class="shortcode-item">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-7">
            <h2>Our Network</h2>
            <div class="tab-wrap">
              <div class="media">
                <div class="parrent pull-left">
                  <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">TradeKeyindia.Com</a></li>
                    <li><a href="#tab2" data-toggle="tab" class="analistic-02">eMogli.Com</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">eBulkSMSIndia.com</a></li>
                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">WholesalersIndia.Com</a></li>
                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">DelhiNcrAds.Com</a></li>
                    <li class=""><a href="#tab6" data-toggle="tab" class="tehnical">JobsKeyIndia.Com</a></li>
                  </ul>
                </div>
                <div class="parrent media-body">
                  <div class="tab-content">
                    <div class="tab-pane active in" id="tab1">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="<?=$site_url?>/images/tki.png">
                          <h4>TradeKeyindia.com</h4>
                          <p>Established in The year 2009. today TradeKeyindia Develop as the primmest hub for the business communities trading pin to plane! This B2B Portal is managed by webKeyIndia india's Best Web Designing company. TradeKeyindia India best B2B portal where business entrepreneurs can communicate For business purpose. This B2B portal is providing leads for a wide range of products.</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="<?=$site_url?>/images/emogli.png">
                          <h4>eMogli.Com</h4>
                          <p>eMogli Is Launched in December 2015. eMogli is largest searchable Online shopping portal with the widest assortment of 10 million products across 1K categories, where you can buy unlimited product. eMogli understand the importance of latest and trending products. That's why our eMogli Online shopping portal Trending Now.</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="<?=$site_url?>/images/eBulkSMS.png">
                          <h4>eBulkSMSIndia.com</h4>
                          <p>eBulksmsindia is a best bulk sms service provider in india has grown to be a leader within the SMS industry. we are registered Telemarketer in India. Since 2015 company has consolidated its presence in the Messaging Industry and have been providing quality services to the Customers.We are India’s largest Mobile Marketing Solutions provider that serve to corporate and individuals.</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="">
                          <h4>WholesalersIndia.Com</h4>
                          <p>Wholesalersindia is India largest searchable marketplace and b2b directory destination where business owners( Exporters Manufacturers Suppliers and Buyers) Have benefited to produce value from Endless online trade opportunities and Buyer Enquiries.We are committed to provide each of the business entrepreneurs with the utmost exposure to the global market conditions and provide them a platform where they can interact with respective community.</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab5">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="<?=$site_url?>/images/delhincr.png">
                          <h4>DelhiNcrAds.com</h4>
                          <p>DelhiNcrAds is Delhi Ncr No. 1 Commercial and Political local search engine provider Connecting Buyers and suppliers in the city every day. Our Local search engine provides comprehensive search results on web directory and offers to find local business listings with geographical constraints. It is the website on which we have created platform for all people of Delhi Ncr to know about the business of Delhi</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab6">
                      <div class="media">
                        <div class="media-body"> <img class="img-responsive" src="<?=$site_url?>/images/jobs.gif">
                          <h4>JobsKeyIndia.Com</h4>
                          <p>Jobskyindia is india most Fastest growing recruitment portal. Launched in 2008, Today 200 million people have registered on the Monster Worldwide network.Our mission is to touch the horizon where our capabilities may successfully meet with the requirements of our clients, that too with ultimate transparency and cost-effectiveness.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/.tab-content--> 
                </div>
                <!--/.media-body--> 
              </div>
              <!--/.media--> 
            </div>
            <!--/.tab-wrap--> 
          </div>
          <!--/.col-sm-6-->
          
          <div class="col-xs-12 col-sm-5">
            <h2>WebKey's Employe Reviews/Feedbacks</h2>
            <div class="accordion">
              <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                  <div class="panel-heading active">
                    <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> WebKey: A good company/Family <i class="fa fa-angle-right pull-right"></i> </a> </h3>
                  </div>
                  <div id="collapseOne1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        <div >
                          <h4>Sanjana</h4>
                          <p class="text-alignpro1">The work environment in "WebKey" is extraordinarily wonderful and competitive. The corporation makes a speciality of bringing out the great in an employee through growing a drive that is fuelled with the aid of the willingness to contribute and ‘win’."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"> Working with Enjoyment in WebKey <i class="fa fa-angle-right pull-right"></i> </a> </h3>
                  </div>
                  <div id="collapseTwo1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        <div class="pull-left">
                          <h4>Hasrat</h4>
                          <p class="text-alignpro1">Considering becoming a member of "Web Key India" and have made many friends and gathered some brilliant memories over the years. I have always had an enjoyable time working with my each superiors and co-employees.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1"> Feeling Proud to work with WebKey <i class="fa fa-angle-right pull-right"></i> </a> </h3>
                  </div>
                  <div id="collapseThree1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        <div class="pull-left">
                          <h4>Ravendra Singh</h4>
                          <p class="text-alignpro1">All through my 3 years with "Web Key India", i have been given the opportunity to nurture my professional career development by finding a function inside the business enterprise that suits my pastimes and competencies.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/#accordion1--> 
            </div>
          </div>
        </div>
        <!--/.row--> 
      </div>
      <!--/.container--> 
    </section>
    
    <!-- our-team -->
    <div class="team no-margin pullmt2">
      <div class="center wow fadeInDown">
        <h2>Team of Web Key India</h2>
        <p class="lead">WebKeyIndia team is considered as the backbone of the business on the online segment. We have marketing teams who are constantly working as per the requirement of the business needs for the promotions and conversion of customer towards the client's business. On the other hand, our support team can be said as the people behind the camera who do their work so smartly and perfectly as per the client's business needs. As far as our promotion team is concerned, they are so perfect and well experienced in their job that they know what actually suits the client's business and how it can be fulfilled within a specific time frame with continuous efforts on it.. They are well versed in their respective field. They know the company motto and they not only work for the company but from their heart they are committed to this motto of their own.</p>
      </div>
      <div class="row clearfix no-margin">
        <div class="col-md-3 col-sm-6">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left"> <img class="media-object" src="<?=$site_url?>/images/seema.jpg" alt=""> </div>
              <div class="media-body"> </div>
            </div>
            <p>
            <h4>Seema Nagar</h4>
            <h5>(Project Coordinator)</h5>
            
            <!--<ul class="social_icons">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>-->
            </p>
            <!--/.media -->
            <p>"It’s been 6 years that i have been working in Web Key India and it has proved to be an awesome experience for me. I have been capable of expand myself both ‘Individually and Professionally’."</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left"> <img class="media-object " src="<?=$site_url?>/images/amitabh.jpg" alt=""> </div>
              <div class="media-body"> </div>
            </div>
            <p>
            <h4>Mr. Amitabh Kumar Sinha</h4>
            <h5>(Senior Web Developer)</h5>
            
            <!--<ul class="social_icons">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>-->
            </p>
            <!--/.media -->
            <p> My major motivation for becoming a member of Web Key India targeted around the fantastic increase capability for both myself and the organization. </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left"> <img class="media-object" src="<?=$site_url?>/images/ankush.jpg" alt=""> </div>
              <div class="media-body"> </div>
            </div>
            <p>
            <h4>MR.Ankush Choudhary</h4>
            <h5>(Digital Marketing Expert)</h5>
            
            <!--<ul class="social_icons">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>-->
            </p>
            <!--/.media -->
            <p>"I had joined "Web Key India" as a "SEO Executive" and feature labored my way as much as my current designation as Digital Marketing Expert. "</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="media">
              <div class="pull-left "> <img class="media-object" src="<?=$site_url?>/images/talib.jpg" alt="" > </div>
              <div class="media-body"> </div>
            </div>
            <p>
            <h4>MR.Talib Choudhary</h4>
            <h5>(Senior Web Designer)</h5>
            
            <!--<ul class="social_icons">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>-->
            </p>
            <!--/.media -->
            <p>"I have been working in Web Key India, from last three years. It’s been an excellent revel because i have got several opportunities to improve my company abilities.</p>
          </div>
        </div>
        <!--/.col-lg-4 --> 
        
        <!--/.col-lg-4 --> 
      </div>
      <!--/.row --> 
      
      <!--skill_border--> 
      
      <!--/.row--> 
    </div>
    <!--section--> 
  </div>
  <!--/.container--> 
</section>
<!--/about-us-->

<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>