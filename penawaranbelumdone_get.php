<?php
 
    include "koneksi.php";
     
    $No_Surat_Penawaran3 = htmlspecialchars($_POST['No_Surat_Penawaran3']);
     
    if($No_Surat_Penawaran3=="") {
        $rs = mysql_query("select * from tbl_po");    
    }else {
        $rs = mysql_query("select * from tbl_po where status = 'PENAWARAN' and No_Surat_Penawaran3 like '$No_Surat_Penawaran3'");  
    }
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>