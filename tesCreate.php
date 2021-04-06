<html>
<head>
	<title>Add Users</title>
</head>
<body>
	<!-- kembali ke tesHome.php -->
	<a href="tesHome.php">Go to Home</a>
	<br/><br/>
	<form action="tesCreate.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php
	// mengecek apakah data sudah diSubmit
	if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
		$email = $_POST['email'];

		// mengkoneksikan ke database
    include 'tesConfig.php';

		// menambahkan data ke table
		$result = mysqli_query($mysqli, "INSERT INTO buku_tamu(NAMA,EMAIL) VALUES('$name','$email')");

		// menunjukkan pesan sukses
		echo "User added successfully. <a href='tesHome.php'>View Users</a>";
	}
	?>
</body>
</html>
