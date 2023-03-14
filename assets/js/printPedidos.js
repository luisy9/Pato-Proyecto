const div_pedidos = document.createElement("div");
div_pedidos.className = "div-pedidos";

fetch("http://primerentornodeharo.com/Pato-Proyecto/home/consultaFetchGETPedidos", {
  method: "GET",
  headers: { "Content-Type": "application/json;charset=UTF-8" },
})
  .then((res) => res.json())
  .then((err) => console.log(err));