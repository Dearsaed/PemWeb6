<!DOCTYPE html>
<html>
  <body>
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
    //menampilkan data
    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query($conn, $sql);

    if($result){
      //mencetak output setiap baris
      while($row = mysqli_fetch_array($result)){
        echo "kode: ".$row["kode"]." - Negara: ".$row["negara"]." ".$row["champion"]."<br>";
      }
    } else {
      echo "0 result";
    }
    //menutup koneksi
    mysqli_close($conn);
     ?>

  </body>
</html>
