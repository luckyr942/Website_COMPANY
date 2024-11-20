<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.mpwki{margin:0 !important; padding:0 !important;}
	.btn-primary1{float:right; background-color:#c52d2f!important; color:#fff!important;}
	.btn-primary1:hover{background-color:#2B2B2B !important; color:#fff !important;}
	.cap-sty{width:100%; font-size:22px; padding-left:5px; position:relative; height:40px; border-radius:5px; border:solid 1px #f2f2f2; font-size:18px;}
	
		@media (min-width:320px) and (max-width:767px) 
{

	.mpfrmd{margin-top:15px;}
	.mpfrmd1{position:relative; top:8px;}
		.mpfrmd2{position:relative; top:5px;}
		ul.social-share li a {
    display: inline-block;
    color: #fff;
    background: #404040;
    width: 28px;
    height: 30px;
    line-height: 20px;
    text-align: center;
    font-size: 18px;
    padding-top: 6px;
}
	.cap-sty{width: 100%;}
	.mpwki{margin:0px !important; padding:2px !important;}
	.btn-primary1{float:left;}
	
	}
</style>

<?php

 /***************** GET CURRENT URL START ***************/

	function getUrl() {

  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];

  //$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";

  $url .= $_SERVER["REQUEST_URI"];

  return $url;

       }

/***************** GET CURRENT URL END ***************/

$refBY = getUrl();		

if(isset($_POST['ContactSubmit'])){

@extract($_POST);

if($uname!='' || $uphone!='' || $uemail!=''){

/*	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){

		$errVal = '1';

		$colr = "#ff0707";

		$succMsg = "Captcha verification failed.";

		?>

<script>

        $(function() {

            $('html, body').animate({

                scrollTop: $("#showMSG").offset().top

            }, 2000);

         });

    </script>

<? */ // }else{		

		if(is_numeric($uphone)){



       $short_msg=substr($umessage,0,50);
       $varUserName="t1webkey";
    	$varPWD="105658508";
    	$varSenderID="NEWREG";
        $msg_body="  $uname \n $uemail \n $uphone \n $short_msg";
    	
    	$varMSG=urlencode("$msg_body");
    	$url="http://sms4power.com/api/swsendSingle.asp?";//
    	$data="username=$varUserName&password=$varPWD&sender=$varSenderID&sendto=9958276296&message=$varMSG";
     
	
  function postdata($url,$data)
    {
    //The function uses CURL for posting data to
      $objURL = curl_init($url);
      curl_setopt($objURL, CURLOPT_RETURNTRANSFER,1); 
      curl_setopt($objURL,CURLOPT_POST,1);
      curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
      $retval = trim(curl_exec($objURL));
      curl_close($objURL);
      return $retval;
    }
	$sendSMS = postData($url,$data);
	
	
$umessage = mysqli_real_escape_string("$umessage");

 $con_query="insert into tbl_enquiry set 

					   enquiry_name='$uname',

					   enquiry_comp_name='$ucompany',

					   enquiry_mobile='$uphone',

					   enquiry_email='$uemail',

					   enquiry_detail='$umessage',

					   enquiry_source='Contact Us',

					   enquiry_url='$refBY',

					   enquiry_add_date=now()";                                   

					   $exec = db_query($con_query) or die("can't access");

					   $msg="<table align='center' cellSpacing='0' cellPadding='0' border='1' style='border:1px solid #004A95; width:600px;'>

  <tbody>

    <tr>

      <td vAlign='top' style='background-color:#004A95; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3'>Enquiry From WebKeyIndia.com</td>

    </tr>

    <tr>

      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Name</b></td>

      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uname</td>

    </tr>

    <tr>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Company Name</b></td>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ucompany </td>

    </tr>

    <tr>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Mobile </b></td>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uphone</td>

    </tr>

    <tr>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Email-Id</b></td>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$uemail </td>

    </tr>

    <tr>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Detail </b></td>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$umessage</td>

    </tr>

    <tr>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#E1F0FF;padding:10px;'><b>Source </b></td>

      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$refBY</td>

    </tr>

  </tbody>

</table>";

$mail_to_client="astechmedia.in@gmail.com";

//$mail_to_client="rehantki@gmail.com";

//$mail_to_client="amitabh.tradekeyindia@gmail.com";


$sub_client="Enquiry From WebKeyIndia";

$mail_client_body = "$msg";	

$sender_client ="WebKeyIndia.com";		

$headers_client  = "MIME-Version: 1.0" . "\r\n";

$headers_client .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

$headers_client .= "from: ".$sender_client."\n";

if($uemail!=''){

@mail($mail_to_client,$sub_client,$mail_client_body,$headers_client);

}	

  $colr = "#4fff07";				   

  $succMsg = "Thanks for your query, we will contact you soon";

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

//	}	

   }

  }

 ?>

<script language="javascript">

function ContactEnqValidate(){   

function trim(str){				

	 return str.replace(/^\s*|\s*$/g,'');

	}
/*
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
*////////////////////////////////////////////////////////////////////
/*var mycomp = document.getElementById('ucompany').value;

if(trim(document.getElementById('ucompany').value)==0){		

alert("Enter Company Name !");

document.getElementById('ucompany').focus();

return false;

}

//alert(mycomp);

if (!mycomp.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){

alert("Please enter only alphabets !");

document.getElementById('ucompany').value='';

document.getElementById('ucompany').focus();

return false;

}*///////////////////////////////////////////////////////////////////////

/*

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



if(trim(document.getElementById('umessage').value)==0){

	alert("Enter your message !");

	document.getElementById('umessage').focus();

	return false;

 }

 if(trim(document.getElementById('captcha_code').value)==0){

	alert("Enter captcha code !");

	document.getElementById('captcha_code').focus();

	return false;

 }*/

        var i=0,flag=0;
        var name=document.getElementById("uname");
        var company=document.getElementById("ucompany");
        var phone=document.getElementById("uphone");
        var email=document.getElementById("uemail");
        var message=document.getElementById("umessage");
        //var captcha=document.getElementById("captcha");
        var str1 = removeSpaces(document.getElementById('txtCaptcha123').value);
        var captcha = removeSpaces(document.getElementById('captcha_code').value);
    
        if(name.value==""){
            $('#uname').css({"border-color":"red"});
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "0px"},"fast");
            
            name.focus();
            $(".error_name").html("Please enter your name");
            $('.error_name').fadeIn('slow');
            return false;
        }if(name.value.length<=3){
             $('#uname').css({"border-color":"red"});
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "0px"},"fast");
            name.focus();
            $(".error_name").html("Name should be greater than 3 alphabet");
            $('.error_name').fadeIn('slow');
            return false;
        }if (/[0-9]/g.test(name.value)) {
                 $('#uname').css({"border-color":"red"});
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "-5px"},"fast");
            $("#uname").animate({left: "5px"},"fast");
            $("#uname").animate({left: "0px"},"fast");
                name.focus();
            $(".error_name").html("Use alphabet only");
            $('.error_name').fadeIn('slow');
                return false;
        }
        if(email.value==""){
             $('#uemail').css({"border-color":"red"});
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "0px"},"fast");
            email.focus();
            $(".error_email").html("Please enter your email");
            $('.error_email').fadeIn('slow');
            return false;            
        }if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
             $('#uemail').css({"border-color":"red"});
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "-5px"},"fast");
            $("#uemail").animate({left: "5px"},"fast");
            $("#uemail").animate({left: "0px"},"fast");
            email.focus();
            $(".error_email").html("Please enter valid email address");
            $('.error_email').fadeIn('slow');
            return false;
        }
        if (!/[A-Za-z\s]/g.test(company.value) && company.value!="") {
            $('#ucompany').css({"border-color":"red"});
            $("#ucompany").animate({left: "-5px"},"fast");
            $("#ucompany").animate({left: "5px"},"fast");
            $("#ucompany").animate({left: "-5px"},"fast");
            $("#ucompany").animate({left: "5px"},"fast");
            $("#ucompany").animate({left: "-5px"},"fast");
            $("#ucompany").animate({left: "5px"},"fast");
            $("#ucompany").animate({left: "0px"},"fast");
                company.focus();
        $(".error_company").html("Value should not be numeric");
        $('.error_company').fadeIn('slow');
                return false;
        }
        if(phone.value==""){
             $('#uphone').css({"border-color":"red"});
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "0px"},"fast");
            phone.focus();
             $(".error_phone").html("Please enter phone number");
            $('.error_phone').fadeIn('slow');
            return false;
        }if(isNaN(phone.value)){
             $('#uphone').css({"border-color":"red"});
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "0px"},"fast");
            phone.focus();
            $(".error_phone").html("Please enter numeric value");
            $('.error_phone').fadeIn('slow');
            return false;
        }if(phone.value.length<10 || phone.value.length>10){
             $('#uphone').css({"border-color":"red"});
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "-5px"},"fast");
            $("#uphone").animate({left: "5px"},"fast");
            $("#uphone").animate({left: "0px"},"fast");
            phone.focus();
            $(".error_phone").html("Phone number should be 10 digit long !");
            $('.error_phone').fadeIn('slow');
            return false;
            
        }if(trimfield(message.value)==""){
             $('#umessage').css({"border-color":"red"});
            $("#umessage").animate({left: "-5px"},"fast");
            $("#umessage").animate({left: "5px"},"fast");
            $("#umessage").animate({left: "-5px"},"fast");
            $("#umessage").animate({left: "5px"},"fast");
            $("#umessage").animate({left: "-5px"},"fast");
            $("#umessage").animate({left: "5px"},"fast");
            $("#umessage").animate({left: "0px"},"fast");
            message.focus();
            $(".error_message").html("Please leave your message");
            $('.error_message').fadeIn('slow');
            return false;
        }if(captcha==""){
            $('#captcha_code').css({"border-color":"red"});
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "0px"},"fast");
            $("#captcha_code").focus();
            $(".error_captcha").html("Please enter captcha code");
            $('.error_captcha').fadeIn('slow');
            return false;
        }if (str1 != captcha){
            $('#captcha_code').css({"border-color":"red"});
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "-5px"},"fast");
            $("#captcha_code").animate({left: "5px"},"fast");
            $("#captcha_code").animate({left: "0px"},"fast");
            $("#captcha_code").focus();
            $(".error_captcha").html("Please enter correct captcha code");
            $('.error_captcha').fadeIn('slow');
            return false;
        }
}


function errName123(){
        $('#uname').css({"border-color":"#49aecc"});
        $('.error_name').css({"display":"none"});
        
    }
    function errEmail123(){
        $('#uemail').css({"border-color":"#49aecc"});
        $('.error_email').css({"display":"none"});
    }
    function errCompany123(){
        $('#ucompany').css({"border-color":"#49aecc"});
        $('.error_company').css({"display":"none"});
    }
    function errPhone123(){
        $('#uphone').css({"border-color":"#49aecc"});
         $('.error_phone').css({"display":"none"});
    }
    function errMsg123(){
        $('#umessage').css({"border-color":"#49aecc"});
         $('.error_message').css({"display":"none"});
    }
    function errCaptcha123(){
        $('#captcha_code').css({"border-color":"#49aecc"});
        $('.error_captcha').css({"display":"none"});
    }
  
</script>
<style>
#error_style{
    color:white; 
    font-size:15px;
    font-family:arial;
    background-color:#c32323;
    border-radius:7px; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-sizing: border-box;
    padding:7px;
}
.error_name{
       display:none;
}
.error_email{
       display:none;
}
.error_company{
       display:none;
}

.error_phone{
       display:none;
}
.error_message{
       display:none;
}

.error_captcha{
       display:none;
}

</style>

<form method="post" action="" onSubmit="return ContactEnqValidate()">

  <section class="pussbottom-clr  no-margin">

    <div class="container">

      <div class="wow fadeInDown">

        <div class="row pullbottom" id="showMSG">

          <div class="col-sm-4 col-md-8 ">

            <h3 class="white-clr amihtwo">Need a Consultant</h3>

            <h2 align="center" style="color:<?=$colr;?> !important;">

              <?=$succMsg?>

            </h2>

            <div class="row">

              <div class="form-group">

                <div class="col-md-6">

                  <label class="white-clr">Name *</label>

                  <input type="text" maxlength="100" style="position:relative;" class="form-control" name="uname" onkeyup="errName123();"  id="uname" <?php if($errVal=='1'){ ?> value="<?=$_POST['uname']?>" <? } ?>>
                    <span id="error_style" class="error_name"></span>
                </div>

                <div class="col-md-6">

                  <label class="white-clr">Email *</label>

                  <input type="text"  maxlength="100" style="position:relative;" class="form-control" name="uemail" onkeyup="errEmail123();"  id="uemail" <?php if($errVal=='1'){ ?> value="<?=$_POST['uemail']?>" <? } ?>>
                    <span id="error_style" class="error_email"></span>
                </div>

              </div>

            </div>

            <div class="row pullmt1">

              <div class="form-group">

                <div class="col-md-6">

                  <label class="white-clr">Company (Optional)</label>

                  <input type="text" maxlength="100" style="position:relative;" class="form-control" name="ucompany" onkeyup="errCompany123();" id="ucompany" <?php if($errVal=='1'){ ?> value="<?=$_POST['ucompany']?>" <? } ?>>
                <span id="error_style" class="error_company"></span>
                </div>

                <div class="col-md-6">

                  <label class="white-clr">Phone Number *</label>

                  <input type="text"  maxlength="10" style="position:relative;" class="form-control" name="uphone" onkeyup="errPhone123();"  id="uphone" <?php if($errVal=='1'){ ?> value="<?=$_POST['uphone']?>" <? } ?>>
                <span id="error_style" class="error_phone"></span>
                </div>

              </div>

            </div>

            <div class="row">

              <div class="form-group">

                <div class="col-md-12"> </div>

              </div>

            </div>

            <div class="row">

              <div class="form-group">

                <div class="col-md-12">

                  <label class="white-clr">Message *</label>

                  <textarea maxlength="500" rows="5" style="position:relative;" class="form-control" name="umessage" onkeyup="errMsg123();" id="umessage" style="resize:none;"><?php if($errVal=='1'){ ?><?=$_POST['umessage']?><? } ?>

</textarea>
<span id="error_style" class="error_message"></span>
                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-md-12"> 

                <script type='text/javascript'>

/*function refreshCaptcha(){

	var img = document.images['captchaimg'];

	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;

}*/

$(document).ready(function(){
    DrawCaptcha123();
});
    function DrawCaptcha123()
    {
       /* var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
        */
        var code = Math.floor(1000 + Math.random() * 9000);
        
        document.getElementById("txtCaptcha123").value = code
    }
    

</script>


                <div class="col-md-7 col-xs-12" style="margin:0 !important; padding:0 !important; margin-top:10px !important;">

                  <div class="col-md-5 col-xs-5 mpwki">

                  <!--<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' alt="Captcha" title="Captcha">-->
                <input type="text" readonly placeholder="Captcha" id="txtCaptcha123" 
        style="background-image:url(images/images.jpg); text-align:center; border:none;
        font-weight:bold; font-family:Modern; font-size:25px; width:104px;" />
           <!-- &nbsp;&nbsp;&nbsp;--><!--<i style="color:darkgrey;font-size:20px;" class="fa fa-refresh" onclick="DrawCaptcha123();"></i> -->

                  <br>
     <span style="color:#fff; font-size:13px;"><a onclick="DrawCaptcha123();" style="cursor:pointer;"><i class="fa fa-refresh"></i> reload</a> Captcha</span> 

               <!--   <span style="color:#fff; font-size:13px;"><a href='javascript:refreshCaptcha()' ><i class="fa fa-refresh"></i> Click here</a> to refresh</span> 
