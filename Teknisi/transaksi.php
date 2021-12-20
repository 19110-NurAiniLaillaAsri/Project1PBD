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
                    <a href="hometeknisi.php" style="text-decoration: none;"><i class="fas fa-table me-2"></i><span>Home</span></a>
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
				Buat Akun
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
                        <h1 class="text-center">Daftar Transaksi</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary align-middle text-center mx-auto" style="min-width: 800px;">
                                <thead class="table-dark border-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Id Customer</th>
                                        <th>Id Kendaraan</th>
                                        <th>Harga Jual</th>
                                        <th>Harga Jual Real</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light border-dark">
                                    <?php
                                        $no = 1;
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($queryRead)){
                                            $IdTrsk[$i] = $row['IdTrsk'];
                                            $Tgl_Trsk[$i] = $row["Tgl_Trsk"];
                                            $Id_Cust[$i] = $row["Id_Cust"];
                                            $Id_Kendaraan[$i] = $row["Id_Kendaraan"];
                                            $Harga_Jual[$i] = $row["Harga_Jual"];
                                            $Harga_Jual_Real[$i] = $row["Harga_Jual_Real"];?>

                                            <form method="post" enctype="multipart/form-data">
                                                <div class="invisible position-absolute">
                                                    <input type="text" class="form-control" name="IdTrsk" value="'.$IdTrsk[$i].'">
                                                </div>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row['IdTrsk'] ?></td>
                                                    <td><?= $row["Tgl_Trsk"] ?></td>
                                                    <td><?= $row["Id_Cust"] ?></td>
                                                    <td><?= $row["Id_Kendaraan"] ?></td>
                                                    <td>Rp. <?php echo $row['hrg_jual']?></td>
                                                    <td>Rp. <?php echo $row['Harga_Jual_Real']?></td>
                                            
                                                    <td style="width: 160px;">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['IdTrsk'] ?>"><i class="fas fa-search"></i></button>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $row['IdTrsk'] ?>"><i class="far fa-trash-alt"></i></button>
                                                    </td>
<!-- Modal Detail Motor -->
                                                    <div class="modal fade" id="detail<?php echo $row['IdTrsk'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="headerLabel">Data Motor</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="text-center mb-3">
                                                                        <img src="../Gambar_Motor/<?php echo $row['Gambar_Motor'] ?>" style="height: 200px;">
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Tanggal Transaksi</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Tgl_Trsk'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>ID Transaksi</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['IdTrsk'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>ID Customer</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Id_Cust'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Nama Customer</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Nama_Cust'] ?>">  
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Alamat Customer</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Alamat_Cust'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Telp Customer</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Telp_Cust'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>NIK Customer</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['NIK_Cust'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>ID Kendaraan</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="<?php echo $row['Id_Kendaraan'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Harga Jual</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="Rp. <?php echo number_format($row['Harga_Jual'], 0, ',', '.') ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pb-3">
                                                                        <div class="col-5 mt-1"><label>Harga Jual Real</label></div>
                                                                        <div class="col">
                                                                            <input type="text" class="form-control form-box" readonly value="Rp. <?php echo number_format($row['Harga_Jual_Real'], 0, ',', '.') ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">  
                                                                        <div class="col-md-12 d-flex justify-content-end">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>                                     
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
<!-- Modal Hapus -->
                                                    <form method="POST" class="form-group">
                                                        <div class="invisible position-absolute">
                                                            <input type="text" class="form-control" name="IdTrsk" value="<?php echo $row['IdTrsk'] ?>" readonly>
                                                        </div>
                                                        <div class="invisible position-absolute">
                                                            <input type="text" class="form-control" name="id_cust" value="<?php echo $row['Id_cust'] ?>" readonly>
                                                        </div>
                                                        <div class="modal fade text-start" id="hapus<?php echo $row['IdTrsk'] ?>" tabindex="-1" aria-labelledby="alertHapusModal" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Hapus transaksi <?php echo $row['IdTrsk'].' '.$row['Id_Cust'] ?> ?<br>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                                        <button name="hapusTrsk" type="submit" class="btn btn-primary">Yes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </tr>
                                            </form>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
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
