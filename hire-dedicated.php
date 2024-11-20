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
    <title>SEO Specialist | PHP Developer | Data Entry Operatoer| Hire Dedicated Team</title>
    <?php include 'headlink.php';?>
    <meta name="description" content="Thank you for your interest in India's Best Web Designing Company services. Please provide the following information about your business needs to help us serve you better.">
    <meta name="keywords" content="hire dedicated seo specialist in delhi india, hire dedicated PHP Developer in delhi india, hire dedicated Data Entry Operatoer in delhi india">
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
"pricerange":"Affordable | Call: +91-9958276296 | Mail Us: support@webkeyindia.com",
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
    <link href="<?=$site_url?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=$site_url?>/css/animate.min.css" rel="stylesheet">
    <link href="<?=$site_url?>/css/main.css" rel="stylesheet">
    <link href="<?=$site_url?>/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$site_url?>/css1/style.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="<?=$site_url?>/css1/fractionslider.css">
    <?php
if(isset($_POST['HireSubmit'])){
@extract($_POST);
if($hire_team_name!='' || $hire_team_mobile!='' || $hire_team_email!=''){
	if(is_numeric($hire_team_mobile)){
$hire_team_description = mysqli_real_escape_string("$hire_team_description");
 $con_query="insert into tbl_hire_team set 
					   hire_team_name='$hire_team_name',
					   hire_team_comp_name='$hire_team_comp_name',
					   hire_team_mobile='$hire_team_mobile',
					   hire_team_country='$hire_team_country',
					   hire_team_email='$hire_team_email',
					    hire_team_looking_for='$hire_team_looking_for',
					   hire_team_description='$hire_team_description',
					   hire_team_add_date=now()";                                   
					   $exec = db_query($con_query) or die("can't access");
					   $msg="<table align='center' cellSpacing='0' cellPadding='0' border='1' style='border:1px solid #004A95; width:600px;'>
  <tbody>
    <tr>
      <td vAlign='top' style='background-color:#004A95; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3'>Enquiry From WebKeyIndia.com</td>
    </tr>
    <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Name</b></td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_name</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Company Name</b></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_comp_name </td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Mobile </b></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_mobile</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Email-Id</b></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_email </td>
    </tr>
	<tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Looking For </b></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_looking_for</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Detail </b></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$hire_team_description</td>
    </tr>    
  </tbody>
</table>";
$mail_to_client="astechmedia.in@gmail.com";
//$mail_to_client="amitabh.tradekeyindia@gmail.com";
$sub_client="Hire a Dedicated Team Enquiry From WebKeyIndia";
$mail_client_body = "$msg";	
$sender_client ="WebKeyIndia.com";		
$headers_client  = "MIME-Version: 1.0" . "\r\n";
$headers_client .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_client .= "from: ".$sender_client."\n";
if($mail_to_client!=''){
  @mail($mail_to_client,$sub_client,$mail_client_body,$headers_client);
}					   
  $succMsg = "Thanks for showing your interest. We will contact you within 24 hours.";
?>
    <script>
        $(function() {
            $('html, body').animate({
                scrollTop: $("#showMSG").offset().top
            }, 2000);
         });
    </script>
    <? 
	  }
     }
	}
 ?>
    </head>
    <body>
<header id="header" class="no-margin">
      <nav  class="navbar navbar-inverse no-margin navbar-fixed-top" role="banner">
    <div id="amiID"  class="top-bar no-margin pullpt2 ">
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
              <a class="navbar-brand" href="<?=$site_url?>"><img src="<?=$site_url?>/images/logo.png" alt="logo" style="margin-bottom:8px;"></a> </div>
        <div class="collapse navbar-collapse navbar-right">
              <nav id="main-nav" role="navigation"> 
            <?php include("webkey-header-menu.php");?>
          </nav>
            </div>
      </div>
        </div>
  </nav>
    </header>
