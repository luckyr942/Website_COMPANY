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
<title>Career | WebKeyIndia - Best Web Designing Company</title>
<meta name="description" content="Join our digital marketing company and advance your career. We are seeking talented individuals to join our dynamic team and drive success for our clients.">
<meta name="keywords" content=" Career in website design, Career in web development, Career in seo, Career in it company, website design in delhi, website design in delhi, website design company delhi,Telecaller jobs in Delhi">
<?php include 'headlink.php';?>
<!--OG Tag Start-->

<?php
$careerContent="Build your career with Webkeyindia, if you are looking for job in web designing company in Delhi and India.Send us your CV and build your career with us";
$careerTitle="Web Designer Delhi | Seo Executive | Telecaller Job Delhi";
$careerContent=substr(strip_tags($careerContent),0,300);
//$sql_categ1=db_scalar("select portfolio_image_name from tbl_portfolio where 1");
$careerImage="$site_url/images/team.jpg";
$pURL="$site_url/";
?>
<meta property="og:url"                content="<?=$site_url?>/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?=$careerTitle?>" />
<meta property="og:description"        content="<?=$careerContent?>" />
<meta property="og:image"              content="<?=$careerImage?>" />

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
<script type="text/javascript">
$(function() {
$('#main-menu').smartmenus({
subMenusSubOffsetX: 1,
subMenusSubOffsetY: -8
});
});
</script>
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
<?php
if(isset($_POST['submit'])){
@extract($_POST);
if($_FILES['file']['name']){
$allowedExts = array("doc","xls");
$flName = $_FILES["file"]["name"];
$temp = explode(".", $flName);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "application/msword")|| ($_FILES["file"]["type"] == "application/vnd.ms-excel"))&& in_array($extension, $allowedExts)){
if ($_FILES["file"]["error"] > 0){ echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
}else{
@unlink("resume_file"."/".$file_name);
$file_name=($_FILES['file']['name']);

//**** Change Duplicate Image name Start Here****//
$ext = substr($file_name, strrpos($file_name, "."));		 
$imageDupli = db_scalar("select count(*) from tbl_resume where 1 and resume_file_name='$file_name'"); 
if($imageDupli > 0){
$file_name = basename($file_name, $ext);
$file_name = basename($file_name, $ext) . rand(1,1000) . $ext;
}else{
$file_name = $file_name;
}
//**** Change Duplicate Image name End Here****//

move_uploaded_file($_FILES['file']['tmp_name'],"resume_file"."/".$file_name); 
$appost = mysqli_real_escape_string("$appost");
$fetch_query="insert into tbl_resume set 
	  resume_post='$appost',
	   resume_name='$jname',
	   resume_mobile='$phone',
	   resume_email='$email',
	   resume_file_name='$file_name',
	   resume_add_date=now()";                                   
	   $exe=db_query($fetch_query) or die("can't access");
	   $colr="green";
	   $err = "Form has been submitted successfully";
	   ?>
<script>
$(function() {
$('html, body').animate({
scrollTop: $("#contact-page").offset().top
}, 2000);
});
</script>
<?
}
}else{ 
$colr="red";
$err="Invalid File Name !!! Upload Only .doc(msword) File!"; 
?>
<script>
$(function() {
$('html, body').animate({
scrollTop: $("#contact-page").offset().top
}, 2000);
});
</script>
<?
}
}else{ $colr="red";$err="Please Attach Your Resume !!"; 
?>
<script>
$(function() {
$('html, body').animate({
scrollTop: $("#contact-page").offset().top
}, 2000);
});
</script>
<?
}
}
?>
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
    </div>
    <div class="container-fluid bottom-footer">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a><img src="images/google-partner.png" class="dsp-ptnr"> </div>
        <div class="collapse navbar-collapse navbar-right">
          <nav id="main-nav" role="navigation">
            <?php include("webkey-header-menu.php");?>
          </nav>
        </div>
      </div>
    </div>
  </nav>
</header>
<section id="about-us" class="no-margin pullmt1 bgwhite">
  <div class="container" style="margin-top:140px;">
    <div id="about-slider" class="no-margin">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
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
    </div>
  </div>
