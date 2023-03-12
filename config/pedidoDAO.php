<?php
require_once('dataBase.php');
require_once('./controller/homeController.php');
class pedidoDAO
{
    static $precioTotal = 0;

    public static function addPedido($nombre_pedido, $precio_pedido, $cantidad_pedido, $id_usuario)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("INSERT INTO pedido (nombre_pedido, precio_pedido, cantidad_pedido, id_usuario) VALUES (?,?,?,?)");
        $stmt->bind_param("sdii", $nombre_pedido, $precio_pedido, $cantidad_pedido, $id_usuario);
        $stmt->execute();
        $conec->close();
    }

    public static function getId_Pedido($id_usuario)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT id_pedido FROM Pedido WHERE id_usuario=?");
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $pedidos = [];
        while ($row = mysqli_fetch_array($result)) {
            // echo $row['nombre'];
            $pedidos[] = $row;
        }
        return $pedidos;
        $conec->close();
    }

    public static function getPedidos()
    {
        global $precioTotal;
        $precioTotal = 0;
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT nombre_pedido, SUM(cantidad_pedido) AS cantidad_pedido, precio_pedido FROM pedido GROUP BY nombre_pedido");
        $stmt->execute();
        $result = $stmt->get_result();

        $pedidos = [];
        while ($row = $result->fetch_object('Pedido')) {
            // echo $row['nombre'];
            $precioTotal = $precioTotal + $row->getPrecioPedido() * $row->getCantidadPedido();
            $pedidos[] = $row;
        }
        return $pedidos;
        $conec->close();
    }

    public static function getPedidoUser()
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT nombre_pedido FROM pedido WHERE id_pedido= ");
        $stmt->execute();
    }

    public static function sumarPedido($nombre, $precio, $id_usuario)
    {
        pedidoDAO::addPedido($nombre, $precio, 1, $id_usuario);
    }

    public static function restarPedido($nombre)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("DELETE FROM pedido WHERE nombre_pedido=? LIMIT 1");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $conec->close();
    }

    public static function borrarPedido($nombre)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("DELETE FROM pedido WHERE nombre_pedido=?");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $conec->close();
    }

    public static function getPrecioTotalPedido()
    {
        global $precioTotal;
        return $precioTotal;
    }
}
