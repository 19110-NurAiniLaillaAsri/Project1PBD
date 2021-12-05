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
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Pemilik<?= ucfirst($_SESSION['nama_user']);?></a>

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
                                <input type="NoRegistrasi" name="NoRegistrasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NamaPemilik">Nama Pemilik</label>
                                <input type="NamaPemilik" name="NamaPemilik" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Alamat">Alamat</label>
                                <input type="Alamat" name="Alamat" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoRangka">No Rangka</label>
                                <input type="NoRangka" name="NoRangka" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoMesin">No Mesin</label>
                                <input type="NoMesin" name="NoMesin" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="PlatNo">Plat No</label>
                                <input type="PlatNo" name="PlatNo" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Merk">Merk</label>
                                <input type="Merk" name="Merk" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Type">Type</label>
                                <input type="Type" name="Type" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="Model">Model</label>
                                <input type="Model" name="Model" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunPembuatan">Tahun Pembuatan</label>
                                <input type="TahunPembuatan" name="TahunPembuatan" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="IsiSilinder">Isi Silinder</label>
                                <input type="IsiSilinder" name="IsiSilinder" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="BahanBakar">Bahan Bakar</label>
                                <input type="BahanBakar" name="BahanBakar" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="WarnaTNKB">Warna TNKB</label>
                                <input type="WarnaTNKB" name="WarnaTNKB" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="TahunRegistrasi">Tahun Registrasi</label>
                                <input type="TahunRegistrasi" name="TahunRegistrasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="NoBPKB">No BPKB</label>
                                <input type="NoBPKB" name="NoBPKB" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="KodeLokasi">Kode Lokasi</label>
                                <input type="KodeLokasi" name="KodeLokasi" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="MasaBerlakuSTNK">Masa Berlaku STNK</label>
                                <input type="MasaBerlakuSTNK" name="MasaBerlakuSTNK" class="form-control">
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
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit" style="width: 40px";><i class="far fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" style="width: 40px";><i class="far fa-trash-alt"></i></button>
                                    </td>

<!-- Modal Edit Barang -->
                                    <form action="" method="POST">
                                        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang Masuk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input class="form-control" type="text" name="id_barang" value="" aria-label="readonly input example" readonly><br>
                                                        <input class="form-control" type="text" name="nama_barang" value="" aria-label="readonly input example" readonly><br>
                                                        <input type="text" name="quantitas" value="" class="form-control" required><br>
                                                        <input type="text" name="supplier" value="" class="form-control" required><br>
                                                        <input type="hidden" name="id_barang" value="">
                                                        <input type="hidden" name="id_masuk" value="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="Submit" class="btn btn-primary" name="editmasuk">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
<!-- Form Modal Hapus -->
                                    <form action="" method="POST">
                                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data <?=$nama_barang;?>
                                                <input type="hidden" name="id_barang" value="<?=$id_barang;?>">
                                                </div>
                                                <div class="modal-footer">
                                                <button type="Submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </tr>
                                
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