<?php

    $conn = mysqli_connect("localhost:3306", "root", "", "tuongtacnguoimay") or die(mysqli_connect_error());

    $sql = "select * from kingdom";
    $rs= mysqli_query($conn, $sql);
    $kingdom=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($kingdom,$row);
    } 

    $sql = "select * from phylum order by phylum_name";
    $rs= mysqli_query($conn, $sql);
    $phylum=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($phylum,$row);
    } 

    $sql = "select * from class order by class_name";
    $rs= mysqli_query($conn, $sql);
    $class=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($class,$row);
    } 

    $sql = "select * from orders order by orders_name ";
    $rs= mysqli_query($conn, $sql);
    $orders=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($orders,$row);
    } 

    $sql = "select * from family order by family_name";
    $rs= mysqli_query($conn, $sql);
    $family=[];
    while($row=mysqli_fetch_array($rs)){
        array_push($family,$row);
    } 

    echo json_encode(array("kingdom"=>$kingdom,"phylum"=>$phylum,"class"=>$class,"orders"=>$orders,"family"=>$family));
?>