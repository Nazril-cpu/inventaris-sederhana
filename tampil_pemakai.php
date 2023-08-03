<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT barang.kd_barang,barang.nama_barang,lokasi.nama_tempat,pemakaian.nis,pemakaian.kondisi,pemakaian.tgl_pemakai FROM pemakaian,barang,lokasi where pemakaian.kd_barang=barang.kd_barang AND barang.kd_tempat=lokasi.kd_tempat ORDER BY kd_barang DESC");
?>
 
<html>
<head>    
    <title>Data pemakaian</title>
</head>
 
<body>
<a href="index.php?page=input_pemakai">Input Pemakaian</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>kode barang</th> <th>nama barang</th> <th>Lokasi</th><th>NIS</th> <th>kondisi</th> <th>Tgl Pemakaian</th> <th>aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kd_barang']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";  
        echo "<td>".$user_data['nama_tempat']."</td>";
        echo "<td>".$user_data['nis']."</td>";
        echo "<td>".$user_data['kondisi']."</td>";
        echo "<td>".$user_data['tgl_pemakai']."</td>";
        
        echo "<td><a href='delete_pemakai.php?id=$user_data[id_pemakai]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>