<section id="hireservices" class="service-item no-margin pullpt" style="padding-top:160px; padding-bottom:0px !important;">
      <div class="container">
    <div class="center wow fadeInDown">
          <h2>Hire Dedicated Team / Resource</h2>
          <p class="lead">Why should you hire a dedicated resource? Businesses that have adopted this model have witnessed a surge in productivity and a drop in the project development cost by 40%. So, instead of splurging on training and technological resources, WebKeyIndia’s “Hiring Dedicated Team/ Resource” model enables businesses to choose the best from a pool of unrivaled resources and couple them with state-of-the-art infrastructure to form a remote team</p>
        </div>
    <div class="row">
          <div class="col-sm-6 col-md-4 ">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(0,82,164,1);">
              <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Website-Developer.png" alt="Hire Web Designing & Development Team in Delhi" title="Hire Web Designing & Development Team in Delhi"> </div>
              <div class="media-body">
            <h3 class="media-heading white-clr text-center">Hire Web Designing & Development Team</h3>
            <ul class="white-clr">
                  <li>Dedicated staff working just for you</li>
                  <li>Ease of communication with 24 hours support</li>
                  <li>Cost effective & guaranteed timely communication</li>
                  <li>Daily and weekly working reporting as per your need</li>
                  <li>Extensive experience with e-commerce, cms, crm, social networks etc.</li>
                  <li>Knowledge of php based frameworks like cake php,zend</li>
                  <li>Ensure programmer presence and backup arrangements</li>
                  <li>100% satisfaction guaranteed!</li>
                </ul>
          </div>
            </div>
      </div>
          <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(60,60,60,1);">
              <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Digital Marketing-Expert.png" alt="Hire a Dedicated Digital Marketing Team in Delhi" title="Hire a Dedicated Digital Marketing Team in Delhi"> </div>
              <div class="media-body">
            <h3 class="media-heading white-clr text-center">Hire a Dedicated Digital Marketing Team</h3>
            <ul class="white-clr">
                  <li> Devoted team on your project which comprises of On Page and Off Page optimization, content writing, link building and Social Media Expert</li>
                  <li>Complete attention of SEO Expert</li>
                  <li>Daily work report on all working days</li>
                  <li>Innovative approach to be followed</li>
                  <li>Scope to implement new strategies</li>
                  <li>High savings if you have multiple websites</li>
                  <li>Developing content relevant to your business regularly and post them on website and external article posting sites</li>
                  <li>PPC Advertising providing Pay Per Click Management services at affordable Cost </li>
                </ul>
          </div>
            </div>
      </div>
          <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown myclass" style="background-color:rgba(0,108,108,1);">
              <div class="" align="center"> <img class="img-responsive" src="<?=$site_url?>/images/Hire-Data-Entry-Operator.png" alt="Hire Content Creation Team in Delhi" title="Hire Content Creation Team in Delhi"> </div>
              <div class="media-body">
            <h3 class="media-heading white-clr text-center">Hire Content Creation Team</h3>
            <p class="white-clr">If you are looking for content creation expert team. With the assistance of industry experts, we are rendering content creation services. Your success on social media entirely depends on the success of the content you post. Written posts, blogs, articles, guides, Images, Videos, Producing effective, high-performing content, however, these articles demonstrate your company’s knowledge and expertise, which can help build your credibility and reputation. Good images or video definitely increase engagement, and they endear your brand to customers. They can also keep customers from quickly swiping past your post and missing your message. </p>
          </div>
            </div>
      </div>
        </div>
  </div>
    </section>
