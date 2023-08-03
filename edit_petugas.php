<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $kd_petugas = $_POST['id'];
    
    $kd_petugas = $_POST['kd_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $jabatan = $_POST['jabatan'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE petugas SET kd_petugas='$kd_petugas',nama_petugas='$nama_petugas',jabatan='$jabatan' WHERE kd_petugas=$kd_petugas");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php?page=petugas");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kd_petugas = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE kd_petugas='$kd_petugas'");
 
while($user_data = mysqli_fetch_array($result))
{
    $kd_petugas = $user_data['kd_petugas'];
    $nama_petugas = $user_data['nama_petugas'];
    $jabatan = $user_data['jabatan'];
}
?> 
<html>
<head>	
    <title>Edit petugas</title>
</head>
 
<body>
    <a href="tampil_petugas.php">Home</a>
    <br/><br/>
    
    <form name="update_user" action="edit_petugas.php" method="POST">
        <table border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kd_petugas" value=<?php echo $kd_petugas;?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama_petugas" value=<?php echo $nama_petugas;?>></td>
            </tr>
            <tr> 
                <td>jabatan</td>
                <td><input type="text" name="jabatan" value=<?php echo $jabatan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>