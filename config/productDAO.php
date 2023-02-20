<?php
require_once('./modelo/Productos.php');
require_once('dataBase.php');

class ProductDAO
{
    public static function getAll($categoria)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT * FROM productos WHERE id_categoria=?");
        $stmt->bind_param("i", $categoria);

        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];
        while ($row = $result->fetch_object('Productos')) {
            // echo $row['nombre'];
            $productos[] = $row;
        }
        return $productos;
        $conec->close();
    }

    public static function getAllProducts()
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("SELECT * FROM productos");

        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];
        while ($row = $result->fetch_object('Productos')) {
            // echo $row['nombre'];
            $productos[] = $row;
        }
        return $productos;
        $conec->close();
    }

    public static function addProducto($nombre, $precio, $categoria)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("INSERT INTO productos (nombre_producto, precio_producto, id_categoria) VALUES (?,?,?)");
        $stmt->bind_param("sdi", $nombre, $precio, $categoria);
        $stmt->execute();
        $conec->close();
    }

    public static function modificarProducto($nombre, $precio, $nombreViejo, $precioViejo)
    {
        if (!$nombre) {
            $nombre = $nombreViejo;
        }

        if (!$precio) {
            $precio = $precioViejo;
        }
        $conec = DataBase::connect();
        $stmt = $conec->prepare("UPDATE productos SET nombre_producto=?,precio_producto=? WHERE nombre_producto=?");
        $stmt->bind_param("sds", $nombre, $precio, $nombreViejo);
        $stmt->execute();
        $conec->close();
    }

    public static function deleteProducto($nombre)
    {
        $conec = DataBase::connect();
        $stmt = $conec->prepare("DELETE FROM productos WHERE nombre_producto=?");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $conec->close();
    }
}
