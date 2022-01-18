<?php
 
    include "koneksi.php";
     
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Gudang = htmlspecialchars($_POST['Gudang']);
    $Stok = htmlspecialchars($_POST['Stok']);

     
     
    $Hasil = mysql_query("update tbl_barang set Nama_Barang='$Nama_Barang', Gudang='$Gudang' where Kode_Barang='$Kode_Barang'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>