console.log(" Labas   ");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Jolita";
let pavarde = "Kunciene";
let amzius = 35;
let atlyginimas = 7000;

console.log(vardas, pavarde, amzius, atlyginimas);


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "fun" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

//printVardasPavardeAmzius() {


//tik sukuriu funkcija, bet tai dar ne rezultato isvedimas//

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius(); //kol neiskviesiu, niekas nedirbs





//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


function metineAlga() {
    z = atlyginimas * 12;
    console.log(z);

}
metineAlga ();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Alyvu"+13;
let pastoKodas = "LT54244";

function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);

}

printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");



function atsakymas(x) {

    let atsakymas = x;

    console.log(atsakymas);
}

atsakymas ("jokubo istorijos");//gali keisti reiksme skliausteliuose bet kada


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

let a = 2;
let b = 3;
let c = (Math.sqrt((a*a) + (b*b)));

function pitagoroTeorema() {
    console.log(c);
}
pitagoroTeorema();

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
