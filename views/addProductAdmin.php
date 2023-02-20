<body>
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(../assets/images/mesas.jpg);">
        <h1 class="h1Iniciar text-center py-5">Añadir Producto</h1>
        <div class="container contenedorRegi mb-4">
            <div class="row py-4 px-3">
                <div class="col-6 col-ms-12 py-3 formStyleCerrar ">
                    <form action=addProduct method="POST">
                        <div class="mb-3">
                            <input class="form-control" name="nombre" placeholder="Nombre Producto..." id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="precio" placeholder="Precio Producto..." id="exampleInputPassword1">
                        </div>
                        <select name="categories">
                            <option value="1">Carne</option>
                            <option value="2">Merluza/Verdura</option>
                            <option value="3">Postres</option>
                            <option value="4">Patos</option>
                            <option value="5">Platos mas Solicitados</option>
                        </select>
                        <div class="mb-3 py-4">
                            <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Añadir</button>
                            <button type="reset" id="botonContact1" class="botonStyleRegi mb-2 ">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>