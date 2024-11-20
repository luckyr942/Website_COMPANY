
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The modalform (background) */
.modalform {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modalform Content */
.modalform-contentform {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width:100%;
}

/* The closechatform Button */
.closechatform {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closechatform:hover,
.closechatform:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div id="mymodalformchat" class="modalform">

  <!-- modalform content -->
  <div class="modalform-contentform" style="width:100%;">
    <span class="closechatform">&times;</span>
    <p>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdszaeBajbKJ05JkHkPIFU4vpHfYz2CsEo7_9YBHrNGCN9pGQ/viewform?embedded=true" width="100%" height="891" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
	  </p>
  </div>

</div>


<style>
.modalwki {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modalwki Content */
.modalwki-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width:100%;
}

/* The closechatwki Button */
.closechatwki {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.closechatwki:hover,
.closechatwki:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<div id="mymodalwkichatwki" class="modalwki">
  <!-- modalwki content -->
  <div class="modalwki-content" style="width:100%;">
    <span class="closechatwki">&times;</span>
    <p><iframe src="https://tawk.to/chat/587369bc68c397544aae34d9/default"  height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></p>
  </div>

</div>


	
	
	
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
             
             <p> <a href="#" id="myBtnform"><i class="fa fa-envelope" style="font-size:12px;"></i> Enquiry</a></p>
           </div>
			 <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="#" id="myBtnwki"> <i class="fa fa-comments"></i> Live Chat</a></p>
            
           </div>
           <div class="col-xs-3 bg-brd-sty">
               
             <p><a href="tel:+91-9958276296"><i class="fa fa-mobile"></i> Call Now</a></p>
           </div>
            
           
           
         </div>
      </div>
   </section>
</div>
	
	<script>
// Get the modalwki
var modalwki = document.getElementById("mymodalwkichatwki");

// Get the button that opens the modalwki
var btn = document.getElementById("myBtnwki");

// Get the <span> element that closechatwkis the modalwki
var span = document.getElementsByClassName("closechatwki")[0];

// When the user clicks the button, open the modalwki 
btn.onclick = function() {
  modalwki.style.display = "block";
}

// When the user clicks on <span> (x), closechatwki the modalwki
span.onclick = function() {
  modalwki.style.display = "none";
}

// When the user clicks anywhere outside of the modalwki, closechatwki it
window.onclick = function(event) {
  if (event.target == modalwki) {
    modalwki.style.display = "none";
  }
}
</script>
	
	
	<script>
// Get the modalform
var modalform = document.getElementById("mymodalformchat");

// Get the button that opens the modalform
var btn = document.getElementById("myBtnform");

// Get the <span> element that closechatforms the modalform
var span = document.getElementsByClassName("closechatform")[0];

// When the user clicks the button, open the modalform 
btn.onclick = function() {
  modalform.style.display = "block";
}

// When the user clicks on <span> (x), closechatform the modalform
span.onclick = function() {
  modalform.style.display = "none";
}

// When the user clicks anywhere outside of the modalform, closechatform it
window.onclick = function(event) {
  if (event.target == modalform) {
    modalform.style.display = "none";
  }
}
</script>
