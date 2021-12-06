<?php
    require '../koneksi.php';
    require '../auth.php';

//READ
    $sqlRead = "SELECT * FROM identitas_motor";
    $query = mysqli_query($koneksi, $sqlRead);     

?>