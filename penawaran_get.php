<?php
 
    include "koneksi.php";
 
      
    $rs = mysql_query("select tbl_po.No_Surat_Penawaran3 AS No_Surat, tbl_customer.Nama_Customer, tbl_po.Tanggal_Penawaran as Tanggal_Surat, tbl_po.kode_customer from tbl_po inner join tbl_customer on tbl_po.Kode_Customer = tbl_customer.Kode_Customer where tbl_po.status='PENAWARAN' group by tbl_po.No_Surat_Penawaran3"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>