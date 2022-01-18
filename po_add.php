<?php
 
    include "koneksi.php";
    
    
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);
    $No_Po = htmlspecialchars($_POST['No_Po']);
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Jumlah = htmlspecialchars($_POST['Jumlah']);
    $Harga = htmlspecialchars($_POST['Harga']);
    $Pack = htmlspecialchars($_POST['Pack']);
    $Satuan = htmlspecialchars($_POST['Satuan']);
    $Total = htmlspecialchars($_POST['Total']);
    $Total2 = htmlspecialchars($_POST['Total2']);
    $Catatan = htmlspecialchars($_POST['Catatan']);
    $Status = htmlspecialchars($_POST['Status']);
    $Aktual = htmlspecialchars($_POST['Aktual']);
    $Tanggal = htmlspecialchars($_POST['Tanggal']); 

    $User = htmlspecialchars($_POST['User']);  
    $No_Surat_Penawaran2 = htmlspecialchars($_POST['No_Surat_Penawaran2']); 
    $No_Surat_Penawaran = htmlspecialchars($_POST['No_Surat_Penawaran']); 
    $Hasil = mysql_query("Insert Into tbl_po(Kode_Customer,No_Po,Kode_Barang,Nama_Barang,Jumlah,Harga,Pack,Satuan,Total,Total2,Catatan,Status,Aktual,Tanggal,User,Tanggal_Penawaran,No_Surat_Penawaran2,No_Surat_Penawaran) Values ('$Kode_Customer', '$No_Po', '$Kode_Barang', '$Nama_Barang', '$Jumlah', '$Harga', '$Pack', '$Satuan', '$Total', '$Total2', '$Catatan', '$Status', '$Aktual', '$Tanggal', '$User', '$Tanggal', '$No_Surat_Penawaran2', '$No_Surat_Penawaran')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>