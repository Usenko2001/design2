<?php
session_start();
include "../../connect.php";

foreach ($_POST as $key => $value){
    $k = str_replace("_", ".", $key);
//    if(getSetting($k))
    setSetting($k, $value);
}

$_SESSION['message'] = 'Настройки сохранены';

header("Location: /admin/admin-index.php");