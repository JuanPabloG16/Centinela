<?php

include('db.php');


  
if (isset($_POST['save_task'])) {
  $title = $_POST['producto'];
  $description = $_POST['stock'];
  $disponibilidad=$_POST['disponibilidad'];
  $adquir=$_POST['por_adquirir'];
  





  $query = "INSERT INTO inventario (producto, stock,disponibilidad,por_adquirir,foto) VALUES ('$title', '$description',
  '$disponibilidad','$adquir','$foto')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}




?>
