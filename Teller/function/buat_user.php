<?php
    require '../koneksi.php';
    require '../auth.php';

//READ
    $sqlRead = "SELECT * FROM user";
    $query = mysqli_query($koneksi, $sqlRead);     
// Create
if(isset($_POST['user'])) {
    $IdUser = $_POST["IdUser"];
    $Nama = $_POST["Nama"];
    $Password = $_POST["Password"];
    $HakAkses = $_POST["HakAkses"];
    $queryUser = mysqli_query($koneksi, "INSERT INTO user VALUES ('$IdUser','$Nama','$Password','$HakAkses',CURDATE(),'')") or die($koneksi);
    if($queryUser){
        echo "
        <script>
        alert('User Berhasil Ditambahkan');
        document.location.href = 'buat_user.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('User Gagal Ditambahkan');
        document.location.href = 'buat_user.php';
        </script>
        ";
    }
}


?>