<?php

class Database
{

    public static function getConnection()
    {
        $environmentPath = realpath(dirname(__FILE__) . '/../env.ini');
        $environment = parse_ini_file($environmentPath);
        $connection = new mysqli(
            $environment['host'],
            $environment['username'],
            $environment['password'],
            $environment['database']
        );

        if ($connection->connect_error) {
            die("Erro: " . $connection->connect_error);
        }

        return $connection;
    }


    public static function getResultFromQuery($sql){
        $connection = self::getConnection();
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }
}
