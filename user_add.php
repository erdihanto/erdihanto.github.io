<?php
 
    include "koneksi.php";
     
    $Nip = htmlspecialchars($_POST['Nip']);
    $Nama = htmlspecialchars($_POST['Nama']);
    $Alamat = htmlspecialchars($_POST['Alamat']);
    $HP = htmlspecialchars($_POST['HP']);
    $Kel = htmlspecialchars($_POST['Kel']);
    $Jabatan = htmlspecialchars($_POST['Jabatan']);
    $Level = htmlspecialchars($_POST['Level']);
     
    $Hasil = mysql_query("Insert Into tbl_user(Nama,Alamat,HP,Kel,Jabatan,Level) Values ('$Nama', '$Alamat', '$HP','$Kel','$Jabatan','$Level')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>