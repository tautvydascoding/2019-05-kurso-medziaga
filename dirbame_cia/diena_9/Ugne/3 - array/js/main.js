console.log(" Labas ");

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

console.log("-----atvaizduojamas masyvas-----");

let automobilis = ["Citroen", 100000, 5000];
for (var i=0; i<3; i++){
  console.log(automobilis[i]);
}

console.log("-----pakeisti masyvo duomenys-----");

automobilis[1]-=50000;
automobilis[2]+=100;

for (var i=0; i<3; i++){
  console.log(automobilis[i]);
}

console.log("-----pridetas vardas ir metai-----");

automobilis[3] = "Tomas";
automobilis[4] = 2004;

for (var i=0; i<5; i++){
  console.log(automobilis[i]);
}

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.querySelector("body").innerHTML += "<article></article>";
document.querySelector("article").innerHTML += "<h2>" + automobilis[0] + "</h2>" + "<br>";
document.querySelector("article").innerHTML += "<div>" + "Savininko vardas: " + automobilis[3] + "</div>" + "<br>";
document.querySelector("article").innerHTML += "<span>" + "Masinos metai: " + automobilis[4] + "<br>" + "Rida: " + automobilis[1] + "</span>" + "<br>";
document.querySelector("article").innerHTML += "<button>" + automobilis[2] + "Eur" + "</button>";
//=============bootstrap---sm-md-lg-xl (30-60m)==========
