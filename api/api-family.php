<?php
require_once('../db/DBHelper.php');

$REQUEST = $_SERVER['REQUEST_METHOD'];

if ($REQUEST == 'GET') {
    if (!empty($_GET['type'])) {
        $sql = 'DELETE FROM family WHERE FAMILY_ID = "' . ($_GET['id']) . '"';
        $check = executeCheck($sql);
        echo json_encode($check);
        // echo json_encode($sql);
    } else if (!empty($_GET['id'])) {
        $sql = 'SELECT FAMILY_ID as first, FAMILY_NAME as second, ORDERS_ID as third FROM family WHERE FAMILY_ID = "' . ($_GET['id']) . '"';
        $result = executeSingleResult($sql);

        $result['firstName'] = 'FAMILY_ID';
        $result['secondName'] = 'FAMILY_NAME';
        $result['thirdName'] = 'ORDERS_ID';

        echo json_encode($result);
    } else {
        $sql = 'SELECT FAMILY_ID as first, FAMILY_NAME as second, ORDERS_ID as third FROM family ORDER BY FAMILY_ID';
        $result = executeResult($sql);

        $result['firstTH'] = 'FAMILY_ID';
        $result['secondTH'] = 'FAMILY_NAME';
        $result['thirdTH'] = 'ORDERS_ID';

        echo json_encode($result);
    }
} else if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'SELECT * FROM orders WHERE ORDERS_ID ="' . ($data['order_id']) . '"';
    $result = executeSingleResult($sql);
    echo json_encode($data);
    if (isset($result)) {
        $sql = 'UPDATE family SET FAMILY_NAME = "' . ($data['family_name']) . '", ORDERS_ID = "' . ($data['order_id']) . '" WHERE FAMILY_ID ="' . ($data['FAMILY_id']) . '"';
        // execute($sql);
        echo 1;
    } else {
        echo -1;
    }
}
