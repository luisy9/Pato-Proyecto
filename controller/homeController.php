<?php

// public static $hayPedido = false;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
class homeController
{
    public function index()
    {
        session_start();
        // echo $_SESSION['usuario'];
        require_once "./views/includes/header.php";
        include("./modelo/Productos.php");
        include("./modelo/platosCombinados.php");
        include("./modelo/Categorias.php");
        include("./data/listaProductos.php");
        require_once "./modelo/Pedido.php";
        if (isset($_SESSION['compraProductos'])) {
            if (isset($_POST['producto'])) {
                // $productoSel = $arrayProductos[$_POST['producto']];
                array_push($_SESSION['compraProductos'], $_POST['producto']);
            }
        } else {
            $_SESSION['compraProductos'] = array();
        }
        require_once('./config/productDAO.php');
        $a = ProductDAO::getAll(1);
        include("./views/home.php");

        include("./views/includes/footer.php");
    }

    public function video()
    {
        require_once "./views/includes/header.php";
        require_once "./views/videoPromocional.php";
        include("./views/includes/footer.php");
    }

    public function visualizarReseñas()
    {
        //Si hay reseñas muestras la reseña
        require_once "./config/consultaFetchDAO.php";
        require_once "./views/includes/header.php";
        require_once "./views/visualizarReseñas.php";
       
        include("./views/includes/footer.php");
    }

