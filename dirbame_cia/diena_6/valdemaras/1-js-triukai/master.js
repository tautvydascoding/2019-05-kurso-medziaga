console.log(" Labas   ");
//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");

// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
document.querySelector('h1').innerHTML = " <b>Antraste</b>";
document.querySelector("h2").innerHTML = "dar viena antraste";
document.querySelector("h3").innerHTML = "jau nebe antraste";

document.querySelectorAll("h2")[1].innerHTML = "jau nebe antraste su all komanda";

// UZDUOTIS
// vartotojas turi ivesti: gerimu skaiciu
// vartotojas turi ivesti: zmoniu skaiciu
// apskaiciuoti kiek reikia nupirkti gerimu
// let dalyviuskaicius = prompt("Iveskite dalyvaujanciu zmoniu skaiciu")
// console.log(dalyviuskaicius);
// let gerimuskaicius = prompt("Iveskite gerimu kieki")
// console.log(gerimuskaicius);
// console.log( typeof(gerimuskaicius));

// let gerimukiekis = dalyviuskaicius * gerimuskaicius;
// let gerimukiekis = parseInt(dalyviuskaicius) * parseInt(gerimuskaicius);
// console.log( "gerimu kiekis", gerimukiekis);
// function gerimuSkaicius() {
//     let gerimai = dalyviuskaicius + gerimuskaicius;
//     document.write(gerimai);
// }
// gerimuSkaicius();

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h2").style.backgroundColor = "green"; 		// change the height of a <div> element:
