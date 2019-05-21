var vardas = "Tomas";
function setVardas1(name) {
   vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11

function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22console.log(" Labas ");

var vardasnew = "Guste";

function setVardas3(name) {
    vardasnew = name + "nauja"
}

setVardas3("Ana");

function getVardas3() {
    return vardasnew;
}
console.log(getVardas3());

//1) pasikartoti java script “return” zodeli
// 2 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// patikrinti ar veikia f-ja

let alga = 500;
pavarde = "Pietkus";
function getPavarde() {
    return pavarde;
}
console.log(getPavarde());

//2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
document.write("Mano tekstas su js");

document.querySelector('h2').innerHTML = " <b>uz lango sninga</b>";

//4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
var el = document.querySelector('div'); // select the first returned <div> element
el.parentNode.removeChild(el);

var newEl = document.createElement('p');
newEl.innerHTML = '<b>Hello World!</b>';
