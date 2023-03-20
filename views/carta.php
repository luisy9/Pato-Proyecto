<section id="carta_pc" class="container-fluid " style="background-image: URL(../assets/images/mesas.jpg);">
    <h2 class="textoCarta py-5">Nuestra Carta</h2>
    <div id="" class="container-xxl contenedorCarta">
        <form id="form_check">
            <div class="container-checkboxes">
                <div class="div-checkbox"><input type="checkbox" name="products" class="input-checkbox" value="platos-combinados"><span>Platos Combinados</span></div>
                <div class="div-checkbox"><input type="checkbox" name="products" id="patos" class="input-checkbox" value="patos"><span>Patos</span></div>
                <div class="div-checkbox"><input type="checkbox" name="products" id="verduras" class="input-checkbox" value="merluza"><span>Verduras/Merluza</span></div>
                <div class="div-checkbox"><input type="checkbox" name="products" id="postres" class="input-checkbox" value="postres"><span>Postres</span></div>
            </div>
        </form>
        <div class="contenedor">
            <div class="row">
                <div class="col-6 columna my-4" id="platos-combi">
                    <h2 class="TitleCards">Platos Combinados </h2>
                    <?php foreach ($platosCarne as $plato) { ?>
                        <p id="TitlePlatos"><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=addPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Añadir</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="col">
                </div>
                <div class="col-6 columna my-4" id="patos-div">
                    <h2 class="TitleCards">Patos</h2>
                    <?php foreach ($arrayPatos as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=addPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre(); ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Añadir</button>
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
                <div class="col-6 columnaMobil my-4" id="verdura_merluza">
                    <h2 class="TitleCards">Verduras/Merluza</h2>
                    <?php foreach ($arrayVerdurasPescados as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=addPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre() ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Añadir</button>
                        </form>
                        <div class="divP">
                            <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="col">
                </div>
                <div class="col-6 columna my-4" id="postres-div">
                    <h2 class="TitleCards">Postres</h2>
                    <?php foreach ($arrayPostres as $plato) { ?>
                        <p><?= $plato->getNombre() ?></p>
                        <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                        <form method="POST" action=addPedido>
                            <input type="hidden" name="nombre" value='<?= $plato->getNombre() ?>'>
                            <input type="hidden" name="precio" value='<?= $plato->getPrecioProducto(); ?>'>
                            <input type="hidden" name="cantidad" value='1'>
                            <button type="submit" class="botonStyleCarta">Añadir</button>
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
            <!-- <div class="col columnaVacia">
                </div> -->
            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Platos Combinados </h2>
                <?php foreach ($platosCarne as $plato) { ?>
                    <p id="TitlePlatos"><?= $plato->getNombre() ?></p>
                    <img class="imagenesCarta" src=<?= $plato->getImagen() ?>>
                    <form method="POST" action="carta.php">
                        <input type="hidden" name="producto" value='<?= $plato->getNombre(); ?>'>
                        <button type="submit" class="botonStyleCarta">Añadir</button>
                    </form>
                    <div class="divP">
                        <p class="styleP"><?= $plato->getPrecioProducto() ?>€</p>
                    </div>
                <?php }
                ?>
            </div>
            <!-- <div class="col">

                </div> -->
            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Patos</h2>
                <?php foreach ($arrayPatos as $plato) { ?>
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
                ?>
            </div>
        </div>

        <div class="row align-items-center">
            <!-- <div class="col">
                </div> -->
            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Verduras/Merluza</h2>
                <?php foreach ($arrayVerduras as $plato) { ?>
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
                ?>
                <?php foreach ($arrayPescados as $plato) { ?>
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
                ?>
            </div>
            <!-- <div class="col">
                </div> -->
            <div class="col-12 columna my-4 mx-auto">
                <h2 class="TitleCards">Postres</h2>
                <?php foreach ($arrayPostres as $plato) { ?>
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
                ?>
            </div>
        </div>
    </div>
</section>
</section>
<!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->

<!-- </html> -->


<?php

// include("../footer/footer.html");


?>