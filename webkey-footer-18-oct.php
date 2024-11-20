

<style>
	.wp-styd {
    position: fixed;
    z-index: 999;
    bottom:20px;
    left: 20px;
	display:block;
}
	.wp-styd img{display: block;}
	.wp-styd1 {
    position: fixed;
    z-index: 999;
    bottom:20px;
    right: 20px;
	display:block;
}
	.wp-styd1 img{display: block;}
	
	@media (min-width:320px) and (max-width:767px) 
{
	.wp-styd img{display:none;}
	.wp-styd1 img{display:none;}
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
<style>
	
	.bg-brd-sty{margin: 0px; padding: 05px; background-color:#000;}
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
	
	.navbar-header{height:70px !important;}
}
</style>
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
<!------
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
</script>-------->
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
<div class="wp-styd">
	<a href="https://wa.me/+919958276296"><img src="images/wp1.png" style="width:52px;"></a>
	</div>




<div class="hidden-xs">
<?php include 'call.php' ?>
	</div>
<div class="hidden-xs">
<?php include 'chatsty.php' ?>
	</div>
<!---
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
</script>---->


<!----==========---->


</body>
</html>