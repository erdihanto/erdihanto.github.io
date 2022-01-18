<?php
 
    include "koneksi.php";
   
    $Kode_suplier = htmlspecialchars($_POST['Kode_suplier']);
    $Nama_suplier = htmlspecialchars($_POST['Nama_suplier']);
    $Ext_suplier = htmlspecialchars($_POST['Ext_suplier']);
    $Alamat1_suplier = htmlspecialchars($_POST['Alamat1_suplier']);
    $Alamat2_suplier = htmlspecialchars($_POST['Alamat2_suplier']);
    $Alamat3_suplier = htmlspecialchars($_POST['Alamat3_suplier']);
    $Phone_suplier = htmlspecialchars($_POST['Phone_suplier']);
    $NPWP_suplier = htmlspecialchars($_POST['NPWP_suplier']);
    $Nama = htmlspecialchars($_POST['Nama']);
     
    $Hasil = mysql_query("update tbl_suplier set Nama_suplier='$Nama_suplier', Ext_suplier='$Ext_suplier', Alamat1_suplier='$Alamat1_suplier', Alamat2_suplier='$Alamat2_suplier', Alamat3_suplier='$Alamat3_suplier', Phone_suplier='$Phone_suplier', NPWP_suplier='$NPWP_suplier', Nama='$Nama' where Kode_suplier = '$Kode_suplier'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>