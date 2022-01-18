<?php
 
    include "koneksi.php";
 
    
    $rs = mysql_query("select max(No_Surat_Penawaran) as No_Surat_Penawaran from tbl_po"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>