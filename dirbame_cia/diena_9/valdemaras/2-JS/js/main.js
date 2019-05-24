console.log(" Labas ");
// -------------------
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
let auto = ["toyota", 150000, 5000];
document.querySelector("body").innerHTML += auto + " <br>";
auto[2] += 100;
auto[1] -= 50000;
auto[3] = "Tomas";
document.querySelector("body").innerHTML += auto + " <br>";
auto[4] = 2004;
// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
document.querySelector("body").innerHTML+= "<article> </article>" ;
document.querySelector("article").innerHTML+= "<h2> </h2>" ;
document.querySelector("article").innerHTML+= "<div> </div>" ;
document.querySelector("article").innerHTML+= "<span> </span>" ;
document.querySelector("article").innerHTML+= "<button>  </article>" ;

document.querySelector("h2").innerHTML+= auto[0] ;
document.querySelector("div").innerHTML+= "savininkas " + auto[3] ;
document.querySelector("span").innerHTML+= "metai " + auto[4] + " "  + auto[1] + " km" + "<br>";
document.querySelector("button").innerHTML+= auto[2] ;
