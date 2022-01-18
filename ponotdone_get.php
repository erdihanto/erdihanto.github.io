<?php
 
    include "koneksi.php";
 
        
    $rs = mysql_query("select tbl_po.No_Po, tbl_customer.Ext_Customer, tbl_customer.Nama_Customer, tbl_po.Status, tbl_po.No_Surat_Penawaran3 as No_Surat_Penawaran, tbl_po.Kode_Customer from tbl_po inner join tbl_customer on tbl_po.Kode_Customer = tbl_customer.Kode_Customer where tbl_po.Status = 'ORDER PO' and tbl_po.No_Po <>'' group by tbl_po.No_Surat_Penawaran3" ); 
    
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>