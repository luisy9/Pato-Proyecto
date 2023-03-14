//GET
fetch("http://primerentornodeharo.com/Pato-Proyecto/home/consultaFetchGET", {
  method: "GET",
  headers: { "Content-Type": "application/json;charset=UTF-8" },
})
  .then((res) => res.json())
  .then((data) => {
    //console.log(data)
    montarHTML(data);
  })
  .then((err) => console.log(err));

function montarHTML(datos) {
  const articleResenas = document.getElementById("article-resenas");
  datos.forEach((element) => {
    //Div Izquierda
    const div_izquierda = document.createElement("div");
    div_izquierda.className = "div-izquierda-reseña";
    //Div Derecha
    const div_derecha = document.createElement("div");
    div_derecha.className = "div-derecha-reseña";
    //Div General
    const divResena = document.createElement("div");
    divResena.className = "div-resena";
    //
    articleResenas.append(divResena);
    divResena.append(div_izquierda);
    divResena.append(div_derecha);
    const p_id = document.createElement("p");
    p_id.append("Id Reseña: " + element.id_reseñas);
    div_izquierda.append(p_id);
    const p_nombre_apellido = document.createElement("p");
    let nombre = element.nombre_usuario + " " + element.apellido_user;
    p_nombre_apellido.append(nombre);
    div_izquierda.append(p_nombre_apellido);

    const p_resena = document.createElement("p");
    const resena = element.resena;
    const p_cometario_ = document.createElement("p");
    p_cometario_.className = "p-comentario";
    p_resena.append(resena);
    div_derecha.append(p_resena);
    //Function addEstrellas
  });
  addEstrellas(datos,div_derecha);
}

function addEstrellas(data,div_derecha) {
  data.forEach((e) => {
    const estrellas = e.estrellas;
    for (let i = 1; i < 6; i++) {
      const p_estrellas = document.createElement("p");
      console.log(p_estrellas);
      if (i <= estrellas) {
        p_estrellas.innerHTML = '<label for="radio1">★</label>'; 
        div_derecha.append(p_estrellas);
      }
    }
  });
}

const enviarReseña = document.getElementById("enviar-resena");

enviarReseña.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombreUser = document.getElementById("nombre-user").value;
  const apellidoUser = document.getElementById("apellido-user").value;
  const email = document.getElementById("email").value;
  const contra = document.getElementById("contra").value;
  // const id_pedidos = document.getElementById("id_pedidos").value;
  const resena = document.getElementById("resena").value;
  const estrellas = document.querySelector(
    'input[name="estrellas"]:checked'
  ).value;

  //Consultas

  //POST
  fetch("http://primerentornodeharo.com/Pato-Proyecto/home/consultaFetchPOST", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      nombreUser: nombreUser,
      apellidoUser: apellidoUser,
      email: email,
      contra: contra,
      resena: resena,
      id_pedidos: id_pedidos,
      estrellas: estrellas,
    }),
  }).then((res) => res);
});
