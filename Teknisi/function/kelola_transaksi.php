<?php
    require 'session.php';
    require '../koneksi.php';
//Read Data Transaksi
    $sqlRead = "SELECT *, t.Harga_Jual as hrg_jual FROM transaksi t, identitas_motor i, customer c WHERE i.Id=t.Id_Kendaraan AND c.Id_Cust=t.Id_Cust ORDER BY Tgl_Trsk ASC";
    $queryRead = mysqli_query($koneksi, $sqlRead);
//Edit Data Transaksi
if(isset($_POST["editTransaksi"])){
    $IdTrsk = $_POST["IdTrsk"];
    $Id_Cust = $_POST["Id_Cust"];
    $Nama_Cust = $_POST["Nama_Cust"];
    $Alamat_Cust = $_POST["Alamat_Cust"];
    $Telp_Cust = $_POST["Telp_Cust"];
    $NIK_Cust = $_POST["NIK_Cust"];
    $Harga_Jual = $_POST["Harga_Jual"];
    $queryEditTrsk = mysqli_query($koneksi, "UPDATE transaksi SET Harga_Jual='$Harga_Jual' WHERE IdTrsk='$IdTrsk'") or die($koneksi);
    if($queryEditTrsk){
        $queryEditCust = mysqli_query($koneksi, "UPDATE customer SET Nama_Cust='$Nama_Cust', Alamat_Cust='$Alamat_Cust', Telp_Cust='$Telp_Cust', NIK_Cust='$NIK_Cust' WHERE Id_Cust='$Id_Cust'") or die($koneksi);
        if ($queryEditCust){
            echo "
                <script>
                    alert('Berhasil Update Transaksi!');
                    document.location.href = 'transaksi2.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal Update Data Customer!');
                    document.location.href = 'transaksi2.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Gagal Update Transaksi!');
                document.location.href = 'transaksi2.php';
            </script>
        ";
    }
}
//Hapus Transaksi
if (isset($_POST["hapusTrsk"])){
    $IdTrsk = $_POST["IdTrsk"];
    $Id_Cust = $_POST["Id_Cust"];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM transaksi WHERE IdTrsk = '$IdTrsk'") or die($koneksi);
    $queryHapusCust = mysqli_query($koneksi, "DELETE FROM customer WHERE Id_Cust = '$Id_Cust'") or die($koneksi);
    if ($queryHapus){
        echo "
            <script>
                alert('Berhasil Menghapus Transaksi!');
                document.location.href = 'transaksi2.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Gagal Menghapus Transaksi!');
                document.location.href = 'transaksi2.php';
            </script>
        ";
    }
}