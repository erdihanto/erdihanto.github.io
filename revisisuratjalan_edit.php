<?php
 
    include "koneksi.php";
    
    $No_Invoice = htmlspecialchars($_POST['No_Invoice']);
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Jumlah_Barang = htmlspecialchars($_POST['Jumlah_Barang']);
    $Harga = htmlspecialchars($_POST['Harga']);
    $Satuan = htmlspecialchars($_POST['Satuan']);
    $Pack = htmlspecialchars($_POST['pack']);
    $Total = htmlspecialchars($_POST['Total']);
    $Aktual = htmlspecialchars($_POST['Aktual']);
     
    $Hasil = mysql_query("update tbl_suratjalan set Kode_Barang='$Kode_Barang', Nama_Barang='$Nama_Barang', Jumlah='$Jumlah_Barang', Harga='$Harga', Satuan='$Satuan', Pack='$Pack', Total='$Total', Aktual='$Aktual' where No_Invoice='$No_Invoice' and Kode_Barang='$Kode_Barang'");
    $Hasil2 = mysql_query("update Status='Need Print' where No_Invoice='$No_Invoice'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>