<?php
require_once('dataBase.php');
require_once('./controller/homeController.php');
class consultaFetchDAO
{
    public static function addResenas($datos)
    {
        $nombreUser = $datos->nombreUser;
        $apellidoUser = $datos->apellidoUser;
        $email = $datos->email;
        $contra = $datos->contra;
        $resena = $datos->resena;
        $id_pedido = $datos->id_pedidos;
        $estrella = $datos->estrellas;
        var_dump($estrella);
        $conec = DataBase::connect();
        $stmt = $conec->prepare("INSERT INTO reseñas (nombre_usuario ,apellido_user, email ,contra, resena, id_pedido, estrellas) VALUES (?,?,?,?,?,?,?)");
        
        $stmt->bind_param("sssssis", $nombreUser, $apellidoUser, $email, $contra, $resena, $id_pedido, $estrella);
       
        $stmt->execute();
        var_dump($stmt);
        $conec->close();
    }

    public static function getResenas(){
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT * FROM reseñas");
        $stmt->execute();
        $result = $stmt->get_result();
        $resenas = [];
        while ($row = mysqli_fetch_array($result)) {
            $resenas[] = $row;
        }
        // json_encode($resenas);
        return $resenas;
        $conec->close();
    }
}


?>
