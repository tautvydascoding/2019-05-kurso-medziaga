// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirma stalciu pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

    let prekiautojai = ["senukai", "maxima", "iki", "rimi", "norfa"];
    console.log(prekiautojai);
    prekiautojai[0] = prekiautojai[0] + " ir KO";
    console.log(prekiautojai);
    let temp = prekiautojai[2];
    prekiautojai[2] = prekiautojai[1];
    prekiautojai[1] = temp;
    console.log(prekiautojai);

    function sukeistiMasyvo2elementus(x, y) {
        let laikinas = prekiautojai[y];
        prekiautojai[y] = prekiautojai[x];
        prekiautojai[x] = laikinas;
        console.log(prekiautojai);
    }

    sukeistiMasyvo2elementus(1, 2);
    
//     function move(arr, old_index, new_index) {
//     while (old_index < 0) {
//         old_index += arr.length;
//     }
//     while (new_index < 0) {
//         new_index += arr.length;
//     }
//     if (new_index >= arr.length) {
//         var k = new_index - arr.length;
//         while ((k--) + 1) {
//             arr.push(undefined);
//         }
//     }
//      arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
//    return arr;
// }
//     move(prekiautojai, 1, 2);
//     console.log(prekiautojai);
