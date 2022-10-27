<?php

session_start();
$_host = 'localhost';
$_user = 'root';
$_password = 'root';
$_db = 'design';

$mysql = mysqli_connect($_host, $_user, $_password, $_db);
$pdo = new PDO("mysql:host=$_host;dbname=$_db;charset=utf8;", $_user, $_password);


if ($mysql == false) {
    print("Ошибка: Невозможно подключиться к MySQL " .
        mysqli_connect_error());
    die();
}

//print ("Соединение установлено успешно <br> <hr> <br>");

mysqli_set_charset($mysql, "utf8");

function getSetting($setting, $default = null){
    $mysql = $GLOBALS['mysql'] ?? null;
    if(!$mysql)
        return $default;
    $sql = "SELECT * FROM settings WHERE id='$setting'";
    $result = mysqli_query($mysql, $sql);
    if(!$result)
        return $default;
    $row = mysqli_fetch_assoc($result);
    if(!$row)
        return $default;
    return $row['value'];
}

function setSetting($setting, $value){
    /** @var PDO $pdo */
    $pdo = $GLOBALS['pdo'] ?? null;
    if(!$pdo)
        return;
    $sql = "INSERT INTO settings (id, value) VALUES (?, ?)
        ON DUPLICATE KEY UPDATE value=?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$setting, $value, $value]);
    $stmt->closeCursor();
}