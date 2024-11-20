<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

:root {
  --base-fs: 17px;
  --base-padding: 10px;
  --base-margin: 10px;
  --base-br: 20px;
  --base-lh: 1.5;
  --base-gap: 10px;
  --fw-regular: 400;
  --fw-medium: calc(var(--fw-regular) + 100);
  --fw-semi: calc(var(--fw-medium) + 100);
  --fw-bold: calc(var(--fw-semi) + 100);
  --fw-xbold: calc(var(--fw-bold) + 100);
  
 
  
  --hue: 250;
  --body-bg: oklch(95% .075 var(--hue));
  --accordion-bg: oklch(98% .05 var(--hue));
  --heading-color: oklch(10% .2 var(--hue));
  --text-color: oklch(40% .05 var(--hue));
}


.accordionsss {
  padding-block: calc(var(--base-padding) * 3);
  /* inline-size: min(720px, 90vw); */
  margin-inline: auto;
  list-style-type: none;
  
}


.accordion:not(:last-of-type) {
  margin-bottom: var(--base-margin);
}

.accordion {
  background-color: var(--accordion-bg);
  padding: calc(var(--base-padding) * 3) calc(var(--base-padding) * 2);
  border-radius: calc(var(--base-br) * .5);
  box-shadow: 5px 5px 8px oklch(5% .1 var(--hue) / .25), -5px -5px 8px oklch(80% .1 var(--hue) / .5);
}

.accordion label {
  font-size: calc(var(--base-fs) * 1);
  font-weight: 700;
  color: var(--heading-color);
  line-height: calc(var(--base-lh) * .7);
  display: block;
  position: relative;
}

.accordion label::after {
  content: "\276F";
  position: absolute;
  inset-inline-end: 0;
  font-size: calc(var(--base-fs) * 1);
  transition: rotate 250ms ease-out;
}

.accordion label:hover {
  cursor: pointer;
}

.accordion input {
  display: none;
}

.accordion-content {
  max-height: 0;
  overflow-y: hidden;
  transition: max-height .75s ease-out;
}

input:checked + label + .accordion-content {
  margin-block-start: var(--base-margin);
  max-height: 400px;
}

input:checked + label::after {
  rotate: 90deg;
}



    </style>
</head>

<body>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6">

          <ul class="accordionsss">

            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-first">
              <label for="accordion-first">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <p>Delhi 2</p>
              </div>
            </li>
        
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-second">
              <label for="accordion-second">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
        
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-third">
              <label for="accordion-third">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
        
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-fourth">
              <label for="accordion-fourth">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
  
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="accordionsss">

            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-fifth">
              <label for="accordion-fifth">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
        
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-sixth">
              <label for="accordion-sixth">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-seven">
              <label for="accordion-seven">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
        
            <li class="accordion">
              <input type="radio" name="accordion" id="accordion-eight">
              <label for="accordion-eight">Website Designing For Furniture</label>
        
              <div class="accordion-content">
                <ul>
                  <li>Delhi</li>
                  <li>Mumbai</li>
                </ul>
              </div>
            </li>
  
          </ul>
        </div>
      </div>
       
    </div>
      
</body>

</html>