<?php
 
    include "koneksi.php";
   
    $No_Invoice = htmlspecialchars($_POST['No_Invoice']);
  
     
    $Hasil = mysql_query("update tbl_suratjalan SET Status='WAITING DELIVERY' where No_Invoice='$No_Invoice'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>