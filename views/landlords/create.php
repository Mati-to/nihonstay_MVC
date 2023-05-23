<main class="container section">  
  <h1>Register Landlord</h1>
  <a href='/admin' class="button green-button">Back</a>

  <?php foreach ($validation as $validate) { ?>
    <div class="alert error">
      <?php echo $validate; ?>
    </div>
  <?php }; ?>

  <form class="form" method="POST">
    

    <input type="submit" value="Add Landlord" class="button green-button"> 
  </form>

</main>