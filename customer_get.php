<?php
 
    include "koneksi.php";
 
    $Kode_Customer = htmlspecialchars($_POST['Kode_Customer']);     
    $rs = mysql_query("select * from tbl_customer where Kode_Customer like '$Kode_Customer'"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>