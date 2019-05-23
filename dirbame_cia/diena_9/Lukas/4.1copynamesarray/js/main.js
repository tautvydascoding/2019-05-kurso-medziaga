ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren", "Rico"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// console.log(names.indexOf("Rico"));

// let i = 0;
// for (i = 0; i < names.length; i++) {
//     console.log(names.indexOf("Rico", i));
// }

// let i = 0;
// let vardas = "";
// for (i = 0; i < names.length; i++) {
//     vardas = names[i];
//     if (vardas == "Rico") {
//         console.log(i + ". Rico");
//     }
// }

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

// let i = 0;
// let vardas = "rico";
// let nameCapitalized = vardas.charAt(0).toUpperCase() + vardas.slice(1)
// let arRadom;
// for (i = 0; i < names.length; i++) {
//     if (names[i] == nameCapitalized) {
//         arRadom = "Toks vartotojo vardas uzimtas";
//     } else if (nameCapitalized == nameCapitalized.toUpperCase()) {
//         arRadom = "Jusu ivestas vartotojo vardas netinkamas";
//     } else {
//         arRadom = "Toks vartotojo vardas laisvas"
//     }
// }
// document.write(arRadom);

// let i = 0;
// let vardas = "Rico";
// let arRadom = false;
// for (i = 0; i < names.length; i++) {
//     if (names[i] == vardas) {
//         arRadom = true;
//         break;
//     }
// }
// if (arRadom == true) {
//     document.write("Toks vartotojo vardas jau uzimtas");
// } else {
//     document.write("Vartotojo vardas laisvas");
// }

// var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren", "Rico"];
//
// var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// let vardas;
// let i = 0;
// let rasta = false;
// let numeris;
//
// function getStalciausNumeris(vardas) {
//     for (i = 0; i < names.length; i++) {
//         if (names[i] == vardas) {
//             rasta = true;
//             numeris = i;
//             break;
//         }
//     }
//     if (rasta == true) {
//         return i;
//     } else {
//         document.write("Tokio vardo stalciaus numeris nerastas");
//     }
// }

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// vardas1 = "Freida";
// document.write("Vardas: " + vardas1 + " Pavardė: " + lastNames[getStalciausNumeris(vardas1)]);
// 4) rasti visu zmoniu vardu "Rico" pavardes

// vardas1 = "Rico";
// function RastiPavardes(x) {
//     for (i = 0; i < names.length; i++) {
//         if (names[i] == x) {
//             document.write(i + ". Vardas: " + vardas1 + " Pavardė: " + lastNames[i] + "<br>");
//         }
//     }
// }
// RastiPavardes(vardas1);

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A
let i = 0;
for (i = 0; i < ieskomiZmones.length; i++) {
    console.log(ieskomiZmones[i]);
}


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
ieskomiZmones = [2, 16, 17, 18, 19, 25];
i = 0;
for (i = 0; i < ieskomiZmones.length; i++) {
        document.write(ieskomiZmones[i] + ". <b>Pavardė:</b> " + lastNames[ieskomiZmones[i]] + " <b>Vardas:</b> " + names[ieskomiZmones[i]] + "<br>");
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
