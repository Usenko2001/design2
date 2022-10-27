<?php
session_start();
$GLOBALS['user'] = $user = $_SESSION['currentUser'] ?? null;
$v = 3;
function getUser(){
    return $GLOBALS['user'] ?? null;
}

function auth(){
    return getUser() != null;
}
function guest(){
    return !auth();
}
function admin(){
    return auth() && (getUser()['is_admin'] ?? false);
}

function redirectIfNotAuth($path){
    if(!auth()){
        header("Location: $path");
        die();
    }
}

function redirectIfNotAdmin($path){
    if(!admin()) {
        header("Location: $path");
        die();
    }
}
function messageIfNotAuth($message){
    if(!auth()) {
        echo $message;
        die();
    }
}
function messageIfNotAdmin($message){
    if(!admin()) {
        echo $message;
        die();
    }
}