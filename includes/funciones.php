<?php

require 'app.php';


function inculirTemplate( string $nombre, bool $inicio = false ) {
    include TEMPLATE_URL . "/{$nombre}.php";
} 

function estaAutenticado() : bool {
    session_start();

    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    }

    return false;
}