// 1 UZDUOTIS
// isvesti 30 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
let i = 0;
for (i = 0; i < 30; i++) {
    console.log(i + ". Azuolas");
}
// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
for (i = 0; i < 1; i++) {
    document.write("<h3> Azuolas </h3>");
}
// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
for (i = 0; i < 40; i++) {
    document.querySelector("article").innerHTML += "<h2> Azuolas </h2>";
}
// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba
for (i = 0; i < 6; i++) {
    document.querySelector("ul").innerHTML += "<li>elementas " + i + "</li>";
}
// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)
for (i = 0; i < 10; i++) {
    document.querySelector("header").innerHTML += "<p> Aprasymas x </p>";
}
// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)
for (i = 1; i < 6; i++) {
    document.querySelector("div").innerHTML += "<li> elementas " + i + " </li>";
}
// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)
function print() {
    document.write("atspaudintas su f-ja");
}
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function print(xx) {
    document.write(xx);
}
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (i = 0; i < 100; i++) {
    print("labas <br>");
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila
for (i = 0; i < 12; i++) {
    print('<img src="" alt="Nuotraukos nera"><br>'); // galima sudeti su +, paliekas "" kabutese.
}
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
function piestiEilute(x) {
    for (i = 0; i < x; i++) {
        document.write("-");
    }
}
function spausdintiStulpeli(x) {
    for (i = 0; i < x; i++) {
        document.write("/ <br>");
    }
}
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
piestiEilute(30);
document.write("<br>");
document.write("vardas |  pavarde | amzius <br>");
piestiEilute(30);
document.write("<br>");
spausdintiStulpeli(5);

// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

let kiekMenesiu = 10 * 12;
let menAtlyginimas = 680;
let algosPokytis = 0.01;
let padidejimas = algosPokytis*menAtlyginimas;

function algaPo10Metu() {
    for (i = 0; i < kiekMenesiu; i++) {
        padidejimas = algosPokytis*menAtlyginimas;
        menAtlyginimas += padidejimas;
    }
    return menAtlyginimas;
}
document.write("Menesio atlyginimas: " + algaPo10Metu().toFixed(2) + " Eur");
