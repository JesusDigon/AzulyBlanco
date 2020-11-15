<?php
session_start();
include_once 'app/controlador.php';
include_once 'app/modelo.php';
include_once 'app/config.php';

$rutaUsuario = [
    "Inicio" => "ctrInicio",
    "Carta" => "ctrCarta",
    "Contacto" => "ctrContacto",
    "Desayunos" => "ctrDesayunos",
    "Panes" => "ctrPanes",
    "Croissants" => "ctrCroissants",
    "Sandwich" => "ctrSandwich",
    "Empanadas" => "ctrEmpanadas",
    "Bocadillos" => "ctrBocadillos",
    "Dulces" => "ctrDulces",
    "Sin Gluten" => "ctrSinGluten",
    "Bebidas" => "ctrBebidas",
    "Ensaladas" => "ctrEnsaladas",
    "Nuevo" => "ctrNuevoProducto",
    "Admin" => "ctrAdmin",
    "VerAdmin" => "ctrVerAdmin",
    "Borrar" => "ctrBorrar",
    "Editar" => "ctrEditar",
    "cerrarSesion" => "ctrCerrarSesion"
];

if (isset($_GET['orden'])) {
    if (isset($rutaUsuario[$_GET['orden']])) {
        $procedimiento = $rutaUsuario[$_GET['orden']];
    } else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: No existe la ruta <i>' . $_GET['ctl'] . '</p></body></html>';
        exit();
    }
} else {
    $procedimiento = "ctrInicio";
}

$procedimiento();

?>
