<!-- <?php
// include("header.php");
?> -->

<body>
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(../assets/images/mesas.jpg);">
        <h1 class="h1Iniciar text-center py-5">Iniciar Session</h1>
        <div class="container contenedorIni mb-4">
            <div class="row py-4 px-3">
                <div class="col-6 col-ms-12 py-3 formStyleIni">
                    <form action=loginUser method="POST">
                        <div class="mb-3">
                            <input class="form-control" name="correo" placeholder="Correo Electronico" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="contra" class="form-control" placeholder="Contraseña" id="exampleInputPassword2">
                        </div>
                        <a href=<?= base_url. 'home/cerrar_session' ?>>
                            <p class="pIniciarSession">No tienes cuenta del Pato Gordo?</p>
                        </a>
                        <div class="mb-3 py-4">
                            <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                            <button type="submit" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 divImgIni">
                    <img height="300" width="330" class="rounded mx-auto pb-4 d-block" src="../assets/images/Logo1_P2_deHaro_Luis.svg">
                </div>
            </div>
        </div>
        </div>
    </section>
</body>