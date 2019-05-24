console.log(" Labas ");
console.log("labas");

// =================taisyklingas Array copy  =================
var mas = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  mas; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = mas.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = mas.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
let i = 0;
// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
let ieskomasTekstas = "Rico";
for (  i = 0; i < names.length; i++) {
    if( names[i]  ===  ieskomasTekstas ) {
        console.log( i + " Radau " + ieskomasTekstas);
    }
}
// 1B) papildyti ^: jeigu tokio vardo neranda,
 ieskomasTekstas = "Rico";
let arRadau = false;
for (  i = 0; i < names.length; i++) {
    if( names[i]  ===  ieskomasTekstas ) {
        console.log( i + " Radau " + ieskomasTekstas);
        arRadau = true;
        break;    // return;  // nutraukia ciklo darba
        // si eilute niekada neivyks
    }
}
if (arRadau === false) {
    console.log( "Nepavyko rasti: " + ieskomasTekstas);
}

// isves AB AB AB
for (  i = 0; i < 3; i++) {
    console.log("A");
    for (  t = 0; t < 99; t++) {
        console.log( "B");
        break;  //isjungia antra for
    }
}

for (  i = 0; i < 3; i++) {
    for (  k = 0; k < 2; k++) {
        console.log( "C");
    }
}
// i < 1
// k < 2
// isves:   CC

// i < 3
// k < 2
// isves:  CC CC CC

for (  i = 0; i < 3; i++) {
    console.log( "C");
    for (  k = 0; k < 2; k++) {
        // ...
    }
}
// i < 3
// k < 2
// isves:   CCC

for (  i = 0; i < 2; i++) {
    console.log( "C");
    break;
    for (  k = 0; k < 3; k++) {
        console.log( "G");
    }
}
// i < 2
// k < 3
// isves:   C

// isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
