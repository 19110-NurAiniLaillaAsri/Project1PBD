<?php
    require '../koneksi.php';
    require '../auth.php';

//READ
    $sqlRead = "SELECT * FROM identitas_motor";
    $query = mysqli_query($koneksi, $sqlRead);     
// Create
if(isset($_POST['identitasmotor'])) {
    $Id = $_POST["Id"];
    $NoRegistrasi = $_POST["NoRegistrasi"];
    $NamaPemilik = $_POST["NamaPemilik"];
    $Alamat = $_POST["Alamat"];
    $NoRangka = $_POST["NoRangka"];
    $NoMesin = $_POST["NoMesin"];
    $PlatNo = $_POST["PlatNo"];
    $Merk = $_POST["Merk"];
    $Type = $_POST["Type"];
    $Model = $_POST["Model"];
    $TahunPembuatan = $_POST["TahunPembuatan"];
    $IsiSilinder = $_POST["IsiSilinder"];
    $BahanBakar = $_POST["BahanBakar"];
    $WarnaTNKB = $_POST["WarnaTNKB"];
    $TahunRegistrasi = $_POST["TahunRegistrasi"];
    $NoBPKB = $_POST["NoBPKB"];
    $KodeLokasi = $_POST["KodeLokasi"];
    $MasaBerlakuSTNK = $_POST["MasaBerlakuSTNK"];

    $queryUser = mysqli_query($koneksi, "INSERT INTO identitas_motor VALUES ('','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNo','$Merk','$Type','$Model','$TahunPembuatan',$IsiSilinder,'$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK')") or die($koneksi);
    if($queryUser){
        echo "
        <script>
        alert('Identitas Motor Berhasil Ditambahkan');
        document.location.href = 'identitas_motor.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Identitas Motor Gagal Ditambahkan');
        document.location.href = 'identitas_motor.php';
        </script>
        ";
    }
}
//Update Identitas Motor//
else if(isset($_POST["editMotor"])){
    $getID = $_POST["getId"];
    echo "
        <script>
        document.location.href = 'edit_motor.php?getId=$getID';
        </script>
    ";
}
else if(isset($_POST["updateMotor"])){
    $getId = $_GET["getId"];
    $NoRegistrasi = $_POST["NoRegistrasi"];
    $NamaPemilik = $_POST["NamaPemilik"];
    $Alamat = $_POST["Alamat"];
    $NoRangka = $_POST["NoRangka"];
    $NoMesin = $_POST["NoMesin"];
    $PlatNo = $_POST["PlatNo"];
    $Merk = $_POST["Merk"];
    $Type = $_POST["Type"];
    $Model = $_POST["Model"];
    $TahunPembuatan = $_POST["TahunPembuatan"];
    $IsiSilinder = $_POST["IsiSilinder"];
    $BahanBakar = $_POST["BahanBakar"];
    $WarnaTNKB = $_POST["WarnaTNKB"];
    $TahunRegistrasi = $_POST["TahunRegistrasi"];
    $NoBPKB = $_POST["NoBPKB"];
    $KodeLokasi = $_POST["KodeLokasi"];
    $MasaBerlakuSTNK = $_POST["MasaBerlakuSTNK"];
    $queryMotor = mysqli_query($koneksi, "UPDATE identitas_motor SET NoRegistrasi='$NoRegistrasi', NamaPemilik='$NamaPemilik', Alamat='$Alamat', NoRangka='$NoRangka', NoMesin ='$NoMesin ', PlatNo  ='$PlatNo ', Merk='$Merk', Type='$Type', Model='$Model', TahunPembuatan='$TahunPembuatan', IsiSilinder='$IsiSilinder', BahanBakar='$BahanBakar', WarnaTNKB='$WarnaTNKB', TahunRegistrasi='$TahunRegistrasi', NoBPKB='$NoBPKB', KodeLokasi='$KodeLokasi', MasaBerlakuSTNK='$MasaBerlakuSTNK' WHERE Id=$getId") or die($koneksi);
    if ($queryMotor){
        echo "
            <script>
                alert('Berhasil Update Identitas Motor!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Gagal Update Identitas Motor!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    }
}
//Delete Identitas Motor//
else if(isset($_POST["hapusMotor"])){
    $getID = $_POST["getId"];
    $queryMotor = mysqli_query($koneksi, "DELETE FROM identitas_motor WHERE Id = '$getID'") or die($koneksi);
    if ($queryMotor){
        echo "
            <script>
                alert('Identitas Motor Berhasil Dihapus!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Identitas Motor Gagal Dihapus!');
                document.location.href = 'buat_usidentitas_motorer.php';
            </script>
        ";
    }
}


?>