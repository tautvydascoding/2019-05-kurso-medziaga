console.log(" Labas ");
let seima = [];
let dukte = ["Jore", 1980, "Zalia"];
let sunus = ["Jonas", 1991, "Juodi"];

seima[0]= dukte;
seima[1]= sunus;

console.log(seima);

seima[0][0]= "Juste";
seima[0][1]= 1985;
seima[1][2]= "Geltoni";

let i=0;
// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
let darbuotojas1=[ "Jonas", "Jonaitis", 1980, "Inspektorius"];
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
let darbuotojas2= ["Ona", "Onute", 1980, "sekretore"];
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
let darbuotojas3= ["Kestas", "Kerta", 2001, "pavaduotojas"];
// D. sukurti masyva 'visiDarbuotojai'
let visiDarbuotojai=[];
// E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
// UZDUOTIS 1.0
visiDarbuotojai=[darbuotojas1, darbuotojas2, darbuotojas3];
console.log(visiDarbuotojai[0]);
document.querySelector("body").innerHTML += visiDarbuotojai[0][0];
document.querySelector("body").innerHTML += visiDarbuotojai[0][1];
document.querySelector("body").innerHTML += visiDarbuotojai[0][2];
document.querySelector("body").innerHTML += visiDarbuotojai[0][3];
document.querySelector("body").innerHTML += "<br>";
// isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
for ( i = 0; i < visiDarbuotojai[0].length; i++) {
    text= visiDarbuotojai[0][i];
    document.querySelector("body").innerHTML += " " + text;
}
document.querySelector("body").innerHTML += "<br>";
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
for ( i = 0; i < visiDarbuotojai.length; i++) {
    text= visiDarbuotojai[i][0];
    document.querySelector("body").innerHTML += " " + text;
}
document.querySelector("body").innerHTML += "<br>";
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
for ( i = 0; i < visiDarbuotojai.length; i++) {
    text= visiDarbuotojai[i];
    document.querySelector("body").innerHTML += " " + text;
}
document.querySelector("body").innerHTML += "<br>";
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
k = 0;
for (i = 0; i < visiDarbuotojai.length; i++) {
    for (k = 0; k < visiDarbuotojai[i].length; k++) {
document.querySelector("body").innerHTML += " " + visiDarbuotojai[i][k];

    }
    document.querySelector("body").innerHTML += "<br>";
}
// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 1.5) surasti jauniausia darbuotoja
// 1.6) surasti seniausia darbuotoja
// 1.6) apskaiciuoti darbuotoju amziaus vidurki

// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
// 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
let preke1 = ["Dviratis", "1.jpg", 199, "Kalnu dviratis"];
let preke2 = ["Paspirtukas", "2.jpg", 49, "Elektrinis paspirtukas"];
let preke3 = ["Rieduciai", "3.jpg", 70, "Kauciukiniai ratukai"];
// 2.B. i masyva visosPrekes, ideti "preke" masyva
let visosPrekes = [];
visosPrekes.push( preke1);
visosPrekes.push( preke2);
visosPrekes.push( preke3);
console.log(visosPrekes);

// 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina
for ( i = 0; i < visosPrekes.length; i++) {
    tekstas = "<article class='bg-info'>";
    tekstas = tekstas + "<h2>" + visosPrekes[i][0] + "</h2>";
    tekstas = tekstas + "<p>" + visosPrekes[i][2] + "</p>";
    tekstas = tekstas + "</article>";
    document.querySelector("body").innerHTML += tekstas;
}
// nuotrauka (javascript kalbai)
// let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";
let x = "<img src='../img/1.jpg' alt='Kalnu dviratis'>";

// 2  budai nuotraukoms (PHP kalbai)
// printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
// printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



// PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
// 3.1 surikiuoti prekes pagal kaina didejanciai
// 3.2 atrinkti prekias iki 100 eur
// sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
// 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
