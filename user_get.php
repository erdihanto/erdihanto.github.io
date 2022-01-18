<?php
 
    include "koneksi.php";
 
    $Nip = htmlspecialchars($_POST['Nip']);     
    $rs = mysql_query("select * from tbl_user where Nip like '$Nip'"); 
     
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>