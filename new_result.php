<?php
  include 'header.php';

  if ((isset($_POST['name'])) && (isset($_POST['code']))) {
    // Hier code om een row in te vullen
    $name = $_POST['name'];
    $code = $_POST['code'];
    mysqli_query($con,"INSERT INTO results (name,code) VALUES ('$name','$code')");
    echo "Opslaan gelukt!";
  }
?>
<div class="container">
  <div class="page-header">
    <h1>Nieuw resultaat</h1>
  </div>

  <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name='name' type="text" class="form-control" id="exampleInputEmail1" placeholder="Hier je naam">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Code</label>
      <textarea name='code' class="form-control" id="exampleInputPassword1" placeholder="Hier komt je code"></textarea>
    </div>

    <button type="submit" class="btn btn-default">Verstuur</button>
  </form>



</div>
<?php
  include 'footer.php';
?>
