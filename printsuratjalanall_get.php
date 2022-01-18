<?php
 
    include "koneksi.php";
 
    #$No_Invoice = htmlspecialchars($_POST['No_Invoice']);     
    $rs = mysql_query("select * from tbl_suratjalan group by No_Invoice"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>