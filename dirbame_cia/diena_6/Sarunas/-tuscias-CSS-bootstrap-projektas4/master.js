// console.log(" Labas   ");
 let vardas = "Tomas"
 console.log( vardas );
// let pavarde = Tomauskis;
// console.log( pavarde );
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================

//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

 //document.write(" <b class='bg-info'> Mano tekstas </b> ");
 // window.alert("labas"); //ilgesnis budas
 // alert("Viso");         //trumpesnis
 let ivestasTekstas = prompt("Iveskite savo varda");
 console.log(ivestasTekstas)

//Uzduotis
// A) vartotojas turi ivesti: dalyvaujanciu zmoniu skaiciu
// B) vartotojas turi ivesti: gerimu "Vytautas" kieki zmogui
// C) apskaiciuoti kiek is viso reikia nupirkti gerimu

//A)
let zmoniuSK = prompt("Iveskite dalyviu skaiciu");
let gerimuSKzmogui = prompt('Iveskite gerimu "Vytautas" kieki zmogui');
let visoKiekis = zmoniuSK + gerimuSKzmogui;
console.log( "Gerimu kiekis", visoKiekis );

console.log( typeof(zmoniuSK) );  //pasiziureti koks tipas
// tekstus paverciam i sveikuosiu skaicius
let visoKiekis = parseInt(zmoniuSK) + parseInt(gerimuSKzmogui);
console.log("Gerimu kiekis", visoKiekis);

console.log( typeof(zmoniuSK)); //pasiziureti koks tipas



//let ivestasTekstas = prompt("Iveskite savo varda");
//console.log(ivestasTekstas)


// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
