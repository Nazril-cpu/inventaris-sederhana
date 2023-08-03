<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">APLIKASI PEMBAYARAN SPP</h1>
		<h3 class="deskripsi">Menuju Administrasi Yang Rapi Dan Akurat</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
			<li><a href="index.php?page=lokasi">KELAS</a></li>
            <li><a href="index.php?page=barang">PEMBAYARAN</a></li>
            <li><a href="index.php?page=petugas">PETUGAS</a></li>
			<li><a href="index.php?page=pemakai">PEMAKAI</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;	
			case 'lokasi':
				include "tampil_lokasi.php";
				break;
			case 'input_lokasi':
				include "input_lokasi.php";
				break;	
			case 'edit_lokasi':
				include "edit_lokasi.php";
                break;
            
                case 'petugas':
                    include "tampil_petugas.php";
                    break;
                case 'input_petugas':
                    include "input_petugas.php";
                    break;	
                case 'edit_petugas':
                    include "edit_petugas.php";
					break;
					
                    case 'barang':
                        include "tampil_barang.php";
                        break;
                    case 'input_barang':
                        include "input_barang.php";
                        break;	
                    case 'edit_barang':
                        include "edit_barang.php";
						break;
						
						case 'pemakai':
							include "tampil_pemakai.php";
							break;
						case 'input_pemakai':
							include "input_pemakai.php";
							break;	
						case 'edit_pemakai':
							include "edit_pemakai.php";
							break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>

