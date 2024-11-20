
<link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 
    <!-- Lightbox CSS -->
<link href="https://cdn.jsdelivr.net/npm/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
<style>
        * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


#gallery a {
  text-decoration: none;
  cursor: pointer;
  outline: 0;
}

.section-padding {
  padding-top: 80px;
}

.gallery-section {
  position: relative;
  z-index: 1;
}

#gallery .title {
  font-size: 35px;
  font-weight: 600;
  color:#474646;
  
}

#gallery .filter {
  text-align: center;
  max-width: 1050px;
  margin: auto;
}

#gallery .btn {
  padding: 10px 20px;
  margin: 5px 4px 4px 0;
  display: inline-block;
  color: #003;
  background: #eee;
  border: 1px solid #c52d2f;
  transition: all 0.4s;
  border-radius: 10px;
  font-size: 16px;
  font-weight: 500;
}
#gallery .btn:hover,
#gallery .btn-active {
  background: #c52d2f;
  color: #fff;
  -webkit-transform: translateY(3px);
  -ms-transform: translateY(3px);
  transform: translateY(3px);
}
#gallery .gallery {
  display: flex;
  justify-content: center;
  width: fit-content;
  max-width: 1320px;
  flex-wrap: wrap;
  margin: 25px auto;
  /* gap: 14px; */
}
.gallery a {
  display: flex;
}
.gallery img {
  width: 300px;
  height: 220px;
  object-fit: cover;
  transition: 0.3s ease-in-out;
  border-radius: 12px;
  overflow: hidden;
  margin: 10px 10px;
}

.gallery img:hover {
  transform: scale(1.1);
}

#gallery .sets .hide,
#gallery .sets .pophide {
  width: 0%;
  opacity: 0;
}

#gallery .closeBtn {
  position: absolute;
  font-size: 22px;
  font-weight: 500;
  right: 25px;
  top: 25px;
  color: white;
  transition: 0.5s linear;
  padding: 8px 40px;
  border-radius: 25px;
  background: red;
  outline-offset: -6px;
  outline: 2px solid #fff;
}
#gallery .closeBtn:hover {
  cursor: pointer;
  background: white;
  color: black;
  outline: 2px solid #000;
}

#gallery .openDiv {
  width: 100%;
  height: 100vh;
  background: #000000e7;
  position: fixed;
  top: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  left: 0;
  z-index: 9999;
}
#gallery .imgPreview {
  width: 70%;
  object-fit: scale-down;
  max-height: 40vw;
  height: auto;
}
#gallery .prevButton,
#gallery .nextButton {
  transition: 1s linear;
  padding: 10px 35px;
  font-size: 18px;
  border: none;
  color: white;
  background: #0005;
  border-radius: 10px;
  border: 1px solid white;
  margin: 10px;
}
#gallery .prevButton:hover,
#gallery .nextButton:hover {
  background: #fff;
  color: black;
}

#gallery .openDiv {
  width: 100%;
  height: 100vh;
  background: #000000e7;
  position: fixed;
  top: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  left: 0;
  z-index: 9999;
}

#gallery .imgPreview {
  max-width: 90vw; /* Set the maximum width for the image */
  max-height: 90vh; /* Set the maximum height for the image */
  height: auto;
}


/* resposive CSS Code */

@media max-width: 1199px {
  .section-padding {
    padding-top: 70px;
  }
}
@media (max-width: 991px) {
  .section-padding {
    padding-top: 50px;
  }
}
@media (max-width: 767px) {
 #gallery .title {
    font-size: 36px;
  }
 #gallery .gallery img {
    margin: 8px 8px;
    width: 175px;
  }
  #gallery  .closeBtn {
    padding: 6px 25px;
  }
 #gallery .prevButton,
 #gallery .nextButton {
    font-size: 18px;
    padding: 8px 25px;
  }
}

@media (max-width: 540px) {
  .section-padding {
    padding-top: 30px;
  }

#gallery  .gallery img {
    margin: 8px 6px;
    width: 155px;
  }

 #gallery .closeBtn {
    font-size: 18px;
    border-radius: 15px;
  }
 #gallery .prevButton,
#gallery  .nextButton {
    font-size: 18px;
    padding: 6px 20px;
    border-radius: 10px;
    margin: 5px;
  }

 #gallery .imgPreview {
    width: 90%;
    max-height: 50vh;
    height: auto;
  }
}

    </style>

    
    
