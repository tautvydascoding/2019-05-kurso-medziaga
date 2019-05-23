console.log(" Labas ");
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina





// 1. isvesti masyvo duomenis
let auto = ["Audi TT", 200000, 9000];
console.log( auto [0] + auto[1] + [2] );
console.log( auto [0], auto [1], auto [2] );// arba
console.log( auto ); //
// 2. padidinti kaina: 100
auto[2] += 100;
//auto[2] = auto[2] + 100; // ilgesnis budas
// 3. padidinti rida: -50000
auto[1] += -50000;
console.log( auto[0], auto[1], auto[2] );
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
auto[3] = "Tomas";

// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log( auto[0], auto[1], auto[2] + auto[3] );
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[4] = 2004;
console.log( auto[0], auto[1], auto[2], auto[3], auto[4] );

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
document.querySelector('body').innerHTML += "<article> aaa </article>";
let pav = "<h2> " auto[0] + " </h2>";
document.querySelector('article').innerHTML += "<h2> pavadinimas </h2>";

//=============bootstrap---sm-md-lg-xl (30-60m)==========
