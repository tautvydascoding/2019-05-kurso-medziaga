console.log(" Labas   ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);
let vardas = "valdemaras";
let pavarde = "litvaitis";
let amzius = 32;
let atlyginimas = 989;

console.log(atlyginimas, vardas);
console.log(amzius);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );
typeof( k );
console.log(typeof(vardas));
console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
let metualga = atlyginimas * 12;
console.log(metualga +" metinesPajamos");
}
printMetinisPajamuDydis();


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Gatve 13";
let pastoKodas = "LT12345";

function printAddressData() {
console.log ("Salis: " + salis);
console.log ("Miestas: " + miestas);
console.log ("Adresas: " + adresas);
console.log ("PastoKodas: " + pastoKodas);
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
console.log(x);
}
printTekstas("Jokubo istorijos");
printTekstas("kitas tekstas 1234");



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())



function PitagoroTeorema(x,y) {
let a = x*x + y*y;
let z = Math.sqrt(a);
console.log(z);
}
PitagoroTeorema(12,14);


//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
