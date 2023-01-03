<?php
require_once('config.php');

function execute($sql)
{
    //save data into table
    //open connection to database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //insert, update, delete
    mysqli_query($conn, $sql);
    
    //close connection
    mysqli_close($conn);

}

function executeCheck($sql)
{
    //save data into table
    //open connection to database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //insert, update, delete
    $check = mysqli_query($conn, $sql);
    
    //close connection
    mysqli_close($conn);

    return $check;
}

function executeResult($sql)
{
    //save data into table
    //open connection to database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //select
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_array($result, 1)) {
        $data[] = $row;
    }

    mysqli_close($conn);

    return $data;
}

function executeSingleResult($sql)
{
    //save data into table
    //open connection to database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //select
    $result = mysqli_query($conn, $sql);
    $row    = mysqli_fetch_array($result, 1);

    mysqli_close($conn);

    return $row;
}

function getSingleSpecies($id)
{
    $sql = "SELECT species.ID,species.ScienceName,species.VietnameseName,species.LocalName, k.KINGDOM_NAME,p.PHYLUM_NAME,c.CLASS_NAME,o.ORDERS_NAME,f.FAMILY_NAME,species.Image1,species.Image2,species.Image3,species.Image4,species.Image5,species.Morphological,species.Ecological,species.GTSD,i.IUCN_NAME,v.VNRL_NAME,n.ND32_NAME,ci.CITES_NAME,d.DISTRIBUTION_NAME,species.COORDINATES1,species.COORDINATES2,species.COORDINATES3,species.COORDINATES4,species.COORDINATES5,species.SPECMEN_CODITION,species.HABITAT,species.LOCATION,species.COLLECTION_DATE,species.COLLECTOR
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
            WHERE species.ID = $id
            order by species.ID ASC";

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //select
    $result = mysqli_query($conn, $sql);
    $row    = mysqli_fetch_array($result, 1);

    mysqli_close($conn);

    return $row;
}

function getAllSpecies()
{
}
