<?php

// Definicion de constatntes
define('TEMPLATE_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');

function inculirTemplate( string $nombre, bool $inicio = false ) {
    include TEMPLATE_URL . "/{$nombre}.php";
} 

function estaAutenticado() : bool {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
    return true;
    
}

function debuguear($variable) {
    echo"<pre>";
    var_dump($variable);
    echo"</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) {
    $s = htmlspecialchars($html);
    return $s;
}

// Validar tipo de contenido
function validarTipoContenido ($tipo) {
    $tipos = ['vendedor', 'propiedad'];
    return in_array($tipo, $tipos);
}

// Muestra los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Creado Correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado Creado Correctamente';
            break;
        
        default:
            # code...
            break;
    }
    return $mensaje;
}