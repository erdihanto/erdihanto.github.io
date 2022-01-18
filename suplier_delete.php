<?php
 
    include "koneksi.php";
     
    $Kode_suplier = htmlspecialchars($_POST['Kode_suplier']); 
    $Hasil = mysql_query("delete from tbl_suplier where Kode_suplier = '$Kode_suplier'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>