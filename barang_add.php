<?php
 
    include "koneksi.php";
     
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Gudang = htmlspecialchars($_POST['Gudang']);
    $Stok = htmlspecialchars($_POST['Stok']);
 
     
    $Hasil = mysql_query("Insert Into tbl_barang(Nama_Barang,Gudang,Stok) Values ('$Nama_Barang', '$Gudang', '$Stok')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>