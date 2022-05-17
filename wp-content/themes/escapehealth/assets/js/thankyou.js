var url = window.location.href;
const urlParams = new URL(url);
const carBrand = urlParams.searchParams.get("carBrand");
const carModel = urlParams.searchParams.get("carModel");
const carYear = urlParams.searchParams.get("carYear");
const carTrans = urlParams.searchParams.get("carTrans");
const carMileage = urlParams.searchParams.get('mileage');
const carDetails = document.getElementById('cardetails');
const carAccident = urlParams.searchParams.get('accident');
console.log(carMileage);
carDetails.innerHTML = '';
carDetails.innerHTML = `
<h3>${carYear} ${carBrand} ${carModel}</h3>
<p>${carTrans}, Accident: ${carAccident}, ${carMileage}</p>`

