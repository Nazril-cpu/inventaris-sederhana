<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM lokasi ORDER BY kd_tempat DESC");
?>
 
<html>
<head>    
    <title>Data Kelas</title>
</head>
 
<body>
<a href="index.php?page=input_lokasi">Tambah Kelas</a><br/><br/>

    <form method="POST" action="index.php?page=lokasi">
        Cari: <input type="text" name="kunci">
        <input type="submit" name="cari" value="cari">
    </form>
 
    <table width='80%' border=1>
 
    <tr>
        <th>kelas</th> <th>jurusan</th> <th>aksi</th>
    </tr>
    <?php
    
    if(isset($_POST['cari'])){
        $kunci = $_POST['kunci'];
        $result = mysqli_query($mysqli, "SELECT * FROM lokasi WHERE nama_tempat LIKE '%$kunci%' OR kd_tempat LIKE  '%$kunci%' ORDER BY kd_tempat DESC");
    }

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kd_tempat']."</td>";
        echo "<td>".$user_data['nama_tempat']."</td>";  
        echo "<td><a href='index.php?page=edit_lokasi&id=$user_data[kd_tempat]'>Edit</a> | <a href='delete_lokasi.php?id=$user_data[kd_tempat]'>Delete</a></td></tr>";        
    }
    ?>  
    </table>
</body>
</html>