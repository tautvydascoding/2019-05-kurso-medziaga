console.log(" Labas ");
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
let auto = ["Jaguar XF", 100000, 15000];
auto[1] += -50000
// arba taip: auto [1] = auto[1] - 50000;
auto[2] += 100;
//arba taip: auto [2] = auto [2] + 100;
auto [3] = "Tomas";
auto [4] = 2014;
// 1. isvesti masyvo duomenis
console.log( auto[0] + auto [1] + auto[2] + auto[3] + auto[4] );
console.log( auto[0], auto [1], auto[2], auto[3], auto[4] );
console.log( auto );

// 2. padidinti kaina: 100



// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log( auto[0], auto [1], auto[2], auto[3], auto[4] );
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"


// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML


// 6. atspausdinti masyvo duomenis i ekrana:


doc

// <article>
document.querySelector('body').innerHTML += "<article> aaa </article>";
let pav = "<h2>"+auto[0]+"</h2>";
document.querySelector('article').innerHTML = pav;
let savininkas = "<div> savininko vardas:" + auto[3] + "</div>";
ument.querySelector('article').innerHTML += "<div>" + "auto[4]" + "</div>";
//      <h2> pavdinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
