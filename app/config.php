<?php

define('APP_NAME','SISTEMA DE VETERINARIO');
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaveterinario');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexión exitosa con la base de datos";
}catch (PDOException $e){
    //print_r($e);
    echo "error no se pudo conectar a la base de datos";
}


$URL = "http://localhost/www.sistemadeveterinario.com";

date_default_timezone_set('America/Mexico_City');
$fechaHora = date('Y-m-d H:i:s');

?>