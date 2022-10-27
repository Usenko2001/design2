<?php
    $mysql = null;
    include 'connect.php';
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name ='$login' and password = '$password' limit 1";
$result = mysqli_query($mysql, $sql);
if (!$result) {
    print("Ошибка: Невозможно подключиться к MySQL " .
        mysqli_connect_error());
    die();
}


$result = mysqli_query($mysql, $sql);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
if(!isset($user[0])){
    echo 'Пароля не существует';
    die;
}

$_SESSION['currentUser'] = $user[0];
$user_id = $user[0]['id'];
$session = session_id();
$sql = "INSERT INTO sessions (session, user_id) VALUES ('$session','$user_id')";

$result = mysqli_query($mysql, $sql);

header('Location: /admin/admin-index.php');