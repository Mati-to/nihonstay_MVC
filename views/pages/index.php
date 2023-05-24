

<?php include 'icons_sections.php'; ?>

<section class='section container'>
  <h1>Some of our Houses</h1>

  <?php 
    include 'propsList.php';
  ?>

  <div class='align-right'>
    <a class='button green-button' href='/properties'>View all</a>
  </div>
</section>

<section class='contact-mainpage'>
  <h3>Experience the authentic beauty of Japan, in the comfort of your own private retreat.</h3>
  <a class='button brown-button' href='/contact'>Contact Us!</a>
</section>

<div class='container section blog-mainpage'>
  <section class='blog'>
    <h3>Blog - Places of interest</h3>

    <div class='blog-entry'>
      <div class='blog-img'>
        <img src='/img/blog1_bamboo-grove.jpg' alt='Bamboo grove'>
      </div>
      <div class='blog-text'>
        <a href='blog.php'>
          <h4>Arashiyama's Bamboo Grove</h4>
          <p>Location: <span>Arashiyama, Kyoto</span> </p>
          <p>The Arashiyama Bamboo Grove is a popular destination for nature lovers and photographers.</p>
        </a>
      </div>
    </div> <!-- Article 1 end -->

    <div class='blog-entry'>
      <div class='blog-img'>
        <img src='/img/blog2_nezu-shrine.jpg' alt='Fushimi inari taisha temple'>
      </div>
      <div class='blog-text'>
        <a href='blog.php'>
          <h4>Fushimi Inari Taisha</h4>
          <p>Location: <span>Bunkyo, Tokyo</span></p>
          <p>Nezu Shrine is a Shinto shrine located in the Bunkyo ward of Tokyo. great place to
            experience Japanese culture and history</p>
        </a>
      </div>
    </div> <!-- Article 2 end -->
  </section>

  <section class='container blog-weather'>
    <h3>Tokyo's weather</h3>

    <div class='container weather-box'>
      <img src='' alt=''>
      <p class='temperature'></p>
      <p class='description'></p>
    </div>

    <div class='weather-description'>
      <div class='humidity-box'>
        <p>Humidity</p>
        <img src='/img/humidity-icon.png' alt='' loading='lazy'>
        <span></span>
      </div>
      <div class='wind-box'>
        <p>Wind</p>
        <img src='/img/wind-icon.svg' alt='' loading='lazy'>
        <span></span>
      </div>

    </div>

    <div class='weather-notFound'>
      <img src='/img/maintenance.svg' alt='maintenance section' loading='lazy'>
      <p>This section is under maintenance</p>
    </div>
  </section>
</div>