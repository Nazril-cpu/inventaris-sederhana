<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $kd_barang = $_POST['id'];
    
    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jml_barang = $_POST['jml_barang'];
    $kondisi = $_POST['kondisi'];
    $harga = $_POST['harga'];
    $asal_barang = $_POST['asal_barang'];
    $kd_tempat = $_POST['kd_tempat'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE barang SET kd_barang='$kd_barang',nama_barang='$nama_barang',jml_barang='$jml_barang',kondisi='$kondisi',harga='$harga',asal_barang='$asal_barang',kd_tempat='$kd_tempat' WHERE kd_barang='$kd_barang'");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php?page=barang");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kd_barang = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE kd_barang='$kd_barang'");
 
while($user_data = mysqli_fetch_array($result))
{
    $kd_barang = $user_data['kd_barang'];
    $nama_barang = $user_data['nama_barang'];
    $jml_barang = $user_data['jml_barang'];
    $kondisi = $user_data['kondisi'];
    $harga = $user_data['harga'];
    $asal_barang = $user_data['asal_barang'];
    $kd_tempat = $user_data['kd_tempat'];
}

?>
<html>
<head>	
    <title>Edit barang</title>
</head>
 
<body>
    <a href="index.php?page=barang">Home</a>
    <br/><br/>
    
    <form name="update_user" action="index.php?page=edit_barang" method="POST">
        <table border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kd_barang" value=<?php echo $kd_barang;?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jml_barang" value=<?php echo $jml_barang;?>></td>
            </tr>
            <tr> 
                <td>kondisi</td>
                <td>
                <select name="kondisi" value=<?php echo $kondisi;?>>
                    <option>baru</option>
                    <option>lama</option>
                    <option>baik</option>
                    <option>rusak</option>
			    </select>
                </td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>asal barang</td>
                <td><input type="text" name="asal_barang" value=<?php echo $asal_barang;?>></td>
            </tr>
            <tr> 
                <td>kode tempat</td>
                <td><input type="text" name="kd_tempat" value=<?php echo $kd_tempat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>