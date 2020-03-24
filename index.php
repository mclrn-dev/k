<?php
session_start();
require_once "bootstrap.php";

if(isset($_POST["btnOK"])){
    $data->loginUser($_POST['login'], $_POST['password']);
}
if($_SESSION['auth']){
    header('Location: main.php');
}
require_once "index.view.php";