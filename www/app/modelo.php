<?php
include_once 'plantilla/Usuario.php';
include_once 'AccesoDatos.php';
include_once 'plantilla/Producto.php';
include_once 'plantilla/Cifrador.php';


function abrirBD(){
    $conex = AccesoDatos::initModelo();
    return $conex;
}


// Comprueba usuario y contraseña (boolean)
function modeloOkUser($user,$password){

    $bd=abrirBD();
    $consultaClave=$bd->obtenerClave($user);

    if(Cifrador::verificar($password,$consultaClave)){return true;}return false;
}


function modeloObtenerTipo($user){
    $bd=abrirBD();
    return $bd->obtenerTipo($user);
}


//Vuelca nuevo usuario en la session
function modeloUserNuevo($idusuario, $datosuser){

    $bd=abrirBD();
    return $bd->nuevoUsuario($idusuario, $datosuser);

}


function modelonuevoProducto($producto){

    $bd=abrirBD();
    return $bd->nuevoProducto($producto);

}

//Actualiza un usuario en la session
function modeloUserUpdate($id, $datosuser){
    $bd=abrirBD();
    return $bd->actualizaUsuario($id, $datosuser);
}


function modeloUserCifrar($clave){
    return Cifrador::cifrar($clave);
}


function modeloSubirImagen($imagen, $nuevo, &$msg){
    $resu = true;
    $msg = " ";
    $codigosErrorSubida= [
        0 => 'Subida correcta',
        1 => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
        2 => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
        3 => 'El archivo no se pudo subir completamente',
        4 => 'No se seleccionó ningún archivo para ser subido',
        6 => 'No existe un directorio temporal donde subir el archivo',
        7 => 'No se pudo guardar el archivo en disco',  // permisos
        8 => 'Una extensión PHP evito la subida del archivo'  // extensión PHP
    ];


    sleep(3);

        $directorioSubida = "Imagenes";
        $nombreFichero    = $imagen['name'];
        $temporalFichero  = $imagen['tmp_name'];
        $errorFichero     = $imagen['error'];


        // Obtengo el código de error de la operación, 0 si todo ha ido bien
        if ($errorFichero > 0) {
            $msg.= "Se a producido el error: $errorFichero: "
            . $codigosErrorSubida[$errorFichero] ;
            $resu = false;
        } else { // subida correcta del temporal
            // si es un directorio y tengo permisos
            $msg.= $temporalFichero."--".$directorioSubida."---".$nombreFichero;
            if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) {

                //Intento mover el archivo temporal al directorio indicado
                if (move_uploaded_file($temporalFichero, $directorioSubida .'/'. $nombreFichero) == true) {
                    if(cambiarNombre($directorioSubida.'/'.$nombreFichero, $nuevo)){
                        echo 'Archivo guardado correctamente';
                    }
                    $msg.= 'Archivo guardado con nombre original';

                } else {
                    $msg.= 'ERROR: Archivo no guardado correctamente';
                    $resu = false;
                }
            } else {
                $msg.= "No reconoce directorio";
                    $resu = FALSE;
            }
        }
        return $resu;
}

function cambiarNombre($fichero, $nuevo){
    if(is_file($fichero)){
        $arrayExtension=explode('.',$fichero);
        $extension=end($arrayExtension);
        rename($fichero, "Imagenes/".$nuevo.'.png');
        return true;
    }
    return false;
}

function modeloProductosGetAll(){
    $bd = abrirBD();
    return $bd->obtenerProductos();
}

function modeloProductosGetDesayunos(){
    $bd = abrirBD();
    return $bd->obtenerDesayunos();
}

function modeloProductosGetPanes(){
    $bd = abrirBD();
    return $bd->obtenerPanes();
}

function modeloProductosGetDulces(){
    $bd = abrirBD();
    return $bd->obtenerDulces();
}

function modeloProductosGetBocadillos(){
    $bd = abrirBD();
    return $bd->obtenerBocadillos();
}

function modeloProductosGetSandwich(){
    $bd = abrirBD();
    return $bd->obtenerSandwich();
}

function modeloProductosGetEmpanadas(){
    $bd = abrirBD();
    return $bd->obtenerEmpanadas();
}

function modeloProductosGetSinGluten(){
    $bd = abrirBD();
    return $bd->obtenerSinGluten();
}

function modeloProductosGetCroissants(){
    $bd = abrirBD();
    return $bd->obtenerCroissants();
}

function modeloProductosGetBebidas(){
    $bd = abrirBD();
    return $bd->obtenerBebidas();
}

function modeloProductosGetEnsaladas(){
    $bd = abrirBD();
    return $bd->obtenerEnsaladas();
}

function modeloUserOk($user, $clave){
    $bd = abrirBD();
    $contraseña = $bd->obtenerClave($user);
    if ($contraseña !== null && $contraseña === $clave){
        return true;
    }else{
            return false;
    }
}

function modeloProductoUpdate($id, $valores){
    $bd = abrirBD();
    return $bd->modificarProducto($id, $valores);
}

function modeloProductoBorrar($id){
    $bd = abrirBD();
    return $bd->borrarProducto($id);
}
