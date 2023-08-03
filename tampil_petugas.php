<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM petugas ORDER BY kd_petugas DESC");
?>
 
<html>
<head>    
    <title>Data Petugas</title>
</head>
 
<body>
<a href="index.php?page=input_petugas">Tambah petugas</a><br/><br/>

<form method="POST" action="index.php?page=petugas">
        Cari: <input type="text" name="kunci">
        <input type="submit" name="cari" value="cari">
    </form>
 
    <table width='80%' border=1>
 
    <tr>
        <th>kode petugas</th> <th>nama petugas</th> <th>jabatan</th> <th>aksi</th>
    </tr>
    <?php  

if(isset($_POST['cari'])){
    $kunci = $_POST['kunci'];
    $result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE nama_petugas LIKE '%$kunci%' OR jabatan LIKE  '%$kunci%' ORDER BY kd_petugas DESC");
}

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kd_petugas']."</td>";
        echo "<td>".$user_data['nama_petugas']."</td>";
        echo "<td>".$user_data['jabatan']."</td>";  
        echo "<td><a href='index.php?page=edit_petugas&id=$user_data[kd_petugas]'>Edit</a> | <a href='delete_petugas.php?id=$user_data[kd_petugas]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>