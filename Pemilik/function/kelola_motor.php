<?php
    require 'session.php';
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
    $Gambar_Motor = $_POST["Gambar_Motor"];
    $Tgl_Beli = $_POST["Tgl_Beli"];
    $Harga_Beli = $_POST["Harga_Beli"];
    $Tgl_Jual = $_POST["Tgl_Jual"];
    $Harga_Jual = $_POST["Harga_Jual"];
    // Random ID Motor
    $queryID = mysqli_query($koneksi, "SELECT max(Id) as id_terbesar FROM identitas_motor");
    $data = mysqli_fetch_array($queryID);
    $id_baru = $data['id_terbesar'];
    $urutan = (int) substr($id_baru, 3, 4);
    $urutan++;
    $huruf = "MTR";
    $id_motor = $huruf . sprintf("%04s", $urutan);
    // Upload Foto Motor
    $namaAsli = $_FILES['Gambar_Motor']['name'];
    $x = explode('.',$namaAsli);
    $eks = strtolower(end($x));
    $asal = $_FILES['Gambar_Motor']['tmp_name'];
    $dir = "../Gambar_Motor/";
    $foto = uniqid();
    $foto .= '.'.$eks;//ini nama file final setelah di random namanya
    $targetFile = $dir.$foto;
    $uploadOk = 1;
    if (file_exists($targetFile)){
        $uploadOk = 0;
    }
    if ($uploadOk == 0){
        echo '<script>alert("Nama file sudah ada!");</script>';
    } 
    else if ($namaAsli=="") { 
        $queryCreate = "INSERT INTO identitas_motor VALUES ('','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNo','$Merk','$Type','$Model','$TahunPembuatan',$IsiSilinder,'$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK','','$Tgl_Beli','$Harga_Beli','$Tgl_Jual','$Harga_Jual')";
        $createData = mysqli_query($koneksi, $queryCreate);
        if ($createData){
            echo "<script>alert('Motor berhasil ditambahkan!')
            window.location.replace('identitas_motor.php');</script>";
        }
    }
    else {
        if (move_uploaded_file($asal, $targetFile)){
            $queryCreate = "INSERT INTO identitas_motor VALUES ('','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNo','$Merk','$Type','$Model','$TahunPembuatan',$IsiSilinder,'$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK','$foto','$Tgl_Beli','$Harga_Beli','$Tgl_Jual','$Harga_Jual')";
            $createData = mysqli_query($koneksi, $queryCreate);
            if ($createData){
                echo "<script>alert('Motor berhasil ditambahkan!')
                window.location.replace('identitas_motor.php');</script>";
            }
        } else {
            echo '<script>alert("Proses Upload GAGAL!");</script>';
        }
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
    $Gambar_Motor = $_POST["Gambar_Motor"];
    $Tgl_Beli = $_POST["Tgl_Beli"];
    $Harga_Beli = $_POST["Harga_Beli"];
    $Tgl_Jual = $_POST["Tgl_Jual"];
    $Harga_Jual = $_POST["Harga_Jual"];
    // File Upload
    $namaAsli = $_FILES['Gambar_Motor']['name'];
    if($namaAsli==""){
        $queryUpdateMotor = mysqli_query($koneksi, "UPDATE identitas_motor SET NoRegistrasi='$NoRegistrasi', NamaPemilik='$NamaPemilik', Alamat='$Alamat', NoRangka='$NoRangka', NoMesin ='$NoMesin ', PlatNo  ='$PlatNo ', Merk='$Merk', Type='$Type', Model='$Model', TahunPembuatan='$TahunPembuatan', IsiSilinder='$IsiSilinder', BahanBakar='$BahanBakar', WarnaTNKB='$WarnaTNKB', TahunRegistrasi='$TahunRegistrasi', NoBPKB='$NoBPKB', KodeLokasi='$KodeLokasi', MasaBerlakuSTNK='$MasaBerlakuSTNK', Tgl_Beli='$Tgl_Beli', Harga_Beli='$Harga_Beli', Tgl_Jual='$Tgl_Jual', Harga_Jual='$Harga_Jual'  WHERE Id=$getId") or die(mysqli_error($koneksi));
        echo "
            <script>
                alert('Berhasil Update Data Motor!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    } else {
        // Hapus Gambar Lama
        $cariFile = mysqli_query($koneksi, "SELECT * FROM identitas_motor WHERE id = '$getId'") or die(mysqli_error($koneksi));
        $cariRow = mysqli_fetch_array($cariFile);
        $namaFile = $cariRow['Gambar_Motor'];
        $lokasi = "../Gambar_Motor/".$namaFile;
        if (file_exists($lokasi)){
            unlink($lokasi);
        }
        $x = explode('.',$namaAsli);
        $eks = strtolower(end($x));
        $asal = $_FILES['Gambar_Motor']['tmp_name'];
        $dir = "../Gambar_Motor/";
        $foto = uniqid();
        $foto .= '.'.$eks;
        $targetFile = $dir.$foto;
        $uploadOk = 1;
        // Cek apakah file sudah ada difolder ?
        if (file_exists($targetFile)){
            $uploadOk = 0;
        }
        // Cek Proses Upload
        if ($uploadOk == 0){
            echo '<script>alert("Nama file sudah ada!");</script>';
        } else {
            if (move_uploaded_file($asal, $targetFile)){
                $queryUpdateMotor = mysqli_query($koneksi, "UPDATE identitas_motor SET NoRegistrasi='$NoRegistrasi', NamaPemilik='$NamaPemilik', Alamat='$Alamat', NoRangka='$NoRangka', NoMesin ='$NoMesin ', PlatNo  ='$PlatNo ', Merk='$Merk', Type='$Type', Model='$Model', TahunPembuatan='$TahunPembuatan', IsiSilinder='$IsiSilinder', BahanBakar='$BahanBakar', WarnaTNKB='$WarnaTNKB', TahunRegistrasi='$TahunRegistrasi', NoBPKB='$NoBPKB', KodeLokasi='$KodeLokasi', MasaBerlakuSTNK='$MasaBerlakuSTNK', Gambar_Motor='$foto', Tgl_Beli='$Tgl_Beli', Harga_Beli='$Harga_Beli', Tgl_Jual='$Tgl_Jual', Harga_Jual='$Harga_Jual'  WHERE Id=$getId") or die(mysqli_error($koneksi));
                if ($queryUpdateMotor){
                    echo "
                        <script>
                            alert('Berhasil Update Data Motor!');
                            document.location.href = 'identitas_motor.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Gagal Update Identitas Motor!');
                        document.location.href = 'identitas_motor.php';
                    </script>
                ";
            }
        }
    }
}
//Delete Identitas Motor//
else if(isset($_POST["hapusMotor"])){
    $getID = $_POST["getId"];
    $cariFile = mysqli_query($koneksi, "SELECT * FROM identitas_motor WHERE Id = '$getID'") or die(mysqli_error($koneksi));
    $cariRow = mysqli_fetch_array($cariFile);
    $namaFile = $cariRow['Gambar_Motor'];
    $lokasi = "../Gambar_Motor/".$namaFile;
    if (file_exists($lokasi)){
        unlink($lokasi);
    }
    $queryDeleteMotor = mysqli_query($koneksi, "DELETE FROM identitas_motor WHERE Id =$getID") or die($koneksi);
    if ($queryDeleteMotor){
        echo "
            <script>
                alert('Berhasil Menghapus Motor!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Gagal Menghapus Motor!');
                document.location.href = 'identitas_motor.php';
            </script>
        ";
    }


}


?>
