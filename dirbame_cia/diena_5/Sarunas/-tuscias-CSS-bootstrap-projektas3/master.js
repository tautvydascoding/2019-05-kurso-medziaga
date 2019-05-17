//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);


let vardas = "tomas";
let pavarde = "tomukas";
let amzius = 35;
let atlyginimas = 900;
console.log(vardas, pavarde, amzius);
console.log(atlyginimas);


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
 console.log(    typeof(vardas)  );
 console.log(    typeof(amzius)  );

 //  2 UZDUOTIS
 // sukurti funkcija "printVardasPavardeAmzius()" ,
 // kuri atspausdina i konsole pirmos uzduoties kintamuosius


function printVardasPavardeAmzius() {
    console.log( vardas, pavarde, amzius, atlyginimas );

}

printVardasPavardeAmzius(); //iskvietimas



 //  3 UZDUOTIS
 // sukurti funkcija "printMetinisPajamuDydis()" ,
 // kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
