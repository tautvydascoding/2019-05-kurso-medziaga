console.log("labas");

// =================taisyklingas Array copy  =================
var mas = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  mas; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = mas.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = mas.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
let i = 0;
// ================= ========= ======== ========
 let ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
let ieskomasisTekstas = "Rico";
let arRadau = false;
for ( i = 0; i < names.length; i++) {
    if ( names[i] === ieskomasisTekstas ) {
        console.log(i + " Radau " + ieskomasisTekstas);
        arRadau = true;
    }
}
if (arRadau === false){
    console.log("Nepavyko rasti...Bandykite kita zodi");
}
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getStalciausNumeris( ieskomasis ) {

    for ( i = 0; i < names.length; i++) {

        if (names[i] === ieskomasis ) {
            // console.log("numeris " + i);
            return i ;
        }
    }

}
let RicoNumeris = getStalciausNumeris("Rico");
let PiperNumeris = getStalciausNumeris("Piper");
console.log("RicoNumeris " + RicoNumeris);
console.log("PiperNumeris " + PiperNumeris);
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
let FreidosNumeris =  getStalciausNumeris("Freida");
console.log(getStalciausNumeris("Freida"));
// console.log( "Freida " + lastNames[i]);
let FreidosPavarde = lastNames[FreidosNumeris]
console.log("Freidos pavarde - " + FreidosPavarde);
// 4) rasti visu zmoniu vardu "Rico" pavardes
// let ieskomasisTekstas = "Rico";
let ieskomas1 = "Rico";
for ( i = 0; i < names.length; i++) {
    if ( names[i] === ieskomas1 ) {
        console.log("Rico " + lastNames[i]);
    }
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
for (i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);
}

// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
