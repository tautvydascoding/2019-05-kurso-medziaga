console.log(" Labas   ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "tomas";
let pavarde = "tomauskis";
let amzius = 35;
let atlyginimas = 1110;
console.log( vardas, pavarde, amzius);
console.log( atlyginimas );


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" ,
// kuri atspausdina i konsole pirmos uzduoties kintamuosius

// recepto/veiksmu aprasymas
function printVardasPavardeAmzius() {
    console.log( vardas, pavarde, amzius, atlyginimas );
}
printVardasPavardeAmzius();  // iskvietimas

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu
// (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
    let pajamos = 12 * atlyginimas;
    console.log(  pajamos  );
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
let salis = "Japonija";
let miestas = "Osaka";
let adresas = "liepu g. 34";
let pastoKodas = "JP-3243";
function printAdresus(    ) {
    console.log( "Salis: " + salis );
    console.log( "Miestas: " + miestas );
    console.log( "Adresas: " + adresas );
    console.log( "Kodas: " + pastoKodas );
}
printAdresus(    );
// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function sudaugina(x, y) {
    let ats = x * y;
    console.log(  ats  );
}
sudaugina(3, 7 );
sudaugina(2, 7 );



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
