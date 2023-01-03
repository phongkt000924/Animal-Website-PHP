<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    // echo 1;
    if (!empty($data['id'])) {
        $sql = 'UPDATE species SET ScienceName="' . ($data['tenkhoahoc']) . '", VietnameseName="' . $data['tentiengviet'] . '", LocalName="' . ($data['tendiaphuong']) . '", Family= "' . ($data['ho']) . '", Image1="' . ($data['hinh1']) . '", Image2="' . ($data['hinh2']) . '", Image3="' . ($data['hinh3']) . '", Image4="' . ($data['hinh4']) . '", Image5="' . ($data['hinh5']) . '", Morphological="' . ($data['ddhinhthai']) . '", Ecological="' . ($data['ddsinhthai']) . '", GTSD="' . ($data['gtsd']) . '", IUCN="' . ($data['IUCN']) . '",VNRL="' . ($data['VNRL']) . '", ND32="' . ($data['ND32']) . '", CITES="' . ($data['CITES']) . '", Distribution="' . ($data['phanbo']) . '",COORDINATES1="' . ($data['coor1']) . '",COORDINATES2="' . ($data['coor2']) . '",COORDINATES3="' . ($data['coor3']) . '",COORDINATES4="' . ($data['coor4']) . '",COORDINATES5="' . ($data['coor5']) . '",SPECMEN_CODITION="' . ($data['tinhtrangmauvat']) . '",HABITAT="' . ($data['sinhcanh']) . '",LOCATION="' . ($data['diadiem']) . '",COLLECTION_DATE="' . ($data['ngaythumau']) . '",COLLECTOR="' . ($data['nguoithumau']) . '" WHERE ID = "' . ($data['id']) . '"';
        execute($sql);
        echo 1;
    } else if (!empty($data['add'])) {
        $sql = 'INSERT INTO species(ScienceName, VietnameseName, LocalName, Family, Image1, Image2, Image3, Image4, Image5, Morphological, Ecological, GTSD, IUCN, VNRL, ND32, CITES, Distribution, COORDINATES1, COORDINATES2, COORDINATES3, COORDINATES4, COORDINATES5, SPECMEN_CODITION, HABITAT, LOCATION, COLLECTION_DATE, COLLECTOR) VALUES ("' . ($data['tenkhoahoc']) . '","' . $data['tentiengviet'] . '","' . ($data['tendiaphuong']) . '","' . ($data['ho']) . '","' . ($data['hinh1']) . '","' . ($data['hinh2']) . '","' . ($data['hinh3']) . '","' . ($data['hinh4']) . '","' . ($data['hinh5']) . '","' . ($data['ddhinhthai']) . '","' . ($data['ddsinhthai']) . '","' . ($data['gtsd']) . '","' . ($data['IUCN']) . '","' . ($data['VNRL']) . '","' . ($data['ND32']) . '","' . ($data['CITES']) . '","' . ($data['phanbo']) . '","' . ($data['coor1']) . '","' . ($data['coor2']) . '","' . ($data['coor3']) . '","' . ($data['coor4']) . '","' . ($data['coor5']) . '","' . ($data['tinhtrangmauvat']) . '","' . ($data['sinhcanh']) . '","' . ($data['diadiem']) . '","' . ($data['ngaythumau']) . '","' . ($data['nguoithumau']) . '")';
        execute($sql);
        echo 1;
    }
} else if ($REQUEST == 'DELETE') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'delete from species where id = "' . ($data['id']) . '"';
    execute($sql);

    echo 1;
}
