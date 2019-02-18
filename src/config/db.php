<?php

class db{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'xampp13-';
    private $base = 'mis_clientes';

    //conectar a la base de datos
    public function conectar(){
        $conexion_mysql = "mysql:host=$this->host;dbname=$this->base";
        $conexionDB = new PDO($conexion_mysql,$this->user,$this->password);
        $conexionDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //esta linia arregla la codificacion de utf-8

        $conexionDB->exec("set names utf8");
        return $conexionDB;
    }
}

?>