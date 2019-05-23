console.log(" Labas ");
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
let duomenys = [];

duomenys[0] ="Tesla";  //modelis
duomenys[1] = 100000; //rida
duomenys[2] = 75000; //kaina





//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
document.querySelector("body").innerHTML ="<h2>" + duomenys + "</h2>";

// 2. padidinti kaina: 100
function kaina(pokytis) {
    duomenys[2]+=pokytis

}
 kaina(100);

 console.log(duomenys[2]);

 document.querySelector("body").innerHTML ="<h2>" + duomenys + "</h2>";


// 3. padidinti rida: -50000

function rida(pokytis2) {
    duomenys[1]+=pokytis2

}

rida(-50000);

console.log(duomenys[1]);

// document.querySelector("h2").innerHTML ="<h2>" + duomenys + "<br>";

// console.log(duomenys);

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"

duomenys.push('Tomas')

console.log(duomenys);

// 4.1 atspausdinti visus pakeistus masyvo duomenis
document.querySelector("body").innerHTML ="<h2>" + duomenys + "</h2>";

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
duomenys.push("masinos metai 2004");
console.log(duomenys);

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
document.querySelector("body").innerHTML+="<article>" + "</article>";
//      <h2> pavadinimas </h2>
document.querySelector("article").innerHTML+="<h3>" + "pavadinimas" + "</h3>";
//      <div> savininko vardas: ...</div>
document.querySelector("article").innerHTML+="<div>" + "savininko vardas:" + duomenys[3] + "</div>";
//      <span> masinos metai: ...  Rida: ...</span>
document.querySelector("article").innerHTML+="<span>" + duomenys[4] + "</br>" +  "Rida:" + duomenys[1] + "</span>";
//      i mygtuka ideti: masinos kaina ....
document.querySelector("span").innerHTML+= "<button>" + "masinos kainas" + duomenys[2] + "</button>"
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
