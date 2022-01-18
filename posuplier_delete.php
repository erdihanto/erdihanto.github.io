<?php
 
    include "koneksi.php";
   
    $No_Po = htmlspecialchars($_POST['No_Po']);
  
     
    $Hasil = mysql_query("update tbl_posuplier SET Status='DELETED' where No_Po = '$No_Po'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>