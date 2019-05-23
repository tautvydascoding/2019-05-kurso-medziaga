console.log(" Labas ");

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
let auto = ["Audi TT", 200000, 9000];


// 1. isvesti masyvo duomenis
console.log( auto[0]  + auto[1] + auto[2]  );
console.log( auto[0], auto[1],  auto[2]  ); // arba
console.log(  auto  ); // arba
// 2. padidinti kaina: 100
auto[2]  +=  100;       // auto[2]  = auto[2] + 100; // ilgesnis budas

// 3. padidinti rida: -50000
auto[1]  +=  -50000;    // auto[1]  = auto[1] + -50000; // ilgesnis budas
console.log( auto[0], auto[1],  auto[2]  );

// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
auto[3] = "Tomas";

// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log( auto[0], auto[1],  auto[2],  auto[3]   );
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[4] = 2004;
console.log( auto[0], auto[1],  auto[2],  auto[3],  auto[4]   );

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
let pav = "<h2> " +  auto[0] +  " </h2>";
document.querySelector('article').innerHTML += pav;

let savininkas = "<div> savininko vardas:" +  auto[3] +  " </div>";
document.querySelector('article').innerHTML += savininkas;

let mr = "<span> metai:" + auto[4] + " rida " + auto[1] + " </span>";
document.querySelector('article').innerHTML += mr;

let kaina = "<a class='btn btn-info'> " +auto[2]+ " </a>";
document.querySelector('article').innerHTML += kaina;


//
