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
//Update User//
else if(isset($_POST["editUser"])){
    $getID = $_POST["getId"];
    echo "
        <script>
        document.location.href = 'edit_user.php?getId=$getID';
        </script>
    ";
}
else if(isset($_POST["updateUser"])){
    $getID = $_GET["getId"];
    $nama = $_POST["Nama"];
    $password = $_POST["Password"];
    $hak_akses = $_POST["HakAkses"];
    $queryUser = mysqli_query($koneksi, "UPDATE user SET Nama='$nama', Password='$password', HakAkses='$hak_akses' WHERE IdUser='$getID'") or die($koneksi);
    if ($queryUser){
        echo "
            <script>
                alert('Berhasil Update User!');
                document.location.href = 'buat_user.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Gagal Update User!');
                document.location.href = 'buat_user.php';
            </script>
        ";
    }
}
//Delete User//
else if(isset($_POST["hapusUser"])){
    $getID = $_POST["getId"];
    $queryUser = mysqli_query($koneksi, "DELETE FROM user WHERE IdUser = '$getID'") or die($koneksi);
    if ($queryUser){
        echo "
            <script>
                alert('User Berhasil Dihapus!');
                document.location.href = 'buat_user.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('User Gagal Dihapus!');
                document.location.href = 'buat_user.php';
            </script>
        ";
    }
}


?>