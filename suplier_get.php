<?php
 
    include "koneksi.php";
 
    $Kode_suplier = htmlspecialchars($_POST['Kode_suplier']);     
    $rs = mysql_query("select * from tbl_suplier where Kode_suplier like '$Kode_suplier'"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>