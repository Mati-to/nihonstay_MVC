
<main class='container section'>
  <h1>Create Property</h1>

  <a href='/admin' class="button green-button">Back</a>

  <?php foreach ($validation as $validate) { ?>
    <div class="alert error">
      <?php echo $validate; ?>
    </div>
  <?php }; ?>

  <form class="form" method="POST" enctype="multipart/form-data" >
    <?php include __DIR__ . '/form.php'; ?>

    <input type="submit" value="Create Property" class="button green-button"> 
  </form>

</main>