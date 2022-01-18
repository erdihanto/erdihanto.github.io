<?php
 
    include "koneksi.php";
     
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);
    $Ext_Customer = htmlspecialchars($_POST['Ext_Customer']);
    $Nama_Customer = htmlspecialchars($_POST['Nama_Customer']);
    $Alamat1_Customer = htmlspecialchars($_POST['Alamat1_Customer']);
    $Alamat2_Customer = htmlspecialchars($_POST['Alamat2_Customer']);
    $Alamat3_Customer = htmlspecialchars($_POST['Alamat3_Customer']);
    $Phone_Customer = htmlspecialchars($_POST['Phone_Customer']);
    $NPWP_Customer = htmlspecialchars($_POST['NPWP_Customer']);
    $Sales = htmlspecialchars($_POST['Sales']);
    $Hasil = mysql_query("Insert Into tbl_customer(Nama_Customer,Ext_Customer,Alamat1_Customer,Alamat2_Customer,Alamat3_Customer,Phone_Customer,NPWP_Customer,Sales) Values ('$Nama_Customer', '$Ext_Customer', '$Alamat1_Customer','$Alamat2_Customer','$Alamat3_Customer','$Phone_Customer','$NPWP_Customer','$Sales')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>