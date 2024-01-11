<?php
require_once 'vendor/autoload.php';
    $user = new \app\back\Login();
    $user->delete($_GET['id']);
    header('Location: consultar.php');