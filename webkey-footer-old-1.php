<footer id="footer" class="midnight-blue ">
<div class="container">
<div class="row">
<div class="col-sm-5"> &copy; 2019 WebKeyIndia.Com. All Rights Reserved. </div>
<div class="col-sm-7">
<ul class="pull-right">
<?php /*?><li><a href="<?=$site_url?>/index.html">Home</a></li><?php */?>
<li><a href="<?=$site_url?>/services.html">Services</a></li>
<li><a href="<?=$site_url?>/packages.html">Packages </a></li>
<li><a href="<?=$site_url?>/testimonial.html">Testimonials </a></li>
<li><a href="<?=$site_url?>/training.html">Training</a></li>
<li><a href="<?=$site_url?>/disclaimer.html">Disclaimer</a></li>
<!--<li><a href="#">Inquiry</a></li>-->
<!--<li><a href="#">ROR</a></li>-->
<!--<li><a href="#">XML</a></li>-->
<li><a href="<?=$site_url?>/sitemap.html">SiteMap </a></li>
</ul>
</div>
</div>
</div>
</footer>
<!--/#footer-->
<script type="text/javascript">
$('.carousel').carousel()
</script> 
<script src="<?=$site_url?>/js/bootstrap.min.js"></script> 
<script src="<?=$site_url?>/js/jquery.prettyPhoto.js"></script> 
<script src="<?=$site_url?>/js/jquery.isotope.min.js"></script> 
<script src="<?=$site_url?>/js/main.js"></script> 
<script src="<?=$site_url?>/js/wow.min.js"></script>
<script src="<?=$site_url?>/js/main1.js"></script>
<script>
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 2;
var navbarHeight = $('div').outerHeight();
$(window).scroll(function(event){
 didScroll = true;
});
setInterval(function() {
if (didScroll) {
hasScrolled();
didScroll = false;
}
}, 80);
function hasScrolled() {
var st = $(this).scrollTop();
 // Make sure they scroll more than delta
if(Math.abs(lastScrollTop - st) <= delta)
return;
if (st > lastScrollTop && st > navbarHeight){
// Scroll Down
$('#amiID').hide(1000);
$('#con').show(1000);
} else {
// Scroll Up
if(st == 0){
if(st + $(window).height() < $(document).height()) {
$('#amiID').show("slow");
$('#con').hide(1000);
}}}
lastScrollTop = st;
}
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/587369bc68c397544aae34d9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- WhatsHelp.io widget -->
<!--<script type="text/javascript">
    (function () {
        var options = {
            facebook: "144176935639967", // Facebook page ID
            whatsapp: "+919999414160", // WhatsApp number
            call_to_action: "Chat With Us", // Call to action
            button_color: "#E74339", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>-->
<style>
	.wp-styd {
    position: fixed;
    z-index: 999;
    bottom: 20px;
    left: 20px;
    display: block;
}
	.bg-brd-sty{margin: 0px; padding: 05px;}
	.bg-brd-sty i{color:#fff; font-size:17px; text-align: center;}
	.bg-brd-sty p a{font-size: 12px !important;}
	.bg-brd-sty p{padding:0px; margin:0px; font-size:12px;}
	.bg-brd-sty{border:solid 1px #ccc;}
	.fx-sec {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#2B2B2B;
   color: white;
   text-align: center; z-index:1;
}
	@media (min-width:320px) and (max-width:767px) 
{
	.wp-styd {display: none;}
	.navbar-header{height:70px !important;}
}
</style>
<style>
#md-dialog {
  position:absolute;
  top:50% !important;
  transform: translate(0, -50%) !important;
  -ms-transform: translate(0, -50%) !important;
  -webkit-transform: translate(0, -50%) !important;
  margin:auto 5%;
  width:90%;
  height:80%;
}
#md-content {
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0; 
}
#md-body {
  position:absolute;
  top:45px; /** height of header **/
  bottom:45px;  /** height of footer **/
  left:0;
  right:0;
  //overflow-y:auto;
}

#md-dialog-d {
  position:absolute;
  top:55% !important;
  transform: translate(0, -50%) !important;
  -ms-transform: translate(0, -50%) !important;
  -webkit-transform: translate(0, -50%) !important;
  margin:auto 25%;
  width:50%;
  height:72%;
  box-shadow: 2px 2px 20px rgba(36,96,121,0.8);
}
#md-content-d {
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0; 
}
#md-body-d {
    padding:35px;
  position:absolute;
  top:45px; /** height of header **/
  bottom:45px;  /** height of footer **/
  left:0;
  right:0;
  //overflow-y:auto;
}

.modal-header{
    background-color:rgba(36,96,121,0.8);
    color:white;
}
.snd-btn{
    background-color:rgba(36,96,121,0.8);
    color:white;
}
.snd-btn:hover{
       background-color:white;
    color:rgba(36,96,121,0.8);
    border: 1px solid rgba(36,96,121,0.8);
}
/* Floating button */

.float{
	position:fixed;
	width:50px;
	height:50px;
	bottom:80px;
	left:20px;
	background-color:rgba(36,96,121);
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 5px 5px 10px rgba(36,96,121,0.5);
}
.mega-menu > section.menu-list-items {
    padding: 0px 0;
}

.my-float{
	margin-top:13px;
	font-size:25px;
}

.float-wp{
	position:fixed;
	width:50px;
	height:50px;
	bottom:23px;
	left:20px;
	background-color:rgb(37, 211, 102);
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 5px 5px 10px rgba(36,96,121,0.5);
}

.my-float-wp{
	margin-top:13px;
    font-size:25px;
}
	.wtys{display: block;}
@media screen and (max-width:767px){
    .float{
        display:none;
    }
    .float-wp{
        display:none;
    }
    .menu-list-items {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    max-width: 100%;
    padding: 0px 10px;
    background: #fff;
    box-shadow: 2px 2px 2px 0 rgba(0, 0, 0, 0.1); z-index:9;
}
	
}
.wp-styd {
    position: fixed;
    z-index: 999;
    bottom:20px;
    left: 20px;
	display:block;
}
	.wp-styd img{display: block;}
	
	@media (min-width:320px) and (max-width:767px) 
{
	.wp-styd img{display:none;}
	.wtys{display: none;}
	.wp-styd{display:none;}
	.footer-bg{background-color:#dedddd;}
	.footer-bg p{color:#000;}
	.menu-list-items{background-color: #fff !important;}
	.nopadding{text-align:center;}
	.footer-bottom p {
    margin-bottom: 0;
    padding: 0px 0px 23px 0px !important;
}
	
}


</style>
<!-- Modal for mobile enquiry-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="md-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="md-content" style="border-radius:0px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;"><b>Please feel free to enquire</b></h4>
      </div>
      <div class="modal-body" id="md-body">
         <form class="row" action="#" method="POST" onsubmit="return checkValidation();">
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <label>Your Name <span class="required">*</span></label>
                              <input placeholder="" class="form-control" type="text" name="name" id="name">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <label>Your Mobile No<span class="required">*</span></label>
                              <input placeholder="" class="form-control" type="text" name="phone" id="phone">
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group">
                              <label>Your Email Id<span class="required">*</span></label>
                              <input placeholder="" class="form-control" type="text" name="email" id="email">
                           </div>
                        </div>
                        
                        
                        
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group">
                              <label>Enquiry <span class="required">*</span></label>
                              <textarea cols="3" rows="5" placeholder="" class="form-control" name="message" id="message"></textarea>
                           </div>
                        </div>
                        <input type="hidden" name="enq" value="enq"/>
                       <div class="col-md-12 col-sm-12">
                            <button type="submit" class="btn snd-btn">Send Message <i class="fa fa-angle-double-right"></i></button>
                        </div>
                     </form>
      </div>
      
    </div>

  </div>
</div>
<div class="fx-sec">
<section class="res-comp text-center visible-xs">
      <div class="container">
         <div class="row">
			 <div class="col-xs-3 bg-brd-sty" style="border-right:solid 0px #FFF; background-color:#4dc247;">
              
             <p style="background-color:#4dc247;"><a href="https://wa.me/+919958276296"> <i class="fa fa-whatsapp"></i> WhatsApp</a></p>
           </div>
           <div class="col-xs-3 bg-brd-sty">
             
             <p> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" style="font-size:12px;"></i> Enquiry</a></p>
           </div>
			 <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="https://tawk.to/chat/587369bc68c397544aae34d9/default"> <i class="fa fa-comments"></i> Live Chat</a></p>
            
           </div>
           <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="tel:+91-9958276296"><i class="fa fa-mobile"></i> Call Now</a></p>
           </div>
            
           
           
         </div>
      </div>
   </section>
</div>

<div class="wp-styd">
	<a href="https://wa.me/+919958276296"><img src="images/wp1.png" style="width:52px;"></a>
</div>
<div class="hidden-xs">
<?php include 'call.php' ?>
	</div>
<!----
<script type="text/javascript">
    (function () {
        var options = {
        	 whatsapp: "+919958276296", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>-------->
<!----------change-pws---->
 <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>