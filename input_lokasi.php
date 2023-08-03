<html>
<head>
    <title>Tambah lokasi</title>
</head>
 
<body>
    <a href="index.php?page=lokasi">Go to Home</a>
    <br/><br/>
 
    <form action="index.php?page=input_lokasi" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kd_tempat"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="nama_tempat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kd_tempat = $_POST['kd_tempat'];
        $nama_tempat = $_POST['nama_tempat'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO lokasi(kd_tempat,nama_tempat) VALUES('$kd_tempat','$nama_tempat')");
        
        // Show message when user added
        echo "data berhasil ditambahkan. <a href='index.php?page=lokasi'>lihat kelas</a>";
    }
    ?>
</body>
</html>