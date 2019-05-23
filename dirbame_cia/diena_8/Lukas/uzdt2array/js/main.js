// ========js best practice & common mistakes (~2h)



// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

let audi = ["AUDI", 300000, 1200];
audi[2] += 100;
audi[1] += -50000;
audi[3] = "Tomas";
console.log(audi);
audi[4] = 2004;
console.log(audi);

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
document.querySelector("article").innerHTML += "<h2>" + audi[0] + "</h2>";
document.querySelector("article").innerHTML += "<div>savininko vardas: " + audi[3] + "</div>";
document.querySelector("article").innerHTML += "<span>masinos metai: " + audi[4] + " Rida: " + audi[1] + "</span>";
document.querySelector("article").innerHTML += '<br><button type="button" class="btn btn-primary">' + audi[2] + ' Eur</button>';
