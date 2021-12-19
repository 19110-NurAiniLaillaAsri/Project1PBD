<?php
require 'function/kelola_transaksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/inventory.css">
</head>
<body>
<!-- Sidebar -->
	<input type="checkbox" id="nav-toggle"> 
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fas fa-box-open"></span><span>SIJUNTOR</span></h1>
		</div>

		<div class="sidebar-menu">
			<ul>
				<li>
                    <a href="homepemilik.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Home</span></a>
                </li>
                <li>
                    <a href="identitas_motor.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Identitas Motor</span></a>
                </li>
                <li>
                    <a href="buat_user.php"style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Buat User</span></a>
                </li>
                <li>
                    <a href="transaksi.php" class="active" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Transaksi</span></a>
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
				Transaksi
			</h2>

			<div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?= ucfirst($_SESSION['Nama']);?></a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="../logout.php" name="logout">Logout</a></li>
              </ul>
            </div>
		</header>
<!-- Form Identitas Motor -->
		<main>
    		<div class="container-fluid mt-2">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="transaksi.php">Galeri Motor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaksi2.php">Data Transaksi</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Daftar Transaksi</h1>
                        <div class="row mt-2">
                        <?php
                            while ($rowMotor = mysqli_fetch_array($getdataMotor)) {?>
                                    
                                <div class="card my-2 mx-2 " style="width: 15rem;">
                                    <img src="../Gambar_Motor/<?=$rowMotor['Gambar_Motor']?>" style="height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Merk <?=$rowMotor['Merk']?></h5>
                                        <p class="card-text">Harga Jual Rp<?=$rowMotor['Harga_Jual']?></p>
                                        <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#detail<?php echo $rowMotor['Id'] ?>" style="width: 80px;">Detail</button>
                                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#beli<?php echo $rowMotor['Id'] ?>" style="width: 80px;">Beli</button>
                                    </div>
                                </div>
<!-- Modal Detail Motor -->
                                <div class="modal fade" id="detail<?php echo $rowMotor['Id'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="headerLabel">Data Motor</h5>
                                                
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center mb-3">
                                                    <img src="../Gambar_Motor/<?php echo $rowMotor['Gambar_Motor'] ?>" style="height: 200px;">
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>No Registrasi</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['NoRegistrasi'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Nama Pemilik</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['NamaPemilik'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Alamat</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['Alamat'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>No Rangka</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['NoRangka'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>No Mesin</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['NoMesin'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Plat No</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['PlatNo'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Merk</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['Merk'] ?>">  
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Type</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['Type'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Model</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['Model'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Tahun Pembuatan</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['TahunPembuatan'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Isi Silinder</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['IsiSilinder'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Bahan Bakar</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['BahanBakar'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Warna TNKB</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['WarnaTNKB'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Tahun Registrasi</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="<?php echo $rowMotor['TahunRegistrasi'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Masa Berlaku STNK</label></div>
                                                    <div class="col">
                                                        <input type="date" class="form-control form-box" readonly value="<?php echo $rowMotor['MasaBerlakuSTNK'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-5 mt-1"><label>Harga Jual</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" readonly value="Rp. <?php echo number_format($rowMotor['Harga_Jual'], 0, ',', '.') ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-md-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!-- Modal Beli -->
                            <div class="modal fade" id="beli<?php echo $rowMotor['Id'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="headerLabel">Form Transaksi Customer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" class="mx-2" enctype="multipart/form-data">
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>ID Kendaraan</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Id" value="<?php echo $rowMotor['Id'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>ID Customer</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Id_Cust" value="<?php echo $id_custMax ?>" readonly>
                                                    
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>NIK</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="NIK_Cust">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>Nama</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Nama_Cust">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>Alamat</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Alamat_Cust">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>No Telpn</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Telp_Cust">
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-4 mt-1"><label>Harga Jual</label></div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-box" name="Harga_Jual" value="<?php echo $rowMotor['Harga_Jual'] ?>">
                                                    </div>
                                                </div>
                                                <div class="invisible position-absolute">
                                                    <input type="text" class="form-control" name="Harga_Jual_Real" value="<?php echo $rowMotor['Harga_Beli'] ?>" readonly>
                                                </div>
                                                <div class="row mt-3">  
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button name="tambahTransaksi" type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>                                     
                                                </div> 
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php      
                                }
                            ?>
                        </div>
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
