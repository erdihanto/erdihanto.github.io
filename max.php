<?php
 
    include "koneksi.php";
 
  
    $rs = mysql_query("select max(Nip) as Nip from tbl_user "); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>