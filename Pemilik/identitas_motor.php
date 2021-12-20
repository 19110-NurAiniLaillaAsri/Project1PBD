<?php
require '../koneksi.php';
require 'function/session.php';
require 'function/kelola_motor.php';
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
			<h2><span class="fas fa-box-open"></span><span>SIJUNTOR</span></h1>
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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group mt-2">
                                <label for="NoRegistrasi">No Registrasi</label>
                                <input type="text" name="NoRegistrasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NamaPemilik">Nama Pemilik</label>
                                <input type="text" name="NamaPemilik" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Alamat">Alamat</label>
                                <input type="text" name="Alamat" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoRangka">No Rangka</label>
                                <input type="text" name="NoRangka" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoMesin">No Mesin</label>
                                <input type="text" name="NoMesin" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="PlatNo">Plat No</label>
                                <input type="text" name="PlatNo" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Merk">Merk</label>
                                <input type="text" name="Merk" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Type">Type</label>
                                <input type="text" name="Type" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Model">Model</label>
                                <input type="text" name="Model" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunPembuatan">Tahun Pembuatan</label>
                                <input type="text" name="TahunPembuatan" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="IsiSilinder">Isi Silinder</label>
                                <input type="text" name="IsiSilinder" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="BahanBakar">Bahan Bakar</label>
                                <input type="text" name="BahanBakar" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="WarnaTNKB">Warna TNKB</label>
                                <input type="text" name="WarnaTNKB" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunRegistrasi">Tahun Registrasi</label>
                                <input type="text" name="TahunRegistrasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoBPKB">No BPKB</label>
                                <input type="text" name="NoBPKB" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="KodeLokasi">Kode Lokasi</label>
                                <input type="text" name="KodeLokasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="MasaBerlakuSTNK">Masa Berlaku STNK</label>
                                <input type="date" name="MasaBerlakuSTNK" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Gambar_Motor">Gambar Motor</label>
                                <input type="file" name="Gambar_Motor" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Tgl_Beli">Tanggal Beli</label>
                                <input type="date" name="Tgl_Beli" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Harga_Beli">Harga Beli</label>
                                <input type="number" name="Harga_Beli" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Tgl_Jual">Tanggal Jual</label>
                                <input type="date" name="Tgl_Jual" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Harga_Jual">Harga Jual</label>
                                <input type="number" name="Harga_Jual" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="identitasmotor" style="width: 25%;">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- Tabel -->
            <div class="container-fluid">
    			<div class="row card mb-4">
                    <div class="table-responsive-xxl">
                        <table class="table" style="min-width: 3000px;">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">No Registrasi</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Rangka</th>
                                <th scope="col">No Mesin</th>
                                <th scope="col">Plat No</th>
                                <th scope="col">Merk</th>
                                <th scope="col">No Rangka</th>
                                <th scope="col">Type</th>
                                <th scope="col">Model</th>
                                <th scope="col">Tahun Pembuatan</th>
                                <th scope="col">Isi Silinder</th>
                                <th scope="col">Bahan Bakar</th>
                                <th scope="col">Warna TNKB</th>
                                <th scope="col">Tahun Registrasi</th>
                                <th scope="col">No BPKB</th>
                                <th scope="col">Kode Lokasi</th>
                                <th scope="col">Masa Berlaku STNK</th>
                                <th scope="col">Gambar Motor</th>
                                <th scope="col">Tanggal Beli</th>
                                <th scope="col">Harga Beli</th>
                                <th scope="col">Tanggal Jual</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row = mysqli_fetch_array($query)){
                                    echo '
                                    <form method = "POST" enctype="multipart/form-data">
                                        <div class="invisible position-absolute">
                                            <input type="text" class="form-control" name="getId" value="'.$row['Id'].'">
                                        </div>
                                        <tr>
                                            <td>'.$row['Id'].'</td>
                                            <td>'.$row['NoRegistrasi'].'</td>
                                            <td>'.$row['NamaPemilik'].'</td>
                                            <td>'.$row['Alamat'].'</td>
                                            <td>'.$row['NoRangka'].'</td>
                                            <td>'.$row['NoMesin'].'</td>
                                            <td>'.$row['PlatNo'].'</td>
                                            <td>'.$row['Merk'].'</td>
                                            <td>'.$row['Type'].'</td>
                                            <td>'.$row['Model'].'</td>
                                            <td>'.$row['TahunPembuatan'].'</td>
                                            <td>'.$row['IsiSilinder'].'</td>
                                            <td>'.$row['BahanBakar'].'</td>
                                            <td>'.$row['WarnaTNKB'].'</td>
                                            <td>'.$row['TahunRegistrasi'].'</td>
                                            <td>'.$row['NoBPKB'].'</td>
                                            <td>'.$row['KodeLokasi'].'</td>
                                            <td>'.$row['MasaBerlakuSTNK'].'</td>
                                            <td>'.$row['Gambar_Motor'].'</td>
                                            <td>'.$row['Tgl_Beli'].'</td>
                                            <td>'.$row['Harga_Beli'].'</td>
                                            <td>'.$row['Tgl_Jual'].'</td>
                                            <td>'.$row['Harga_Jual'].'</td>
                                            <td class="text-center">
                                                '?><button type="submit" class="btn btn-warning" style="width: 40px"; name="editMotor"><i class="far fa-edit"></i></button>
                                                <button type="submit" class="btn btn-danger" style="width: 40px"; name="hapusMotor" onclick="return confirm('Hapus Identitas Motor?')"><i class="far fa-trash-alt"></i></button><?php echo '
                                            </td>
                                            </td>
                                        </tr>
                                    </form>';
                                }
                                
                            ?>

                                
                            </tbody>
                        </table>
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
