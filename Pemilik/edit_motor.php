<?php
require '../koneksi.php';
require 'function/session.php';
require 'function/kelola_motor.php';
$getID = $_GET['getId'];
$sqlUser = "SELECT * FROM identitas_motor WHERE Id = '$getID'";
$query = mysqli_query($koneksi, $sqlUser);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Identitas Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/inventory.css">
</head>
<body>
<!-- Sidebar -->
	<input type="checkbox" id="nav-toggle"> 
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fas fa-box-open"></span><span>judul</span></h1>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
                    <a href="homepemilik.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Home</span></a>
                </li>
                <li>
                    <a href="identitas_motor.php" class="active" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Identitas Motor</span></a>
                </li>
                <li>
                    <a href="buat_user.php"style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Buat User</span></a>
                </li>
                <li>
                    <a href="transaksi.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Transaksi</span></a>
                </li>
			</ul>
		</div>
	</div>
<!--Navbar -->
<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="fas fa-bars"></span>
				</label>
				Identitas Motor
			</h2>

			<div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?= ucfirst($_SESSION['Nama']);?></a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="buat_user.php">Buat Akun</a></li>
                <div class="dropdown-divider"></div>
                <!-- <li><a class="dropdown-item" href="ubahsandi.php">Ubah Kata Sandi</a></li>
                <div class="dropdown-divider"></div> -->
                <li><a class="dropdown-item" href="../logout.php" name="logout">Logout</a></li>
              </ul>
            </div>
		</header>
<!-- Form Identitas Motor -->
		<main>
    		<div class="container-fluid">
    			<div class="row card mb-4">
    				<!-- <div class="col-4"> -->
                    <div class="card-header text-center">
    					<h3>Identitas Motor</h3>
    				</div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mt-2">
                                <label for="NoRegistrasi">No Registrasi</label>
                                <input type="text" name="NoRegistrasi" class="form-control" value="<?php echo $row['NoRegistrasi']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NamaPemilik">Nama Pemilik</label>
                                <input type="text" name="NamaPemilik" class="form-control" value="<?php echo $row['NamaPemilik']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Alamat">Alamat</label>
                                <input type="text" name="Alamat" class="form-control" value="<?php echo $row['Alamat']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoRangka">No Rangka</label>
                                <input type="text" name="NoRangka" class="form-control" value="<?php echo $row['NoRangka']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoMesin">No Mesin</label>
                                <input type="text" name="NoMesin" class="form-control" value="<?php echo $row['NoMesin']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="PlatNo">Plat No</label>
                                <input type="text" name="PlatNo" class="form-control" value="<?php echo $row['PlatNo']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Merk">Merk</label>
                                <input type="text" name="Merk" class="form-control" value="<?php echo $row['Merk']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Type">Type</label>
                                <input type="text" name="Type" class="form-control" value="<?php echo $row['Type']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Model">Model</label>
                                <input type="text" name="Model" class="form-control" value="<?php echo $row['Model']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunPembuatan">Tahun Pembuatan</label>
                                <input type="text" name="TahunPembuatan" class="form-control" value="<?php echo $row['TahunPembuatan']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="IsiSilinder">Isi Silinder</label>
                                <input type="text" name="IsiSilinder" class="form-control" value="<?php echo $row['IsiSilinder']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="BahanBakar">Bahan Bakar</label>
                                <input type="text" name="BahanBakar" class="form-control" value="<?php echo $row['BahanBakar']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="WarnaTNKB">Warna TNKB</label>
                                <input type="text" name="WarnaTNKB" class="form-control" value="<?php echo $row['WarnaTNKB']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunRegistrasi">Tahun Registrasi</label>
                                <input type="text" name="TahunRegistrasi" class="form-control" value="<?php echo $row['TahunRegistrasi']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoBPKB">No BPKB</label>
                                <input type="number" name="NoBPKB" class="form-control" value="<?php echo $row['NoBPKB']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="KodeLokasi">Kode Lokasi</label>
                                <input type="text" name="KodeLokasi" class="form-control" value="<?php echo $row['KodeLokasi']?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="MasaBerlakuSTNK">Masa Berlaku STNK</label>
                                <input type="date" name="MasaBerlakuSTNK" class="form-control" value="<?php echo $row['MasaBerlakuSTNK']?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="updateMotor" style="width: 25%;">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>


<!-- Script -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> <!-- buat modal -->  

    <!-- <a href="logout.php">logout luar</a> -->
</body>
</html>