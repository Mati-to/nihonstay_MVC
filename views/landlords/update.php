<main class="container section">  
  <h1>Update Landlord</h1>
  <a href='/admin' class="button green-button">Back</a>

  <?php foreach ($validation as $validate) { ?>
    <div class="alert error">
      <?php echo $validate; ?>
    </div>
  <?php }; ?>

  <form class="form" method="POST">
    <?php include __DIR__ . '/form.php'; ?>

    <input type="submit" value="Update Landlord" class="button green-button"> 
  </form>

</main>