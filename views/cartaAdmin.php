<section id="carta_pc" class="container-fluid " style="background-image: URL(../assets/images/mesas.jpg);">
    <h2 class="textoCarta py-5">Carta Administrador</h2>
    <div id="" class="container-xxl contenedorCarta">
        <div class="contenedor">
            <div class="row">
                <div class="col-6 columna my-4">
                    <h2 class="TitleCards">Platos Combinados </h2>
                    <form method="POST" action=addProductoAdmin>
                        <input type="hidden" name="nombre" value=''>
                        <input type="hidden" name="precio" value=''>
                        <input type="hidden" name="cantidad" value='1'>
                        <button type="submit" class="botonAddAdmin">Añadir</button>
                    </form>
                    <?php foreach ($platosCarne as $plato) { ?>
                        <p id="TitlePlatos"><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=modificarProducto>
                            <input type="hidden" name="nombreViejo" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precioViejo" value='<?= $plato->getPrecioProducto(); ?>'>
                            <button type="submit" class="botonStyleCarta">Modificar</button>
                        </form>
                        <form method="POST" action=deleteProduct>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <button type="submit" class="botonStyleCarta">Eliminar</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="col">
                </div>
                <div class="col-6 columna my-4">
                    <h2 class="TitleCards">Patos</h2>
                    <form method="POST" action=addProductoAdmin>
                        <input type="hidden" name="nombre" value=''>
                        <input type="hidden" name="precio" value=''>
                        <input type="hidden" name="cantidad" value='1'>
                        <button type="submit" class="botonAddAdmin">Añadir</button>
                    </form>
                    <?php foreach ($arrayPatos as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=modiPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Modificar</button>
                        </form>
                        <form method="POST" action=deleteProduct>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <button type="submit" class="botonStyleCarta">Eliminar</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="row align-items-center">
                <div class="col-6 columnaMobil my-4 ">
                    <h2 class="TitleCards">Verduras/Merluza</h2>
                    <form method="POST" action=addProductoAdmin>
                        <input type="hidden" name="nombre" value=''>
                        <input type="hidden" name="precio" value=''>
                        <input type="hidden" name="cantidad" value='1'>
                        <button type="submit" class="botonAddAdmin">Añadir</button>
                    </form>
                    <?php foreach ($arrayVerdurasPescados as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=modiPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Modificar</button>
                        </form>
                        <form method="POST" action=deleteProduct>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <button type="submit" class="botonStyleCarta">Eliminar</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                    <!-- <?php foreach ($arrayPescados as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action="carta.php">
                            <input type="hidden" name="producto" value='<?= $plato->getNombre() ?>'>
                            <button type="submit" class="botonStyleCarta">Añadir</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?> -->
                </div>
                <div class="col">
                </div>
                <div class="col-6 columna my-4">
                    <h2 class="TitleCards">Postres</h2>
                    <form method="POST" action=addProductoAdmin>
                        <input type="hidden" name="nombre" value=''>
                        <input type="hidden" name="precio" value=''>
                        <input type="hidden" name="cantidad" value='1'>
                        <button type="submit" class="botonAddAdmin">Añadir</button>
                    </form>
                    <?php foreach ($arrayPostres as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=modiPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Modificar</button>
                        </form>
                        <form method="POST" action=deleteProduct>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <button type="submit" class="botonStyleCarta">Eliminar</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--                              CARTA MOBIL                               -->
<section id="carta_mobil" class="container-fluid py-5" style="background-image: URL(../assets/images/mesas.jpg);">
    <h2 class="textoCarta pb-2">Nuestra Carta</h2>
    <div id="" class="container-xxl contenedorCartaMobil my-5">
        <div class="row">

            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Platos Combinados </h2>
                <form method="POST" action=addProductoAdmin>
                    <input type="hidden" name="nombre" value=''>
                    <input type="hidden" name="precio" value=''>
                    <input type="hidden" name="cantidad" value='1'>
                    <button type="submit" class="botonAddAdmin">Añadir</button>
                </form>
                <?php foreach ($platosCarne as $plato) { ?>
                    <p id="TitlePlatos"><?= $plato->getNombre() ?></p>
                    <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                    <form method="POST" action=modificarProducto>
                        <input type="hidden" name="nombreViejo" value='<?= $plato->getNombre(); ?>'>
                        <input type="hidden" name="precioViejo" value='<?= $plato->getPrecioProducto(); ?>'>
                        <button type="submit" class="botonStyleCarta">Modificar</button>
                    </form>
                    <form method="POST" action=deleteProduct>
                        <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                        <button type="submit" class="botonStyleCarta">Eliminar</button>
                    </form>
                    <div class="divP">
                        <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                    </div>
                <?php }
                ?>
            </div>

            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Patos</h2>
                <form method="POST" action=addProductoAdmin>
                    <input type="hidden" name="nombre" value=''>
                    <input type="hidden" name="precio" value=''>
                    <input type="hidden" name="cantidad" value='1'>
                    <button type="submit" class="botonAddAdmin">Añadir</button>
                </form>
                <?php foreach ($arrayPatos as $plato) { ?>
                    <p><?= $plato->getNombre() ?></p>
                    <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                    <form method="POST" action=modificarProducto>
                        <input type="hidden" name="nombreViejo" value='<?= $plato->getNombre(); ?>'>
                        <input type="hidden" name="precioViejo" value='<?= $plato->getPrecioProducto(); ?>'>
                        <button type="submit" class="botonStyleCarta">Modificar</button>
                    </form>
                    <form method="POST" action=deleteProduct>
                        <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                        <button type="submit" class="botonStyleCarta">Eliminar</button>
                    </form>
                    <div class="divP">
                        <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                    </div>
                <?php }
                ?>
            </div>
        </div>

        <div class="row align-items-center">

            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Verduras/Merluza</h2>
                <form method="POST" action=addProductoAdmin>
                    <input type="hidden" name="nombre" value=''>
                    <input type="hidden" name="precio" value=''>
                    <input type="hidden" name="cantidad" value='1'>
                    <button type="submit" class="botonAddAdmin">Añadir</button>
                </form>
                <?php foreach ($arrayVerdurasPescados as $plato) { ?>
                    <p><?= $plato->getNombre() ?></p>
                    <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                    <form method="POST" action=modificarProducto>
                        <input type="hidden" name="nombreViejo" value='<?= $plato->getNombre(); ?>'>
                        <input type="hidden" name="precioViejo" value='<?= $plato->getPrecioProducto(); ?>'>
                        <button type="submit" class="botonStyleCarta">Modificar</button>
                    </form>
                    <form method="POST" action=deleteProduct>
                        <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                        <button type="submit" class="botonStyleCarta">Eliminar</button>
                    </form>
                    <div class="divP">
                        <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                    </div>
                <?php }
                ?>
            </div>

            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Postres</h2>
                <form method="POST" action=addProductoAdmin>
                    <input type="hidden" name="nombre" value=''>
                    <input type="hidden" name="precio" value=''>
                    <input type="hidden" name="cantidad" value='1'>
                    <button type="submit" class="botonAddAdmin">Añadir</button>
                </form>
                <?php foreach ($arrayPostres as $plato) { ?>
                    <p><?= $plato->getNombre() ?></p>
                    <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                    <form method="POST" action=modificarProducto>
                        <input type="hidden" name="nombreViejo" value='<?= $plato->getNombre(); ?>'>
                        <input type="hidden" name="precioViejo" value='<?= $plato->getPrecioProducto(); ?>'>
                        <button type="submit" class="botonStyleCarta">Modificar</button>
                    </form>
                    <form method="POST" action=deleteProduct>
                        <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                        <button type="submit" class="botonStyleCarta">Eliminar</button>
                    </form>
                    <div class="divP">
                        <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</section>
</section>