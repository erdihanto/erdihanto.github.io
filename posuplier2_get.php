<?php
 
    include "koneksi.php";
     
    $No_Po = htmlspecialchars($_POST['No_Po']);
     
    if($No_Po=="") {
        $rs = mysql_query("select * from tbl_posuplier");    
    }else {
        $rs = mysql_query("select * from tbl_posuplier where No_Po like '$No_Po'");  
    }
    $rows = array();
    while($row = mysql_fetch_object($rs)){
        array_push($rows, $row);
    }
    echo json_encode($rows);
     
?>