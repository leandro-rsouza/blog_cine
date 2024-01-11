<?php

namespace app\back;

class Conexao
{
    private static $instance;

    public static function Conn(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=blog_cinema;charset=utf8', 'root', '');
        }
        
        return self::$instance;
    }
}
