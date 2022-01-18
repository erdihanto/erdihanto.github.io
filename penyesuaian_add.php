<?php
 
    include "koneksi.php";
     
    $Tanggal = htmlspecialchars($_POST['Tanggal']);
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Penyesuaian = htmlspecialchars($_POST['Penyesuaian']);
    $Jumlah = htmlspecialchars($_POST['Jumlah']);
    $User = htmlspecialchars($_POST['User']);
     
    $Hasil = mysql_query("Insert Into tbl_penyesuaian(Kode_Barang,Nama_Barang,Penyesuaian,Jumlah,User) 
    Values ('$Kode_Barang', '$Nama_Barang','$Penyesuaian','$Jumlah','$User')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>