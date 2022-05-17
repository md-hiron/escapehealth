const carBrandSelect = document.getElementById("carBrand");
const carBrandTop = carBrandSelect.children[1];
const carBrandAll = carBrandSelect.children[2];
const carModelSelect = document.getElementById("carModel");
const formProg = document.querySelectorAll(".form-prog");
const secondForm = document.querySelector(
  ".form-fields-area.form-fields-area2"
);
var allBrands = "";
var topBrands = "";
var topBrandsName = [];
var allBrandsName = [];
var selectedBrand = "";
var models = [];
document.addEventListener("DOMContentLoaded", loaddata);
async function loaddata() {
  await fetch("./assets/data/carbrands.json")
    .then((respond) => respond.json())
    .then((data) => {
      allBrands = data.allbrands;
      topBrands = data.topbrands;
      getBrandList();
      updateCarBrandDropdown();
      carBrandSelect.onchange = () => {
        updateCarModelDropdown();
      };
    })
    .catch((err) => {
      console.log(err);
    });
}
function updateCarBrandDropdown() {
  carBrandTop.innerHTML = "";
  topBrandsName.forEach((brand) => {
    carBrandTop.innerHTML += `<option value=${brand}>${brand}</option>`;
  });
  carBrandAll.innerHTML = "";
  allBrandsName.forEach((brand) => {
    carBrandAll.innerHTML += `<option value=${brand}>${brand}</option>`;
  });
}
function getBrandList() {
  allBrands.forEach((element) => {
    allBrandsName.push(element.brand);
  });
  topBrands.forEach((element) => {
    topBrandsName.push(element.brand);
  });
}
async function getBrandModel() {
  selectedBrand = carBrandSelect.options[carBrandSelect.selectedIndex].value;
}
async function updateCarModelDropdown() {
  await getBrandModel();
  await getCarModelList();
  if (selectedBrand !== "") {
    secondForm.style.display = "flex";
    carModelSelect.disabled = false;
    formProg.forEach((prog, index) => {
      if (index == 0) {
        prog.innerHTML = `<img src="assets/images/prog-done.svg" alt="" class="img-fludi prog-done" style='display:block'>
            <span class="prog-line"></span>`;
      } else if (index === formProg.length - 1) {
        prog.innerHTML = `<div class="cercle-prog-border">
            <div class="prog-cercle">${index}</div>`;
      } else {
        prog.innerHTML = `<img src="assets/images/prog-pend.svg" alt="" class="img-fludi prog-pend">
            <span class="prog-line" style='top:auto !important'></span>`;
      }
    });
  } else {
    secondForm.style.display = "none";
    carModelSelect.disabled = true;
    formProg.forEach((prog, index) => {
      if (index == 0) {
        prog.innerHTML = `<img src="assets/images/prog-pend.svg" alt="" class="img-fludi prog-pend">
        <span class="prog-line" style='top:auto !important'></span>`;
      } else if (index === formProg.length - 1) {
        prog.innerHTML = `<div class="cercle-prog-border">
            <div class="prog-cercle">${index - 1}</div>`;
      } else {
        prog.innerHTML = "";
      }
    });
  }
  carModelSelect.innerHTML = `<option value=''>Select Car Model</option>`;
  models.forEach((model) => {
    carModelSelect.innerHTML += `<option value=${model}>${model}</option>`;
  });
}
async function getCarModelList() {
  allBrands.forEach((item) => {
    if (item.brand.toLowerCase() === selectedBrand.toLowerCase()) {
      models = item.models;
    }
  });
  topBrands.forEach((item) => {
    if (item.brand.toLowerCase() === selectedBrand.toLowerCase()) {
      models = item.models;
    }
  });
}
