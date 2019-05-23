// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------

	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
  let prekiautojai = [];
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
  prekiautojai[0] = "ermitazas";
  prekiautojai[1] = "senukai";
  prekiautojai[2] = "Moki vezi";
  prekiautojai[3] = "Juozo iranga";
  prekiautojai[4] = "zalia stotele";
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
  // isvedimas i console prastu budu
  console.log( prekiautojai );
  //isvedimas geru budu
  for (var i = 0; i < 5; i++) {
    console.log( prekiautojai [i]);
  }
	// 2 pervadinti pirma stalciu pvz + "ir KO"
prekiautojai[0] += "ir KO";
console.log( prekiautojai [0] );
document.querySelector("h1").innerHTML += " pakeistas <br>";


 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
let t = prekiautojai [2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = t;

document.querySelector("body").innerHTML += prekiautojai [2] + "<br>"
document.querySelector("body").innerHTML += prekiautojai [3] + "<br>"


	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
  // x ir y - stalciu numeriai/index kuriuos sukeisite
function sukeistiMasyvo2elementus(x, y) {
    let t = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = t;
}

console.log("----------------pries sukeitima---------------");
for (var i = 0; i < 5; i++) {
  console.log(prekiautojai[i]);
}
 sukeistiMasyvo2elementus(0, 4); // sukeiciam 0 ir 4
sukeistiMasyvo2elementus(1, 3);
