<?php
  include './koneksi.php';

  $id = $_GET['id'];
  $today = date('Y-m-d');

  //-> ini untuk function
  $result = $conn -> query('update siswa set kehadiran = "'.$today.'" where id = "'.$id.'" ');

  if(!$result){
      var_dump($conn->$query);
      exit();
  }
  header('Location: index.php');

?>