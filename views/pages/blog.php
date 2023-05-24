<main class='container section'>
  <h1>NihonStay's Blog</h1>

  <div class='blog-entry'>
    <div class='blog-img'>
      <img src='../img/blog1_bamboo-grove.jpg' alt='Bamboo grove'>
    </div>
    <div class='blog-text'>
      <h4>Arashiyama's Bamboo Grove</h4>
      <p>Location: <span>Arashiyama, Kyoto</span> </p>
      <p>A natural forest of bamboo that is considered one of the most beautiful sights in Kyoto. The bamboo
        stalks in the grove can reach up to 30 feet tall, and when the wind blows, they create a unique sound.
        Visitors can walk through a path in the grove, which is particularly beautiful
        during the early morning and late afternoon when the sunlight filters through the bamboo. The grove is also
        near other popular tourist destinations such as the Tenryuji Temple, the Togetsukyo Bridge, and the Monkey
        Park Iwatayama.</p>
      </a>
    </div>
  </div> <!-- Article 1 end -->

  <div class='blog-entry'>
    <div class='blog-img'>
      <img src='../img/blog2_nezu-shrine.jpg' alt='Nezu Shrine Temple'>
    </div>
    <div class='blog-text'>
      <h4>Nezu Shrine</h4>
      <p>Location: <span>Bunkyo, Tokyo</span></p>
      <p>It is known for its beautiful vermilion torii gates and azalea garden. The shrine was founded in the 9th
        century and has a long history, with many of its buildings dating back to the Edo period. The shrine is
        dedicated to the god of war, Susanoo, and the goddess of agriculture, Inari. Nezu Shrine is also famous for
        its annual Azalea Festival, which takes place in late April and early May when over 3,000 azalea bushes bloom
        in a riot of color.</p>
      </a>
    </div>
  </div> <!-- Article 2 end -->

  <div class='blog-entry'>
    <div class='blog-img'>
      <img src='../img/blog3_fushimi-inari-taisha.jpg' alt='Fushimi inari taisha temple'>
    </div>
    <div class='blog-text'>
      <a href='blogentry.html'>
        <h4>Fushimi Inari Taisha</h4>
        <p>Location: <span>Southern Kyoto</span></p>
        <p>The shrine was founded in the 8th century and is dedicated to Inari, the Shinto god of rice, prosperity,
          and foxes.
          Fushimi Inari Taisha is one of the most popular tourist attractions in Kyoto, and is especially beautiful
          during the autumn foliage season and when the torii gates are lit up at night. It is easily accessible by
          train and bus from Kyoto Station.</p>
      </a>
    </div>
  </div> <!-- Article 3 end -->

  <div class='blog-entry'>
    <div class='blog-img'>
      <img src='../img/blog4_tokyo-museum.jpg' alt='Tokyo National Museum'>
    </div>
    <div class='blog-text'>
      <h4>Tokyo's National Museum</h4>
      <p>Location: <span>Tokyo</span></p>
      <p>One of the largest and oldest museums in Japan, located in Tokyo's Ueno Park. The museum was established in
        1872 and holds an extensive collection of art and artifacts from Japan and other parts of Asia.
        The museum has several buildings, including the Honkan (Japanese Gallery), the Toyokan (Asian Gallery), and
        the Hyokeikan (Annex Hall), which houses special exhibitions. The Tokyo National Museum is a must-visit for
        anyone interested in Japanese art and history.</p>
      </a>
    </div>
  </div> <!-- Article 4 end -->
</main>

<h3>Special thanks to these photographers:</h3>
<section class="container credits">
  <div class='photo-box'>
    <?php foreach ($authors1 as $author) {
      $authorName = $author['author'];
      $authorUrl = $author['author_url'];
      $photoUrl = $author['url']; ?>
      <p>Photo by <a target='_blank' href=<?php echo "https://unsplash.com/@{$authorUrl}?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"; ?>><?php echo $authorName ?></a> in <a target='_blank' href=<?php echo "https://unsplash.com/es/fotos/{$photoUrl}?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText  "; ?>>Unsplash</a></p>

    <?php } ?>
  </div>
  <div class='photo-box'>
    <?php foreach ($authors1 as $author) {
      $authorName = $author['author'];
      $authorUrl = $author['author_url'];
      $photoUrl = $author['url']; ?>
      <p>Photo by <a target='_blank' href=<?php echo "https://unsplash.com/@{$authorUrl}?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"; ?>><?php echo $authorName ?></a> in <a target='_blank' href=<?php echo "https://unsplash.com/es/fotos/{$photoUrl}?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText  "; ?>>Unsplash</a></p>

    <?php } ?>
  </div>
</section>