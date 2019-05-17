//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Lukas";
let pavarde = "Martinaitis";
let amzius = 23;
let atlyginimas = 700;
console.log(vardas, pavarde, amzius, atlyginimas);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log(typeof(vardas));
console.log(typeof(pavarde));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}

printVardasPavardeAmzius();


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    let metatlyginimas = atlyginimas * 12;
    console.log(metatlyginimas);
}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Paslapties g. 666";
let pastoKodas = "69696";

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

printTekstas("Luko istorijos");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

function pitagoroTeorema(x, y) {
    z = Math.sqrt((x*x + y*y));
    console.log(z);
}

pitagoroTeorema(4, 8);
