console.log(" Labas   ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);
let vardas = "Petras";
let pavarde = " Petraitis ";
let amzius = 30;
let du = 1000;
let VardasirPavarde = vardas + pavarde;
console.log(vardas, pavarde, amzius);
console.log(du);
// teo:
//typeof( k ); f-ja kuri isveda kintamojo tipa - kad nepadyti logines klaidos
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
console.log( vardas, pavarde, amzius, du);
}

console.log( vardas + pavarde + amzius + du);
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
  console.log(du * 12);

}
printMetinisPajamuDydis();



//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva;";
let miestas = "Vilnius;";
let adresas = "Aguonu g. 10;";
let pastoKodas = "LT12345";

function printAddressData() {
  console.log(salis, miestas, adresas, pastoKodas);
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
printTekstas("Alfonso pasakos");



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())


let x = 5;
let y = 6;
let z = x * x + y * y;
let w = Math.sqrt(z);

function pitagoroTeorema() {
  console.log(w);
}
pitagoroTeorema();


function suma(z, k) {
let atsakymas = z + k;
console.log(atsakymas);
}

suma(10,20);

function sudauginta(x, y) {
  let atsakymas = x * y;
console.log(atsakymas);
}
sudauginta(6, 7);



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
