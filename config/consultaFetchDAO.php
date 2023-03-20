<?php
require_once('dataBase.php');
require_once('./controller/homeController.php');
class consultaFetchDAO
{
    public static function check_id_pedido($datos)
    {
        $id_pedido = $datos->id_pedidos;
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT id_pedido FROM reseñas WHERE id_pedido=?");
        $stmt->bind_param("i", $id_pedido);
        $stmt->execute();
        $result = $stmt->get_result();
        $id_pedido = [];
        while ($row = mysqli_fetch_array($result)) {
            $id_pedido[] = $row;
        }
        // json_encode($resenas);
        return $id_pedido;
        $conec->close();
    }


    public static function addResenas($datos, $_check_pedido)
    {
        $nombreUser = $datos->nombreUser;
        $apellidoUser = $datos->apellidoUser;
        $email = $datos->email;
        $contra = $datos->contra;
        $resena = $datos->resena;
        $id_pedido = $datos->id_pedidos;
        $estrella = $datos->estrellas;
        $conec = DataBase::connect();
        // var_dump($_check_pedido);
        // var_dump($id_pedido);
        if ($_check_pedido) {
            return 0;
        } else {
            $stmt = $conec->prepare("INSERT INTO reseñas (nombre_usuario ,apellido_user, email ,contra, resena, id_pedido, estrellas) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssis", $nombreUser, $apellidoUser, $email, $contra, $resena, $id_pedido, $estrella);
            $stmt->execute();
            $conec->close();
            return 1;
        }
    }

    public static function getResenas()
    {
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

    public static function getAcendente() {
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
