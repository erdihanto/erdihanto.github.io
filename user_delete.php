<?php
 
    include "koneksi.php";
     
    $Nip = htmlspecialchars($_POST['Nip']); 
    $Hasil = mysql_query("delete from tbl_user where Nip = '$Nip'");
    if($Hasil) {
        echo "OK";
    }else { 
        echo "ERROR";
    }
?>