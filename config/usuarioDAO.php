<?php
require_once('dataBase.php');
require_once('./controller/homeController.php');

class usuarioDAO
{
    public static $userName = null;


    public static function addUser($nombre,$apellido,$correo,$contra){
        $conec = DataBase::connect();
        $stmt = $conec->prepare("INSERT INTO usuarios (nombre_user, apellido_user, correo_electronico, contraseña_user, rol) VALUES (?,?,?,?,0)");
        $stmt->bind_param("ssss", $nombre, $apellido, $correo, $contra);
        $stmt->execute();
        $conec->close();
    }

    public static function loginUser($correo,$contra){
        $conec = DataBase::connect();
        //Select usuario normal
        $stmt = $conec->prepare("SELECT * FROM usuarios WHERE correo_electronico=? and contraseña_user=?");
        $stmt->bind_param("ss",$correo,$contra);
        $stmt->execute();
        $result = $stmt->get_result();
        $object = $result->fetch_object("Usuario");
        return $object;
        $conec->close();
    }
}
