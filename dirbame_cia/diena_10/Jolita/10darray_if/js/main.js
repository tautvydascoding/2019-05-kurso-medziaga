console.log(" Labas ");
// =================taisyklingas Array copy  =================
var raides = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  raides; // !!! Blogi  - sukurs susietaja kopija ir
//redaguojant keisis abu masyvai
var kopija1 = raides.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
document.write(kopija1);

var kopija2 = raides.concat(  );
 // Becomes arr2b = ['a', 'b', 'c'] - deep copy
document.write(kopija2);
// ================= ========= ======== ========

let i = 0;//kodas veiks greiciau ir uzims maziau vietos


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


let ieskomasTekstas = "Rico23"
let arradau = false;

for (i = 0; i < names.length; i++) {
    if (names[i] === ieskomasTekstas) {
        console.log( i + "Radau " + ieskomasTekstas);
        arradau = true;
    }
}
if (arradau === false) {
    console.log("Nepavyko rasti" + ieskomasTekstas);
}


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico"
//(surasti pirmaji; sunkes- surasti visus riko)

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
// ieskomasTekstas = "Rico";
// let arRadau = false;
// for (i = 0; i < names.length; i++) {
//     if (names[i] === ieskomasTekstas) {
//         console.log(i + "Radau" + ieskomasTekstas);
//         arRadau = true;
//         break; //break nutraukia tik viena cikla
//     }
// }
//papildoma su break
// for (var t = 0; t < 3; t++) {
//     console.log("A");
//     for (a = 0; a < 99; a++) {
//         console.log("B");
//         break;
//     }
// }
//isves ABABAB

    // 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi ,
//ji suranda jo vieta masyve (stalciaus numeri)
// ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(ieskomas) {

    for (i = 0; i < names.length; i++) {

        if (names[i] == ieskomas) {

    return i;
        }
    }
}

let RicoNumeris = getStalciausNumeris("Rico"); //return reiksme isspausdinama vietoj visos funkcijos
console.log("Rico numeris     " + RicoNumeris +1);
let PiperNumeris = getStalciausNumeris("Piper");
console.log("Piper numeris  " + PiperNumeris +1 );

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

function getnumeri(keiciama) {
    for ( i = 0; i < names.length; i++) {
        if (names[i] == keiciama){
            return i;
        }
    }
}
let PiNumeris = getnumeri("Piper");

console.log(PiNumeris + lastNames[i]);

let FreidaNumeris = getnumeri("Freida");

console.log(FreidaNumeris + lastNames[i]);

// 4) rasti visu zmoniu vardu "Rico" pavardes
let ieskRicu = "Rico";

for (i = 0; i < names.length; i++) {
    //tikrinu ar masyvo stalciuose yra tekstas Rico
    if (names[i] === ieskRicu) {

        console.log( "spausdinu visus Ricu pavardes" + ieskRicu + lastNames[i]);
    }
}
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius

ieskomiZmones = [2, 16, 17, 18, 19, 25];

// for ( i = 0; i < ieskomiZmones.length; i++) {
//
//     document.querySelector('h1').innerHTML +=  ieskomiZmones[i] + "<br>";
// }
// B) isvesti ju pavardes ir vardus


for ( i = 0; i < ieskomiZmones.length; i++) {

console.log(ieskomiZmones[i]);

let sk = ieskomiZmones[i];

    console.log( lastNames[sk] + names[sk]);
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
