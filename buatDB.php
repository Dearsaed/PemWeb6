<?php
$servername = "localhost";
$username = "root";
$password = "root";
//buat Koneksi
$conn = mysqli_connect($servername, $username, $password);
//cek Koneksi
if (!$conn) {
  die("Connection Failed: ". mysqli_connect_error());
}
//create Database
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
  echo "Database created successfully";
} else {
  echo "Error creating database: ". mysqli_error($conn);
}
mysqli_close($conn);
 ?>
