<?php
require_once('../DB.php');

class Registro{
    protected $nombre;
    protected $apellido;
    protected $usuario;
    protected $contraseña;

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    public function setContraseña($contraseña){
        $this->contraseña=$contraseña;
    }

    public function getNombre(){
       return $this->nombre;
    }
    public function getApellido(){
       return $this->apellido;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getContraseña(){
        return $this->contraseña;
    }

    public function guardar($conn) {
        $sql = 'INSERT INTO user(nombre, apellido, usuario, contraseña) VALUES (?, ?, ?, ?)';
        
        if ($stmt = $conn->prepare($sql)) {
        $passHash = password_hash($this->contraseña, PASSWORD_DEFAULT);
        $stmt->bind_param('ssss', 
             $this->nombre, 
             $this->apellido, 
             $this->usuario, 
             $passHash
         );       
         return $stmt->execute();
     }
     return false;
 }
}
?>

