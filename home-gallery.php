
   <style>
 .filter-gallery {
  width: 100%;
}
.filter-gallery .filter {
  list-style: none;
  padding: 10px 15px;
  margin: 0;
}
.filter-gallery .filter li {
  display: inline-block;
}
.filter-gallery .filter li button {
  cursor: pointer;
  background: transparent;
  border-width: 1px;
  border-color: #fff;
  border-radius: 15px;
  padding: 4px 15px;
  color: #fff;
  font-size: 13px;
  outline: none;
}
.filter-gallery .filter li.active button {
  background-color: #fff;
  color: #000;
}
.filter-gallery .gallery {
  width: 100%;
  padding: 10px;
  float: left;
  transition: all 0.7s ease-in-out;
  border: 1px solid rgba(255, 255, 255, 0.1);
  margin: 0;
}
.filter-gallery .gallery li {
  width: 20%;
  float: left;
  padding: 5px;
  list-style: none;
  transition: all 0.7s ease;
}
@media screen and (max-width: 1024px) {
  .filter-gallery .gallery li {
    width: 33.33%;
  }
}
@media screen and (max-width: 320px) {
  .filter-gallery .gallery li {
    width: 50%;
  }
}
.filter-gallery .gallery li a {
  display: block;
  width: 100%;
}
.filter-gallery .gallery li a img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
@media screen and (max-width: 480px) {
  .filter-gallery .gallery li a img {
    height: 100px;
  }
}
.filter-gallery .gallery li.shown {
  transform: scale(1);
  opacity: 1;
}
.filter-gallery .gallery li.hidden {
  transform: scale(0.3);
  opacity: 0;
  width: 0px;
  height: 0px;
  padding: 0;
}
.filter-gallery .gallery .gallery-single {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  color: #fff;
  text-align: center;
  transform: translateY(100%);
  opacity: 0;
  display: flex;
  flex-direction: column;
  background: #363636;
  z-index: 10800;
  padding: 10px;
}
.filter-gallery .gallery .gallery-single .gallery-single-inner {
  width: 100%;
  height: 100%;
  overflow-y: auto;
}
.filter-gallery .gallery .gallery-single .gallery-single-inner #btnClose {
  position: absolute;
  top: 10px;
  right: 470px;
  background: transparent;
  z-index: 10801;
  border: none;
  cursor: pointer;
  font-size: 30px;
  padding: 0;
  color: #fff;
}
.filter-gallery .gallery .gallery-single .gallery-single-inner img {
  max-width: 100%;
  height: 330px;
  object-fit: cover;
}
@media screen and (max-width: 480px) {
  .filter-gallery .gallery .gallery-single .gallery-single-inner img {
    height: 195px;
  }
}
.filter-gallery .gallery .gallery-single .gallery-single-inner h3 {
  font-size: 18px;
  margin-bottom: 10px;
}
.filter-gallery .gallery .gallery-single .gallery-single-inner p {
  font-size: 16px;
  
  line-height: 1.4;
  margin-bottom: 10px;
}
.filter-gallery .gallery.shown .gallery-single {
  transform: translateY(0);
  opacity: 1;
  transition: all 0.7s ease;
}

</style>


    <div class="filter-gallery">

        <ul class="filter">
          <li class="active"><button data-filter="all">All</button></li>
          <li><button data-filter="fruits">Fruits</button></li>
          <li><button data-filter="vegetables">Vegetables</button></li>
         
          <li><button data-filter="vegetables">Vegetables</button></li>
        </ul>

        <ul class="gallery">
          <li data-filter="fruits">
            <a href="img/Awarded By Miss Russia 2020.png" data-title="Orange" data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit.">
                          <img src="img/Awarded By Miss Russia 2020.png" alt="Orange">
                      </a>
          </li>
          <li data-filter="vegetables">
            <a href="img/Awarded By Miss Russia 2020.png" data-title="vegetables" data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit.">
                          <img src="img/Awarded By Miss Russia 2020.png" alt="vegetables">
                      </a>
          </li>
         
         
      
          <!-- Gallery single component -->
          <div class="gallery-single">
            <div class="gallery-single-inner">
              <button id="btnClose">×</button>
              <img src="" alt="fruit">
              <h3>Title</h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <!--  -->
        </ul>
      </div>
      
      <script>
        var links = document.querySelectorAll(".gallery li a");
        var gallery = document.getElementsByClassName("gallery")[0];
        var gallerSingleElem = document.getElementsByClassName("gallery-single")[0];
        var btnClose = document.getElementById("btnClose");
        var image = "";
        var title = "";
        var desc = "";

     // Popup
    links.forEach(function(link) {
    link.addEventListener("click", function(e) {
    e.preventDefault();
    image = link.querySelector("img").getAttribute("src");
    title = link.getAttribute("data-title");
    desc = link.getAttribute("data-desc");
    gallerSingleElem.querySelector("img").setAttribute("src", image);
    gallerSingleElem.querySelector("img").setAttribute("alt", title);
    gallerSingleElem.querySelector("h3").innerHTML = title;
    gallerSingleElem.querySelector("p").innerHTML = desc;

    // Showing Gallery Single element
    gallery.classList.add("shown");
  });
});

// Closing Gallery Single element
btnClose.addEventListener("click", closeSingleGallery);
window.addEventListener("keypress", processKeyPress);

function processKeyPress(e) {
  if (e.key == "Escape") {
    closeSingleGallery();
  }
}

function closeSingleGallery() {
  gallery.classList.remove("shown");
}

// Popup ends here

// Filter starts here
var filterBtns = document.querySelectorAll(".filter li button");
var items = document.querySelectorAll(".gallery li");
var filterSelected = "";
var itemsHidden;

filterBtns.forEach(function(filterBtn) {
  filterBtn.addEventListener("click", function(e) {
    // Filter button active
    filterBtns.forEach(function(item) {
      item.parentNode.classList.remove("active");
    });
    this.parentNode.classList.add("active");

    // reset
    items.forEach(function(item) {
      item.classList.remove("hidden");
      setTimeout(function() {
        item.classList.add("shown");
      }, 700);
    });
    filterSelected = this.getAttribute("data-filter");

    // hide rest of the items
    if (filterSelected != "all" && filterSelected !== "") {
      itemsHidden = document.querySelectorAll(
        ".gallery li:not([data-filter='" + filterSelected + "'])"
      );
      itemsHidden.forEach(function(item) {
        item.classList.add("hidden");
        setTimeout(function() {
          item.classList.remove("shown");
        }, 700);
      });
    } else {
      items.forEach(function(item) {
        item.classList.remove("hidden");
        setTimeout(function() {
          item.classList.add("shown");
        }, 700);
      });
    }
  });
});


      </script>
