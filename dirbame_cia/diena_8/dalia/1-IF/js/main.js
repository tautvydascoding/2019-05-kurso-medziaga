console.log(" Labas ");
//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false

// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama

let arVedes = true;//vedes
let arDuotiPaskola = false;//neduoti

// Ar cia  tiesa
if ( arVedes== 1){
arDuotiPaskola = true;

} else {
  arDuotiPaskola = false;
}

//Pranesimas

if ( arDuotiPaskola == true){

  console.log("Sveikinu");
} else {
  console.log("Veskite");
}

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo


let vardas1 = "Linas";
let vardas2 = "Linas";
if (vardas1 == vardas2 ){
  console.log("Jusu vardai yra vienodi");
} else {
  console.log("Vardai yra skirtingi");
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

if ( vardas1 == "Tomas" && vardas2 == "Jonas"){
  console.log( "Tomas ir Karolis");
} else {
  console.log( "Ne Tomas ir Karolis");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

if ( vardas1 == "Linas" || vardas2 == "Karolis"){
  console.log( "Vienas is vardu sutampa");
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

let age = 65;

if (age <= 7 || age >= 65){
  console.log( "Sokoladinis zuikutis" );
  if (age <=7){
    console.log( "Pliusines varles");
  }
  if (age >= 65){
    console.log( "Kelione i Birstona");
  }
}
   else {

    if (age > 7 && age <= 14){
      console.log( "Mini telefonai");
    }
    if (age > 14 && age <= 18){
      console.log( "new Music App");
    }
    if (age > 18 && age <= 24){
      console.log( "stok i Sauliu sajunga");
    }
    if (age > 24 && age <= 65){
      console.log( "Pensijos kaupimas - uzsiregistruok");
    }


  }



// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"


// 2 UZDUOTIS
// susikurti kintamaji 'klietoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))


// kai klietoVardas = vardas1 - isvesti "Masinoms 10% nuolaida"
// kai klietoVardas = vardas2 - isvesti "Buitinei technikai  30% nuolaida"
//  bet koks kitas - isvesti "5% nuolaida kelionems"

let klientoVardas = "Petras";
vardas1 = "Tomas";
vardas2 = "Petras";
let vardas3 = "Jonas";

if ( klientoVardas == vardas1 ){
  console.log( "Masinoms 10% nuolaida");
} else {
  console.log( "5% nuolaida kelionems");
}
if ( klientoVardas == vardas2 ){
  console.log( "Buitinei technikai 30% nuolaida");
} else {
  console.log( "5% nuolaida kelionems");
}

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

let klientoTipas = "gold";
let klientas1 = "bronze";
let klientas2 = "silver";
let klientas3 = "gold";

if ( klientoTipas == klientas1 ){
  console.log( "15% nuolaida");
} else {
  console.log( "5% nuolaida");
}
if ( klientoTipas == klientas2 ){
  console.log( "30% nuolaida");
} else {
  console.log( "5% nuolaida");
}
