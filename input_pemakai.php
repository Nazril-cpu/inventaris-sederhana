<html>
<head>
    <title>Tambah pemakaian</title>
</head>
 
<body>
    <a href="index.php?page=pemakai">Go to Home</a>
    <br/><br/>
 
    <form action="index.php?page=input_pemakai" method="post" name="form1">
        <table width="25%" border="0">
		
		
            <tr> 
                <td>lokasi</td>
                <td>
                <select name="lokasi">
				<?php
				include_once"koneksi.php";
				
				$result = mysqli_query($mysqli, "SELECT * FROM lokasi");
				while($user_data = mysqli_fetch_array($result)) {
					
				?>
				
					<option value="<?php echo $user_data['kd_tempat']; ?>"><?php echo $user_data['nama_tempat']; ?></option>
				<?php
				}
				?>
                </select>
		
                </td>
            <tr> 
                <td>nis</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr> 
                <td>nama barang</td>
                <td>
                <select name="kd_barang">
				<?php
				
				
				$result = mysqli_query($mysqli, "SELECT * FROM barang");
				while($user_data = mysqli_fetch_array($result)) {
					
				?>
				
					<option value="<?php echo $user_data['kd_barang']; ?>"><?php echo $user_data['nama_barang']; ?></option>
				<?php
				}
				?>
                </select>
		
                </td>
            </tr>
            <tr> 
                <td>kondisi</td>
                <td>
                <select name="kondisi">
                    <option>normal</option>
                    <option>rusak</option>
			    </select>
                </td>
            </tr>
            <tr> 
                <td>tgl pemakaian</td>
                <td><input type="text" name="tgl_pemakai" value="<?php echo date('d M Y'); ?>"></td>
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
        $nis = $_POST['nis'];
        $tgl_pemakai = $_POST['tgl_pemakai'];
        $kondisi = $_POST['kondisi'];
        


        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pemakaian(kd_barang,nis,tgl_pemakai,kondisi) VALUES('$kd_barang','$nis','$tgl_pemakai','$kondisi')");
        
        // Show message when user added
        echo "data berhasil ditambahkan. <a href='index.php?page=pemakai'>lihat pemakaian</a>";
    }
    ?>
</body>
</html>