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
.close {
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
/* The Close Button */
.close {
    position: absolute;
    top: -8px;
    right: 0px;
    color: #f1f1f1;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
@media (min-width:320px) and (max-width:767px) 
{

.cp-widget-button__inner{animation:bounce 1s infinite alternate;-webkit-animation:bounce 1s infinite alternate}
.cp-widget-button__inner img{ width: 20px; height: 20px;}
.cat-textformat h2{color:#1178ba!important}
.cat-textformat p{text-align:left;word-wrap:break-word}
.cat-textformat ul{width:auto;height:auto;padding:0;margin:15px 0 0 0}
.cat-textformat ul li{background:url(../images/right-icon.png) 0 0 no-repeat;width:auto;height:auto;padding:0 0 0 36px;margin:10px 0 10px;line-height:25px}
.call-pop1 p{padding:33px 64px}
.call-pop1 p{font-size:24px;padding:46px 33px}
.bg-clrd_f {
    font-size: 18px !important;
}
.close {
    position: absolute;
    top: -9px !important;
     right:0px !important; 
}
}
</style>
<link rel="stylesheet" href="<?=$site_url?>/css/styd1.css" type="text/css">
<div id="loading-area"></div>
<div id="myModal" class="modal">
 
  <div class="modal-content" id="img01">
  <div class="col-md-8 col-md-offset-2 bg_pof">
   <h2 class="bg-clrd_f">Would you like us to call you back? <span class="close">&times;</span></h2>
   
  <div class="col-md-12">
 
  <form name="call-pop_form" id="call-pop_form" action="#">
        <div class="form-style">
        <div class="col-md-12 col-xs-12">
          <select name="purpose" id="purpose" class="form-control" required>
            <option value="">-- Select Purpose --</option>
            <option value="New Website">New Website</option>
            <option value="Website Redesigning">Website Redesigning</option>
            <option value="Ecommerce Website">Ecommerce Website</option>
            <option value="B2B Portal Development">B2B Portal Development</option>
            <option value="SEO Service">SEO Service</option>
            <option value="Testimonial">Testimonial</option>
            <option value="Career">Career</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
          </select> </div>
          <div class="col-md-12 col-xs-12">         
          <input type="text" name="mobile" id="mobilecallback" required class="form-control" maxlength="12" placeholder="e.g. 91-999-941-4160"> 
          </div>
          <div class="col-md-12 col-xs-12">  
          <input type="text" name="name" id="namecallback" required class="form-control" placeholder="Full Name">
          </div>
          <div class="col-md-12 col-xs-12">
          <input type="email" name="email" required id="emailcallback" class="form-control" placeholder="Email Address">
          </div>
          <div class="col-md-12 col-xs-12">
          <textarea name="message" id="messagecallback" required class="form-control" cols="30" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="col-md-12 col-xs-12 text-center">
          <input type="submit" id="email_number" name="btnSub" class="site-button1">   
          </div>               
        </div>
      </form>
                            </div>
                              <div style="clear:both"></div>
                                </div>
                               
    </div>
</div>
  <div class="cp-widget-button" id="myImg">
    <div data-brand-color="background" onclick="show()" class="cp-widget-button__inner"> <img src="<?=$site_url?>/images/call1.png" alt="" style="width:25px;"> </div>
  </div>