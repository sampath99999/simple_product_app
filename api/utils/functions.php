<?php
function connect()
{
    $host = 'localhost';
    $port = '5432';
    $db_name = 'simple_store';
    $db_username = 'postgres';
    $db_password = 'postgres';

    $conStr = sprintf(
        "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
        $host,
        $port,
        $db_name,
        $db_username,
        $db_password
    );

    $pdo = new \PDO($conStr);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function sendResponse($status = false, $message = "", $data = null){
    echo json_encode(["status" => $status, "message" => $message, "data"=> $data]);
    exit();
}