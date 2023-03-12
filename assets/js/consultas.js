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
  datos.forEach(element => {
    console.log(element)
    const divResena = document.createElement("div");
    divResena.className = "div-resena";
    articleResenas.append(divResena);
    const p_id = document.createElement("p");
    p_id.append("Id Reseña: " + element.id_reseñas);
    divResena.append(p_id);
    const p_nombre_apellido = document.createElement("p"); 
    let nombre = "Nombre y Apellidos: " + element.nombre_usuario + " " + element.apellido_user;
    p_nombre_apellido.append(nombre);
    divResena.append(p_nombre_apellido);
    const p_email = document.createElement("p");
    const email = element.email;
    p_email.append("Correo Electronico: " + email);
    divResena.append(p_email);
    const p_contra = document.createElement("p");
    const contra = element.contra;
    p_contra.append("Contraseña: " + contra);
    divResena.append(p_contra);
  });
} 

const enviarReseña = document.getElementById("enviar-resena");

enviarReseña.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombreUser = document.getElementById("nombre-user").value;
  const apellidoUser = document.getElementById("apellido-user").value;
  const email = document.getElementById("email").value;
  const contra = document.getElementById("contra").value;
  const id_pedidos = document.getElementById("id_pedidos").value;
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
