<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];
if ($REQUEST == 'GET') {
    if (!empty($_GET['type'])) {
        $sql = 'DELETE FROM class WHERE CLASS_ID = "' . ($_GET['id']) . '"';
        $check = executeCheck($sql);
        echo json_encode($check);
        // echo json_encode($sql);
    } else if (!empty($_GET['id'])) {
        $sql = 'SELECT CLASS_ID as first, CLASS_NAME as second, PHYLUM_ID as third FROM class WHERE CLASS_ID = "' . ($_GET['id']) . '"';
        $result = executeSingleResult($sql);

        $result['firstName'] = 'CLASS_ID';
        $result['secondName'] = 'CLASS_NAME';
        $result['thirdName'] = 'PHYLUM_ID';

        echo json_encode($result);
    } else {
        $sql = 'SELECT CLASS_ID as first, CLASS_NAME as second, PHYLUM_ID as third FROM class ORDER BY CLASS_ID';
        $result = executeResult($sql);

        $result['firstTH'] = 'CLASS_ID';
        $result['secondTH'] = 'CLASS_NAME';
        $result['thirdTH'] = 'PHYLUM_ID';

        echo json_encode($result);
    }
} else if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'SELECT * FROM phylum WHERE PHYLUM_ID ="' . ($data['phylum_id']) . '"';
    $result = executeSingleResult($sql);

    if (isset($result)) {
        $sql = 'UPDATE class SET CLASS_NAME = "' . ($data['class_name']) . '", PHYLUM_ID = "' . ($data['phylum_id']) . '" WHERE CLASS_ID ="' . ($data['class_id']) . '"';
        execute($sql);
        echo 1;
    } else {
        echo -1;
    }
}
