<?php
 
    include "koneksi.php";
     
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']); 
    $Hasil = mysql_query("delete from tbl_customer where Kode_Customer = '$Kode_Customer'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>