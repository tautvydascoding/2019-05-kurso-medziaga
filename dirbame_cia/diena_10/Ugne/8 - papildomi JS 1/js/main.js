console.log(" Labas ");
let i=0;

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");


// =====sukurti masyva 100 elementu ilgio naudojant FOR

let masyvasFor = [];
for(i=0; i<100; i++){
  masyvasFor.push("Elementas"+i);
}

console.log(masyvasFor);
//===== sukurti masyva 100 elementu ilgio naudojant WHILE
i=0;
let masyvasWhile = [];
while (i<100){
  masyvasWhile.push("elem");
  i++;
}
console.log(masyvasWhile);

// ————————————pasikartojimas f-ju ir while————————————————————————

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate
function printNum(x){
  console.log(x);
}

printNum(2);

// 1B) Paleisti funkcija 20 kartu
for (i=0; i<20; i++){
  printNum(Math.floor(Math.random()*100));
}

// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")
function printValue (x){
  if (x > 0 ){
    console.log(x);
  } else {
    console.log(-1);
  }
}

printValue();
printValue(4);
//------------while break-- uzduotis:----------------------------


//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
skaiciai = [];
i=0;


while (i<6){
var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
skaiciai.push(nuoVienoIkiSimto);
i++
}




console.log(skaiciai.toString());






// ——————————— Object ————————————————
// Uzduotis
// 1:  susiskurti darbuotojo "worker" obj., kuris saugo varda, pavarde, amziu, pagamintu detaliu skaiciu
var darbuotojas1 = {vardas:"Jonas", pavarde:"Gylys", amzius:50, detaliuSk:65};
var darbuotojas2 = {vardas:"Petras", pavarde:"Ladas", amzius:50, detaliuSk:21};
var darbuotojas3 = {vardas:"Sigis", pavarde:"Karis", amzius:50, detaliuSk:65};
var darbuotojas4 = {vardas:"Linas", pavarde:"Simis", amzius:50, detaliuSk:65};
var darbuotojas5 = {vardas:"Lukas", pavarde:"Labukas", amzius:50, detaliuSk:65};

// 2. sukurti “workers”  masyva. Masyvas, kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:

workers = [];
    //    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)

    for (i=0; i<workers.length; i++){

    }
   //	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)