</section>
<section id="contact-info" class=" no-margin pullmt1">
  <div class="center container " style="margin-top:20px;">
    <h2  class="text-warning">Career</h2>
    <p class="lead no-margin text-alignpro">At Web Key India.com we add ‘extra’ in ‘ordinary’ and make it extraordinary, be it solution, people or career. This pinch of extra is an advantage that empowers our employee’s vision to perceive, perform and preserve. With a solid team of 800+ professionals, every member is given a chance to explore his best matching our best. At Web Key Network each member is the company because they do not work for any company they work for their own growth and with every successes achieved by company they find themselves a mile ahead in career.</p>
  </div>
  <div class="center container">
    <h2 class="text-warning">Opportunities</h2>
    <p class="lead no-margin text-alignpro">We are expanding in leaps and bounds so we have bountiful opportunities for entry-level careers to senior level profiles. We facilitate people to ride the ladder of success on a faster pace. With flexible service portfolio, we have a big platter of career opportunities where everyone is given equal chance to have his bite of success.</p>
  </div>
  <div class="center container">
    <h2 class="text-warning">Learning</h2>
    <p class="lead no-margin text-alignpro">We believe in “nurture and get nurtured” that is why each member of Team Web Key Network.com gets recurrent training sessions and guidance. It involves a continuous thought process to get tangible benefits to our customers, taking into account the uniqueness of their purpose. We know that consistent brushing of skill and knowledge of current trends is vital to perform “Upto the Mark” and “Above the Mark”. We never compromise on quality of our services and solutions, so essentially we do not compromise on the need of trainings and guidance.</p>
  </div>
  <div class="center container">
    <h2 class="text-warning">Work Culture</h2>
    <p class="lead no-margin text-alignpro">At Web Key India.com each employee is given an open platform to share opinions. This smooths the progress of stronger communication and strengthens our bond as a team. We admire existence of each employee and count him or her in every achievement. We believe that our people are our true asset, and we facilitate them with productive work culture.</p>
  </div>
  <div class="container">
    <h2 class="text-warning" style="font-size:32px;">Why work with WebKeyIndia</h2>
    <ul style="list-style:none;">
      <li><i class="fa fa-hand-o-right"></i> Opportunity to work with Best Website Designing Company in India.</li>
      <li><i class="fa fa-hand-o-right"></i> Opportunity to work with Best B2B Portal in India.</li>
      <li><i class="fa fa-hand-o-right"></i> People from corporate sales who are looking for office based sales profile can apply (No field sales).</li>
      <li><i class="fa fa-hand-o-right"></i> Fixed Day Shift Job.</li>
      <li><i class="fa fa-hand-o-right"></i> Fixed Salary + Attractive Daily/Weekly and Monthly Incentives.</li>
      <li><i class="fa fa-hand-o-right"></i> Enriching exposure – B2B model with opportunity to deal with senior level clients.</li>
      <li><i class="fa fa-hand-o-right"></i> Excellent growth opportunities.</li>
      <li><i class="fa fa-hand-o-right"></i> Work with FUN</li>
      <li><i class="fa fa-hand-o-right"></i> Salary/Experience NO BAR</li>
      <li><i class="fa fa-hand-o-right"></i> Will make your career in IT Industry</li>
      <li><i class="fa fa-hand-o-right"></i> No Stretching after office/working hours</li>
    </ul>
  </div>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <h1 class="text-warning" style="font-size:32px;">Current Openings</h1>
      <div class="accordion">
        <div class="panel-group" id="accordion1">
          <div class="panel panel-default">
            <div class="panel-heading active">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#1"> Executive/Senior Executive/Business Development Executive For Tele/Online Marketing <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="1" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div >
                    <p class="text-alignpro1">Looking for candidates with good communication, interpersonal and presentation skills. Previous experience in telemarketing / telesales / outbound calling / client servicing would be an added advantage. Dynamic and Focussed freshers are also welcome.</p>
                    <h4>Work Involves :</h4>
                    <ul>
                      <li>Marketing of the paid services / newly launched services.</li>
                      <li>Interacting with new clients using Tele conversation, Emails and chats.</li>
                      <li>Promoting the services of the company.</li>
                      <li>Customer care related objectives to be handled.</li>
                      <li>Coordination with senior managers in sales matters.</li>
                      <li>No cold calling, no field job</li>
                    </ul>
                    <h5>Note :</h5>
                    <ul>
                      <li>Candidates with experience in B2B Sevices, SEO Services and Websites Selling Services, would be given preference.</li>
                      <li>A candidate who has worked in Domestic / International BPO in out bound process dealing with service industry would be given preference.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#2"> Executive/Senior Executive/Business Development Executive For Field/Offline Marketing <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="2" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <p class="text-alignpro1">Looking for candidates with good communication, interpersonal and presentation skills. Previous experience in Offline-Marketing, Field Sales, Door 2 Door Marketing.</p>
                    <h4>Work Involves :</h4>
                    <ul>
                      <li>Marketing of the paid services / newly launched services.</li>
                      <li>Interacting with new clients using Tele conversation, Emails and chats.</li>
                      <li>Promoting the services of the company.</li>
                      <li>Customer care related objectives to be handled.</li>
                      <li>Coordination with senior managers in sales matters.</li>
                      <li>Generate new meeting/leads through calls</li>
                      <li>Reaching out to new customers and explaining them the benefits of our IT Services.</li>
                      <li>Analyzing customer's requirements and providing them solutions as per their needs.</li>
                      <li>Achieving Sales target by acquiring new clients and growing business from existing clients.</li>
                      <li>Interacting with new & existing clients through lead generated by telecallers.</li>
                    </ul>
                    <h5>Note :</h5>
                    <ul>
                      <li>Candidates with experience in B2B Sevices, SEO Services and Websites Selling Services, would be given preference.</li>
                      <li>A candidate who has worked in Domestic / International BPO in out bound process dealing with service industry would be given preference.</li>
                      <li>Candidate should have their own two wheeler vehicle transport such as bike or scooter and Laptop is a mandatory object.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#3"> Executive/Senior Executive For Customer Support Process <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="3" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <p class="text-alignpro1">Looking for Executive/Senior Executive For Customer Support Process.</p>
                    <h4>Required Skills :</h4>
                    <ul>
                      <li>Co-ordinate with clients to ensure that the deliverables are completed as per schedule and requirement.</li>
                      <li>Editing of raw files shared by clients.</li>
                      <li>Communication assignments are delivered with speed, superior quality and as per requirement.</li>
                      <li>Marketing of the add-on services / newly launched services.</li>
                      <li>Interacting with exiting clients using Tele conversation, Emails and chats.</li>
                      <li>Promoting the services of the company.</li>
                      <li>Customer care related objectives to be handled.</li>
                      <li>Coordination with senior managers in sales matters.</li>
                      <li>No cold calling, no field job.</li>
                      <li>Client management skills.</li>
                      <li>Communication Skills – Written/ Verbal.</li>
                      <li>Ability to manage multiple clients.</li>
                      <li>Team player and good coordination skills.</li>
                      <li>Time management / Disciplined.</li>
                      <li>Computer basics, comfortable with mailing, chatting.</li>
                    </ul>
                    <h5>Note :</h5>
                    <ul>
                      <li>Candidates with experience in B2B Sevices, SEO Services and Websites Selling Services, would be given preference.</li>
                      <li>A candidate who has worked in Domestic / International BPO in out bound process dealing with service industry would be given preference.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#4"> Team Leaders For Tele Marketing / Online Marketing / Offfline Marketing / Customer Support<i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="4" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <p class="text-alignpro1">Looking for candidates with good communication, interpersonal,presentation and team management skills. Previous experience in telemarketing / telesales / outbound calling / client servicing would be an added advantage.</p>
                    <h4>Key Responsibilities :</h4>
                    <ul>
                      <li>Motivate and inspire team members</li>
                      <li>Provide the team with a vision of the project objectives</li>
                      <li>Analyzing team members requirements and providing them solutions as per their needs.</li>
                      <li>Achieving Team's Sales targets by acquiring new clients and growing business from team members's clients.</li>
                      <li>Interacting with new & existing clients using Tele conversation, Emails and chats.</li>
                      <li>Promoting the services of the company.</li>
                      <li>Customer care related objectives to be handled.</li>
                      <li>Coordination with senior managers in sales matters.</li>
                      <li>Assure that the team members have the necessary education and training to effectively participate on the team</li>
                      <li>Familiarize the team with the customer needs, specifications, design targets, the development process, design standards, techniques and tools to support task performance</li>
                    </ul>
                    <h5>Note :</h5>
                    <ul>
                      <li>Candidates with experience in B2B Sevices, SEO Services and Websites Selling Services, would be given preference.</li>
                      <li>A candidate who has worked in Domestic / International BPO in out bound process dealing with service industry would be given preference.</li>
                      <li>Candidates (Offline) should have their own two wheeler vehicle transport such as bike or scooter and Laptop is a mandatory object.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#5"> Web Designers <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="5" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Job Description :</h4>
                    <ul>
                      <li>Would be responsible for creating web templates.</li>
                      <li>Translating design into HTML templates.</li>
                      <li>Developing different styles of design and layout.</li>
                      <li>Creating W3C compliant div & CSS 3 based sites. Tableless site.</li>
                    </ul>
                    <h4>Skills :</h4>
                    <ul>
                      <li>Experience in Photoshop,Dreamweaver & Illustrator.</li>
                      <li>Capable of working on dynamic websites.</li>
                      <li>Working experience with overseas client.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#6"> PHP Developers <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="6" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Job Description :</h4>
                    <ul>
                      <li>Experience : 2-4 years.</li>
                      <li>Coding, DB Design and Unit Testing.</li>
                      <li>Developing and programming interactive applications and websites.</li>
                      <li>Template Integration, Custom Component Development.</li>
                      <li>Delivering web applications in accordance to client specifications.</li>
                      <li>Ability to work independently in a high pressure environment to produce results.</li>
                    </ul>
                    <h4>Skills :</h4>
                    <ul>
                      <li>Must have: PHP, MySQLi, JavaScript.</li>
                      <li>Strong OOPS and RDBMS concept.</li>
                      <li>Good knowledge of HTML and CSS.</li>
                      <li>Working knowledge with Open Source CMS like Drupal, Joomla, Wordpress etc.</li>
                      <li>AJAX, jQuery, jSON.</li>
                      <li>Working experience with overseas client.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#7"> HR/Recruiters <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="7" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Job Description :</h4>
                    <ul>
                      <li>Experience : 6 months to 2 years.</li>
                      <li>Talent Acquisition.</li>
                      <li>Shortlisting Candidates.</li>
                      <li>Scheduling Interviews.</li>
                      <li>Employee Engagement Activities.</li>
                      <li>Compensation & Benefits.</li>
                      <li>Campus Hiring.</li>
                    </ul>
                    <h4>Skills :</h4>
                    <ul>
                      <li>In depth working knowledge of the entire recruiting life cycle.</li>
                      <li>Familiarity of levels /roles and associated technologies.</li>
                      <li>Hands-on experience in identifying potential candidates through Naukri & other job portals & other social network.</li>
                      <li>Screen and interview potential technical candidates including: phone interviews, and reference checking for current and future positions.</li>
                      <li>Communication Skills Written/ Verbal.</li>
                      <li>Good negotiating skills.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#8"> SEO Specialists <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="8" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Job Description :</h4>
                    <ul>
                      <li>Experience : 1 - 2 years.</li>
                      <li>META optimization On-page and Off-page.</li>
                      <li>Search engine promotions strategies for Google.com/ Yahoo.com/ BING. Com.</li>
                      <li>Link exchange strategies.</li>
                      <li>Directory submissions and revisions.</li>
                      <li>Internal link optimization.</li>
                      <li>SEO technical analysis and evaluation.</li>
                      <li>Key phrase research.</li>
                      <li>Stay up to date on the latest industry developments.</li>
                      <li>Article Submission.</li>
                      <li>Press Release Submission.</li>
                      <li>Book Marking, Social media marketing.</li>
                      <li>PPC Campaign.</li>
                    </ul>
                    <h4>Skills :</h4>
                    <ul>
                      <li>Experience in Photoshop,Dreamweaver & Illustrator.</li>
                      <li>Capable of working on dynamic websites.</li>
                      <li>Working experience with overseas client.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#9"> Content Writers <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="9" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Skills :</h4>
                    <ul>
                      <li>Writing unique content for web sites developed by us.</li>
                      <li>Editing content on the web sites.</li>
                      <li>Writing articles, blogs and newsletters for websites.</li>
                      <li>Summarising from given content.</li>
                      <li>Candidate with background of English honours, mass communication or Journalism, Advertisement can apply.</li>
                      <li>Fresher with excellent writing skills can apply!.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#10"> Web Testing Executive <i class="fa fa-angle-right pull-right"></i> </a> </h3>
            </div>
            <div id="10" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="media accordion-inner">
                  <div class="pull-left">
                    <h4>Job Description :</h4>
                    <ul>
                      <li>Experience : 1 - 2 years.</li>
                      <li>Design test cases and test scenarios.</li>
                      <li>Test dynamic web modules, web sites and applications.</li>
                      <li>Coordinate with the technical team and clients to deliver bug free web sites.</li>
                    </ul>
                    <h4>Skills :</h4>
                    <ul>
                      <li>Ability to work on multiple projects with varying deadlines.</li>
                      <li>Good written and verbal communications.</li>
                      <li>Ability to work independently and in a team-oriented environment.</li>
                      <li>Should have excellent exposure on Testing-Manual & Automation.</li>
                      <li>Must be detail-oriented, quality oriented and analytical.</li>
                    </ul>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary" onClick="document.getElementById('appost').focus();" required="required">Apply Now</button>
                    </div>
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
</section>
<section id="contact-page" class="pullmt2">
  <div class="container">
    <div class="center  no-margin">
      <h2>Apply Job</h2>
      <p class="lead text-muted">Fill the form below, we will get in touch very soon.</p>
    </div>
    <div class="row  no-margin">
      <p align="center" style="color:<?=$colr?>; font-weight:bold;">
        <?=$err?>
      </p>
      <form class="contact-form" name="frmPerson" method="post" onsubmit="return CareerEnqValidate();" enctype="multipart/form-data">
        <div class="col-sm-5 col-sm-offset-1">
          <div class="form-group">
            <label>Apply For *</label>
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
            <select class="form-control" name="appost" id="appost" style="border:1px solid #D3D3D3;">
              <option value=""> ---Please Select Your Post--- </option>
              <option value="Executive/Senior Executive/Business Development Executive For Tele/Online Marketing">Executive/Senior Executive/Business Development Executive For Tele/Online Marketing</option>
              <option value="Executive/Senior Executive/Business Development Executive For Field/Offline Marketing">Executive/Senior Executive/Business Development Executive For Field/Offline Marketing</option>
              <option value="Executive/Senior Executive For Customer Support Process">Executive/Senior Executive For Customer Support Process</option>
              <option value="Team Leaders For Tele Marketing / Online Marketing / Offfline Marketing / Customer Support">Team Leaders For Tele Marketing / Online Marketing / Offfline Marketing / Customer Support</option>
              <option value="Web Designers">Web Designers</option>
              <option value="PHP Developers">PHP Developers</option>
              <option value="HR/Recruiters">HR/Recruiters</option>
              <option value="SEO Specialists">SEO Specialists</option>
              <option value="Content Writers">Content Writers</option>
              <option value="Web Testing Executive">Web Testing Executive</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <label>Full Name *</label>
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" name="jname" id="jname" maxlength="70" class="form-control" style="border:1px solid #D3D3D3;">
            </div>
          </div>
          <div class="form-group">
            <label>Mobile *</label>
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" name="phone" id="phone" maxlength="15" class="form-control" style="border:1px solid #D3D3D3;">
          </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <label>Email *</label>
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="text" name="email" id="email" maxlength="70" class="form-control" style="border:1px solid #D3D3D3;">
            </div>
          </div>
          <div class="form-group">
            <label>Attach Resume *</label>
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-file-word-o" aria-hidden="true"></i></span>
            <input type='file' name='file' id="file" class="form-control" style="border:1px solid #D3D3D3;">
            </div>
          </div>
          <div class="form-group" style="margin-top:26px;">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Apply Now</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<script language="javascript">
