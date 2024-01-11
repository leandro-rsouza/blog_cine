<?php
session_start();
require_once "vendor/autoload.php";
    $pessoa = new \app\back\Usuario();
    $pessoa->setNome(ucwords(strtolower($_POST['nome'])));
    $pessoa->setEmail(strtolower($_POST['email']));
    $pessoa->setUser(strtolower($_POST['user']));
    $pessoa->setPassword($_POST['password']);

    $password_confirm = $_POST['password_confirm'];

    if($pessoa->getPassword() == $password_confirm):
        $user = new \app\back\Login();
        $user->register($pessoa);
        header('Location: registrar.php');
    else:
        $_SESSION['msg'] = 'As duas senhas não coincidem!';
        header('Location: registrar.php');
        exit();
    endif;