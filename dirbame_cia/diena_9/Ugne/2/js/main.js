console.log(" Labas ");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
	var prekiautojai = [];
		prekiautojai[0] = "Senukai";
		prekiautojai[1] = "Ermitazas";
		prekiautojai[2] = "Topo centras";
		prekiautojai[3] = "Varle.lt";
		console.log(prekiautojai);

		for (var i = 0; i < 4; i++){
			console.log(prekiautojai[i]);
		}

	// 2 pervadinti pirma stalciu pvz + "ir KO"

	prekiautojai[1] += " ir Ko";
	console.log(prekiautojai);

 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
let trecias = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = trecias;
console.log(prekiautojai);

		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	function sukeistiMasyvo2elementus (x, y){
		var save = prekiautojai[x];
		prekiautojai[x] = prekiautojai[y];
		prekiautojai[y] = save;
		return prekiautojai;
	}

	console.log(sukeistiMasyvo2elementus(0, 3));

	document.querySelector("h1").innerHTML = "pakeistas";

	 // empty array
