<?php
// menghubungkan ke file tesConfig.php
include 'tesConfig.php';

// mengambil nilai id
$id = $_GET['id'];

// menghapus data dari table
$result = mysqli_query($mysqli, "DELETE FROM buku_tamu WHERE id_bt=$id");

// lalu di"redirect" ke homepage
header("Location:tesHome.php");
?>
