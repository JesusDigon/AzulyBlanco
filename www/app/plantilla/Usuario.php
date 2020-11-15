<?php

class Usuario{
    public $user;
    public $clave;
    public $nombre;
    public $correo;
    public $tipo;
    public $apellidos;
    public $direccion;   

    public function __get($atributo){
        if(property_exists($this, $atributo)) {
            return $this->$atributo;
        }
        trigger_error("Atributo no definido ", E_USER_NOTICE);
        return null;
    }
    public function __set($atributo, $valor){
        if(property_exists($this, $atributo)) {
            $this->$atributo=$valor;
        }
        trigger_error("Atributo no definido ", E_USER_NOTICE);
        return null;
    }
}