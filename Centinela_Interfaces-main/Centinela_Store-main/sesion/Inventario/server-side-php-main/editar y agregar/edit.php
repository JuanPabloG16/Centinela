<?php
include("db.php");
$title = '';
$description= '';
$foto='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM inventario WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['producto'];
    $description = $row['stock'];
    $disponibilidad=$row['disponibilidad'];
    $adquir=$row['por_adquirir'];
    $foto=$row['foto'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['producto'];
  $description = $_POST['stock'];
  $disponibilidad = $_POST['disponibilidad'];
  $adquir=$_POST['por_adquirir'];
  $foto=$_POST['foto'];
  
  

  $query = "UPDATE inventario set producto = '$title', stock = '$description'
  , disponibilidad ='$disponibilidad', por_adquirir='$adquir'
   WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'cambio correcto';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="producto" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update producto">
        </div>
        <div class="form-group">
        <textarea name="stock" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <div class="form-group">
          <input name="disponibilidad" type="text" class="form-control" value="<?php echo $disponibilidad; ?>">
        </div>
        <div class="form-group">
          <input name="por_adquirir" type="text" class="form-control" value="<?php echo $adquir; ?>">
        </div>
        <div class="form-group">
          <input name="foto" type="file" class="form-control" value="<?php echo $foto; ?>">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
