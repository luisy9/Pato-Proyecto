// agarramos el checkbox
const checkboxes = document.querySelectorAll('input[name="check"]');

//Para cojer cada checkbox
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('click', updateFilters);
});

//Creamos un array vacio
let filters = [];

function updateFilters() {
  const checked = Array.from(checkboxes).filter((checkbox) => checkbox.checked);
  const checkedValues = checked.map((checkbox) => checkbox.value);
  filters = checkedValues;

  //Llamamos a la funcion para aplicar los filtros
  AplicamosFilters();
}

function AplicamosFilters() {
  //Cogemos todos los divs
  const items = document.querySelectorAll('.productos');

  //Bucle para esconder o mostrar los filtros
  items.forEach((item) => {
    const color = item.getAttribute('data-color');
    if (filters.length === 0 || filters.includes(color)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}
