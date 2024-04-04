<?php

function conexion ($tabla, $port, $usuario, $pass){
    try {
        $conexion = new PDO("mysql:host=localhost;port=$port;dbname=$tabla","$usuario","$pass");
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}