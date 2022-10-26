<?php
session_start();
include "../../connect.php";

foreach ($_POST as $key => $value){
    $k = str_replace("_", ".", $key);
    $v = is_array($value) ? json_encode($value) : $value;
//    if(getSetting($k))
    setSetting($k, $v);
}


$_SESSION['message'] = 'Настройки сохранены';

header("Location: /admin/admin-contacts.php");