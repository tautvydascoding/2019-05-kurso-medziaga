console.log(" Labas   ");

// let vardas = "Tomas";
// console.log( vardas );

let pavarde = "Tomauskis";
console.log( pavarde );



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write( " <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");  // ilgesnis budas
// alert("Viso");          // trumpesnis
// alert( pavarde );

// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);

// UZDUOTIS:
// A) vartotojas turi ivesti: dalyvaujanciu zmoniu skaiciu
// B) vartotojas turi ivesti: gerimu "Vytautas" kieki zmogui
// C) apskaiciuoti kiek is viso reikia nupirkti gerimu
// A)
let zmoniuSK = prompt("Ivestkite dalyviu skaiciu");
let gerimuSKzmogui = prompt('Ivestkite  gerimu "Vytautas" kieki zmogui ');
// let visoKiekis = zmoniuSK * gerimuSKzmogui;
// console.log(   "Gerimu kiekis", visoKiekis  );

//=================================
console.log(  typeof(zmoniuSK )  );  // pasiziureti koks tipas
// tekstus paverciama i sveikuosius skaicius
let visoKiekis = parseInt(zmoniuSK) + parseInt(gerimuSKzmogui);
console.log(   "Gerimu kiekis", visoKiekis  );



document.querySelector('h1').innerHTML = " <b>Antraste</b>";
document.querySelector('h2').innerHTML = " Pakeistas 2";
document.querySelector('h3').innerHTML = " Pakeisti 3";

document.querySelectorAll('h2')[1].innerHTML = " Pakeisti 2 su all komanda";
document.querySelectorAll('h2')[2].innerHTML = " Pakeisti 2 su all komanda";



//----Elemento duomenys--------
// auksto paemimas:
var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h1").style.width = "50%"; 		// change the height of a <div> element:
document.querySelector("h1").style.color = "blue"; 		// change the height of a <div> element:

document.querySelector("h2").style.backgroundColor = "yellow"; 		// change the height of a <div> element:
