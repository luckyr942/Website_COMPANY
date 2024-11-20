<style type="text/css">    #wh-widget-send-button {        margin: 0 !important;        padding: 0 !important;        position: fixed !important;        z-index: 16000160 !important;        bottom: 0 !important;        text-align: center !important;        height: 90px;        width: 60px;        visibility: visible;        transition: none !important;    }    #wh-widget-send-button.wh-widget-right {        right: 0;    }    #wh-widget-send-button.wh-widget-left {        left: 10px;    }    #wh-widget-send-button iframe {        width: 100%;        height: 100%;        border: 0;    }div.clear {    clear: both;}


.cp-widget-button{display:inline-block;position:fixed;bottom:80px;left:20px;z-index:999999}
.cp-widget-button__inner{height:50px;width:50px;background:#00abec;border-radius:50%;text-align:center;cursor:pointer;padding:25%; box-shadow:1px 1px 10px #000;}
.call-pop1 p{font-size:20px;padding:20px 50px 0}
.text-center1 {
    z-index: 999999;
    padding-top: 100px;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
}
.close1 {
    float: right;
    font-size: 31px !important;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-shadow: 0 1px 0 #fff;
     opacity:4; 
    filter: alpha(opacity=20); background-color:#26c5ef; padding:13px;
}
/**********pop************/
.bg_pof {
    background: #FFF;
    padding: 0px;
    z-index: 999; box-shadow:1px 1px 50px #059dc5;
}
.bg-clrd_f {
    color: #fff;
    text-align: center;
    border: solid 1px #26c5ef;
    background-color: #26c5ef;
    margin: 0px 0px 20px 0px;
   /* padding: 0px;*/  padding:12px 0px;
}
.form-control{width:100%; height:40px; margin-bottom:10px; border:solid 1px #ccc;}
.site-button1 {
    background-color: #26c5ef;
    color: #fff;
    padding: 5px 10px;
    border: solid 1px #26c5ef;
    text-align: center; margin-bottom:30px; transition:all 1.s;
}
.site-button1:hover{
    background-color: #0da4cc;
    transition:all 1.s;
}

textarea{resize:none;}
.bg-clrd_f{text-align:left; font-size:16px; padding:15px 10px;}
/* The close1 Button */
.close1 {
    position: absolute;
    top: -8px;
    right: 0px;
    color: #f1f1f1;
    font-weight: bold;
    transition: 0.3s;
}

.close1:hover,
.close1:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
@media (min-width:320px) and (max-width:767px) 
{
.cp-widget-button{z-index:0;}
.cp-widget-button__inner{animation:bounce 1s infinite alternate;-webkit-animation:bounce 1s infinite alternate}
.cp-widget-button__inner img{ width: 20px; height: 20px;}
.cat-textformat h2{color:#1178ba!important}
.cat-textformat p{text-align:left;word-wrap:break-word}
.cat-textformat ul{width:auto;height:auto;padding:0;margin:15px 0 0 0}
.cat-textformat ul li{background:url(../images/right-icon.png) 0 0 no-repeat;width:auto;height:auto;padding:0 0 0 36px;margin:10px 0 10px;line-height:25px}
.call-pop1 p{padding:33px 64px}
.call-pop1 p{font-size:24px;padding:46px 33px}
.bg-clrd_f {
    font-size: 15px !important;
}
.close1 {
    position: absolute;
    top: -9px !important;
     right:0px !important; 
}
/*.modal{padding-top:18px !important; z-index: 1035 !important; }*/
.modal {
    padding-top: 0px !important;
    z-index: 1050 !important;
    margin-top: 0px;
}
.modal-content{width:80% !important;}
.form-control {
    width: 100%;
    /*height: 30px;*/
    margin-bottom: 5px;
    border: solid 1px #171616;
}
}
</style>
<link rel="stylesheet" href="<?=$site_url?>/css/styd1.css" type="text/css">
<div id="loading-area"></div>
<div id="myModal1" class="modal">
 
  <div class="modal-content" id="img01">
  <div class="col-md-8 col-md-offset-2 bg_pof">
   <h2 class="bg-clrd_f">Would you like us to call you back? <span class="close1">&times;</span></h2>
   <!---------->
 <div class="col-md-12" id="main-msg">
        <?php if(!empty($_SESSION["enq_msg"])){?>
        <div align="center" style="font-size:17px; color:<?=$clrerr?>; font-weight:bold; margin-bottom:10px;">
          <?=$_SESSION["enq_msg"]?>
        </div>
        <?php 
		unset($_SESSION["enq_msg"]);
		}
		?>
      </div>
 <!---------->
  <div class="col-md-12">
  <form name="ContactFrm"  id="call-pop_form" action="" method="post" enctype="multipart/form-data" >
        <div class="form-style">
        <div class="col-md-12">
          <select name="purpose" id="purpose" class="form-control">
            <option value="">-- Select Purpose --</option>
            <option value="New Website">New Website</option>
            <option value="Website Redesigning">Website Redesigning</option>
            <option value="Ecommerce Website">Ecommerce Website</option>
            <option value="B2B Portal Development">Portal Development</option>
            <option value="SEO Service">SEO Service</option>
            <option value="Testimonial">Testimonial</option>
            <option value="Career">Career</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
          </select> </div>
          <div class="col-md-12">         
          <input type="text" name="mobilecallback" id="mobilecallback"  class="form-control" maxlength="12" placeholder="Mobile No."> 
          </div>
          <div class="col-md-12">  
          <input type="text" name="namecallback" id="namecallback" class="form-control" placeholder="Full Name">
          </div>
          <div class="col-md-12">
          <input type="email" name="emailcallback" id="emailcallback" class="form-control" placeholder="Email Address">
          </div>
          <div class="col-md-12">
          <textarea name="messagecallback" id="messagecallback" class="form-control" cols="30" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="col-md-12">
                <div class="mdl-textfield mdl-js-textfield">
                  <input class="form-control" type="text" name="captcha" maxlength="4" autocomplete="off" id="security_cod" style="width:76% !important; float:left;">
                  <img src="amitabhcaptcha.php" class="vam" alt="Captcha" style="margin-left:4px; width:22%; height:45;"/> </div>
              </div>
              <div class="clearfix"></div>
          <div class="col-md-12 col-xs-12 text-center">
          <input type="submit" id="email_number" value="Submit"  name="Submit" class="site-button1">   
          </div>               
        </div>
      </form>
      
      <script>
$(document).ready(function(){

$("#call-pop_form").on("submit",function(eve){

eve.preventDefault();


var is_error=1;

   function trim(str){				
	 return str.replace(/^\s*|\s*$/g,'');
	}
	
	
if(trim(document.getElementById('purpose').value)==0){
alert("Select purpose !");
document.getElementById('purpose').focus();
is_error=0;
return false;
}
var mobno=trim(document.getElementById('mobilecallback').value);
if(trim(document.getElementById('mobilecallback').value)==0){
alert("Enter your mobile no.!");
document.getElementById('mobilecallback').focus();
is_error=0;
return false;
}
if(isNaN(document.getElementById('mobilecallback').value)){
alert("Mobile no. should be no.!");
document.getElementById('mobilecallback').focus();
is_error=0;
return false;
}
if(mobno.length < 10){
alert("Mobile no. should be 10 digit long !");
document.getElementById('mobilecallback').focus();
is_error=0;
return false;
}	
if(trim(document.getElementById('namecallback').value)==0){		
alert("Enter Your Name !");
document.getElementById('namecallback').focus();
is_error=0;
return false;
}	
if (!document.getElementById('namecallback').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('namecallback').value='';
document.getElementById('namecallback').focus();
is_error=0;
return false;
}

var email=trim(document.getElementById('emailcallback').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
{
alert('Please Enter Email Id');
document.getElementById('emailcallback').focus();
is_error=0;
return false;
}else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('emailcallback').focus();
is_error=0;
return false;
}
if(trim(document.getElementById('messagecallback').value)==0){
alert("Enter your Message !");
document.getElementById('messagecallback').focus();
is_error=0;
return false;
}	
if(trim(document.getElementById('security_cod').value)==0){
alert("Enter security code !");
document.getElementById('security_cod').focus();
is_error=0;
return false;
} 	


if(is_error){

$.ajax({

type: "POST",	
url: "<?=$site_url?>/call-page.php",
data:  new FormData(this),
contentType: false,
processData:false,
success:function(data){

alert(data)

if(data=="ok"){
$('#main-msg').slideDown("slow");	
$("#main-msg").text("Requirement is sent successfully");
setTimeout(function() { $('#main-msg').slideUp("slow");}, 3000);
}

/*if(data=="error"){
$('#main-msg').slideDown("slow");	
$("#main-msg").html("<span class='text-danger'>Entered capcha is not valid.</span>");
setTimeout(function() { $('#main-msg').slideUp("slow");}, 3000);
}*/



   }

  })

}


})

  

});
</script>
                            </div>
                              <div style="clear:both"></div>
                                </div>
                               
    </div>
</div>
  <div class="cp-widget-button" id="myImg">
    <div data-brand-color="background" onclick="show()" class="cp-widget-button__inner"> <img src="<?=$site_url?>/images/call1.png" alt="" style="width:25px;"> </div>
  </div>
  
  <!----------change-pws---->
 <script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<?php /*?><script type="text/javascript">
function EnqValidation(){	
   function trim(str){				
	 return str.replace(/^\s*|\s*$/g,'');
	}
	if(trim(document.getElementById('purpose').value)==0){
	alert("Select purpose !");
	document.getElementById('purpose').focus();
	return false;
 }
 var mobno=trim(document.getElementById('mobilecallback').value);
if(trim(document.getElementById('mobilecallback').value)==0){
	alert("Enter your mobile no.!");
	document.getElementById('mobilecallback').focus();
	return false;
}
if(isNaN(document.getElementById('mobilecallback').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('mobilecallback').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('mobilecallback').focus();
	return false;
}	
if(trim(document.getElementById('namecallback').value)==0){		
alert("Enter Your Name !");
document.getElementById('namecallback').focus();
return false;
}	
if (!document.getElementById('namecallback').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('namecallback').value='';
document.getElementById('namecallback').focus();
return false;
}

var email=trim(document.getElementById('emailcallback').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('emailcallback').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('emailcallback').focus();
return false;
}
if(trim(document.getElementById('messagecallback').value)==0){
	alert("Enter your Message !");
	document.getElementById('messagecallback').focus();
	return false;
 }	
 if(trim(document.getElementById('security_cod').value)==0){
	alert("Enter security code !");
	document.getElementById('security_cod').focus();
	return false;
 } 	
}
</script><?php */?>