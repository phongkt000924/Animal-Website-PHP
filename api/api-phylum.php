<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'GET') {
    if (!empty($_GET['type'])) {
        $sql = 'DELETE FROM phylum WHERE PHYLUM_ID = "' . ($_GET['id']) . '"';
        $check = executeCheck($sql);
        echo json_encode($check);
        // echo json_encode($sql);
    } else if (!empty($_GET['id'])) {
        $sql = 'SELECT PHYLUM_ID as first, PHYLUM_NAME as second, KINGDOM_ID as third FROM phylum WHERE PHYLUM_ID = "' . ($_GET['id']) . '"';
        $result = executeSingleResult($sql);

        $result['firstName'] = 'PHYLUM_ID';
        $result['secondName'] = 'PHYLUM_NAME';
        $result['thirdName'] = 'KINGDOM_ID';

        echo json_encode($result);
    } else {
        $sql = 'SELECT PHYLUM_ID as first, PHYLUM_NAME as second, KINGDOM_ID as third FROM phylum ORDER BY PHYLUM_ID';
        $result = executeResult($sql);

        $result['firstTH'] = 'PHYLUM_ID';
        $result['secondTH'] = 'PHYLUM_NAME';
        $result['thirdTH'] = 'KINGDOM_ID';

        echo json_encode($result);
    }
} else if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'SELECT * FROM kingdom WHERE KINGDOM_ID ="' . ($data['kingdom_id']) . '"';
    $result = executeSingleResult($sql);

    if (isset($result)) {
        $sql = 'UPDATE phylum SET PHYLUM_NAME = "' . ($data['phylum_name']) . '", KINGDOM_ID = "' . ($data['kingdom_id']) . '" WHERE PHYLUM_ID ="' . ($data['phylum_id']) . '"';
        execute($sql);
        echo 1;
    } else {
        echo -1;
    }
}
