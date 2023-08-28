<?php 
session_start();

// Reseteamos la session
$_SESSION = [];
// Redirigimos al usuario
header('Location: /');