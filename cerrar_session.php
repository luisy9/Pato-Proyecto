<?php
include("header.php");
?>






<html>

<head>
    <title>Platilla de bootstrapp</title>

    <meta charset="UTF-8" />
    <meta name="description" content="Descripció web" />
    <meta name="keywords" content="Paraules clau" />
    <meta name="author" content="Autor" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen" />

    <meta http-equiv="refresh" content="2000" />
</head>

<body>
<section id="" class="container-fluid sectionMesas" style="background-image: URL(assets/images/mesas.jpg);">
        <h1 class="h1Iniciar text-center py-5">Registrarse</h1>
        <div class="container contenedorRegi mb-4">
            <div class="row py-4 px-3">
                <div class="col-6 col-ms-12 py-3 formStyleCerrar ">
                    <form>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Nombre" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Apellido" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Correo Electronico" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 py-4">
                            <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                            <button type="submit" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 divImgIni">
                    <img height="300" width="330" class="rounded mx-auto d-block" src="assets/images/patoGordo.png">

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- <section id="" class="container-fluid sectionMesas py-3" style="background-image: URL(assets/images/mesas.jpg);">
        <h1 class="h1Iniciar text-center py-3">Registrarse<h1>
                <div class="container contenedorIni mb-4">
                    <div class="row py-4 px-3">
                        <div class="col-6 col-ms-12 py-3 formStyleCerrar">
                            <form>
                                <div class="mb-3">
                                    d
                                <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                                    <button type="submit" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button>
                                    <input type="email" class="form-control" placeholder="Nombre" id="exampleInputEmail1">s
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Apellido" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Correo Electronico" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Contraseña" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 py-4">
                                    <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                                    <button type="submit" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-6 divImg">
                            <img class="divImagenPatito rounded mx-auto d-block" src="assets/images/patoGordo.png">
                        </div>
                    </div>
                </div>
                </div>
    </section> -->
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>

<?php

include("footer.html");

?>