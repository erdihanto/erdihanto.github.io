<?php
 
    include "koneksi.php";
 
      
    $rs = mysql_query("select tbl_posuplier.No_Po, tbl_suplier.Nama_Suplier, tbl_posuplier.Tanggal, tbl_posuplier.kode_suplier from tbl_posuplier inner join tbl_suplier on tbl_posuplier.Kode_suplier = tbl_suplier.Kode_suplier where tbl_posuplier.status='PO' group by tbl_posuplier.No_Po"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>