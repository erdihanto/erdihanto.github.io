<?php
 
    include "koneksi.php";
    
    $No_Surat_Penawaran = htmlspecialchars($_POST['No_Surat_Penawaran']);
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);
    $No_Po = htmlspecialchars($_POST['No_Po']);
    $No_Pol = htmlspecialchars($_POST['No_Pol']);
    $No_Invoice = htmlspecialchars($_POST['No_Invoice']);
    $No_Surat_Jalan = htmlspecialchars($_POST['No_Surat_Jalan']);
    $Tanggal = htmlspecialchars($_POST['Tanggal']); 
    $No_Faktur = htmlspecialchars($_POST['No_Faktur']);
    $Driver = htmlspecialchars($_POST['Driver']);
 
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Jumlah = htmlspecialchars($_POST['Jumlah']);
    $Harga = htmlspecialchars($_POST['Harga']);
    $Pack = htmlspecialchars($_POST['Pack']);
    $Satuan = htmlspecialchars($_POST['Satuan']);
    $Total = htmlspecialchars($_POST['Total']);
    $No_Urut = htmlspecialchars($_POST['No_Urut']);
    
    $Aktual = htmlspecialchars($_POST['Aktual']);
    

    $User = htmlspecialchars($_POST['User']);  
 
    $Hasil = mysql_query("Insert Into tbl_suratjalan(No_Surat_Penawaran,Kode_Customer,No_Po,No_Pol,No_Invoice,No_Surat_Jalan,Tanggal,No_Faktur,Driver,Kode_Barang,Nama_Barang,Jumlah,Harga,Pack,Satuan,Total, Aktual, User, No_Urut) Values ('$No_Surat_Penawaran', '$Kode_Customer', '$No_Po', '$No_Pol', '$No_Invoice', '$No_Surat_Jalan', '$Tanggal', '$No_Faktur', '$Driver', '$Kode_Barang', '$Nama_Barang', '$Jumlah', '$Harga', '$Pack', '$Satuan', '$Total','$Aktual', '$User', '$No_Urut')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>