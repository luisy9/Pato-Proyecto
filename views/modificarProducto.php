<?php
if (isset($_POST['nombreViejo']) && isset($_POST['precioViejo'])) {
    $nombreViejo = $_POST['nombreViejo'];
    $precioViejo = $_POST['precioViejo'];
}

?>

<body>
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(assets/images/mesas.jpg);">
        <h1 class="h1Iniciar text-center py-5">Iniciar Session</h1>
        <div class="container contenedorIni mb-4">
            <div class="row py-4 px-3">
                <div class="col-6 col-ms-12 py-3 formStyleIni">
                    <form action=updateProducto method="POST">
                        <p id="TitlePlatos"><?= $nombreViejo ?></p>
                        <input type="hidden" name="nombreViejo" value='<?= $nombreViejo ?>'>
                        <input type="hidden" name="precioViejo" value='<?= $precioViejo ?>'>
                        <div class="mb-3">
                            <input class="form-control" name="nombre" placeholder="Nuevo Nombre..." id="exampleInputPassword1">
                        </div>

                        <p class="styleP"><?= $precioViejo ?>€</p>

                        <div class="mb-3">
                            <input name="precio" class="form-control" placeholder="Nuevo Precio..." id="exampleInputPassword2">
                        </div>
                        <div class="mb-3 py-4">
                            <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                            <!-- <button type="" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>