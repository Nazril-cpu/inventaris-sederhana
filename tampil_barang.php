<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY kd_barang DESC");
?>
 
<html>
<head>    
    <title>Data pembayaran</title>
</head>
 
<body>
<a href="index.php?page=input_barang">Tambah pembayaran</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>No Urut</th> <th>Nama Siswa</th> <th>Kelas</th> <th>Jurusan</th> <th>harga</th> <th>pembayaran lewat</th> <th>nis</th> <th>aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kd_barang']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";  
        echo "<td>".$user_data['jml_barang']."</td>";
        echo "<td>".$user_data['kondisi']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['asal_barang']."</td>";
        echo "<td>".$user_data['kd_tempat']."</td>";
        echo "<td><a href='index.php?page=edit_barang&id=$user_data[kd_barang]'>Edit</a> | <a href='delete_barang.php?id=$user_data[kd_barang]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>