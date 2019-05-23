console.log(" Labas ");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
    let prekiautojai = [];
    // 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
    prekiautojai[0] ="ermitazas";
    prekiautojai[1] ="senukai";
    prekiautojai[2] ="kebas";
    prekiautojai[3] ="maxima";
    prekiautojai[4] ="rimi";
//
//
//     // 1.3 isvesti i console/ekrana "prekiautojai" masyva
// console.log(prekiautojai);
//
// for (var i = 0; i < 5 i++){
//     console.log(prekiautojai[i]);
// }


// 2 pervadinti pirma stalciu pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
    //
    // let prekiautojai = ["senukai","ermitazas","maxima","kebas"];
    //
    // console.log(prekiautojai);
    //
    // prekiautojai[0]+="ir KO";
    //
    // console.log(prekiautojai);
    //
    // let x = prekiautojai[2];
    //
    // prekiautojai[2]=prekiautojai[3];
    //
    // console.log(prekiautojai);
    //
    // prekiautojai[3]+= x;
    //
    // console.log(prekiautojai);


    function sukeistiMasyvo2elementus(x,y) {
        let t = prekiautojai[x];
        prekiautojai[x] = prekiautojai[y];
        prekiautojai[x] = t;

    }

    sukeistiMasyvo2elementus(0,4);
    // sukeistiMasyvo2elementus(1,3);

//     for (var i = 0; i <5; i++) {
//         console.log(prekiautojai[i]);
// }
