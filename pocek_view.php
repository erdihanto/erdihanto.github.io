<?php
 
    include "koneksi.php";
     
    $No_Surat_Penawaran = htmlspecialchars($_POST['No_Surat_Penawaran']);
    $Kode_Barang = htmlspecialchars($_POST['Kode_Barang']);
     
    
    
  
    $rs = mysql_query("select IFNULL(sum(jumlah),0) as jumlah from tbl_suratjalan where Kode_Barang like '$Kode_Barang' and No_Surat_Penawaran like '$No_Surat_Penawaran' and jumlah is not NULL");  
  
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>