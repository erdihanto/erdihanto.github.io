<?php
 
    include "koneksi.php";
 
    $No_Po = htmlspecialchars($_POST['No_Po']);     
    $rs = mysql_query("select tbl_posuplier.Kode_Customer,tbl_posuplier.Jenis,tbl_posuplier.No_Po, tbl_posuplier.Kode_Suplier, tbl_suplier.Nama_Suplier,
    tbl_suplier.Alamat1_Suplier,tbl_suplier.Alamat2_Suplier, tbl_Suplier.Alamat3_Suplier, 
    tbl_suplier.Phone_Suplier, tbl_suplier.NPWP_Suplier, tbl_suplier.Nama, tbl_posuplier.Nama_Barang, 
    tbl_posuplier.Harga,tbl_posuplier.jumlah, tbl_posuplier.Tanggal, tbl_posuplier.Note, tbl_posuplier.Payment from tbl_posuplier inner join tbl_suplier on tbl_posuplier.Kode_Suplier = tbl_suplier.Kode_Suplier where No_Po ='$No_Po'");
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>