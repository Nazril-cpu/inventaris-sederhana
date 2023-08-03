<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $kd_tempat = $_POST['id'];
    
    $kd_tempat = $_POST['kd_tempat'];
    $nama_tempat = $_POST['nama_tempat'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE lokasi SET kd_tempat='$kd_tempat',nama_tempat='$nama_tempat' WHERE kd_tempat='$kd_tempat'");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php?page=lokasi");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kd_tempat = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM lokasi WHERE kd_tempat='$kd_tempat'");
 
while($user_data = mysqli_fetch_array($result))
{
    $kd_tempat = $user_data['kd_tempat'];
    $nama_tempat = $user_data['nama_tempat'];
}
?>
<html>
<head>	
    <title>Edit Lokasi</title>
</head>
 
<body>
    <a href="tampil_lokasi.php">Home</a>
    <br/><br/>
    
    <form name="update_user" action="edit_lokasi.php" method="POST">
        <table border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kd_tempat" value=<?php echo $kd_tempat;?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama_tempat" value="<?php echo $nama_tempat;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>