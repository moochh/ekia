<?php
  include('functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Home | EKIA.</title>
</head>
<body>
  <nav>
    <a href="" class="nav-logo">EKIA  &nbsp;.</a>
    <div class="nav-list">
      <a href="index.html" class="nav-active">Home</a>
      <a href="" class="nav-inactive">Products</a>
      <a href="about.html" class="nav-inactive">About</a>
    </div>
    <div class="nav-buttons">
      <img src="Images/Icons/user.svg">
      <img src="Images/Icons/cart.svg">
    </div>
  </nav>
  
  <div class="hero-section">
    <div class="hero-section-sec hero-section-main">
      <a href="" class="nav-logo hero-section-logo">EKIA &nbsp;.</a>
      <div class="label">
        <div class="hori-line">&nbsp;</div>
        <p>THE WORLD'S NO. 1</p>
      </div>
      <h1>Ekia</h1>
      <p>A good furniture means a good life. Shop now at Ekia and enjoy up to 20% discount on selected items.</p>
      <a href="#brand-section" class="button-1">Explore</a>
      <div class="semi-footer">
        <h6>Bern, Switzerland</h6>
        <h6>Since 2016.</h6>
      </div>
    </div>
    <div class="hero-section-sec hero-section-all black-overlay">
      <img src="Images/Hero/hero-all.jpg">
      <h5>Over 50+ products</h5>
      <a href="" class="hero-section-a no-wrap">Shop All Products ></a>
    </div>
    <div class="hero-section-sec hero-section-categories black-overlay">
      <img src="Images/Hero/hero-categories.jpg">
      <h5>With a wide variety of choices</h5>
      <div class="hero-section-categories-list">
        <a href="">Living Room</a>
        <a href="">Kitchen</a>
        <a href="">Bedroom</a>
        <a href="">Bathroom</a>
        <a href="">Electronics</a>
      </div>
      <h3 class="hero-section-a">Categories</h3>
    </div>
    <div class="hero-section-sec">
      <div class="hero-section-featured hero-section-sec-sub black-overlay">
        <img src="Images/Hero/hero-featured.jpg">
        <h5>Manager's Choice</h5>
        <a href="" class="hero-section-a">Shop Featured ></a>
      </div>
      <div class="hero-section-sale hero-section-sec-sub black-overlay">
        <img src="Images/Hero/hero-sale.jpg">
        <h5>Discounts and bundles</h5>
        <a href="" class="hero-section-a" >Shop Sale ></a>
      </div>
    </div>
  </div>
  <section class="brand-section" id="brand-section">
    <div class="brand-section-wrapper">
      <h6>IN PARTNERSHIP WITH</h6>
      <div class="brand-logo-wrapper">
        <img src="Images/Brands/beauty-rest.svg">
        <img src="Images/Brands/lg.svg">
        <img src="Images/Brands/le-creuset.svg">
        <img src="Images/Brands/lovesac.svg">
        <img src="Images/Brands/samsung.svg">
        <img src="Images/Brands/tefal.svg">
        <img src="Images/Brands/whirlpool.svg">
      </div>
    </div>
  </section>

  <section class="choose-us">
    <div class="choose-us-wrapper">
      <div class="choose-us-content">
        <div class="label">
          <div class="hori-line">&nbsp;</div>
          <p>WHY CHOOSE US</p>
        </div>
        <h2>LOREM IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus pellentesque nunc, at egestas tellus pharetra id. Phasellus eget mi purus. In nec vehicula risus, id sollicitudin erat. Pellentesque ultricies eu metus at iaculis. Duis elementum maximus massa ut euismod. Nam euismod sit amet urna sit amet interdum. Nam vitae.</p>
        <div class="choose-us-reasons-wrapper">
          <div class="choose-us-reasons-row">
              <div class="choose-us-reason">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M45.38,77.15c-9.91,0-19.83,0-29.74,0-6.85,0-9.71-2.83-9.73-9.58Q5.84,45.29,5.92,23c0-6.21,2.93-9.2,9.06-9.21q30.5-.1,61,0c6.22,0,9.2,2.94,9.23,9.06q.12,22.53,0,45.07c0,6.38-3,9.2-9.57,9.23C65.55,77.19,55.47,77.15,45.38,77.15Zm11.4-51.53-27,36.15,4.69,3.4,26.92-36ZM41.55,31.43a9.88,9.88,0,1,0-9.49,10A10,10,0,0,0,41.55,31.43Zm27.77,27.9a9.88,9.88,0,1,0-9.66,9.86A10,10,0,0,0,69.32,59.33Z"/><path d="M37.38,32.42c-1.86,1.35-3.84,3.9-5.56,3.73s-4.36-2.76-4.71-4.64c-.25-1.3,2.57-4.37,4.22-4.52,1.87-.18,4,2,5.94,3.2Z"/><path d="M58.13,64.93c-1.2-2-3.43-4-3.28-5.88C55,57.4,58,54.53,59.3,54.75c1.89.34,4.5,2.83,4.72,4.65S61.69,63.12,60.37,65Z"/></svg>
                <h6>Exciting Offers</h6>
              </div>
              <div class="choose-us-reason">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M45.44,17.78c10.06,0,20.12,0,30.18,0,6.49,0,9.41,2.9,9.44,9.34q.1,18.3,0,36.61c0,6.48-2.91,9.42-9.34,9.43q-30.18.09-60.36,0c-6.49,0-9.4-2.91-9.43-9.34q-.1-18.32,0-36.62c0-6.48,2.9-9.38,9.33-9.43C25.32,17.73,35.38,17.78,45.44,17.78ZM24.62,40.86C32.25,44,31,49.37,30.52,54.51l5.37.81L27.33,63.2,32,67.79l.86,1.32a86.47,86.47,0,0,1,5.84-7.33c5.15-5.28,8.36-5.16,13.76.07,2.22,2.15,4.46,4.26,6.26,6l4.87-4.46,1.44-.8c-3-2.34-6-4.67-9.57-7.43L61,54.45c-2.54-5.82-.14-10,4-13.08-1.92-2.49-4.17-4.33-4.89-6.65s.13-5.09.32-8.29c-6.15,1.35-11.46.9-15.41-5.55-3.14,7.72-9,5.47-14.47,5.51C31.16,31.94,32,37.38,24.62,40.86Z"/><path d="M45.45,32.46c2.87,3.7,6,6,6.27,8.55.26,2.83-2.84,5.26-6.12,5.89-1.86.36-7.22-4.64-6.45-6.08C40.5,38.29,42.59,36.15,45.45,32.46Z"/></svg>
                <h6>Trusted</h6>
              </div>
          </div>
          <div class="choose-us-reasons-row">
            <div class="choose-us-reason">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M45.3,81.11c-7.93,0-15.86-.1-23.79,0-5.24.09-8.33-2.21-9.69-7.27-3-11.29-6.24-22.54-9.3-33.83-1.25-4.62.16-6.36,5.06-6.48,5.6-.14,12.25,1.63,16.51-.8,4.68-2.67,7.15-9.18,10.57-14,2.27-3.24,4.46-6.54,6.78-9.75,3.06-4.25,5.39-4.32,8.38-.09,4.57,6.47,9.25,12.88,13.34,19.64,2.46,4.07,5.33,5.67,10,5.11a73.63,73.63,0,0,1,10.4-.06c4.88.11,6.29,1.87,5,6.49Q84,57.26,79.16,74.38c-1.26,4.56-4.27,6.8-9.09,6.75C61.81,81.05,53.55,81.11,45.3,81.11ZM27.43,55.48l14.16,14L63.1,48,58,42.44,41.84,59.7l-9.27-8.79ZM57,33.35,45.64,16.8,34.23,33.35Z"/></svg>
              <h6>Authentic</h6>
            </div>
            <div class="choose-us-reason">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M45.35,81.11A35.62,35.62,0,1,1,81.11,45.77,35.57,35.57,0,0,1,45.35,81.11Zm.09-63.31c-1.7,2.89-2.34,5.6-3.85,6.24-5.17,2.19-7.89,5.6-8,11.25-.1,5.93,3.13,9.4,8.08,11.86,2.19,1.08,4.93,2,6.16,3.84s1.47,4.87,1.19,7.26c-.12,1-3.33,2.79-4,2.38-1.84-1.14-3.11-3.22-4.53-5a5.4,5.4,0,0,1-.62-1.57H32.67c-.19,7.8,4.07,11.66,10.73,13.49l.26,5.36h3.92L48,67.53C53.93,66,58,62.72,58.2,56c.16-7-4.1-10.62-9.9-13.31-2-.93-4.36-2.39-5.19-4.23s-.4-4.71,0-7c.1-.57,2.83-1.47,3.24-1.07a26.83,26.83,0,0,1,3.37,4.87c.26.4.48.82.7,1.2h7.7c-.44-5.35-2.28-9.31-7.14-11.72a5.3,5.3,0,0,1-2.51-3.83C48.39,17.69,47,17.31,45.44,17.8Z"/></svg>
              <h6>Affordable</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="choose-us-img">
          <img src="Images/Others/choose-us.jpg">
      </div>
    </div>
  </section>

  <section class="bundles-section">
    <div class="label">
        <div class="hori-line">&nbsp;</div>
        <p>BUNDLES AND OFFERS</p>
    </div>
    <div class="bundles-slideshow-wrapper">
      <input type="radio" name="bundle-slideshow" id="bundle-1" hidden checked>
      <input type="radio" name="bundle-slideshow" id="bundle-2" hidden>
      <input type="radio" name="bundle-slideshow" id="bundle-3" hidden>

      <label for="" class="label-left bundle-default-label" id="bundle-1-default">
        <img src="Images/Icons/carousel-gray.svg">
      </label>

      <label for="bundle-1" class="label-left" id="bundle-1-previous-label">
        <img src="Images/Icons/carousel-green.svg">
      </label>

      <label for="bundle-2" class="label-right" id="bundle-2-next-label">
        <img src="Images/Icons/carousel-green.svg">
      </label>    

      <label for="bundle-2" class="label-left" id="bundle-2-previous-label">
        <img src="Images/Icons/carousel-green.svg">
      </label>     

      <label for="bundle-3" class="label-right" id="bundle-3-next-label">
        <img src="Images/Icons/carousel-green.svg">
      </label>

      <label for="" class="label-right bundle-default-label" id="bundle-3-last">
        <img src="Images/Icons/carousel-gray.svg">
      </label>

      <div class="bundle-main bundle-main-1">
        <div class="bundle-content-wrapper">
          <div class="bundle-content-images">
            <div class="bundle-content-img-wrapper">
              <img src="Images/Bundles/1/main.png" alt="">
            </div>
            <div class="bundle-img-sub-wrapper">
              <div class="bundle-img-sub">
                  <img src="Images/Bundles/1/sub-1.png">
              </div>
              <div class="bundle-img-sub">
                  <img src="Images/Bundles/1/sub-2.png">
              </div>
              <div class="bundle-img-sub">
                  <img src="Images/Bundles/1/sub-3.png">
              </div>
              <div class="bundle-img-sub">
                  <img src="Images/Bundles/1/sub-4.png">
                  <span>3x</span>
              </div>
              <div class="bundle-img-sub bundle-img-sub-multiple">
                  <img src="Images/Bundles/1/sub-5.png">
                  <span>2x</span>
              </div>
            </div>
          </div>
          <div class="bundle-content-main">
            <div class="bundle-content-main-container">
              <div class="bundle-content-category">
                <p><i>Toddler Series</i></p>
                <div class="bundle-content-category-nav-wrapper">
                    <div class="bundle-content-category-nav-btn bundle-content-category-nav-btn-active">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                </div>
              </div>
              <div class="bundle-content-name">
                <h3>Three Bedrooms in One</h3>
                <?xml version="1.0" encoding="iso-8859-1"?>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve">
                  <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                          c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                          l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                          C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                          s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                          c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                          C444.801,187.101,434.001,213.101,414.401,232.701z"/></g>
                </svg>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odit error quaerat natus, facere earum, nobis, aliquam sequi quibusdam ut rerum? Porro eius quod aspernatur illum nam consequuntur obcaecati quidem, cum vitae magnam nihil itaque assumenda asperiores earum, molestiae voluptatum repudiandae commodi, minus vel accusantium quibusdam reprehenderit laborum! Accusantium, impedit?</p>
              <div class="bundle-includes-wrapper">
                <p>Includes:</p>
                <table>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Crib</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Changing Table</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Vedbo Armchair</td>
                  </tr>
                  <tr>
                    <td>3x</td>
                    <td>Jattelik Duvet Cover & Pillowcase</td>
                  </tr>
                  <tr>
                    <td>2x</td>
                    <td>Rorande Baby Blanket</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="bundle-content-main-container">
              <div class="bundle-price-wrapper">
                <p><i>Save 16%</i></p>
                <div class="bundle-price-main">
                  <h4>$ 1,399.00</h4>
                  <label for="bundle-1" class="button-1">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M28,58.83H75.9v8.09H40.35c-4,0-8,.13-12,0C21.23,66.6,16.92,60,21.05,54.4c4.69-6.3,3.77-11.58.54-17.74A97.3,97.3,0,0,1,15.64,22.4c-1.81-5.39-4.08-9.54-11.2-7.14V6.87A94.47,94.47,0,0,1,15.73,7c1.27.16,2.78,2,3.39,3.38,4.12,9.45,8.13,19,11.94,28.54,1.13,2.84,2.47,4.16,5.75,4,7.16-.27,14.35-.21,21.51,0,2.86.07,4.5-.78,5.88-3.38,4.59-8.66,9.47-17.17,14.51-26.23L85.56,17c-.83,1.66-1.54,3.22-2.36,4.72C78.85,29.58,74.42,37.4,70.14,45.3A9.82,9.82,0,0,1,60.44,51c-7.34-.17-14.73.51-22-.21C32.1,50.11,30,53.55,28,58.83Z"/><path d="M63.94,22.88H52.23V34.65H44.32V23h-12v-7.9h11.7V3.1H52V14.8h12Z"/><path d="M36.08,78.91a8,8,0,1,1-8-8A8.07,8.07,0,0,1,36.08,78.91Z"/><path d="M68.26,71a8,8,0,1,1-8.05,7.89A8.05,8.05,0,0,1,68.26,71Z"/></svg>
                    <p>Add to Cart</p>
                  </label>
                  <input type="radio" name="bundle-1" id="bundle-1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="bundle-main bundle-main-2">
        <div class="bundle-content-wrapper">
          <div class="bundle-content-img-wrapper-2">&nbsp;</div>
          <div class="bundle-content-main">
            <div class="bundle-content-main-container">
              <div class="bundle-content-category">
                <p><i>gunggung Series</i></p>
                <div class="bundle-content-category-nav-wrapper">
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn  bundle-content-category-nav-btn-active">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                </div>
              </div>
              <div class="bundle-content-name">
                <h3>Two Bedrooms in Two</h3>
                <?xml version="1.0" encoding="iso-8859-1"?>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve">
                  <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                          c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                          l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                          C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                          s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                          c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                          C444.801,187.101,434.001,213.101,414.401,232.701z"/></g>
                </svg>
              </div>
              <p>HHAHAHAHAH GUMANA PANO BA YAN WELL HMM</p>
              <div class="bundle-includes-wrapper">
                <p>Includes:</p>
                <table>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Crib</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Changing Table</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Vedbo Armchair</td>
                  </tr>
                  <tr>
                    <td>3x</td>
                    <td>Jattelik Duvet Cover & Pillowcase</td>
                  </tr>
                  <tr>
                    <td>2x</td>
                    <td>Rorande Baby Blanket</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="bundle-content-main-container">
              <div class="bundle-price-wrapper">
                <p><i>Save 16%</i></p>
                <div class="bundle-price-main">
                  <h4>$ 2,899.00</h4>
                  <label for="bundle-1" class="button-1">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M28,58.83H75.9v8.09H40.35c-4,0-8,.13-12,0C21.23,66.6,16.92,60,21.05,54.4c4.69-6.3,3.77-11.58.54-17.74A97.3,97.3,0,0,1,15.64,22.4c-1.81-5.39-4.08-9.54-11.2-7.14V6.87A94.47,94.47,0,0,1,15.73,7c1.27.16,2.78,2,3.39,3.38,4.12,9.45,8.13,19,11.94,28.54,1.13,2.84,2.47,4.16,5.75,4,7.16-.27,14.35-.21,21.51,0,2.86.07,4.5-.78,5.88-3.38,4.59-8.66,9.47-17.17,14.51-26.23L85.56,17c-.83,1.66-1.54,3.22-2.36,4.72C78.85,29.58,74.42,37.4,70.14,45.3A9.82,9.82,0,0,1,60.44,51c-7.34-.17-14.73.51-22-.21C32.1,50.11,30,53.55,28,58.83Z"/><path d="M63.94,22.88H52.23V34.65H44.32V23h-12v-7.9h11.7V3.1H52V14.8h12Z"/><path d="M36.08,78.91a8,8,0,1,1-8-8A8.07,8.07,0,0,1,36.08,78.91Z"/><path d="M68.26,71a8,8,0,1,1-8.05,7.89A8.05,8.05,0,0,1,68.26,71Z"/></svg>
                    <p>Add to Cart</p>
                  </label>
                  <input type="radio" name="bundle-1" id="bundle-1">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bundle-img-sub-wrapper">
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-1.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-2.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-3.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-4.png">
              <span>3x</span>
          </div>
          <div class="bundle-img-sub bundle-img-sub-multiple">
              <img src="Images/Bundles/1/sub-5.png">
              <span>2x</span>
          </div>
        </div>
      </div>

      <div class="bundle-main bundle-main-3">
        <div class="bundle-content-wrapper">
          <div class="bundle-content-img-wrapper-3">&nbsp;</div>
          <div class="bundle-content-main">
            <div class="bundle-content-main-container">
              <div class="bundle-content-category">
                <p><i>Toddler Series</i></p>
                <div class="bundle-content-category-nav-wrapper">
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn">&nbsp;</div>
                    <div class="bundle-content-category-nav-btn bundle-content-category-nav-btn-active">&nbsp;</div>
                </div>
              </div>
              <div class="bundle-content-name">
                <h3>One Bedrooms in Three</h3>
                <?xml version="1.0" encoding="iso-8859-1"?>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve">
                  <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                          c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                          l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                          C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                          s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                          c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                          C444.801,187.101,434.001,213.101,414.401,232.701z"/></g>
                </svg>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur cum amet possimus minus rerum quaerat magni, ea laborum? Est sequi eius enim laudantium ipsum harum.</p>
              <div class="bundle-includes-wrapper">
                <p>Includes:</p>
                <table>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Crib</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Sniglar Changing Table</td>
                  </tr>
                  <tr>
                    <td>1x</td>
                    <td>Vedbo Armchair</td>
                  </tr>
                  <tr>
                    <td>3x</td>
                    <td>Jattelik Duvet Cover & Pillowcase</td>
                  </tr>
                  <tr>
                    <td>2x</td>
                    <td>Rorande Baby Blanket</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="bundle-content-main-container">
              <div class="bundle-price-wrapper">
                <p><i>Save 16%</i></p>
                <div class="bundle-price-main">
                  <h4>$ 1,899.00</h4>
                  <label for="bundle-1" class="button-1">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><path d="M28,58.83H75.9v8.09H40.35c-4,0-8,.13-12,0C21.23,66.6,16.92,60,21.05,54.4c4.69-6.3,3.77-11.58.54-17.74A97.3,97.3,0,0,1,15.64,22.4c-1.81-5.39-4.08-9.54-11.2-7.14V6.87A94.47,94.47,0,0,1,15.73,7c1.27.16,2.78,2,3.39,3.38,4.12,9.45,8.13,19,11.94,28.54,1.13,2.84,2.47,4.16,5.75,4,7.16-.27,14.35-.21,21.51,0,2.86.07,4.5-.78,5.88-3.38,4.59-8.66,9.47-17.17,14.51-26.23L85.56,17c-.83,1.66-1.54,3.22-2.36,4.72C78.85,29.58,74.42,37.4,70.14,45.3A9.82,9.82,0,0,1,60.44,51c-7.34-.17-14.73.51-22-.21C32.1,50.11,30,53.55,28,58.83Z"/><path d="M63.94,22.88H52.23V34.65H44.32V23h-12v-7.9h11.7V3.1H52V14.8h12Z"/><path d="M36.08,78.91a8,8,0,1,1-8-8A8.07,8.07,0,0,1,36.08,78.91Z"/><path d="M68.26,71a8,8,0,1,1-8.05,7.89A8.05,8.05,0,0,1,68.26,71Z"/></svg>
                    <p>Add to Cart</p>
                  </label>
                  <input type="radio" name="bundle-1" id="bundle-1">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bundle-img-sub-wrapper">
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-1.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-2.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-3.png">
          </div>
          <div class="bundle-img-sub">
              <img src="Images/Bundles/1/sub-4.png">
              <span>3x</span>
          </div>
          <div class="bundle-img-sub bundle-img-sub-multiple">
              <img src="Images/Bundles/1/sub-5.png">
              <span>2x</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="sale-section">
    <div class="sale-wrapper">
      <div class="sale-main">
        <h2>ENJOY UP TO <br><span>20% OFF</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus pellentesque nunc, at egestas tellus pharetra id.</p>
        <p><i>Use the voucher code #AmazingEkia</i></p>
        <a href="" class="button-1">Shop All ></a>
      </div>
      <div class="sale-product">
        <img src="Images/Sale/sale-product-1.png">
        <h6>Tornviken Plate Shelf</h6>
        <p>Kitchen</p>
        <h5>$899.00</h5>
      </div>
      <div class="sale-product">
        <img src="Images/Sale/sale-product-2.png">
        <h6>Vappeby Bluetooth Speaker</h6>
        <p>Electronics</p>
        <h5>$899.00</h5>
      </div>
      <div class="sale-product">
        <img src="Images/Sale/sale-product-3.png">
        <h6>Idanas Upholstered Bed</h6>
        <p>Bedroom</p>
        <h5>$899.00</h5>
      </div>
    </div>
  </section>

  <section class="featured-section">
    <div class="label">
      <div class="hori-line">&nbsp;</div>
      <p>FEATURED</p>
    </div>
    <div class="featured-wrapper">
      <div class="featured-quote">
        <img src="Images/Others/featured.png">
        <h2>COZY & <br> COMFY</h2>
        <span>COZY & <br> COMFY</span>
      </div>
      <div class="featured-content">
        <p><i>Manager's Choice</i></p>
        <h5>Product Name</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus pellentesque nunc, at egestas tellus pharetra id. Phasellus eget mi purus. </p>
        <a href="" class="button-2">Shop All ></a>
      </div>
    </div>
  </section>

  <section class="categories-section">
    <span id="home-categories-target"></span>
    <div class="label">
        <div class="hori-line">&nbsp;</div>
        <p>CATEGORIES</p>
    </div>
    <div class="categories-wrapper" id="categories-wrapper">
      <div class="category-product-wrapper">
        <div class="category-product">
          <a href="product-desc-1.html" class="category-product-link-main">
            <img src="Images/Categories/living-room-1.png" class="category-product-img-main">
            <h6>Product Name</h6>
            <p>$899.00</p>
          </a>
          <?php
            $query = "SELECT * FROM favorites WHERE product_code = '001'";
            $faves_result = mysqli_query($db, $query); 
            
            if($faves_result) { if(mysqli_num_rows($faves_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="added">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="001" name="product_code" hidden>
              <button type="submit" name="faves"><img src="Images/Icons/added-faves.svg" class="added"></button>
              <span></span>
            </form>
            
            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-heart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="001" name="product_code" hidden>
                <button type="submit" name="faves"><img src="Images/Icons/heart.svg" class="product-heart"></button>
                <span></span>
              </form>
            <?php } } ?>

          <?php
            $query = "SELECT * FROM cart WHERE product_code = '001'";
            $cart_result = mysqli_query($db, $query); 
            
            if($cart_result) { if(mysqli_num_rows($cart_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-cart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="001" name="product_code" hidden>
              <button type="submit" name="cart"><img src="Images/Icons/added-cart.svg" class="product-cart"></button>
              <span></span>
            </form>

            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-cart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="001" name="product_code" hidden>
                <button type="submit" name="cart"><img src="Images/Icons/add-to-cart.svg" class="product-cart"></button>
                <span></span>
              </form>
            <?php } } ?>
        </div>

        <div class="category-product">
          <a href="product-desc-1.html" class="category-product-link-main">
            <img src="Images/Categories/living-room-2.png" class="category-product-img-main">
            <h6>Product Name</h6>
            <p>$899.00</p>
          </a>
          <?php
            $query = "SELECT * FROM favorites WHERE product_code = '002'";
            $faves_result = mysqli_query($db, $query); 
            
            if($faves_result) { if(mysqli_num_rows($faves_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-heart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="002" name="product_code" hidden>
              <button type="submit" name="faves"><img src="Images/Icons/added-faves.svg" class="product-heart"></button>
              <span></span>
            </form>
            
            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-heart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="002" name="product_code" hidden>
                <button type="submit" name="faves"><img src="Images/Icons/heart.svg" class="product-heart"></button>
                <span></span>
              </form>
            <?php } } ?>

          <?php
            $query = "SELECT * FROM cart WHERE product_code = '002'";
            $cart_result = mysqli_query($db, $query); 
            
            if($cart_result) { if(mysqli_num_rows($cart_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-cart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="002" name="product_code" hidden>
              <button type="submit" name="cart"><img src="Images/Icons/added-cart.svg" class="product-cart"></button>
              <span></span>
            </form>

            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-cart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="002" name="product_code" hidden>
                <button type="submit" name="cart"><img src="Images/Icons/add-to-cart.svg" class="product-cart"></button>
                <span></span>
              </form>
            <?php } } ?>
        </div>

        <div class="category-product">
          <a href="product-desc-1.html" class="category-product-link-main">
            <img src="Images/Categories/living-room-3.png" class="category-product-img-main">
            <h6>Product Name</h6>
            <p>$899.00</p>
          </a>
          <?php
            $query = "SELECT * FROM favorites WHERE product_code = '003'";
            $faves_result = mysqli_query($db, $query); 
            
            if($faves_result) { if(mysqli_num_rows($faves_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-heart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="003" name="product_code" hidden>
              <button type="submit" name="faves"><img src="Images/Icons/added-faves.svg" class="product-heart"></button>
              <span></span>
            </form>
            
            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-heart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="003" name="product_code" hidden>
                <button type="submit" name="faves"><img src="Images/Icons/heart.svg" class="product-heart"></button>
                <span></span>
              </form>
            <?php } } ?>

          <?php
            $query = "SELECT * FROM cart WHERE product_code = '003'";
            $cart_result = mysqli_query($db, $query); 
            
            if($cart_result) { if(mysqli_num_rows($cart_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-cart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="003" name="product_code" hidden>
              <button type="submit" name="cart"><img src="Images/Icons/added-cart.svg" class="product-cart"></button>
              <span></span>
            </form>

            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-cart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="003" name="product_code" hidden>
                <button type="submit" name="cart"><img src="Images/Icons/add-to-cart.svg" class="product-cart"></button>
                <span></span>
              </form>
            <?php } } ?>
        </div>

        <div class="category-product">
          <a href="product-desc-1.html" class="category-product-link-main">
            <img src="Images/Categories/living-room-4.png" class="category-product-img-main">
            <h6>Product Name</h6>
            <p>$899.00</p>
          </a>
          <?php
            $query = "SELECT * FROM favorites WHERE product_code = '004'";
            $faves_result = mysqli_query($db, $query); 
            
            if($faves_result) { if(mysqli_num_rows($faves_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-heart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="004" name="product_code" hidden>
              <button type="submit" name="faves"><img src="Images/Icons/added-faves.svg" class="product-heart"></button>
              <span></span>
            </form>
            
            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-heart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="004" name="product_code" hidden>
                <button type="submit" name="faves"><img src="Images/Icons/heart.svg" class="product-heart"></button>
                <span></span>
              </form>
            <?php } } ?>

          <?php
            $query = "SELECT * FROM cart WHERE product_code = '004'";
            $cart_result = mysqli_query($db, $query); 
            
            if($cart_result) { if(mysqli_num_rows($cart_result) > 0){ ?>
            <form action="index.php#home-categories-target" method="POST" class="product-cart">
              <input type="text" name="click" value="0" hidden>
              <input type="text" value="004" name="product_code" hidden>
              <button type="submit" name="cart"><img src="Images/Icons/added-cart.svg" class="product-cart"></button>
              <span></span>
            </form>

            <?php } else { ?>
              <form action="index.php#home-categories-target" method="POST" class="product-cart">
                <input type="text" name="click" value="1" hidden>   
                <input type="text" value="004" name="product_code" hidden>
                <button type="submit" name="cart"><img src="Images/Icons/add-to-cart.svg" class="product-cart"></button>
                <span></span>
              </form>
            <?php } } ?>
        </div>


        
        
        <a href="" class="button-3">Shop All ></a>
      </div>
    </div>
  </section>

  <section class="newsletter-section">
    <div class="newsletter-wrapper">
      <img src="Images/Others/newsletter-blob-bot.svg" class="newsletter-blob-bot">
      <img src="Images/Others/newsletter-blob-top.svg" class="newsletter-blob-top">
      <img src="Images/Others/newsletter-blob-ellipse.svg" class="newsletter-blob-ellipse-1">
      <img src="Images/Others/newsletter-blob-ellipse.svg" class="newsletter-blob-ellipse-2">
      <img src="Images/Others/newsletter-blob-ellipse.svg" class="newsletter-blob-ellipse-3">
      <img src="Images/Others/newsletter-blob-ellipse.svg" class="newsletter-blob-ellipse-4">
      <div class="newsletter-content">
        <p><i>Receive the latest news and updates</i></p>
        <h3>Subscribe to our <br> Newsletter</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus pellentesque nunc.</p>
      </div>
      <div class="newsletter-input">
        <input type="text" placeholder="Your Email">
        <label for="newsletter-submit">Sign Up</label>
        <input type="radio" name="newsletter-submit" id="newsletter-submit">
      </div>
    </div>
    <div class="newsletter-bg-extend"></div>
  </section>

  <footer class="footer-main">
    <div class="footer-main-wrapper">
      <div class="footer-main footer-main-sec">
        <h6>Ekia Inc.</h6>
        <a href="">Home</a>
        <a href="">Products</a>
        <a href="">About</a>
      </div>
      <div class="footer-about footer-main-sec">
        <h6>About</h6>
        <a href="">Ekia</a>
        <a href="">Contributors</a>
        <a href="">FAQs</a>
        <a href="">Help</a>
        <a href="">Customer Service</a>
      </div>
      <div class="footer-orders footer-main-sec">
        <h6>Orders</h6>
        <a href="">Payment Methods</a>
        <a href="">Returns</a>
        <a href="">Warranty Terms</a>
        <a href="">Delivery Status</a>
        <a href="">Branches</a>
      </div>
      <div class="footer-contact-us footer-main-sec">
        <h6>Contact Us</h6>
        <a href="">Send Us Feedback</a>
        <a href="">Email</a>
      </div>
      <div class="footer-reviews footer-main-sec"> 
        <h6>Reviews</h6>
        <div class="footer-reviews-wrapper">
          <p>Exquisite</p>
          <p>High Quality</p>
          <p>Beautiful Products</p>
          <p>Elegant</p>
          <p>Fantastic</p>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-sub">
    <div class="footer-sub-wrapper">
      <div class="footer-sub-main">
        <h6>&copy;2022 Ekia Inc. All Rights Reserved.</h6>
        <a href="">TERMS OF SALE</a>
        <a href="">TERMS OF USE</a>
        <a href="">PRIVACY POLICY</a>
      </div>
      <div class="footer-sub-socials">
        <p>CONNECT WITH US</p>
        <a href=""><img src="Images/Icons/fb.svg"></a>
        <a href=""><img src="Images/Icons/ig.svg"></a>
        <a href=""><img src="Images/Icons/twt.svg"></a>
      </div>
    </div>
  </footer>
</body>
</html>