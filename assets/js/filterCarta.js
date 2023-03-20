

//Agarramos los checkbox
const platos_combi_ceckbox = document.querySelector(
  "input[id=platos-combi]"
).checked;
const patos_checkbox = document.querySelector("input[id=patos]");
const verduras_merluza_checkbox = document.querySelector("input[id=verduras");
const postres_checkbox = document.querySelector("input[id=postres]");

let platos_combinados_num = 0;
let patos_num = 0;
let verduras_num = 0;
let postres_num = 0;

postres_checkbox.addEventListener("change", function () {
  postres_num = 1;
  mostrarDivs(postres_num, platos_combi, patos, verduras_merluza, postres);
});

//Funcion esconder y aparecer divs
function mostrarDivs(postres_num) {
  //Agarramos los divs
  const platos_combi = document.getElementById("platos-combi");
  const patos = document.getElementById("patos-div");
  const verduras_merluza = document.getElementById("verdura_merluza");
  const postres = document.getElementById("postres-div");
}
