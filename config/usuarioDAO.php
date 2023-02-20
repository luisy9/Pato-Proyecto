<?php
require_once('dataBase.php');
require_once('./controller/homeController.php');

class usuarioDAO
{
    public static $userName = null;
    // public static function login() {
    //     // function miPrint($data)
    //     // {
    //     //     $output = $data;
    //     //     if (is_array($output))

    //     //         $output = implode(',', $output);

    //     //     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    //     // }
    //     if (isset($_POST['correo']) && isset($_POST['contra'])) {
    //         echo "Hola";
    //         // // header("Location: " . base_url . "home/iniciar_session");
    //         // $conec = DataBase::connect();
    //         // echo $conec;
    //         // $stmt = $conec->prepare("SELECT * FROM usuarios WHERE correo_electronico=? and contraseña_user=?");
    //         // $stmt->bind_param("s", $_POST['correo'], $_POST['contra']);

    //         // $stmt->execute();
    //         // $result = $stmt->get_result();
    //         // // $conec->close();
    //         // echo $result;
    //         // // miPrint($result);
    //         // if ($result->fetch_row()) {
    //         //     global $userName;
    //         //     $userName = $result->fetch_column("nombre_user");
    //         //     // miPrint($userName);
    //         //     header("Location: " . base_url . "home/index");
    //         // } else {
    //         //     header("Location: " . base_url . "home/iniciar_session");
    //         // }
    //     }
    // }


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
