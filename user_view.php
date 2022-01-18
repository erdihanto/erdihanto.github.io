<?php
 
    include "koneksi.php";
     
    $Nama = htmlspecialchars($_POST['Nama']);
     
    if($Nama=="") {
        $rs = mysql_query("select * from tbl_user");    
    }else {
        $rs = mysql_query("select * from tbl_user where Nama like '%$Nama%'");  
    }
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>