<?php
 
    include "koneksi.php";
     
    $Nip = htmlspecialchars($_POST['Nip']);
    $Nama = htmlspecialchars($_POST['Nama']);
    $Alamat = htmlspecialchars($_POST['Alamat']);
    $HP = htmlspecialchars($_POST['HP']);
    $Kel = htmlspecialchars($_POST['Kel']);
    $Jabatan = htmlspecialchars($_POST['Jabatan']);
    $Level = htmlspecialchars($_POST['Level']);
     
     
    $Hasil = mysql_query("update tbl_user set Nama='$Nama', Alamat='$Alamat', HP='$HP', Kel='$Kel', Jabatan='$Jabatan', Level='$Level' where Nip='$Nip'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>