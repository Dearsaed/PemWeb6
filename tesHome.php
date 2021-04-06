<?php
// menghubungkan ke file tesConfig.php
include 'tesConfig.php';
// menampilkan semua data dari table buku_tamu
$result = mysqli_query($mysqli, "SELECT ID_BT, NAMA, EMAIL FROM buku_tamu");
?>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
  <!-- masuk ke halaman tambah pengguna -->
<a href="tesCreate.php">Tambah Pengguna</a><br/><br/>

    <table width='60%' border=1>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Update</th>
    </tr>
    <?php
    //menampilkan seluruh data
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row["ID_BT"]."</td>";
        echo "<td>".$row['NAMA']."</td>";
        echo "<td>".$row['EMAIL']."</td>";
        echo "<td><a href='tesUpdate.php?id=$row[ID_BT]'>Sunting</a> | <a href='tesDelete.php?id=$row[ID_BT]'>Hapus</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>
