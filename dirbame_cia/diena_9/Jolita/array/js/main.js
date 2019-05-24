console.log(" Labas ");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirma stalciu pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta,
        //ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti
    //3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	let  prekiautojai = []; // empty array
    prekiautojai[0] = "iki";
    prekiautojai[1] = "maxima";
    prekiautojai[2] = "norfa";
    prekiautojai[3] = "senukai";

    // console.log(prekiautojai);

    prekiautojai[0] += "ir KO";

    // console.log(prekiautojai);

    //geresnis budas isvedimui

    // for (let i = 0; i < 5; i++) {
    //     console.log(  prekiautojai[i]  );
    // }
    console.log(  prekiautojai  );

    let x = prekiautojai[3];

    prekiautojai[3] = prekiautojai[2];
    prekiautojai[2] = x;

    console.log(prekiautojai);

    // 3.1  padaryti
    //3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
//x ir y yra stalciu numeriai, kuriuos sukeisite

 function sukeistiMasyvo2elementus(x,y) {
    let t = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = t;
}

sukeistiMasyvo2elementus(0, 2)
sukeistiMasyvo2elementus(1, 3)
console.log("____________po___sukeitimo_________");

for (let i = 0; i < 4; i++) {
    console.log(  prekiautojai[i]  );
}
    // UZDUOTIS:
    // sukurti vienos masinos duomenu masyva:
    //  pavadinimas, pravaziuota rida, kaina
    // 1. isvesti masyvo duomenis
    // 2. padidinti kaina: 100
    // 3. padidinti rida: -50000
    // 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
    // 4.1 atspausdinti visus pakeistus masyvo duomenis
    // 5. i masyva ideti papildomus duomenis: masinos metai "2004"

    let auto = ["opel", 300000, 500];

    document.querySelector('h2').innerHTML =  "masyvo elementai : "+auto;

auto[2] += 100;
//document.querySelector('h1').innerHTML =  auto[2];

auto[1] -= 50000;


auto[3] = "Tomas";
document.querySelector('div').innerHTML =  "savininko vardas - "+auto[3]+"<br>";

auto[4] = 2004;

document.querySelector('button').innerHTML =  "kaina: "+auto[2] + "<br>";
document.querySelector('span').innerHTML =  "masinos metai yra "+auto[4]+"<br>" + "Rida: "+auto[1];
    // sunkesne:
    // html elementus: article, h2, ... susikurti su javascript/ innerHTML
    // 6. atspausdinti masyvo duomenis i ekrana:
    // <article>
    //      <h2> pavadinimas </h2>
    //      <div> savininko vardas: ...</div>
    //      <span> masinos metai: ...  Rida: ...</span>
    //      i mygtuka ideti: masinos kaina ....
    // </article>
