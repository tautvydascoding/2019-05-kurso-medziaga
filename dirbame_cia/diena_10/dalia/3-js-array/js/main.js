console.log(" Labas ");
console.log("labas");

// =================taisyklingas Array copy  =================
let masyvas = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
let kopijaNEGERAI =  masyvas; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
let kopija1 = masyvas.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
let kopija2 = masyvas.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

let names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

let lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti letdu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var i = 0;
let ieskomasTekstas = "Rico";
let arRadau = false;
for (  i = 0; i <50; i++) {  //galima rasyti names.lenght vietoje 50
if ( names[i] === ieskomasTekstas){
  console.log( i + "Radau " + ieskomasTekstas);
}

}

if (arRadau === false) {
  console.log( "Nepavyko rasti: " + ieskomasTekstas);
  arRadau = true;
}
// 1B) papildyti ^: jeigu tokio letdo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris( ieskomas ) {
  for ( i = 0; i < names.length; i++){
    if( names[i] == ieskomas){
    }
    return i;
  }
}
let RicoNumeris = getStalciausNumeris( "Rico");
let PiperNumeris = getStalciausNumeris( "Piper");
console.log( " Rico numeris " + RicoNumeris);
console.log( " Piper numeris " + PiperNumeris);

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus letdu "Freida" (pirmojo)

ieskomas = "Freida";
let ieskomoNr = -999;
for ( i = 0; i < names.length; i++){
  if( names[i] == ieskomas){
    ieskomoNr = i;
    break;
  }

}
console.log( "pavarde" + lastNames[nr] );

//arba

letFreidosNumeris = getStalciausNumeris( " Freida ");
letFreidosPavarde = lastNames[FreidosNumeris];
console.log( "Freidos pavarde: " + FreidosPavarde);


// 4) rasti visu zmoniu vardu "Rico" pavardes

ieskomasTekstas = "Rico";
for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskomasTekstas) {
    ieskomoNr = i;
    console.log(ieskomasTekstas + " " + lastNames);
  }
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus



// let a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
