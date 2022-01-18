<?php
 
    include "koneksi.php";
   
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);
    $Nama_Customer = htmlspecialchars($_POST['Nama_Customer']);
    $Ext_Customer = htmlspecialchars($_POST['Ext_Customer']);
    $Alamat1_Customer = htmlspecialchars($_POST['Alamat1_Customer']);
    $Alamat2_Customer = htmlspecialchars($_POST['Alamat2_Customer']);
    $Alamat3_Customer = htmlspecialchars($_POST['Alamat3_Customer']);
    $Phone_Customer = htmlspecialchars($_POST['Phone_Customer']);
    $NPWP_Customer = htmlspecialchars($_POST['NPWP_Customer']);
    $Sales = htmlspecialchars($_POST['Sales']);
     
    $Hasil = mysql_query("update tbl_Customer set Nama_Customer='$Nama_Customer', Ext_Customer='$Ext_Customer', Alamat1_Customer='$Alamat1_Customer', Alamat2_Customer='$Alamat2_Customer', Alamat3_Customer='$Alamat3_Customer', Phone_Customer='$Phone_Customer', NPWP_Customer='$NPWP_Customer', Sales='$Sales' where Kode_Customer = '$Kode_Customer'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>