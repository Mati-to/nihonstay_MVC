<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='/build/css/app.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' />
  <title>NihonStay - Proyect </title>
</head>

<body>
  <header class='header <?php echo $main ? 'main' : '' ?>'>
    <div class='container header-container'>
      <div class='bar'>
        <a href='/home'> <img class='logo' src='/img/nihonLogo.png' alt='Nihongo Logo'></a>

        <div class='mobile-menu'>
          <img src="../img/menu-mobile.svg" alt="responsive menu">
        </div>

        <nav class='navbar'>
          <a href='/about-us'>About Us</a>
          <a href='/properties'>Rentals</a>
          <a href='/blog'>Blog</a>
          <a href='/contact'>Contact</a>
          <?php if ($auth) : ?>
            <a href='/logout'>Log out</a>
          <?php endif; ?>
        </nav>

      </div> <!-- Bar -->

      <?php if ($main) { ?>
        <h1 class='animate__animated animate__fadeInx'>Vacational House Rent in Japan</h1>

      <?php } ?>
    </div>
  </header>

  <?php echo $pageContent; ?>

  <footer id='footer' class='section'>
    <div class='container footer-container'>
      <nav id='nav-footer' class='navbar'>
        <a href='/about-us'>About Us</a>
        <a href='/properties'>Rentals</a>
        <a href='/blog'>Blog</a>
        <a href='/contact'>Contact</a>
      </nav>
    </div>

    <p class='copyright'>All rights reserved <?php echo date('Y'); ?> &copy;</p>
  </footer>


  <script src='../js/weather.js'></script>
  <script src='../js/app.js'></script>
</body>

</html>