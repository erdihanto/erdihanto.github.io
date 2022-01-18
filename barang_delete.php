<?php
 
    include "koneksi.php";
     
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']); 
    $Hasil = mysql_query("delete from tbl_barang where Kode_Barang = '$Kode_Barang'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>