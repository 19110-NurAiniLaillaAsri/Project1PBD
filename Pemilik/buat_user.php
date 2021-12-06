<?php
require '../koneksi.php';
require 'function/session.php';
require 'function/buat_user.php';

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
                    <a href="identitas_motor.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Identitas Motor</span></a>
                </li>
                <li>
                    <a href="buat_user.php" class="active" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Buat User</span></a>
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
				Buat Akun
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
<!-- Form Buat User -->
		<main>
    		<div class="container-fluid">
    			<div class="row card mb-4">
    				<!-- <div class="col-4"> -->
                    <div class="card-header text-center">
    					<h3>Buat Akun</h3>
    				</div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mt-2">
                                <label for="IdUser">Id User</label>
                                <input type="text" name="IdUser" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="Nama">Nama</label>
                                <input type="text" name="Nama" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="HakAkses">Hak Akses</label>
                                <!-- <input type="HakAkses" name="HakAkses" class="form-control"> -->
                                <select class="form-select" id="validationCustom04" name="HakAkses" required>
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Teller">Teller</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Customer">Customer</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" name="user" style="width: 25%;">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- Tabel -->
            <div class="container-fluid">
    			<div class="row card mb-4">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                <th scope="col" style="width: 5%;">Id User</th>
                                <th scope="col" style="width: 5%;">Nama</th>
                                <th scope="col" style="width: 5%;">Password</th>
                                <th scope="col" style="width: 5%;">Hak Akses</th>
                                <th scope="col" style="width: 5%;">Tanggal Pembuatan</th>
                                <th scope="col" style="width: 5%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_array($query)){
                                        echo '
                                        <form method = "POST">
                                            <div class="invisible position-absolute">
                                                <input type="text" class="form-control" name="getId" value="'.$row['IdUser'].'">
                                            </div>
                                            <tr>
                                                <td>'.$row['IdUser'].'</td>
                                                <td>'.$row['Nama'].'</td>
                                                <td>'.$row['Password'].'</td>
                                                <td>'.$row['HakAkses'].'</td>
                                                <td>'.$row['Create_Date'].'</td>
                                                <td class="text-center">
                                                    '?><button type="submit" class="btn btn-warning" style="width: 40px"; name="editUser"><i class="far fa-edit"></i></button>
                                                    <button type="submit" class="btn btn-danger" style="width: 40px"; name="hapusUser" onclick="return confirm('Hapus User?')"><i class="far fa-trash-alt"></i></button><?php echo '
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

</body>
</html>
