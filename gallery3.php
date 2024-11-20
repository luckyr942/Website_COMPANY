<?php include 'headlink.php';?>

  <link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
  
    <style>


.gallerynew {
    padding: 20px;
}

.filter-button-group {
    margin-bottom: 20px;
}

.filter-button {
    padding: 8px 16px;
    margin-right: 10px;
  
    background-color: #c52d2f;
    cursor: pointer;
}

.filter-button.active {
    background-color: #ccc;
}

.image-gallery {
    display: flex;
    flex:wrap;
   
}

.image-item {
    margin: 5px;
}

.image-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
    cursor: pointer;
}

.image-popup {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    overflow: auto;
}

.popup-image {
    margin: 50px auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
}

.close-popup {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    color: white;
    cursor: pointer;
}
.filter-button-group {
    display: flex;
    justify-content: center;
    align-items: center;
}

    </style>

    <div class="container mt-5">
        <div class="gallerynew ">
            <div class="filter-button-group ">
                <button class="filter-button btn active" data-filter="all">All</button>
                <button class="filter-button btn" data-filter="Awards">Awards</button>
                <button class="filter-button btn" data-filter="Celebrations">Celebrations</button>
                <button class="filter-button btn" data-filter="Client">Client Meets </button>
                <button class="filter-button btn" data-filter="Other">Other</button>
            </div>
           <div class=" row ">

    <div class="col-md-3">
        <div class="image-item all"><img src="img/web-01.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all"><img src="img/web-02.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">

        <div class="image-item all Awards"><img src="img/web-03.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Awards"><img src="img/web-04.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Awards"><img src="img/web-05.jpg" alt="#"></div>
    </div>

    <div class="col-md-3">
        <div class="image-item all "><img src="img/web-06.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations"><img src="img/web-07.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all "><img src="img/web-08.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Awards"><img src="img/web-09.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations "><img src="img/web-10.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations"><img src="img/web-11.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations"><img src="img/web-12.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations"><img src="img/web-13.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Celebrations"><img src="img/web-14.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Awards"><img src="img/web-15.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Other"><img src="img/web-16.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Other"><img src="img/web-17.jpg" alt="#"></div>
    </div>
    <div class="col-md-3">
        <div class="image-item all Client"><img src="img/web-18.jpg" alt="#"></div>
    </div>

</div>
        </div>
    
        <div class="image-popup">
            <span class="close-popup">&times;</span>
            <img class="popup-image img-fluid" src="" alt="Popup Image">
        </div>
    </div>
    

    
    
    
<!--    <script>-->
<!--        document.addEventListener('DOMContentLoaded', function() {-->
<!--    const filterButtons = document.querySelectorAll('.filter-button');-->
<!--    const imageItems = document.querySelectorAll('.image-item');-->
<!--    const popup = document.querySelector('.image-popup');-->
<!--    const popupImage = document.querySelector('.popup-image');-->
<!--    const closePopup = document.querySelector('.close-popup');-->

<!--    filterButtons.forEach(button => {-->
<!--        button.addEventListener('click', function() {-->
<!--            filterButtons.forEach(btn => btn.classList.remove('active'));-->
<!--            this.classList.add('active');-->
<!--            const filter = this.getAttribute('data-filter');-->
<!--            imageItems.forEach(item => {-->
<!--                if (filter === 'all' || item.classList.contains(filter)) {-->
<!--                    item.style.display = 'block';-->
<!--                } else {-->
<!--                    item.style.display = 'none';-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->

<!--    imageItems.forEach(item => {-->
<!--        item.addEventListener('click', function() {-->
<!--            const imageUrl = this.querySelector('img').getAttribute('src');-->
<!--            popupImage.setAttribute('src', imageUrl);-->
<!--            popup.style.display = 'block';-->
<!--        });-->
<!--    });-->

<!--    closePopup.addEventListener('click', function() {-->
<!--        popup.style.display = 'none';-->
<!--    });-->

<!--    popup.addEventListener('click', function(event) {-->
<!--        if (event.target === popup) {-->
<!--            popup.style.display = 'none';-->
<!--        }-->
<!--    });-->
<!--});-->

<!--    </script>-->
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-button');
    const imageItems = document.querySelectorAll('.image-item');
    const popup = document.querySelector('.image-popup');
    const popupImage = document.querySelector('.popup-image');
    const closePopup = document.querySelector('.close-popup');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            const filter = this.getAttribute('data-filter');
            imageItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Reset the image container's height after filtering
            document.querySelector('.row').style.height = 'auto';
        });
    });

    imageItems.forEach(item => {
        item.addEventListener('click', function() {
            const imageUrl = this.querySelector('img').getAttribute('src');
            popupImage.setAttribute('src', imageUrl);
            popup.style.display = 'block';
        });
    });

    closePopup.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    popup.addEventListener('click', function(event) {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});

    </script>
