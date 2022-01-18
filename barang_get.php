<?php
 
    include "koneksi.php";
 
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);     
    $rs = mysql_query("select * from tbl_barang where Kode_Barang like '$Kode_Barang'"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>