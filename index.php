<?php
    require 'koneksi.php';

    if (isset($_SESSION["Pemilik"])){
        header("Location : Pemilik/homepemilik.php");
    }
    else if (isset($_SESSION["Teller"])){
        header("Location : Teller/hometeller.php");
    }
    else if (isset($_SESSION["Teknisi"])){
        header("Location : Teknisi/hometeknisi.php");
    }
    else if (isset($_SESSION["Customer"])){
        header("Location : Customer/homecustomer.php");
    } else {
        header("Location: login.php");
        exit;
    }
?>