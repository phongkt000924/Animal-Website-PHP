<?php
require_once('../db/DBHelper.php');


$REQUEST = $_SERVER['REQUEST_METHOD'];
if ($REQUEST == 'GET') {
    if (!empty($_GET['type'])) {
        $sql = 'DELETE FROM orders WHERE ORDERS_ID = "' . ($_GET['id']) . '"';
        $check = executeCheck($sql);
        echo json_encode($check);
        // echo json_encode($sql);
    } else if (!empty($_GET['id'])) {
        $sql = 'SELECT ORDERS_ID as first, ORDERS_NAME as second, CLASS_ID as third FROM orders WHERE ORDERS_ID = "' . ($_GET['id']) . '"';
        $result = executeSingleResult($sql);

        $result['firstName'] = 'ORDER_ID';
        $result['secondName'] = 'ORDERS_NAME';
        $result['thirdName'] = 'CLASS_ID';

        echo json_encode($result);
    } else {
        $sql = 'SELECT ORDERS_ID as first, ORDERS_NAME as second, CLASS_ID as third FROM orders ORDER BY ORDERS_ID';
        $result = executeResult($sql);

        $result['firstTH'] = 'ORDER_ID';
        $result['secondTH'] = 'ORDERS_NAME';
        $result['thirdTH'] = 'CLASS_ID';

        echo json_encode($result);
    }
} else if ($REQUEST == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $sql = 'SELECT * FROM class WHERE CLASS_ID ="' . ($data['class_id']) . '"';
    $result = executeSingleResult($sql);

    if (isset($result)) {
        $sql = 'UPDATE orders SET ORDERS_NAME = "' . ($data['orders_name']) . '", CLASS_ID = "' . ($data['class_id']) . '" WHERE ORDERS_ID ="' . ($data['order_id']) . '"';
        // execute($sql);
        echo json_encode($sql);
        echo 1;
    } else {
        echo -1;
    }
}
