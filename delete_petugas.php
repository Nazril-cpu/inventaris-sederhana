<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$kd_petugas = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM petugas WHERE kd_petugas=$kd_petugas");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=petugas");
?>