<?php

class Bdd
{
    private static $cnx;

    public function Bdd()
    {
        if(!self::$cnx)
        {
            $dsn = "mysql:dbname=allocine;host=localhost";
            $username = "root";
            $mdp = "";
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            self::$cnx = new PDO($dsn, $username, $mdp, $options);
        }
    }
    public static function getCnx()
    {
        if(!self::$cnx)
        {
            $dsn = "mysql:dbname=allocine;host=localhost";
            $username = "root";
            $mdp = "";
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            self::$cnx = new PDO($dsn, $username, $mdp, $options);
        }
        return self::$cnx;
    }
}