<section style="padding-top:30px; background-color:#3E3E3E;">
      <div class="container">
    <h2 class="text-center" style="color:#FFFFFF;">Kindly fill the form to hire a Dedicated Team / Resource</h2>
    <div class="wow fadeInDown">
          <div class="row pullbottom">
        <form method="post" action="" onSubmit="return HireEnqValidate()">
              <div class="col-md-12" align="center">
            <h2 style="color:<?php if($errVal==1){ ?>red<? }else{ ?>green<? } ?> !important;" align="center">
                  <?=$succMsg?>
                </h2>
            <div class="form-group">
                  <div class="col-md-6" >
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                   <input type="text" class="form-control" placeholder="Your name" name="hire_team_name" id="uname" value="" style="border:1px solid #D3D3D3;">
                  </div>
                      <br/>
                    </div>
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control"  placeholder="Company Name" name="hire_team_comp_name" id="company_name" value="" style="border:1px solid #D3D3D3;">
                  </div>
                      <br />
                    </div>
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" class="form-control"  placeholder="Email" name="hire_team_email" id="uemail" value="" style="border:1px solid #D3D3D3;">
                  </div>
                      <br />
                    </div>
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" class="form-control"  placeholder="Mobile number" name="hire_team_mobile" id="uphone" value="" style="border:1px solid #D3D3D3;">
                  </div>
                      <br />
                    </div>
              </div>
                  <div class="col-md-6" >
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                    <select name="hire_team_country" class='form-control' style="border:1px solid #D3D3D3;">
                          <option value="AFGHANISTAN">AFGHANISTAN</option>
                          <option value="ALBANIA">ALBANIA</option>
                          <option value="ALGERIA">ALGERIA</option>
                          <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                          <option value="ANDORRA">ANDORRA</option>
                          <option value="ANGOLA">ANGOLA</option>
                          <option value="ANGUILLA">ANGUILLA</option>
                          <option value="ANTARCTICA">ANTARCTICA</option>
                          <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                          <option value="ARGENTINA">ARGENTINA</option>
                          <option value="ARMENIA">ARMENIA</option>
                          <option value="ARUBA">ARUBA</option>
                          <option value="AUSTRALIA">AUSTRALIA</option>
                          <option value="AUSTRIA">AUSTRIA</option>
                          <option value="AZERBAIJAN">AZERBAIJAN</option>
                          <option value="BAHAMAS">BAHAMAS</option>
                          <option value="BAHRAIN">BAHRAIN</option>
                          <option value="BANGLADESH">BANGLADESH</option>
                          <option value="BARBADOS">BARBADOS</option>
                          <option value="BELARUS">BELARUS</option>
                          <option value="BELGIUM">BELGIUM</option>
                          <option value="BELIZE">BELIZE</option>
                          <option value="BENIN">BENIN</option>
                          <option value="BERMUDA">BERMUDA</option>
                          <option value="BHUTAN">BHUTAN</option>
                          <option value="BOLIVIA">BOLIVIA</option>
                          <option value="BOSNIA AND HERZEGOWINA">BOSNIA AND HERZEGOWINA</option>
                          <option value="BOTSWANA">BOTSWANA</option>
                          <option value="BOUVET ISLAND (Norway)?">BOUVET ISLAND (Norway)?</option>
                          <option value="BRAZIL">BRAZIL</option>
                          <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY</option>
                          <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                          <option value="BULGARIA">BULGARIA</option>
                          <option value="BURKINA FASO">BURKINA FASO</option>
                          <option value="BURUNDI">BURUNDI</option>
                          <option value="CAMBODIA">CAMBODIA</option>
                          <option value="CAMEROON">CAMEROON</option>
                          <option value="CANADA">CANADA</option>
                          <option value="CAPE VERDE">CAPE VERDE</option>
                          <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
                          <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN REPUBLIC</option>
                          <option value="CHAD">CHAD</option>
                          <option value="CHILE">CHILE</option>
                          <option value="CHINA">CHINA</option>
                          <option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
                          <option value="COCOS (KEELING) ISLANDS (Austrailia)">COCOS (KEELING) ISLANDS (Austrailia)</option>
                          <option value="COLOMBIA">COLOMBIA</option>
                          <option value="COMOROS">COMOROS</option>
                          <option value="CONGO">CONGO</option>
                          <option value="CONGO, THE DRC">CONGO, THE DRC</option>
                          <option value="COOK ISLANDS">COOK ISLANDS</option>
                          <option value="COSTA RICA">COSTA RICA</option>
                          <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
                          <option value="CROATIA (local name: Hrvatska)">CROATIA (local name: Hrvatska)</option>
                          <option value="CUBA">CUBA</option>
                          <option value="CYPRUS">CYPRUS</option>
                          <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                          <option value="DENMARK">DENMARK</option>
                          <option value="DJIBOUTI">DJIBOUTI</option>
                          <option value="DOMINICA">DOMINICA</option>
                          <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
                          <option value="EAST TIMOR">EAST TIMOR</option>
                          <option value="ECUADOR">ECUADOR</option>
                          <option value="EGYPT">EGYPT</option>
                          <option value="EL SALVADOR">EL SALVADOR</option>
                          <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                          <option value="ERITREA">ERITREA</option>
                          <option value="ESTONIA">ESTONIA</option>
                          <option value="ETHIOPIA">ETHIOPIA</option>
                          <option value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
                          <option value="FAROE ISLANDS">FAROE ISLANDS</option>
                          <option value="FIJI">FIJI</option>
                          <option value="FINLAND">FINLAND</option>
                          <option value="FRANCE">FRANCE</option>
                          <option value="FRANCE, METROPOLITAN">FRANCE, METROPOLITAN</option>
                          <option value="FRENCH GUIANA">FRENCH GUIANA</option>
                          <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
                          <option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
                          <option value="GABON">GABON</option>
                          <option value="GAMBIA">GAMBIA</option>
                          <option value="GEORGIA">GEORGIA</option>
                          <option value="GERMANY">GERMANY</option>
                          <option value="GHANA">GHANA</option>
                          <option value="GIBRALTAR">GIBRALTAR</option>
                          <option value="GREECE">GREECE</option>
                          <option value="GREENLAND">GREENLAND</option>
                          <option value="GRENADA">GRENADA</option>
                          <option value="GUADELOUPE">GUADELOUPE</option>
                          <option value="GUAM">GUAM</option>
                          <option value="GUATEMALA">GUATEMALA</option>
                          <option value="GUINEA">GUINEA</option>
                          <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                          <option value="GUYANA">GUYANA</option>
                          <option value="HAITI">HAITI</option>
                          <option value="HEARD AND MC DONALD ISLANDS">HEARD AND MC DONALD ISLANDS</option>
                          <option value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)</option>
                          <option value="HONDURAS">HONDURAS</option>
                          <option value="HONG KONG">HONG KONG</option>
                          <option value="HUNGARY">HUNGARY</option>
                          <option value="ICELAND">ICELAND</option>
                          <option value="INDIA" selected>INDIA</option>
                          <option value="INDONESIA">INDONESIA</option>
                          <option value="IRAN (ISLAMIC REPUBLIC OF)">IRAN (ISLAMIC REPUBLIC OF)</option>
                          <option value="IRAQ">IRAQ</option>
                          <option value="IRELAND">IRELAND</option>
                          <option value="ISRAEL">ISRAEL</option>
                          <option value="ITALY">ITALY</option>
                          <option value="JAMAICA">JAMAICA</option>
                          <option value="JAPAN">JAPAN</option>
                          <option value="JORDAN">JORDAN</option>
                          <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                          <option value="KENYA">KENYA</option>
                          <option value="KIRIBATI">KIRIBATI</option>
                          <option value="KOREA, D.P.R.O.">KOREA, D.P.R.O.</option>
                          <option value="KOREA, REPUBLIC OF">KOREA, REPUBLIC OF</option>
                          <option value="KUWAIT">KUWAIT</option>
                          <option value="KYRGYZSTAN">KYRGYZSTAN</option>
                          <option value="LAOS">LAOS</option>
                          <option value="LATVIA">LATVIA</option>
                          <option value="LEBANON">LEBANON</option>
                          <option value="LESOTHO">LESOTHO</option>
                          <option value="LIBERIA">LIBERIA</option>
                          <option value="LIBYAN ARAB JAMAHIRIYA">LIBYAN ARAB JAMAHIRIYA</option>
                          <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                          <option value="LITHUANIA">LITHUANIA</option>
                          <option value="LUXEMBOURG">LUXEMBOURG</option>
                          <option value="MACAU">MACAU</option>
                          <option value="MACEDONIA">MACEDONIA</option>
                          <option value="MADAGASCAR">MADAGASCAR</option>
                          <option value="MALAWI">MALAWI</option>
                          <option value="MALAYSIA">MALAYSIA</option>
                          <option value="MALDIVES">MALDIVES</option>
                          <option value="MALI">MALI</option>
                          <option value="MALTA">MALTA</option>
                          <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
                          <option value="MARTINIQUE">MARTINIQUE</option>
                          <option value="MAURITANIA">MAURITANIA</option>
                          <option value="MAURITIUS">MAURITIUS</option>
                          <option value="MAYOTTE">MAYOTTE</option>
                          <option value="MEXICO">MEXICO</option>
                          <option value="MICRONESIA, FEDERATED STATES OF">MICRONESIA, FEDERATED STATES OF</option>
                          <option value="MOLDOVA, REPUBLIC OF">MOLDOVA, REPUBLIC OF</option>
                          <option value="MONACO">MONACO</option>
                          <option value="MONGOLIA">MONGOLIA</option>
                          <option value="MONTENEGRO">MONTENEGRO</option>
                          <option value="MONTSERRAT">MONTSERRAT</option>
                          <option value="MOROCCO">MOROCCO</option>
                          <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                          <option value="MYANMAR (Burma)">MYANMAR (Burma)</option>
                          <option value="NAMIBIA">NAMIBIA</option>
                          <option value="NAURU">NAURU</option>
                          <option value="NEPAL">NEPAL</option>
                          <option value="NETHERLANDS">NETHERLANDS</option>
                          <option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES</option>
                          <option value="NEW CALEDONIA">NEW CALEDONIA</option>
                          <option value="NEW ZEALAND">NEW ZEALAND</option>
                          <option value="NICARAGUA">NICARAGUA</option>
                          <option value="NIGER">NIGER</option>
                          <option value="NIGERIA">NIGERIA</option>
                          <option value="NIUE">NIUE</option>
                          <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
                          <option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA ISLANDS</option>
                          <option value="NORWAY">NORWAY</option>
                          <option value="OMAN">OMAN</option>
                          <option value="PAKISTAN">PAKISTAN</option>
                          <option value="PALAU">PALAU</option>
                          <option value="PANAMA">PANAMA</option>
                          <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                          <option value="PARAGUAY">PARAGUAY</option>
                          <option value="PERU">PERU</option>
                          <option value="PHILIPPINES">PHILIPPINES</option>
                          <option value="PITCAIRN">PITCAIRN</option>
                          <option value="POLAND">POLAND</option>
                          <option value="PORTUGAL">PORTUGAL</option>
                          <option value="PUERTO RICO">PUERTO RICO</option>
                          <option value="QATAR">QATAR</option>
                          <option value="REUNION">REUNION</option>
                          <option value="ROMANIA">ROMANIA</option>
                          <option value="RUSSIAN FEDERATION">RUSSIAN FEDERATION</option>
                          <option value="RWANDA">RWANDA</option>
                          <option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS</option>
                          <option value="SAINT LUCIA">SAINT LUCIA</option>
                          <option value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE GRENADINES</option>
                          <option value="SAMOA">SAMOA</option>
                          <option value="SAN MARINO">SAN MARINO</option>
                          <option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE</option>
                          <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                          <option value="SENEGAL">SENEGAL</option>
                          <option value="SERBIA">SERBIA</option>
                          <option value="SEYCHELLES">SEYCHELLES</option>
                          <option value="SIERRA LEONE">SIERRA LEONE</option>
                          <option value="SINGAPORE">SINGAPORE</option>
                          <option value="SLOVAKIA (Slovak Republic)">SLOVAKIA (Slovak Republic)</option>
                          <option value="SLOVENIA">SLOVENIA</option>
                          <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
                          <option value="SOMALIA">SOMALIA</option>
                          <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                          <option value="SOUTH SUDAN">SOUTH SUDAN</option>
                          <option value="SOUTH GEORGIA AND SOUTH S.S.">SOUTH GEORGIA AND SOUTH S.S.</option>
                          <option value="SPAIN">SPAIN</option>
                          <option value="SRI LANKA">SRI LANKA</option>
                          <option value="ST. HELENA">ST. HELENA</option>
                          <option value="ST. PIERRE AND MIQUELON">ST. PIERRE AND MIQUELON</option>
                          <option value="SUDAN">SUDAN</option>
                          <option value="SURINAME">SURINAME</option>
                          <option value="SVALBARD?AND?JAN MAYEN ISLANDS">SVALBARD?AND?JAN MAYEN ISLANDS</option>
                          <option value="SWAZILAND">SWAZILAND</option>
                          <option value="SWEDEN">SWEDEN</option>
                          <option value="SWITZERLAND">SWITZERLAND</option>
                          <option value="SYRIAN ARAB REPUBLIC">SYRIAN ARAB REPUBLIC</option>
                          <option value="TAIWAN, PROVINCE OF CHINA">TAIWAN, PROVINCE OF CHINA</option>
                          <option value="TAJIKISTAN">TAJIKISTAN</option>
                          <option value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED REPUBLIC OF</option>
                          <option value="THAILAND">THAILAND</option>
                          <option value="TOGO">TOGO</option>
                          <option value="TOKELAU">TOKELAU</option>
                          <option value="TONGA">TONGA</option>
                          <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
                          <option value="TUNISIA">TUNISIA</option>
                          <option value="TURKEY">TURKEY</option>
                          <option value="TURKMENISTAN">TURKMENISTAN</option>
                          <option value="TURKS AND CAICOS ISLANDS">TURKS AND CAICOS ISLANDS</option>
                          <option value="TUVALU">TUVALU</option>
                          <option value="UGANDA">UGANDA</option>
                          <option value="UKRAINE">UKRAINE</option>
                          <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                          <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                          <option value="UNITED STATES">UNITED STATES</option>
                          <option value="U.S. MINOR ISLANDS">U.S. MINOR ISLANDS</option>
                          <option value="URUGUAY">URUGUAY</option>
                          <option value="UZBEKISTAN">UZBEKISTAN</option>
                          <option value="VANUATU">VANUATU</option>
                          <option value="VENEZUELA">VENEZUELA</option>
                          <option value="VIETNAM">VIETNAM</option>
                          <option value="VIRGIN ISLANDS (BRITISH)">VIRGIN ISLANDS (BRITISH)</option>
                          <option value="VIRGIN ISLANDS (U.S.)">VIRGIN ISLANDS (U.S.)</option>
                          <option value="WALLIS AND FUTUNA ISLANDS">WALLIS AND FUTUNA ISLANDS</option>
                          <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                          <option value="YEMEN">YEMEN</option>
                          <option value="ZAMBIA">ZAMBIA</option>
                          <option value="ZIMBABWE?">ZIMBABWE?</option>
                        </select>
                    <br />
                  </div>
                      <br/>
                    </div>
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <select name="hire_team_looking_for" id="looking_for" class='form-control' style="border:1px solid #D3D3D3;">
                          <option value="" selected="selected">You Are Looking For?</option>
                          <option value="Hire Web Developer">Web Developer</option>
                          <option value="Hire Data Entry Operator">Data Entry Operator</option>
                          <option value="Hire Digital Marketing Expert">Digital Marketing Expert</option>
                        </select>
                    <br />
                  </div>
                      <br/>
                    </div>
                <div class="col-sm-10">
                      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    <textarea name="hire_team_description" id="umessage" class="form-control" cols="5" placeholder="Project Description" style="border:1px solid #D3D3D3; height:90px;"></textarea>
                  </div>
                      <br />
                    </div>
              </div>
                </div>
          </div>
              <div class="col-md-12" align="center">
            <h3>
                  <div class="g-recaptcha" data-sitekey="6Lf4kCETAAAAABbr-uSMpaDSkVRY_6x4s3-2hOwB" style="margin-top:5px;"></div>
                  <input type="submit" name="HireSubmit" class="btn btn-primary" value="Apply Now" style="padding:13px; width:170px; font-size:20px;">
                </h3>
          </div>
            </form>
      </div>
        </div>
  </div>
    </section>
