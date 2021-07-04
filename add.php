<html>
<head>
	<title>Add Anggota</title>
</head>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Anggota</td>
				<td><input type="text" name="id_anggota"></td>
			</tr>
			<tr> 
				<td>Nama Anggota</td>
				<td><input type="text" name="nm_anggota"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>TTL</td>
				<td><input type="text" name="ttl_anggota"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status_anggota"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_anggota = $_POST['id_anggota'];
		$nm_anggota = $_POST['nm_anggota'];
		$alamat = $_POST['alamat'];
		$ttl_anggota = $_POST['ttl_anggota'];
		$status_anggota = $_POST['status_anggota'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO anggota(id_anggota,nm_anggota,alamat,ttl_anggota,status_anggota) VALUES('$id_anggota','$nm_anggota','$alamat','$ttl_anggota','$status_anggota')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>VIEW USERS</a>";
	}
	?>
</body>
</html>