-->
                  </div>

                  <div class="col-md-7 col-xs-7 mpwki">

                    <input id="captcha_code" maxlength="4" name="captcha_code" type="text" placeholder="Enter Captcha *" onkeyup="errCaptcha123();" class="cap-sty">
<br>
 <span id="error_style" class="error_captcha" style="position:relative; top:10px;"></span>

        <!--      <br>

                    <span style="color:#fff; font-size:15px;"><strong>Enter Captcha Value *</strong></span> -->

                  </div>


                </div>
                 

                <div class="col-md-5 col-xs-12 mpwki">
                  <button type="submit" name="ContactSubmit" class="btn btn-primary1 btn-lg" style="margin-top:10px;">Send Message</button>
                </div>

              </div>

            </div>

          </div>

          <div class="col-sm-4 col-md-4 text-center">

            <h4 class="push-top white-clr pullmt1" style="font-size: 1.6em;text-shadow: 1px 1px 1px rgba(0,0,0,0.5); color:#FFFFFF; "><strong>24x7 Live Help</strong></h4>

            <div>

              <p style="color:#fff;"><span><strong>Skype :</strong> WebKeyIndia</span>  </p>
				<p style="color:#fff;"> <span><strong>Whatsapp :</strong> <a href="https://wa.me/9958276296" target="_blank"> 9958276296</a> </span> </p>


              <p style="color:#fff;"> <span ><strong>Live :</strong> WebKeyIndia</span> </p>
				
				 <p style="color:#fff;">  <span><strong>Yahoo :</strong> WebKeyIndia</span></p>

              <p style="color:#fff;"><span><strong>BBM :</strong> WebKeyIndia</span> <!--<span style="margin-left:17px;"><strong>Whatsapp :</strong> <a href="https://wa.me/9958276296" target="_blank"> 9958276296</a> </span>--></p>

            </div>

            <h4 class="push-top white-clr pullmt1" style="font-size: 1.6em;text-shadow: 1px 1px 1px rgba(0,0,0,0.5); color:#FFFFFF; "><strong>Coffee</strong> With Us </h4>

            </h4>

            <p class="load white-clr no-margin">WZ-197 IInd Floor, Main Najafgarh Road, Near Metro Pilor No. 649, Uttam Nagar, New Delhi-110059</p>

            <ul class="list-unstyled white-clr">

             <!-- <li><i class="fa fa-mobile"></i> +91-99990 65097 </li>-->

              <li><i class="fa fa-mobile"></i> <a href="tel:+91-9958-276-296">+91-9958-276-296</a> </li>

              <li> <i class="fa fa-whatsapp"></i><a href="https://wa.me/9958276296" target="_blank"> 9958276296</a> </li>

              <li><i class="fa fa-envelope-o"></i> <a href="mailto:sales@webkeyindia.com">sales@webkeyindia.com</a></li>

              <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@webkeyindia.com">info@webkeyindia.com</a></li>

            </ul>

            <span style="font-size: 1.6em;text-shadow: 1px 1px 1px rgba(0,0,0,0.5); color:#FFFFFF; text-align:center;"> <strong>International Offices</strong></span>

            <ul class="list-unstyled white-clr">

              <li><i class="icon icon-envelope"></i> <strong>USA Office:</strong> <a href="mailto:info@webkeyindia.com">usa@webkeyindia.com</a></li>

              <li><i class="icon icon-envelope"></i> <strong>China Office:</strong> <a href="mailto:info@webkeyindia.com">china@webkeyindia.com</a></li>

              <li><i class="icon icon-envelope"></i> <strong>UK Office:</strong> <a href="mailto:info@webkeyindia.com">uk@webkeyindia.com</a></li>

        <li><i class="icon icon-envelope"></i> <strong>Australia Office:</strong> <a href="mailto:australia@webkeyindia.com">australia@webkeyindia.com</a></li>

              <li><i class="icon icon-envelope"></i> <strong>UAE Office:</strong> <a href="mailto:info@webkeyindia.com">uae@webkeyindia.com</a></li>

            </ul>
				<div class="visible-xs">
				 <span style="font-size: 1.6em;text-shadow: 1px 1px 1px rgba(0,0,0,0.5); color:#FFFFFF; text-align:center;"> <strong>Follow Us</strong></span>

<div><ul class="social-share">
<li><a href="https://www.facebook.com/webkeyindiacom/" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://twitter.com/WebKeyOfficial" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/company/webkeyindia" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://www.instagram.com/webkeyindia/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="https://in.pinterest.com/WebKeyIndiaOfficial" target="_blank"><i class="fa fa-pinterest"></i></a></li>
	<li><a href="https://www.youtube.com/c/WebKeyIndiaNewDelhi" target="_blank"><i class="fa fa  fa-youtube"></i></a></li>
	<li><a href="https://webkeyindiaofficial.tumblr.com/" target="_blank"><i class="fa fa-tumblr-square"></i></a></li>
	<li><a href="https://www.reddit.com/user/webkeyindia24680" target="_blank"><i class="fa fa-reddit"></i></a></li>

	<li><a href="https://www.flickr.com/photos/165907978@N03" target="_blank"><i class="fa fa-flickr"></i></a></li>
	<li><a href="https://www.quora.com/profile/WebKeyIndia" target="_blank"><i class="fa fa-quora"></i></a></li>
</ul></div>
</div>

          </div>

        </div>

      </div>

    </div>

  </section>

</form>