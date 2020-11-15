<?php
include_once 'plantilla/Usuario.php';
include_once 'plantilla/Producto.php';
include_once 'config.php';

class AccesoDatos {

    private static $modelo = null;
    private $dbh = null;

    public static function initModelo(){
        if(self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }

    private function __construct(){
        try {
            $dsn = "mysql:host=".DBSERVER.";dbname=".DBNAME.";charset=utf8";
            $this->dbh = new PDO($dsn, DBUSER, DBPASSWORD);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }   catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }

        //Consultas
        $this->consultaClave = $this->dbh->prepare("SELECT contraseña FROM usuarios WHERE nick=?;");
        $this->nuevoProducto = $this->dbh->prepare("INSERT INTO Productos (Descripcion, Nombre, precio, tipo) VALUES (?,?,?,?);");
        $this->consultaProductos = $this->dbh->prepare("SELECT * FROM Productos ORDER BY tipo");
        $this->consultaDesayunos = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Desayuno'");
        $this->consultaCroissant = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Croissant'");
        $this->consultaPanes = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Panes'");
        $this->consultaDulces = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Dulces'");
        $this->consultaEmpanadas = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Empanadas'");
        $this->consultaSinGluten = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Sin gluten'");
        $this->consultaBocadillos = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Bocadillos'");
        $this->consultaSandwich = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Sándwich'");
        $this->consultaEnsaladas = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Ensaladas'");
        $this->consultaBebidas = $this->dbh->prepare("SELECT * FROM Productos WHERE tipo = 'Bebidas'");
        $this->borrarProducto = $this->dbh->prepare("DELETE FROM Productos WHERE id=?;");
        $this->modificarProducto = $this->dbh->prepare("UPDATE Productos SET Nombre=?, Descripcion=?, tipo=?, precio=? WHERE id=?;");
    }

    public function nuevoProducto($producto){
        //$this->nuevoProducto->setFetchMode(PDO::FETCH_ASSOC);
        $this->nuevoProducto->bindValue(1,$producto[0]);
        $this->nuevoProducto->bindValue(2,$producto[1]);
        $this->nuevoProducto->bindValue(3,$producto[2]);
        $this->nuevoProducto->bindValue(4,$producto[3]);
        if($this->nuevoProducto->execute()){
            return true;
        }
        return false;
    }

    public function obtenerProductos(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaProductos->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaProductos->execute() ){
            while ( $producto = $this->consultaProductos->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerDesayunos(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaDesayunos->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaDesayunos->execute() ){
            while ( $producto = $this->consultaDesayunos->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerPanes(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaPanes->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaPanes->execute() ){
            while ( $producto = $this->consultaPanes->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerEnsaladas(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaEnsaladas->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaEnsaladas->execute() ){
            while ( $producto = $this->consultaEnsaladas->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerBebidas(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaBebidas->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaBebidas->execute() ){
            while ( $producto = $this->consultaBebidas->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerDulces(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaDulces->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaDulces->execute() ){
            while ( $producto = $this->consultaDulces->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerCroissants(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaCroissant->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaCroissant->execute() ){
            while ( $producto = $this->consultaCroissant->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerEmpanadas(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaEmpanadas->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaEmpanadas->execute() ){
            while ( $producto = $this->consultaEmpanadas->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerBocadillos(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaBocadillos->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaBocadillos->execute() ){
            while ( $producto = $this->consultaBocadillos->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerSinGluten(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaSinGluten->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaSinGluten->execute() ){
            while ( $producto = $this->consultaSinGluten->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }

    public function obtenerSandwich(){
        $productos = [];
        // Devuelvo una tabla asociativa
        $this->consultaSandwich->setFetchMode(PDO::FETCH_CLASS,'Producto');
        if ( $this->consultaSandwich->execute() ){
            while ( $producto = $this->consultaSandwich->fetch()){
                $productos[] = $producto;
            }
        }
        return $productos;
    }


public function obtenerClave ($user) {
    $this->consultaClave->setFetchMode(PDO::FETCH_ASSOC);
    $this->consultaClave->bindValue(1,$user);
    if($this->consultaClave->execute()){
        if( $fila = $this->consultaClave->fetch()){
            return $fila['contraseña'];
        }else{
            return null;
        }
    }
}

public function modificarProducto ($id, $valores){
    $this->modificarProducto->setFetchMode(PDO::FETCH_ASSOC);
    $this->modificarProducto->bindValue(1,$valores[0]);
    $this->modificarProducto->bindValue(2,$valores[1]);
    $this->modificarProducto->bindValue(3,$valores[2]);
    $this->modificarProducto->bindValue(4,$valores[3]);
    $this->modificarProducto->bindValue(5,$id);
    if($this->modificarProducto->execute()){
        return true;
    }
    return false;
}

public function borrarProducto($id){
    $this->borrarProducto->setFetchMode(PDO::FETCH_ASSOC);
    $this->borrarProducto->bindValue(1, $id);
    return $this->borrarProducto->execute();
}


}
