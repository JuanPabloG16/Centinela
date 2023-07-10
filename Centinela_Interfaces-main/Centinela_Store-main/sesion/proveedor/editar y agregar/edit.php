<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM proveedor WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['nombre'];
    $description = $row['telefono'];
    $disponibilidad=$row['contacto'];
    $adquir=$row['descr'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['nombre'];
  $description = $_POST['telefono'];
  $disponibilidad = $_POST['contacto'];
  $adquir=$row['descr'];
  
  

  $query = "UPDATE proveedor set nombre = '$title', telefono = '$description'
  , contacto ='$disponibilidad', descr='$adquir'
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
          <input name="nombre" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update producto">
        </div>
        <div class="form-group">
        <textarea name="telefono" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <div class="form-group">
          <input name="contacto" type="text" class="form-control" value="<?php echo $disponibilidad; ?>">
        </div>
        <div class="form-group">
          <input name="descr" type="text" class="form-control" value="<?php echo $adquir; ?>">
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
