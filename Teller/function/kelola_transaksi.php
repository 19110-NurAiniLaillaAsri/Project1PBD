<?php
require 'session.php';
require '../koneksi.php';
//Read Data Motor//
$getdataMotor = mysqli_query($koneksi, "SELECT * FROM identitas_motor");

// Id Customer
$queryIDCust = mysqli_query($koneksi, "SELECT max(Id_Cust) as IdMax FROM transaksi");
$dataIDCust = mysqli_fetch_array($queryIDCust);
$IdTrsk = $dataIDCust['IdMax'];
$urutan = (int) substr($IdTrsk, 4, 4);
$urutan++;
$huruf = "CUST";
$id_custMax = $huruf . sprintf("%04s", $urutan);

//Create Transaksi
if(isset($_POST["tambahTransaksi"])) {
    $Id_Cust = $_POST["Id_Cust"];
    $Nama_Cust = $_POST["Nama_Cust"];
    $NIK_Cust = $_POST["NIK_Cust"];
    $Alamat_Cust = $_POST["Alamat_Cust"];
    $Telp_Cust = $_POST["Telp_Cust"];
    $Id = $_POST["Id"];
    $Harga_Jual = $_POST["Harga_Jual"];
    $Harga_Jual_Real = $_POST["Harga_Jual_Real"];
    // Id Transaksi
    $queryIDTrsk = mysqli_query($koneksi, "SELECT max(IdTrsk) as IdBesar FROM transaksi");
    $dataIDTrns = mysqli_fetch_array($queryIDTrsk);
    $IdTrsk = $dataIDTrns['IdBesar'];
    $urutan = (int) substr($IdTrsk, 4, 4);
    $urutan++;
    $huruf = "TRNS";
    $IdTrsk = $huruf . sprintf("%04s", $urutan);

    $queryCreateCust = mysqli_query($koneksi, "INSERT INTO customer VALUES ('$Id_Cust','$Nama_Cust','$Alamat_Cust','$Telp_Cust','$NIK_Cust')") or die($koneksi);
    $queryTrsk = mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$IdTrsk',NOW(),'$Id_Cust','$Id','$Harga_Jual','$Harga_Jual_Real')") or die($koneksi);
    if ($queryTrsk){
        echo "
        <script>
            alert('Transaksi Berhasil!');
            document.location.href = 'transaksi.php';
        </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Transaksi Gagal!');
                document.location.href = 'transaksi.php';
            </script>
        ";
    }
}