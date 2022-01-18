<?php
 
    include "koneksi.php";
     
    $No_Surat_Penawaran = htmlspecialchars($_POST['No_Surat_Penawaran']);
     
    if($No_Surat_Penawaran=="") {
        $rs = mysql_query("select * from tbl_po");    
    }else {
        $rs = mysql_query("select * from tbl_po where status ='ORDER PO' and No_Surat_Penawaran3 = '$No_Surat_Penawaran'");  
    }
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>