<?php
 
    include "koneksi.php";
     
    $Nama = htmlspecialchars($_POST['Nama']);
     
    if($Nama=="") {
        $rs = mysql_query("select tbl_barang.Kode_Barang, tbl_barang.Nama_Barang, tbl_satuan.satuan, tbl_satuan.Kg from tbl_barang inner join tbl_satuan on tbl_barang.Kode_Barang = tbl_satuan.Kode_Barang");
              }else {
        $rs = mysql_query("select tbl_barang.Kode_Barang, tbl_barang.Nama_Barang, tbl_satuan.satuan, tbl_satuan.Kg from tbl_barang inner join tbl_satuan on tbl_barang.Kode_Barang = tbl_satuan.Kode_Barang where Nama_Barang like '%$Nama%'");  
    }
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>