<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$kd_barang = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM barang WHERE kd_barang='$kd_barang'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=barang ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

</body>
</html>