    public function carta()
    {
        session_start();
        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == "Admin") {
            if (isset($_SESSION['compraProductos'])) {
                if (isset($_POST['producto'])) {
                    // $productoSel = $arrayProductos[$_POST['producto']];
                    array_push($_SESSION['compraProductos'], $_POST['producto']);
                    // miPrint($_SESSION['compraProductos']);
                }
            } else {
                $_SESSION['compraProductos'] = array();
            }
            include("./modelo/Productos.php");
            include("./modelo/platosCombinados.php");
            include("./modelo/Categorias.php");
            include("./data/listaProductos.php");
            include("./modelo/Pedido.php");
            require_once('./config/productDAO.php');
            require_once "./views/includes/header.php";
            include("./views/cartaAdmin.php");
            include("./views/includes/footer.php");
        } else {
            require_once "./views/includes/header.php";
            //Comprovamos si hay una session activa
            if (isset($_SESSION['compraProductos'])) {
                if (isset($_POST['producto'])) {
                    // $productoSel = $arrayProductos[$_POST['producto']];
                    array_push($_SESSION['compraProductos'], $_POST['producto']);
                    // miPrint($_SESSION['compraProductos']);
                }
            } else {
                $_SESSION['compraProductos'] = array();
            }
            include("./modelo/Productos.php");
            include("./modelo/platosCombinados.php");
            include("./modelo/Categorias.php");
            include("./data/listaProductos.php");
            include("./modelo/Pedido.php");
            require_once('./config/productDAO.php');
            // $a = ProductDAO::getAll();
            // var_dump($a);
            include("./views/carta.php");
            require_once("./views/includes/footer.php");
        }
    }

    public function contacta()
    {
        require_once "./views/includes/header.php";
        //Comprovamos si hay una session activa
        if (isset($_SESSION['compraProductos'])) {
            if (isset($_POST['producto'])) {
                // $productoSel = $arrayProductos[$_POST['producto']];
                array_push($_SESSION['compraProductos'], $_POST['producto']);
                // miPrint($_SESSION['compraProductos']);
            }
        } else {
            $_SESSION['compraProductos'] = array();
        }
        include("./modelo/Productos.php");
        include("./modelo/platosCombinados.php");
        include("./modelo/Categorias.php");
        include("./data/listaProductos.php");
        include("./modelo/Pedido.php");
        include("./views/contacta.php");
        require_once("./views/includes/footer.php");
    }

    public function iniciar_session()
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            header("Location: cuenta");
        } else {
            require_once "./views/includes/header.php";
            require_once('./config/UsuarioDAO.php');
            include("./views/iniciar_session.php");
            require_once("./views/includes/footer.php");
        }
    }

    public function cartaAdmin()
    {
        session_start();
        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == "Admin") {
            if (isset($_SESSION['compraProductos'])) {
                if (isset($_POST['producto'])) {
                    // $productoSel = $arrayProductos[$_POST['producto']];
                    array_push($_SESSION['compraProductos'], $_POST['producto']);
                    // miPrint($_SESSION['compraProductos']);
                }
            } else {
                $_SESSION['compraProductos'] = array();
            }
            include("./modelo/Productos.php");
            include("./modelo/platosCombinados.php");
            include("./modelo/Categorias.php");
            include("./data/listaProductos.php");
            include("./modelo/Pedido.php");
            require_once "./views/includes/header.php";
            require_once('./config/UsuarioDAO.php');
            require_once('./config/ProductDAO.php');
            include("./views/cartaAdmin.php");
            require_once("./views/includes/footer.php");
        }
    }

    public function modificarProducto()
    {
        include("./modelo/Productos.php");
        include("./modelo/platosCombinados.php");
        include("./modelo/Categorias.php");
        include("./data/listaProductos.php");
        include("./modelo/Pedido.php");
        require_once "./views/includes/header.php";
        require_once('./config/UsuarioDAO.php');
        require_once('./config/ProductDAO.php');
        include("./views/modificarProducto.php");
        include("./views/includes/footer.php");
    }

    public function carrito()
    {
        require_once('./config/pedidoDAO.php');
        //Comprovamos si hay una session activa
        if (isset($_SESSION['compraProductos'])) {
            if (isset($_POST['producto'])) {
                // $productoSel = $arrayProductos[$_POST['producto']];
                array_push($_SESSION['compraProductos'], $_POST['producto']);
                // miPrint($_SESSION['compraProductos']);
            }
        } else {
            $_SESSION['compraProductos'] = array();
        }

        require_once "./modelo/Pedido.php";
        require_once "./modelo/Productos.php";
        require_once "./data/listaProductos.php";
        require_once "./views/includes/header.php";

        include("./views/carrito.php");
        require_once("./views/includes/footer.php");
    }

    public function cerrar_session()
    {
        require_once "./views/includes/header.php";
        require_once('./config/UsuarioDAO.php');

        include("./views/cerrar_session.php");
        require_once("./views/includes/footer.php");
    }

    public function cuenta()
    {

        require_once("./modelo/Usuario.php");
        session_start();

        require_once "./views/includes/header.php";
        require_once('./config/UsuarioDAO.php');
        require_once("./views/cuenta.php");
        require_once("./views/includes/footer.php");
    }

    public function compraFinal()
    {

        $pedidos = [];
        if (isset($_COOKIE['pedido'])) {
            $pedidos = json_decode($_COOKIE['pedido']);
        }

        $precio = 0;
        if (isset($_COOKIE['precioTotal'])) {
            $precio = $_COOKIE['precioTotal'];
        }
        require_once "./modelo/Pedido.php";
        require_once('./config/pedidoDAO.php');
        session_start();
        echo pedidoDAO::getPrecioTotalPedido();
        // die;
        if (isset($_SESSION['usuario'])) {
            require_once "./views/includes/header.php";
            require_once("./views/CompraFinal.php");
            require_once("./views/includes/footer.php");
        } elseif (isset($_SESSION['usuario'])) {
            header("Location: carta");
        } else {
            header("Location: iniciar_session");
        }
    }

    public function reseñas()
    {
        session_start();
        require_once("./config/pedidoDAO.php");
        require_once("./modelo/Pedido.php");
        if (isset($_SESSION['usuario'])) {
            $pedidos = pedidoDAO::getId_Pedido($_SESSION['id']);
            require_once "./views/includes/header.php";
            require_once("./views/reseñas.php");
            require_once("./views/includes/footer.php");
        } else {
            require_once "./views/includes/header.php";
            require_once("./views/iniciar_session.php");
            require_once("./views/includes/footer.php");
        }
    }


    public function mostrarUsuarios()
    {
        require_once("./config/usuarioDAO.php");
        usuarioDAO::addUser($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['contra']);
    }


    public function addUser()
    {
        require_once("./config/usuarioDAO.php");
        usuarioDAO::addUser($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['contra']);
        header("Location: cerrar_session");
    }

    public function loginUser()
    {
        require_once("./modelo/Usuario.php");
        require_once("./config/usuarioDAO.php");
        $consulta = usuarioDAO::loginUser($_POST['correo'], $_POST['contra']);
        //var_dump($consulta);
        //$_SESSION['usuario'] = $consulta->getNombreUsuario();
        //var_dump($_SESSION['usuario']);die;

        if ($consulta == null) {
            header("Location: iniciar_session");
        } else {
            session_start();
            $_SESSION['id'] = $consulta->getIdUsuario();
            $_SESSION['usuario'] = $consulta->getNombreUsuario();
            // $_SESSION['rol'] = $consulta->getNombreUsuario();
            header("Location: home");
        }
    }

    public function addPedido()
    {
        require_once("./config/pedidoDAO.php");
        session_start();
        if (isset($_SESSION['id'])) {
            pedidoDAO::addPedido($_POST['nombre'], $_POST['precio'], $_POST['cantidad'], $_SESSION['id']);
            header("Location: carta");
        } else {
            pedidoDAO::addPedido($_POST['nombre'], $_POST['precio'], $_POST['cantidad'], 0);
            header("Location: carta");
        }
    }

    // public function getPedidos(){
    //     require_once("./config/pedidoDAO.php");
    //     pedidoDAO::getPedidos();
    //     header("Location: carrito");
    // }

    public function sumarPedido()
    {
        require_once("./config/pedidoDAO.php");
        session_start();
        if (isset($_SESSION['id'])) {
            pedidoDAO::sumarPedido($_POST['nombre'], $_POST['precio'], $_SESSION['id']);
            header("Location: carrito");
        }
    }

    public function restarPedido()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            require_once("./config/pedidoDAO.php");
            pedidoDAO::restarPedido($_POST['nombre']);
            header("Location: carrito");
        }
    }

    public function borrarPedido()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            require_once("./config/pedidoDAO.php");
            pedidoDAO::borrarPedido($_POST['nombre']);
            header("Location: carrito");
        }
    }

    public function borrarCuenta()
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            session_destroy();
            header("Location: home");
        }
    }

    public function addProductoAdmin()
    {
        session_start();
        if ($_SESSION['usuario'] == "Admin") {
            if (isset($_SESSION['compraProductos'])) {
                if (isset($_POST['producto'])) {
                    // $productoSel = $arrayProductos[$_POST['producto']];
                    array_push($_SESSION['compraProductos'], $_POST['producto']);
                    // miPrint($_SESSION['compraProductos']);
                }
            } else {
                $_SESSION['compraProductos'] = array();
            }
            include("./modelo/Productos.php");
            include("./modelo/platosCombinados.php");
            include("./modelo/Categorias.php");
            include("./data/listaProductos.php");
            include("./modelo/Pedido.php");
            require_once('./config/productDAO.php');
            require_once "./views/includes/header.php";
            include("./views/addProductAdmin.php");
            include("./views/includes/footer.php");
        }
    }

    public function addProduct()
    {
        session_start();
        require_once('./config/productDAO.php');
        ProductDAO::addProducto($_POST['nombre'], $_POST['precio'], $_POST['categories']);
        header("Location: cartaAdmin");
    }

    public function deleteProduct()
    {
        session_start();
        require_once('./config/productDAO.php');
        ProductDAO::deleteProducto($_POST['nombre']);
        header("Location: cartaAdmin");
    }

    public function updateProducto()
    {
        session_start();
        require_once('./config/productDAO.php');
        ProductDAO::modificarProducto($_POST['nombre'], $_POST['precio'], $_POST['nombreViejo'], $_POST['precioViejo']);
        header("Location: cartaAdmin");
    }

    public function PoliticasPrivacidad()
    {
        require_once "./views/includes/header.php";
        require_once "./views/PoliticasPrivacidad.php";
        require_once "./views/includes/footer.php";
    }

    public function cookies()
    {
        require_once "./views/includes/header.php";
        require_once "./views/cookies.php";
        require_once "./views/includes/footer.php";
    }

    public function consultaFetchPOST()
    {
        require_once "./config/consultaFetchDAO.php";
        $datosJSON = file_get_contents('php://input');
        $datos = json_decode($datosJSON);
        consultaFetchDAO::addResenas($datos);
    }

    public function consultaFetchGET(){
        require_once "./config/consultaFetchDAO.php";
        $consultaGet = consultaFetchDAO::getResenas();
        echo json_encode($consultaGet, JSON_UNESCAPED_UNICODE);
        return;
    }

    public function consultaFetchGETPedidos(){
        require_once "./config/pedidoDAO.php";
        require_once ("./modelo/Pedido.php");
        $consultaGet = pedidoDAO::getPedidos();
        echo json_encode($consultaGet, JSON_UNESCAPED_UNICODE);
        return;
    }
}