function CareerEnqValidate(){   
var mypost=document.getElementById('appost').value;
var myname=document.getElementById('jname').value;
var mymobile=document.getElementById('phone').value;
var myemail=document.getElementById('email').value;
var myfile=document.getElementById('file').value;
function trim(str){				
return str.replace(/^\s*|\s*$/g,'');
}
if(trim(document.getElementById('appost').value)==0){		
alert("Enter Post Applied For !");
document.getElementById('appost').focus();
return false;
}			
if(trim(document.getElementById('jname').value)==0){		
alert("Enter Your Name !");
document.getElementById('jname').focus();
return false;
}	
if (!myname.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('jname').value='';
document.getElementById('jname').focus();
return false;
}
var mobno=trim(document.getElementById('phone').value);
if(trim(document.getElementById('phone').value)==0){
alert("Enter your mobile no.!");
document.getElementById('phone').focus();
return false;
}
if(isNaN(document.getElementById('phone').value)){
alert("Mobile no. should be no.!");
document.getElementById('phone').focus();
return false;
}
if(mobno.length < 10){
alert("Mobile no. should be 10 digit long !");
document.getElementById('phone').focus();
return false;
}
var email=trim(document.getElementById('email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email==''){
alert('Please Enter Email Id');
document.getElementById('email').focus();
return false;
}else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('email').focus();
return false;
}
if(trim(document.getElementById('file').value)==0){
alert("Select your resume to upload !");
document.getElementById('file').focus();
return false;
}
}
</script>
<?php include("contact-us-footer.php");?>
<?php include("webkey-footer.php");?>