<?php
// koneksi ke database
include 'tesConfig.php';
// mengecek apakah data sudah diSubmit
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	// update data
	$result = mysqli_query($mysqli, "UPDATE buku_tamu SET nama='$name',email='$email' WHERE id_bt=$id");

	// Redirect to homepage
	header("Location: tesHome.php");
}
?>
<?php
// mengambil nilai id
$id = $_GET['id'];

// menampilkan semua data
$result = mysqli_query($mysqli, "SELECT * FROM buku_tamu WHERE id_bt=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['nama'];
	$email = $user_data['email'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>
<body>
	<a href="tesHome.php">Home</a>
	<br><br>
	<form name="update_user" method="post" action="tesUpdate.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
