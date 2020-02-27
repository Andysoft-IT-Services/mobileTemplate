<?php


define('HOST', 'localhost');
define('USER', 'gavar_mdcopuser');
define('BD', 'gavar_mdcop');
define('PASS', '2018mdcop');

class Database

{

    public static function Conectar()

    {

        $pdo =  new PDO('mysql:host='.HOST.';dbname='.BD.';charset=utf8', USER, PASS);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

        return $pdo;

    }

}