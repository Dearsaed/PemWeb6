<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";
//buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek Koneksi
if (!$conn) {
  die("Connection Failed: ". mysqli_connect_error());
}
//menambahkan data
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer', 'Jerman', '4')";
if(mysqli_query($conn, $sql)){
  echo "New record created successfully";
} else {
  echo "Error : ".$sql."<br>". mysqli_error($conn);
}
//menutup koneksi
mysqli_close($conn);
 ?>
