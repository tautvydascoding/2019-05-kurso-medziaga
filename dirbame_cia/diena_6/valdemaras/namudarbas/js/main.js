console.log(" Labas ");

// UZDUOTIS =======ismokti f-jas 50x===============
// Aptrasymas) sukurti 30 getVardas ir 30 setVardas(x) f-ju. Jas iskviesti eiles tvarka "maisant" poruojant pvz:
// setVardas1("Antanas");
// getVardas1();
// setVardas2("Juozas");
// getVardas2();


// A) sukurti (gloabalu) kintamaji pvz:
//      var vardas =  "Tomas";
// B) sukurti 20-30 f-ju:  getVardas1(), getVardas2(), getVardas3(), ...getVardas30()
// kurios  turi "return" ir iskvietus f-ja ji  grazina varda ir prideti skaiciu salia  pvz: "Tomas1", Antanas22, Juozas33
// B) sukurti 20-30 f-ju:   setVardas1(name), setVardas2(name), ... setVardas30(name),...
// kurios   turi pakeisti varda ir prideti skaiciu salia
// C) visas f-jas iskviesti
// pvz.:
var vardas = "Tomas";
// 1
function setVardas1(name) {
   vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11
// ------------------


// 2 ------------
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22

// 3---------------------
function setVardas3(name) {
    vardas = name + "3";
}
setVardas3("juozas");            // sugalvoti vis kita zodi

function getVardas3(){
    return vardas;
}
x =  getVardas3();
console.log(  x );  // isveda: juozas33
//
// --------
function setVardas4(name) {
    vardas = name + "4";
}
setVardas4("Petras");

function getVardas4() {
    return vardas + "4";
}
console.log(getVardas4());
//

function setVardas5(name){
    vardas = name + "5";
}
setVardas5("Jolka");

function getVardas5() {
    return vardas + "5"
}
console.log(getVardas5());
//

function setVardas6(name){
    vardas = name + "6";
}
setVardas6("vardas6");

function getVardas6() {
    return vardas + "6";
}
console.log(getVardas6());
//

function setVardas7(name){
    vardas = name + "7";
}
setVardas7("vardas7");

function getVardas7() {
    return vardas + "7";
}
console.log(getVardas7());
//
function setVardas8(name){
    vardas = name + "8";
}
setVardas8("Vytas");

function getVardas8() {
    return vardas + "8";
}
console.log(getVardas8());
//

function setVardas9(name){
    vardas = name + "9";
}
setVardas9("Juras");

function getVardas9() {
    return vardas + "9";
}
console.log(getVardas9());
//

function setVardas10(name){
    vardas = name + "10";
}
setVardas10("Matas");

function getVardas10() {
    return vardas + "10";
}
console.log(getVardas10());
//

function setVardas11(name){
    vardas = name + "11";
}
setVardas11("Lukas");

function getVardas11() {
    return vardas + "11";
}
console.log(getVardas11());
//

function setVardas12(name){
    vardas = name + "12";
}
setVardas12("Povilas");

function getVardas12() {
    return vardas + "12";
}
console.log(getVardas12());
//
function setVardas13(name) {
    vardas = name + "13";
}
setVardas13("antanas");

function getVardas13() {
    return vardas + "13";
}

console.log(getVardas13());
//

function setVardas14(name) {
    vardas = name +"14";
}
function setVardas15(name) {
    vardas = name + "15";
}
function getVardas14() {
    console.log(vardas);
}
function getVardas15() {
    console.log(vardas);
}

setVardas14("Giulija");
setVardas15("Jolka");
getVardas14();
getVardas15();
