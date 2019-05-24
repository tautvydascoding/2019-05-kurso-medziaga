console.log(" Labas ");
let zmg = ["Tomas", 21, "Kaunas", 820, true];

//UZDUOTIS
//patikrinti ar zmogus vedes;
// jeigu vedes - "sveikinu - gausite paskola"
// jei nevedes  - "deja, jums paskola nepriklauso"

if (zmg [4] === true) {
  console.log( "sveikinu");
} else {
  console.log( "nepriklauso");
}
//B) sunkesnis: patikrinimas uzrasyti trumpesniiu budu be "=="

if ( zmg[4]) {
  console.log( "sveikinu" );
} else {
  console.log( "nepriklauso");
}
//C) sunkesnis: patikrinima uzrasyti su neiginiu "!="
if (zmg [4] != false){

} else {
  console.log( "nepriklauso");
}
