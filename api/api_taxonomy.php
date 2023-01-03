<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!empty($data['kingdom_name'])) {
        $sqlKD = 'INSERT INTO kingdom (KINGDOM_ID, KINGDOM_NAME) VALUES ("' . ($data['kingdom_id']) . '", "' . ($data['kingdom_name']) . '")';
        execute($sqlKD);
        echo 1;
    } else if (!empty($data['phylum_name'])) {
        $sqlPL = 'INSERT INTO phylum (PHYLUM_ID, PHYLUM_NAME, KINGDOM_ID) VALUES ("' . ($data['phylum_id']) . '", "' . ($data['phylum_name']) . '", "' . ($data['kingdom_id']) . '")';
        execute($sqlPL);
        echo 1;
    } else if (!empty($data['class_name'])) {
        $sqlPL = 'INSERT INTO class (CLASS_ID, CLASS_NAME, phylum_ID) VALUES ("' . ($data['class_id']) . '", "' . ($data['class_name']) . '", "' . ($data['phylum_id']) . '")';
        execute($sqlPL);
        echo 1;
        // echo $sqlPL;
    } else if (!empty($data['order_name'])) {
        $sqlPL = 'INSERT INTO orders (ORDERS_ID, ORDERS_NAME, class_ID) VALUES ("' . ($data['order_id']) . '", "' . ($data['order_name']) . '", "' . ($data['class_id']) . '")';
        execute($sqlPL);
        echo 1;
        // echo $sqlPL;
    } else if (!empty($data['family_name'])) {
        $sqlPL = 'INSERT INTO family (FAMILY_ID, FAMILY_NAME, ORDERS_ID) VALUES ("' . ($data['family_id']) . '", "' . ($data['family_name']) . '", "' . ($data['order_id']) . '")';
        execute($sqlPL);
        echo 1;
        // echo $sqlPL;
    }
}
