//GET
const mostrar_todas_resenas = document.getElementById("mostrar-all-resenas");
const article_resenas_asce = document.getElementById("article-resenas-asce");
const article_resenas_desce = document.getElementById("article-resenas-desce");
const article_resenas = document.getElementById("article-resenas");

//Mostrar todas las reseñas
fetch("http://primerentornodeharo.com/Pato-Proyecto/home/consultaFetchGET", {
  method: "GET",
  headers: { "Content-Type": "application/json;charset=UTF-8" },
})
  .then((res) => res.json())
  .then((data) => {
    //Montar reseñas todas
    const articleResenas = document.getElementById("article-resenas");
    const ascendente = document.querySelector("input[id=ascendete]");
    const descendente = document.querySelector("input[id=descendente]");
    let eleccion = 0;
    ascendente.addEventListener("change", function () {
      eleccion = ascendente.value;
      montarHTML(data, articleResenas, eleccion);
    });

    descendente.addEventListener("change", function () {
      eleccion = descendente.value;
      montarHTML(data, articleResenas, eleccion);
    });

    montarHTML(data, articleResenas, eleccion);
    //     function montarAsce(data) {
    //       //Montar reseñas en ascendete
    //       const datosAsce = data.sort((a, b) => {
    //         return a.estrellas - b.estrellas;
    //       });
    //       datosAsce.forEach((element) => {
    //         //Div reseña asce derecha
    //         const div_derecha = document.createElement("div");
    //         div_derecha.className = "div-derecha-reseña";
    //         //Div reseña asce div izquierda
    //         const div_izquierda = document.createElement("div");
    //         div_izquierda.className = "div-izquierda-reseña";
    //         //Div reseña
    //         const divResena = document.createElement("div");
    //         divResena.className = "div-resena";

    //         const p_id = document.createElement("p");
    //         p_id.append("Id Reseña: " + element.id_reseñas);
    //         div_izquierda.append(p_id);
    //         const p_nombre_apellido = document.createElement("p");
    //         let nombre = element.nombre_usuario + " " + element.apellido_user;
    //         p_nombre_apellido.append(nombre);
    //         div_izquierda.append(p_nombre_apellido);
    //         divResena.append(div_izquierda);

    //         article_resenas_asce.append(divResena);

    //         const p_resena = document.createElement("p");
    //         //Function addEstrellas
    //         const estrellas = element.estrellas;
    //         const div_general = document.createElement("div");
    //         addEstrellas(estrellas, div_derecha, div_general);
    //         const resena = element.resena;
    //         const p_cometario_ = document.createElement("p");
    //         p_cometario_.className = "p-comentario";
    //         p_cometario_.append(resena);
    //         div_derecha.append(p_resena);
    //         divResena.append(div_derecha);
    //         article_resenas_asce.append(divResena);
    //         article_resenas_asce.style.display = "none";
    //         //Funcion para esconder o aparecer los divs
    //         mostrarAsce(article_resenas_asce, articleResenas);
    //       });
    //     }

    //     function montarDesce(data) {
    //       //Montar reseñas en ascendete
    //       const datosDesce = data.sort((a, b) => {
    //         return a.estrellas - b.estrellas;
    //       });
    //       datosDesce.forEach((element) => {
    //         //Div reseña asce derecha
    //         const div_derecha = document.createElement("div");
    //         div_derecha.className = "div-derecha-reseña";
    //         //Div reseña asce div izquierda
    //         const div_izquierda = document.createElement("div");
    //         div_izquierda.className = "div-izquierda-reseña";
    //         //Div reseña
    //         const divResena = document.createElement("div");
    //         divResena.className = "div-resena";

    //         const p_id = document.createElement("p");
    //         p_id.append("Id Reseña: " + element.id_reseñas);
    //         div_izquierda.append(p_id);
    //         const p_nombre_apellido = document.createElement("p");
    //         let nombre = element.nombre_usuario + " " + element.apellido_user;
    //         p_nombre_apellido.append(nombre);
    //         div_izquierda.append(p_nombre_apellido);
    //         divResena.append(div_izquierda);
    //         article_resenas_desce.style.display = "none";
    //         article_resenas_desce.append(divResena);

    //         const p_resena = document.createElement("p");
    //         //Function addEstrellas
    //         const estrellas = element.estrellas;
    //         const div_general = document.createElement("div");
    //         addEstrellas(estrellas, div_derecha, div_general);
    //         const resena = element.resena;
    //         const p_cometario_ = document.createElement("p");
    //         p_cometario_.className = "p-comentario";
    //         p_cometario_.append(resena);
    //         div_derecha.append(p_resena);
    //         divResena.append(div_derecha);
    //         article_resenas_asce.append(divResena);
    //         // article_resenas_desce.style.display = "none";
    //         //Funcion para esconder o aparecer los divs
    //         mostrarDesce(article_resenas_desce, articleResenas);
    //       });
    //     }
    //   });
    // //Funcion para divs ascendete
    // function mostrarAsce(article_resenas_asce, articleResenas) {
    //   const checkedAsce = document.querySelector("input[id=ascendete]");
    //   checkedAsce.addEventListener("change", function (e) {
    //     if (this.checked) {
    //       article_resenas_asce.style.display = "block";
    //       articleResenas.style.display = "none";
    //     } else {
    //       articleResenas.style.display = "block";
    //       article_resenas_asce.style.display = "none";
    //     }
    //   });
    // }

    // function mostrarDesce(article_resenas_desce, articleResenas) {
    //   const checkedDesce = document.querySelector("input[id=descendente]");
    //   checkedDesce.addEventListener("change", function (e) {
    //     if (this.checked) {
    //       article_resenas_desce.style.display = "block";
    //       articleResenas.style.display = "none";
    //     } else {
    //       articleResenas.style.display = "block";
    //       article_resenas_desce.style.display = "none";
    //     }
    //   });
    // }

    //Montar HTML todas las reseñas
    function montarHTML(data, articleResenas, eleccion) {
      console.log(eleccion);
      let datosEleccion = [];
      //Montar reseñas en descendete
      if (eleccion == 0) {
        datosEleccion = data;
      }else if(eleccion == 1){
        datosEleccion = data.sort((a, b) => {
          return a.estrellas - b.estrellas;
        });
      }else if(eleccion == 2){
        datosEleccion = data.sort((a, b) => {
          return b.estrellas - a.estrellas;
        });
      }
      //Mostrar reseñas ascendete
      articleResenas.innerHTML = "";
      datosEleccion.forEach((element) => {
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
        //Function addEstrellas
        const estrellas = element.estrellas;
        const div_general = document.createElement("div");
        addEstrellas(estrellas, div_derecha, div_general);
        const resena = element.resena;
        const p_cometario_ = document.createElement("p");
        p_cometario_.className = "p-comentario";
        p_resena.append(resena);
        div_derecha.append(p_resena);
        divResena.append(div_derecha);
        articleResenas.append(divResena);
      });
    }

    function addEstrellas(estrellas, div_derecha, div_general) {
      div_general.className = "div_general_estrellas";
      div_derecha.append(div_general);
      for (let i = 0; i <= 4; i++) {
        const div_estrellas = document.createElement("div");
        const p_estrellas = document.createElement("div");
        p_estrellas.className = "estrellas-div";
        div_estrellas.className = "div-estrellas";
        if (i < estrellas) {
          p_estrellas.innerHTML =
            '<label class="estrellas-reseña" for="radio1">★</label>';
          div_general.append(p_estrellas);
          div_derecha.append(div_general);
        }
      }
    }
  });
