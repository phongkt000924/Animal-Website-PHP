<?php

    $conn = mysqli_connect("localhost:3306", "root", "", "tuongtacnguoimay") or die(mysqli_connect_error());

    $data = json_decode(file_get_contents('php://input'),true);

    $type = $data['type'];
    $id=$data['id'];

    $sql="
        select distinct k.kingdom_id,k.kingdom_name
        from kingdom k left join phylum p on k.kingdom_id = p.kingdom_id
        left join class c on c.phylum_id = p.phylum_id 
        left join orders o on o.class_id = c.class_id 
        left join family f on f.orders_id = o.orders_id  
        where ".substr($type,0,1).".".$type."_name like '".$id."'
    ";
    $kingdom=[];
    $rs = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rs)){
        array_push($kingdom,$row);
    }
    
    $sql="
        select distinct p.phylum_id,p.phylum_name,p.kingdom_id
        from kingdom k left join phylum p on k.kingdom_id = p.kingdom_id
        left join class c on c.phylum_id = p.phylum_id 
        left join orders o on o.class_id = c.class_id 
        left join family f on f.orders_id = o.orders_id  
        where ".substr($type,0,1).".".$type."_name like '".$id."'
    ";
    $phylum=[];
    $rs = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rs)){
        array_push($phylum,$row);
    }
    
    $sql="
        select distinct c.class_id,c.class_name,c.phylum_id
        from kingdom k left join phylum p on k.kingdom_id = p.kingdom_id
        left join class c on c.phylum_id = p.phylum_id 
        left join orders o on o.class_id = c.class_id 
        left join family f on f.orders_id = o.orders_id  
        where ".substr($type,0,1).".".$type."_name like '".$id."'
    ";
    $class=[];
    $rs = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rs)){
        array_push($class,$row);
    }

    $sql="
        select distinct o.orders_id,o.orders_name,o.class_id
        from kingdom k left join phylum p on k.kingdom_id = p.kingdom_id
        left join class c on c.phylum_id = p.phylum_id 
        left join orders o on o.class_id = c.class_id 
        left join family f on f.orders_id = o.orders_id  
        where ".substr($type,0,1).".".$type."_name like '".$id."'
    ";
    $orders=[];
    $rs = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rs)){
        array_push($orders,$row);
    }

    $sql="
        select distinct f.family_id,f.family_name,f.orders_id
        from kingdom k left join phylum p on k.kingdom_id = p.kingdom_id
        left join class c on c.phylum_id = p.phylum_id 
        left join orders o on o.class_id = c.class_id 
        left join family f on f.orders_id = o.orders_id  
        where ".substr($type,0,1).".".$type."_name like '".$id."'
    ";
    $family=[];
    $rs = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($rs)){
        array_push($family,$row);
    }
    

    echo json_encode(array("kingdom"=>$kingdom,"phylum"=>$phylum,"class"=>$class,"orders"=>$orders,"family"=>$family));

?>