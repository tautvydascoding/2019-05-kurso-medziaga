console.log("labas");

let i = 0;

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========


var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// let ieskomasTekstas="Rico";
// let arRadau=false;
// for (i = 0; i < 50; i++) {
//     if (names[i]===ieskomasTekstas) {
//         console.log(i + "Radau Rico" + ieskomasTekstas);
//         arRadau = true;
//     }
// }
//  if (arRadau===false) {
//      console.log("Nepavyko rasti...Bandykite kita zodi")
//  }

//  for ( i = 0; i < 3; i++){
//      console.log("A");
//      for ( t = 0; i < 99; i++) {
//          console.log("B");
//          break;
//  }



// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)



// function getStalciausNumeris( ieskomas) {
//     for (i = 0; i < names.length; i++) {
//         if (names[i] == ieskomas) {
//             return i;
//
//         }
//     }
// }
//
// let riconumneris = getStalciausNumeris("Rico");
// let pipernumeris = getStalciausNumeris("Piper");
// console.log("Rico numeris " + riconumneris);
// console.log("Piper numeris " + pipernumeris);

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// let ieskomas = "Freida"


// for (i = 0; i < names.length; i++) {
//     if (names[i] == ieskomas) {
//         ieskomasNr = i;
//         break;
//     }
// }
//
// console.log( "pavarde" + lastNames[i] );

// 4) rasti visu zmoniu vardu "Rico" pavardes
let ieskomasNr = -999;
let ieskomas = "Rico";

for (i = 0; i < names.length; i++) {
    //tikrinu ar masyvo stalciu yra mano tekstas
    if (names[i] == ieskomas) {
        //radau Rico
        ieskomasNr = i;
        console.log(ieskomas + " " + lastNames[ieskomasNr]);
    }
}





// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25]
// A) atspausdinti visus numerius
let ieskomiZmones = [2, 16, 17, 18, 19, 25];

for ( i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);

    console.log( names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]);
}



// for (i = 0; i < ieskomiZmones.length; i++) {
//     if (ieskomiZmones[i]==lastNames) {
//         ieskomasNr = i;
//         console.log();
//     }
// }

// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
