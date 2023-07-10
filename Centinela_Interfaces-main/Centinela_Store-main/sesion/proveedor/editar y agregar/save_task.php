<?php

include('db.php');

  
if (isset($_POST['save_task'])) {
  $title = $_POST['nombre'];
  $description = $_POST['telefono'];
  $disponibilidad=$_POST['contacto'];
  $adquir=$_POST['descr'];





  $query = "INSERT INTO proveedor (nombre, telefono,contacto,descr) VALUES ('$title', '$description',
  '$disponibilidad','$adquir')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
