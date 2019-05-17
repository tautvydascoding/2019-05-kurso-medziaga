console.log(" Labas   ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Martynas";
let pavarde = "L";
let amzius = 3;
let atlyginimas = 900;

console.log( vardas, pavarde, amzius );
console.log( atlyginimas );




// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );
console.log( typeof(vardas) );
console.log( typeof(amzius) );


//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function print( ) {
    console.log( vardas, pavarde, amzius, atlyginimas);

}

print();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis( ) {
<<<<<<< HEAD
    let x = 900;
    let y = 12;
    let z = x * y;
    console.log(z);
=======
    let pajamos = 12 * atlyginimas;
    console.log(pajamos);
>>>>>>> 5f849330bbb4ebec2b2758611382cfdd0f2d9da3

}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "lietuva";
let miestas = "kaunas";
let adresas = "Vytauto pr.20";
let pastoKodas = 3000;

function printAddressData() {
    console.log("Salis:" + salis);
    console.log("Miestas:" + miestas);
    console.log("Adresas:" + adresas);
    console.log("Kodas:" + pastoKodas);
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
printTekstas("Antano istorija");


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())
let a = 10;
let b = 12;
let c =  a*a + b*b;
let d = Math.sqrt(c);

function Pitagoroteorema() {
    console.log(d);

}

Pitagoroteorema();

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

function suma(z,k) {
    let atsakymas = z + k;
    console.log(atsakymas);

}

suma(10,20);
suma(11,205);