<div class=" gallery-section" id="gallery">
        <div class="container">
          <!-- Section Title Start -->
          <div class="text-center">
            <h2 class="title">Our Gallery</h2>
            <p>Webkeyindia Family </p>
          </div>
          
         <div id="btncontainer" class="filter">
    
    <a class="btn btn-active" href="#awards">Awards</a>
    <a class="btn" href="#achievement">Celebrations</a>
    <a class="btn" href="#others">Client Meets</a>
    <a class="btn" href="#ClientMeet">Other</a>
    <a class="btn " href="#all">ALL</a>
        </div>


          <!-- Gallery Section Start -->

          <div class="gallery sets">
          
            
            <a class="all awards" data-lightbox="gallery" href="img/Awarded By Miss Russia 2020.png"><img src="img/Awarded By Miss Russia 2020.png"/></a>
            
            <a class="all awards" data-lightbox="gallery" href="img/a-2.jpg"><img src="img/a-2.jpg"/></a>
            <a class="all awards" data-lightbox="gallery" href="img/award-6.jpg"><img src="img/award-6.jpg"/></a>
            
            <a class="all awards" data-lightbox="gallery" href="img/a-3.jpg"><img src="img/a-3.jpg"/></a>
            <a class="all awards" data-lightbox="gallery" href="img/a-4.jpg"><img src="img/a-4.jpg"/></a>
            <a class="all awards" data-lightbox="gallery" href="img/a-5.jpg"><img src="img/a-5.jpg"/></a>
            
            <a class="all Client others" data-lightbox="gallery" href="img/cm-1.jpg"><img src="img/cm-1.jpg"/></a>
            <a class="all Client festival" data-lightbox="gallery" href="img/festival-4.jpg"><img src="img/festival-4.jpg"/></a>
            <a class="all Client festival" data-lightbox="gallery" href="img/festival-1.jpg"><img src="img/festival-1.jpg"/></a>
            <a class="all Client festival" data-lightbox="gallery" href="img/festival-3.jpg"><img src="img/festival-3.jpg"/></a>
            <a class="all Client festival" data-lightbox="gallery" href="img/durga-1.jpg"><img src="img/durga-1.jpg"/></a>
            <a class="all others" data-lightbox="gallery" href="img/clientmeet-1.0.jpg"><img src="img/clientmeet-1.0.jpg"/></a>
            <a class="all ClientMeet" data-lightbox="gallery" href="img/clientmeet-2.0.jpg"><img src="img/clientmeet-2.0.jpg"/></a>
            <a class="all others" data-lightbox="gallery" href="img/clientmeet-3.0.jpg"><img src="img/clientmeet-3.0.jpg"/></a>
            <a class="all others" data-lightbox="gallery" href="img/clientmeet-4.0.jpg"><img src="img/clientmeet-4.0.jpg"/></a>
            <a class="all ClientMeet" data-lightbox="gallery" href="img/clientmeet-5.0.jpg"><img src="img/clientmeet-5.0.jpg"/></a>
            <a class="all ClientMeet" data-lightbox="gallery" href="img/clientmeet-6.0.jpg"><img src="img/clientmeet-6.0.jpg"/></a>
            <a class="all others" data-lightbox="gallery" href="img/clientmeet-7.0.jpg"><img src="img/clientmeet-7.0.jpg"/></a>
            <a class="all achievement" data-lightbox="gallery" href="img/clebb-6.jpg"><img src="img/clebb-6.jpg"/></a>
           
            <a class="all achievement" data-lightbox="gallery" href="img/clebb-3.jpg"><img src="img/clebb-3.jpg"/></a>
            <a class="all achievement" data-lightbox="gallery" href="img/clebb-4.jpg"><img src="img/clebb-4.jpg"/></a>
            <a class="all achievement" data-lightbox="gallery" href="img/clebb-5.jpg"><img src="img/clebb-5.jpg"/></a>
             <a class="all achievement" data-lightbox="gallery" href="img/clebb-1.jpg"><img src="img/clebb-1.jpg"/></a>
            <a class="all achievement" data-lightbox="gallery" href="img/clebb-2.jpg"><img src="img/clebb-2.jpg"/></a>
            <a class="all ClientMeet" data-lightbox="gallery" href="img/other-2.0.jpg"><img src="img/other-2.0.jpg"/></a>
            
          </div>
        </div>
      </div>

<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   
    

 <script>
     $(".filter a").click(function (e) {
    e.preventDefault();
    var filterClass = $(this).attr("href").substr(1);
    
    if (filterClass === "all") {
        $(".sets a").removeClass("hide");
    } else {
        $(".sets a").each(function () {
            var classes = $(this).attr("class").split(" ");
            if (!classes.includes(filterClass)) {
                $(this).addClass("hide");
            } else {
                $(this).removeClass("hide");
            }
        });
    }

    // Remove and add active class to the clicked button
    $(".filter a").removeClass("btn-active");
    $(this).addClass("btn-active");
});

 </script>
      
      

<!-- jQuery (required for Lightbox) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/lightbox2/dist/js/lightbox.min.js"></script>

