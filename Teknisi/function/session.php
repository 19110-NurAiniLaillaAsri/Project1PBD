<?php
    require '../koneksi.php';
    require '../auth.php';
// Ambil Session
    session_start();
    $IdUser = $_SESSION['IdUser'];
    $querySession = mysqli_query($koneksi, "SELECT * FROM user WHERE IdUser='$IdUser'");
    $rowSession = mysqli_fetch_array($querySession);
    $_SESSION['Nama'] = $rowSession['Nama'];
// Cek Session
    if (!isset($_SESSION["Teknisi"])){
        header("Location: ../login.php");
        exit;
    }
    else{
    }
?>