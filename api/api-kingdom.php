<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'GET') {
    if (!empty($_GET['type'])) {
        $sql = 'DELETE FROM kingdom WHERE KINGDOM_ID = "' . ($_GET['id']) . '"';
        $check = executeCheck($sql);
        echo json_encode($check);
    } else if (!empty($_GET['id'])) {
        $sql = 'SELECT KINGDOM_ID as first, KINGDOM_NAME as second FROM kingdom WHERE KINGDOM_ID = "' . ($_GET['id']) . '"';
        $result = executeSingleResult($sql);

        $result['firstName'] = 'KINGDOM_ID';
        $result['secondName'] = 'KINGDOM_NAME';

        echo json_encode($result);
    } else {
        $sql = 'SELECT KINGDOM_ID as first, KINGDOM_NAME as second FROM kingdom ORDER BY KINGDOM_ID';
        $result = executeResult($sql);

        $result['firstTH'] = 'KINGDOM_ID';
        $result['secondTH'] = 'KINGDOM_NAME';

        echo json_encode($result);
    }
} else if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'UPDATE kingdom SET KINGDOM_NAME = "' . ($data['kingdom_name']) . '" WHERE KINGDOM_ID = "' . ($data['kingdom_id']) . '"';
    execute($sql);
    echo 1;
}
