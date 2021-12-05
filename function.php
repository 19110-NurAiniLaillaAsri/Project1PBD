<?php  
session_start();

//DATABASE
$koneksi = mysqli_connect("localhost","root","","penjualan_motor_bekas") or die("Gagal");

//LOGIN
if (isset($_POST['login'])) {
    $IdUser = $_POST['IdUser'];
    $Password = $_POST['Password'];
    // $pass = md5($password);
    $cekdatabase = mysqli_query($koneksi, "SELECT * FROM user where IdUser='$IdUser' and Password='$Password'");
    $hitung = mysqli_num_rows($cekdatabase);
    if($hitung === 1){
        $_SESSION['log'] = 'True';
        $qry = mysqli_fetch_array($cekdatabase);
        if($qry>0) {
            $_SESSION['IdUser'] = $qry['IdUser'];
            $_SESSION['Nama'] = $qry['Nama'];
            $_SESSION['Password'] = $qry['Password'];
            // $_SESSION['HakAkses'] = $qry['HakAkses'];

            $_SESSION['Create_Date'] = $qry['Create_Date'];
            $_SESSION['Manager'] = $qry['Manager'];
            // header('location:home.php');
            if (isset($_SESSION["Pemilik"])){
                header("Location : Pemilik/homepemilik.php");
            }
            else if (isset($_SESSION["Teller"])){
                header("Location : Teller/home.php");
            }
            else if (isset($_SESSION["Teknisi"])){
                header("Location : Teknisi/home.php");
            }
            else if (isset($_SESSION["Customer"])){
                header("Location : Customer/home.php");
            } else {
                header("Location: index.php");
                exit;
            }
        }
        
    } else {
        echo "<script>alert('Data Tidak Ada')
         window.location.replace('index.php');</script>";
    }
}