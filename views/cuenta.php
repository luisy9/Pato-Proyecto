<body>

    <section id="cuenta" class="container-fluid pt-5 pb-5" style="background-image: URL(../assets/images/mesas.jpg);">
        <h1 class="text-center h1Carrito pb-5">Cuenta</h1>
        <div class="container contenedorCarrito pt-1">
            <div class="contenedorDentroCarrito container-fluid">
                <h1 class="h1Pedido mx-5 pt-3">Tu Cuenta</h1>
                <div class="d-flex flex-row">
                    <div class="">
                    <p class="pCuenta"><?php echo  $_SESSION['usuario'] ?></p>
                        <form method="" action=borrarCuenta>
                            <button type="submit" style="float:right;" class="botonStyleCarrito">Cerrar Sesion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>