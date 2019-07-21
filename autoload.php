<?php
//Llamada a las clases
require 'classes/baseMYSQL.php';
require 'classes/Consulta.php';

$host='localhost';
$bd="bast";
$usuario="root";
$password="";
$puerto="3306";
$charset="utf8";

//LLamada a la clase con la static function conexion
$bd = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);
