<?php
    
    $conn = mysqli_connect("localhost:3306", "root", "", "tuongtacnguoimay") or die(mysqli_connect_error());

    $data = json_decode(file_get_contents('php://input'),true);

    $name = $data['name'];
    $nameSql = $data['nameSql'];
    $classification = $data['classification'];
    $redlist = $data['redlist'];
    $order = $data['order'];

    $sql = "SELECT species.ID,species.ScienceName,species.VietnameseName,species.LocalName, k.KINGDOM_NAME,p.PHYLUM_NAME,c.CLASS_NAME,o.ORDERS_NAME,f.FAMILY_NAME,species.Image1,species.HABITAT,ci.CITES_ID,species.COORDINATES1
		    FROM
			species as species join family as f on species.Family=f.FAMILY_ID
			join orders as o on f.ORDERS_ID=o.ORDERS_ID
		    join class as c on c.CLASS_ID=o.CLASS_ID
		    join phylum as p on p.PHYLUM_ID=c.PHYLUM_ID
		    join kingdom as k on k.KINGDOM_ID=p.KINGDOM_ID
		    join iucn as i on species.IUCN=i.IUCN_ID
		    join vnrl as v on species.VNRL=v.VNRL_ID
		    join nd32 as n on species.ND32=n.ND32_ID
		    join cites as ci on species.CITES=ci.CITES_ID
		    join distribution as d on species.Distribution=d.DISTRIBUTION_ID
            where ".$nameSql.$classification.$redlist.$order;
    $rs = mysqli_query($conn,$sql);
    $arr = [];
    while ($row = mysqli_fetch_array($rs)){
        array_push($arr,$row);
    }
    
    echo json_encode(array('list'=>$arr,'data'=>$data,'sql'=>$sql));

?>