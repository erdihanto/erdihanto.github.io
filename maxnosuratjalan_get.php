<?php
 
    include "koneksi.php";
 
    
    $rs = mysql_query("select ifnull(max(No_Urut),0) as No_Urut from tbl_suratjalan"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>