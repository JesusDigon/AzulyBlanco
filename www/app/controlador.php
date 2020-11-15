<?php
include_once 'plantilla/Usuario.php';
include_once 'AccesoDatos.php';
include_once 'plantilla/Producto.php';
include_once 'modelo.php';

function ctrNuevoProducto() {
    $msg = " ";

    if(!isset($_SESSION['user'])){
      include_once 'plantilla/loginAdmin.php';
    }

    if(!isset($_POST['nombre'])){
        include_once 'plantilla/nuevo.php';
    }else{
        $idDiv="";
        $imagen= $_FILES['imagen'];
        $producto = [htmlspecialchars($_POST['descripcion']), htmlspecialchars($_POST['nombre']),
        htmlspecialchars($_POST['precio']), htmlspecialchars($_POST['tipo'])];
        print_r($producto);

        if(modelonuevoProducto($producto) && modeloSubirImagen($imagen, $_POST['nombre'], $msg)){
                $msg.= "Producto registrado correctamente";
                //session_destroy();
                include_once 'plantilla/admin.php';
            }else{
                $msg.= "No se pudo realizar la operación.";
                include_once 'plantilla/nuevo.php';
            }
    }
}

function ctrInicio(){
    $desayunos = modeloProductosGetDesayunos();
    include_once 'plantilla/inicio.php';
}

function ctrCarta(){
    $productos = modeloProductosGetAll();
    include_once 'plantilla/carta_table.php';
}

function ctrContacto(){
    include_once 'plantilla/contacto.php';
}

function ctrAdmin(){
    //Si no hay envio de POST mostramos pantalla login
    if(!isset($_POST['user'])){
        include_once 'plantilla/loginAdmin.php';
    }else{
        //Si hay POST y no hay sesion user, comprobamos usuario y contraseña
        if(!isset($_SESSION['user'])){
            if(modeloUserOk($_POST['user'], $_POST['clave'])){
                $_SESSION['user'] = $_POST['user'];
            include_once 'plantilla/admin.php';
            }else{
                echo "Usuario o conraseña erroneos";
                include_once 'plantilla/loginAdmin.php';
            }
            //Si hay user, directamente a la plantilla de admin
        }else{
            include_once 'plantilla/admin.php';
    }
    }
}

function ctrVerAdmin(){
    $productos = modeloProductosGetAll();
    include_once 'plantilla/VerProductosAdmin.php';
}

function ctrDesayunos(){
    $productos = modeloProductosGetDesayunos();
    include_once 'plantilla/listadoProducto.php';
}

function ctrPanes(){
    $productos = modeloProductosGetPanes();
    include_once 'plantilla/listadoProducto.php';
}

function ctrDulces(){
    $productos = modeloProductosGetDulces();
    include_once 'plantilla/listadoProducto.php';
}

function ctrEmpanadas(){
    $productos = modeloProductosGetEmpanadas();
    include_once 'plantilla/listadoProducto.php';
}

function ctrBocadillos(){
    $productos = modeloProductosGetBocadillos();
    include_once 'plantilla/listadoProducto.php';
}

function ctrSinGluten(){
    $productos = modeloProductosGetSinGluten();
    include_once 'plantilla/listadoProducto.php';
}

function ctrCroissants(){
    $productos = modeloProductosGetCroissants();
    include_once 'plantilla/listadoProducto.php';
}

function ctrSandwich(){
    $productos = modeloProductosGetSandwich();
    include_once 'plantilla/listadoProducto.php';
}

function ctrBebidas(){
    $productos = modeloProductosGetBebidas();
    include_once 'plantilla/listadoProducto.php';
}

function ctrEnsaladas(){
    $productos = modeloProductosGetEnsaladas();
    include_once 'plantilla/listadoProducto.php';
}

function ctrEditar(){
    
    if(empty($_POST['nombre'])){
        include_once 'plantilla/editar.php';
    }else{
        $producto_id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];
        $imagen= $_FILES['imagen'];
        $valores_nuevos = [$nombre, $descripcion, $tipo, $precio];
        if(modeloProductoUpdate($producto_id, $valores_nuevos) && modeloSubirImagen($imagen, $_POST['nombre'], $msg)){
            $productos = modeloProductosGetAll();
            $msg.= "Operación realizada correctamente";
            include_once 'plantilla/admin.php';
        }else{
            $msg.= "No se pudo realizar la operación.";
            include_once 'plantilla/admin.php';
        }
        
    }
}

function ctrBorrar(){
    $id = $_GET['id'];
    if(modeloProductoBorrar($id)){
        $msg = "Producto eliminado correctamente.";
        return true;
    }else{
        $msg = "No se ha podido eliminar el producto";
        return false;
    }
}