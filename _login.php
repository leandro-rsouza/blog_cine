<?php
require_once 'vendor/autoload.php';
session_start();
    $usuario = new \app\back\Usuario();
    $usuario->setUser($_POST['user']);
    $usuario->setPassword($_POST['password']);

    $pessoa = new \app\back\Login();
    $login = $pessoa->log($usuario);

    if($login == true):
        if(isset($_SESSION['id'])):
            header('Location: site.php');
        else:
            header('Location: index.php');
        endif;
    else:
        $_SESSION['msg'] = 'Usuário ou Senha Incorretos!';
        header('Location: index.php');
        exit();
    endif;
