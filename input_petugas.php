<html>
<head>
    <title>Tambah petugas</title>
</head>
 
<body>
    <a href="index.php?page=petugas">Go to Home</a>
    <br/><br/>
 
    <form action="index.php?page=input_petugas" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kd_petugas"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama_petugas"></td>
            </tr>
            <tr> 
                <td>jabatan</td>
                <td><input type="text" name="jabatan"></td>
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
        $kd_petugas = $_POST['kd_petugas'];
        $nama_petugas = $_POST['nama_petugas'];
        $jabatan = $_POST['jabatan'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO petugas(kd_petugas,nama_petugas,jabatan) VALUES('$kd_petugas','$nama_petugas','$jabatan')");
        
        // Show message when user added
        echo "data berhasil ditambahkan. <a href='index.php?page=petugas'>lihat petugas</a>";
    }
    ?>
</body>
</html>