<?php
 
    include "koneksi.php";
     
    $Faktur = htmlspecialchars($_POST['Faktur']);
         
    $Hasil = mysql_query("Insert Into tbl_faktur(Faktur) Values ('$Faktur')");

    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>