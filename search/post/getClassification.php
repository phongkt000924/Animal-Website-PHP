<?php

    $conn = mysqli_connect("localhost:3306", "root", "", "tuongtacnguoimay") or die(mysqli_connect_error());

    if(isset($_GET['table'])){
        $table = $_GET['table'];
    }

    $sql = "select * from ".$table;
    if($table!="kingdom"){
        $sql = "select * from ".$table." where ".$_GET['khoangoai']."_id=".$_GET['id'];
    }
    $rs = mysqli_query($conn,$sql);
    $arr=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($arr,$row);
    } 

    echo json_encode($arr);
?>