</div>
</section>
<script language="javascript">
function HireEnqValidate(){   
function trim(str){				
	 return str.replace(/^\s*|\s*$/g,'');
	}
var myname = document.getElementById('uname').value;		
if(trim(document.getElementById('uname').value)==0){		
alert("Enter Your Name !");
document.getElementById('uname').focus();
return false;
}	
if (!myname.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('uname').value='';
document.getElementById('uname').focus();
return false;
}
var email=trim(document.getElementById('uemail').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email==''){
	  alert('Please Enter Email Id');
	  document.getElementById('uemail').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('uemail').focus();
return false;
}
var mobno=trim(document.getElementById('uphone').value);
if(trim(document.getElementById('uphone').value)==0){
	alert("Enter your mobile no.!");
	document.getElementById('uphone').focus();
	return false;
}
if(isNaN(document.getElementById('uphone').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('uphone').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('uphone').focus();
	return false;
}
if(trim(document.getElementById('looking_for').value)==0){		
alert("Select you are looking for !");
document.getElementById('looking_for').focus();
return false;
}
if(trim(document.getElementById('umessage').value)==0){
	alert("Enter your message !");
	document.getElementById('umessage').focus();
	return false;
 }
}
</script>
<div class="col-md-12" style="margin:0 !important; padding:0 !important;">
      <div class="col-md-4" style="margin:0 !important; padding:0 !important;"> <img src="images/hire-php-developer.jpg" class="img-responsive" style="width:100%; height:160px;" /> </div>
      <div class="col-md-4" style="margin:0 !important; padding:0 !important;"> <img src="images/Hiring-An-Expert-For-SEO-Activities.jpg" class="img-responsive" style="width:100%; height:160px;" /> </div>
      <div class="col-md-4" style="margin:0 !important; padding:0 !important;"> <img src="images/hire-data-entry-expert.jpg" class="img-responsive" style="width:100%; height:160px;" /> </div>
    </div>
<div class="clearfix"></div>
<?php include("webkey-footer.php");?>