<main class='container section content-center'>
  <h1>Login into your account</h1>

  <?php foreach ($validation as $validate) { ?>
    <div class="alert error">
      <?php echo $validate; ?>
    </div>
  <?php }; ?>

  <form class="form" method="POST">
    <fieldset>
      <legend>Email and Password</legend>

      <label for='email'>Email:</label>
      <input type='email' name="email" id='email' placeholder='Your email' required>

      <label for='password'>Password:</label>
      <input type='password' name="password" id='password' placeholder='Your password' required>
    </fieldset>

    <input type="submit" value="Login" class="button green-button">
  </form>

</main>