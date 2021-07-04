<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_anggota = $_POST['id_anggota'];
	
	$id_anggota=$_POST['id_anggota'];
	$nm_anggota=$_POST['nm_anggota'];
	$alamat=$_POST['alamat'];
	$ttl_anggota=$_POST['ttl_anggota'];
    $status_anggota=$_POST['status_anggota'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE anggota SET nm_anggota='$nama_anggota',alamat='$alamat',ttl_anggota='$ttl_anggota',status_anggota='$status_anggota' WHERE id_anggota=$id_anggota");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_anggota = $_GET['id_anggota'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_anggota = $user_data['id_anggota'];
	$nm_anggota = $user_data['nm_anggota'];
	$alamat = $user_data['alamat'];
	$ttl_anggota = $user_data['ttl_anggota'];
    $status = $user_data['status_anggota'];
}
?>
<html>
<head>	
	<title>EDIT USER DATA</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
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
				<td><input type="hidden" name="id_anggota" value=<?php echo $_GET['id_anggota'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>