<?php
 
    include "koneksi.php";
     
    $Kode_Suplier = htmlspecialchars($_POST['Kode_Suplier']);
    $No_Urut = htmlspecialchars($_POST['No_Urut']);
    $No_Po = htmlspecialchars($_POST['No_Po']);
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
    $Nama_Barang = htmlspecialchars($_POST['Nama_Barang']);
    $Jumlah = htmlspecialchars($_POST['Jumlah']);
    $Harga = htmlspecialchars($_POST['Harga']);
    $Total = htmlspecialchars($_POST['Total']);
    $Tanggal = htmlspecialchars($_POST['Tanggal']);
    $User = htmlspecialchars($_POST['User']);
    $Jenis = htmlspecialchars($_POST['Jenis']);
    $Note = htmlspecialchars($_POST['Note']);
    $Payment = htmlspecialchars($_POST['Payment']);
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);

    $Hasil = mysql_query("Insert Into tbl_posuplier(Kode_Suplier,No_Urut,No_Po,Kode_Barang,Nama_Barang,Jumlah,Harga,Total,Tanggal,User,Jenis,Note,Payment,Kode_Customer) Values ('$Kode_Suplier','$No_Urut','$No_Po','$Kode_Barang','$Nama_Barang','$Jumlah','$Harga','$Total','$Tanggal','$User','$Jenis','$Note','$Payment','$Kode_Customer')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>