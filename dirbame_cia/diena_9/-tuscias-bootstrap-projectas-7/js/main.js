let zmg = ["Tomas", 21, "Kaunas", 820, true];
// UZDUOTIS A vedes ar nevedes (paskola)
if (zmg[4] == true) {
    console.log("Sveikinu gausite paskola");
} else {
    console.log("Paskolos negausite");
}

//UZDUOTIS B (uzrasyti be ==)

if (zmg[4]) {
    console.log("Sveikinu gausite paskola");
} else {
    console.log("paskolos negausite");
}
// Argument Type   Result
//
// Undefined       false
// Null            false
// Boolean         The result equals the input argument (no conversion).
// Number          The result is false if the argument is +0, −0, or NaN;
//                 otherwise the result is true.
// String          The result is false if the argument is the empty
//                 String (its length is zero); otherwise the result is true.
// Object          true.

//UZDUOTIS C prefrazuoti tikrinima

if (!zmg[4]) { // sauktukas keicia prasme, klausia ar cia netiesa
    console.log("paskolos negausite");
} else {
    console.log("Sveikinu gausite paskola");
}
