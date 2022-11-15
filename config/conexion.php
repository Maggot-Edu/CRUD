<?php

function conexionBBDD() {
    $server = 'localhot';
    $usuario = 'root';
    $contrasenya = '';
    $baseDatos = 'f1';
    $conexion = mysqli_connect($server, $usuario, $contrasenya, $baseDatos) or die ('Graves probelams');
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}

?>