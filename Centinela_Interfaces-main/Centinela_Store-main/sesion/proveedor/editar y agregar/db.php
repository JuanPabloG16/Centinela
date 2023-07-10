<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'iniciosesiondb'
) or die(mysqli_error($mysqli));

?>
