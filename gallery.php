<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <style>
      <style>
        :root {
            --dark: #373349;
            --shadow: rgba(0, 0, 0, .2);
        }

        html, body {
            background-color: var(--dark);
            margin: 5px;
        }

        .container > a {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
        }

        .container > a > img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-shadow: 0 2px 16px var(--shadow);
        }

        .container {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: 120px;
            grid-auto-flow: dense;
        }

        .horizontal {
            grid-column: span 2;
        }

        .vertical {
            grid-row: span 2;
        }

        .big {
            grid-column: span 2;
            grid-row: span 2;
        }

        /* Media Queries for Responsive Layout */
        @media only screen and (max-width: 600px) {
            
        .container {
           
            grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
            grid-auto-rows: 100px;
            grid-auto-flow: dense;
        }

            .container > a {
                font-size: 1.5em;
            }
        }

        @media only screen and (max-width: 400px) {
            .container > a {
                font-size: 1.2em;
            }
        }

        
        /* Tabs Styles */
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab {
            margin: 0 10px;
            cursor: pointer;
            font-size: 1.2em;
            color:black;
        }

        .tab:hover {
            text-decoration: underline;
        }
    </style>
    </style>
</head>
<body>
    <html>
  <body>


    <div class="tabs">
      <div class="tab" onclick="filterImages('all')">All</div>
      <div class="tab" onclick="filterImages('vertical')">Vertical</div>
      <div class="tab" onclick="filterImages('horizontal')">Horizontal</div>
      <div class="tab" onclick="filterImages('big')">Big</div>
  </div>

    <div class="container">
      <a href="img/gall-1.0.png" data-lightbox="homePortfolio">
        <img src="img/gall-1.0.png"/>
      </a>
      
      <a href="img/gall-1.0.png" data-lightbox="homePortfolio" class="vertical">
        <img src="img/gall-1.0.png"/>
      </a>
      
      <a href="img/gall-1.png" data-lightbox="homePortfolio" class="horizontal">
        <img src="img/gall-1.png"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=40" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=40"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=32" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=32"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=7" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=7"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=111" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=111"/>
      </a>
      
      <a href="https://source.unsplash.com/600x800/?sig=94" data-lightbox="homePortfolio" class="vertical">
        <img src="https://source.unsplash.com/600x800/?sig=94"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=11" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=11"/>
      </a>
      
      <a href="https://source.unsplash.com/800x600/?sig=68" data-lightbox="homePortfolio" class="horizontal">
        <img src="https://source.unsplash.com/800x600/?sig=68"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=24" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=24"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=55" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=55"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=56" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=56"/>
      </a>
      
      <a href="https://source.unsplash.com/800x600/?sig=186" data-lightbox="homePortfolio" class="horizontal">
        <img src="https://source.unsplash.com/800x600/?sig=186"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=117" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=117"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=157" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=157"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=287" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=287"/>
      </a>
      
      <a href="https://source.unsplash.com/600x800/?sig=307" data-lightbox="homePortfolio" class="vertical">
        <img src="https://source.unsplash.com/600x800/?sig=307"/>
      </a>
    </div>
  </body>
  <script src="js/lightbox-plus-jquery.min.js"></script>

  <script>
    function filterImages(category) {
        const images = document.querySelectorAll('.container > a');

        images.forEach(image => {
            image.style.display = 'block';

            if (category !== 'all' && !image.classList.contains(category)) {
                image.style.display = 'none';
            }
        });
    }
</script>
</html>
</body>
</html>