

 
<style>

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
  height: 300px;
  object-fit: cover;
  transition: 0.3s ease-in-out;
  border-radius: 12px;
  overflow: hidden;
  margin: 10px 10px;
}

.gallery img:hover {
  transform: scale(1.05);
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

/*follow us css */

.followus a {
  padding: 10px 80px;
  display: inline-block;
  border: 1px solid var(--bcolor);
  color: var(--bcolor);
  text-transform: uppercase;
  font-size: 1.4rem;
  transition: 0.5s;
  font-weight: 600;
  letter-spacing: 10px;
  margin: 1.5rem 0;
  font-family: 'Raleway', sans-serif;
}



.followus a:hover {
  background: var(--mcolor);
  
  color: var(--wcolor);
}

    </style>

<div class=" gallery-section" id="gallery">
        <div class="container">
          <!-- Section Title Start -->
          <div class="text-center">
            <h2 class="title">Our Certificates</h2>
           
          </div>
          
          <div class="gallery sets">
          
            
            <a  class="all "><img src="img/webkeycertifcates.jpg"/></a>
            
            <a  class="all "><img src="img/webkeycertifcates2.jpg"/></a>
            
            <a  class="all "><img src="img/webkeycertifcates3.jpg"/></a>
            
            
          </div>
        </div>
      </div>

            <div class="followus text-center" style="margin-top: 20px;">

                <a href="#">View All</a>

            </div>
           