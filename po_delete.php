<?php
 
    include "koneksi.php";
   
    $No_Surat_Penawaran = htmlspecialchars($_POST['No_Surat_Penawaran']);
  
     
    $Hasil = mysql_query("update tbl_po SET Status='DELETED' where No_Surat_Penawaran3 = '$No_Surat_Penawaran'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>