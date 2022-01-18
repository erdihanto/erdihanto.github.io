<?php
 
    include "koneksi.php";
 
    $Nip = htmlspecialchars($_POST['Nip']);     
    $rs = mysql_query("select max(nip) from tbl_user); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>