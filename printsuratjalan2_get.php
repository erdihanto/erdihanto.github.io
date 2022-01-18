<?php
 
    include "koneksi.php";
 
    $No_Invoice = htmlspecialchars($_POST['No_Invoice']);     
    $rs = mysql_query("select tbl_suratjalan.No_Surat_Jalan, tbl_suratjalan.No_Invoice, tbl_suratjalan.No_Po, tbl_suratjalan.Driver, tbl_suratjalan.No_Pol, tbl_suratjalan.Kode_Customer, tbl_Customer.Nama_Customer, tbl_customer.Ext_Customer, tbl_customer.Alamat1_Customer, tbl_customer.Alamat2_Customer, tbl_customer.Alamat3_Customer, tbl_customer.Phone_Customer, tbl_customer.NPWP_Customer, tbl_customer.Sales, tbl_suratjalan.Nama_Barang, tbl_suratjalan.Nama_Barang, tbl_suratjalan.Jumlah, tbl_suratjalan.Harga, tbl_suratjalan.Pack, tbl_suratjalan.Satuan, tbl_suratjalan.Total, tbl_suratjalan.Tanggal, tbl_suratjalan.No_Faktur from tbl_suratjalan inner join tbl_customer on tbl_suratjalan.Kode_Customer = tbl_customer.Kode_Customer where No_Invoice ='$No_Invoice'");
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>