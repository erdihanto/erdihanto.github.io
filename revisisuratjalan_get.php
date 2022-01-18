<?php
 
    include "koneksi.php";
     
    $No_Invoice= htmlspecialchars($_POST['No_Invoice']);
     
    #if($No_Surat_Penawaran=="") {
    #    $rs = mysql_query("select * from tbl_po");    
    #}else {
        $rs = mysql_query("select * from tbl_suratjalan where status ='WAITING DELIVERY' and No_invoice = '$No_Invoice'");  
    #}
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>