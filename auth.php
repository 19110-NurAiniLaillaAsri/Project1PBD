<?php
    require 'koneksi.php';
//LOGIN    
if (isset($_POST["login"])){
    $IdUser = $_POST["IdUser"];
    $pass = $_POST["Password"];
    $signin = "SELECT * FROM user WHERE IdUser=$IdUser AND Password='$pass'";
    $result = mysqli_query($koneksi, $signin);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_array($result);
        if ($row > 0){
            // Set Session
            session_start();
            $_SESSION['IdUser'] = $_POST["IdUser"];
            if ($row["HakAkses"]=="Pemilik"){
                $_SESSION["Pemilik"] = true;
                header("Location:Pemilik/homepemilik.php");
            }
            else if ($row["HakAkses"]=="Teller"){
                $_SESSION["Teller"] = true;
                header("Location:Teller/hometeller.php");
            }
            else if ($row["HakAkses"]=="Teknisi"){
                $_SESSION["Teknisi"] = true;
                header("Location:Teknisi/hometeknisi.php");
            }
            else{
                $_SESSION["Customer"] = true;
                header("Location:Customer/homecustomer.php");
            }
            exit;
        }
    }

    $error = true;
    if (isset($error)){
        ?>
            <script>
            alert("Username/Password salah!");
            </script>
        <?php
    }
}

?>