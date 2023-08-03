<html>
<head>
    <title>bayar spp</title>
</head>
 
<body>
    <a href="index.php?page=barang">Go to Home</a>
    <br/><br/>
 
    <form action="index.php?page=input_barang" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>No Urut</td>
                <td><input type="text" name="kd_barang"></td>
            </tr>
            <tr> 
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="jml_barang"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td>
                <select name="kondisi">
                    <option>RPL</option>
                    <option>Jasa Boga</option>
                    <option>TKR</option>
                    <option>MM</option>
                    <option>FARMASI</option>
                    <option>TSM</option>
                    <option>TPMI</option>
			    </select>
                </td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>pembayaran lewat</td>
                <td><input type="text" name="asal_barang"></td>
            </tr>
            <tr> 
                <td>nis</td>
                <td><input type="text" name="kd_tempat"></td>
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
        $kd_barang = $_POST['kd_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jml_barang = $_POST['jml_barang'];
        $kondisi = $_POST['kondisi'];
        $harga = $_POST['harga'];
        $asal_barang = $_POST['asal_barang'];
        $kd_tempat = $_POST['kd_tempat'];


        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO barang(kd_barang,nama_barang,jml_barang,kondisi,harga,asal_barang,kd_tempat) VALUES('$kd_barang','$nama_barang','$jml_barang','$kondisi','$harga','$asal_barang','$kd_tempat')");
        
        // Show message when user added
        echo "data berhasil ditambahkan. <a href='index.php?page=barang'>lihat pembayaran</a>";
    }
    ?>
</body>
</html>