<?php
// Desactivar errores para que no ensucien el código JS
error_reporting(0);
header("Content-Type: application/javascript; charset=utf-8");

$usuario = $_GET['usuario'] ?? 'Invitado';
$callback = $_GET['callback'] ?? 'console.log';

$res = [
    "status" => "success",
    "message" => "Validado por PHP para $usuario"
];

// Esto es lo que Lovable espera ejecutar
echo $callback . "(" . json_encode($res) . ");";
exit;