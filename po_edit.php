<?php
 
    include "koneksi.php";
   
    $No_Surat_Penawaran3 = htmlspecialchars($_POST['No_Surat_Penawaran3']);
    $No_Po = htmlspecialchars($_POST['No_Po']);
    $Tanggal = htmlspecialchars($_POST['Tanggal']);
     
    $Hasil = mysql_query("update tbl_po SET No_Po='$No_Po', Status='ORDER PO' where No_Surat_Penawaran3 = '$No_Surat_Penawaran3'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>