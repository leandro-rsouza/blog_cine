<?php
require_once 'vendor/autoload.php';
    $pessoa = new app\back\Usuario();
    $pessoa->setNome(ucwords(strtolower($_POST['nome'])));
    $pessoa->setEmail(strtolower($_POST['email']));
    $pessoa->setUser(strtolower($_POST['user']));
    $pessoa->setPassword($_POST['password']);
    $pessoa->setId($_POST['id']);
    
    $user = new \app\back\Login();
    $user->update($pessoa);

    header('Location: consultar.php');