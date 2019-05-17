console.log("Labas Pasauli!");

// Primityvus kintamuju tipai:

let vardas = "Lukas"; // string

let amzius = 23; // number (su kableliu dvigubai daugiau vietos uzima)

let arVedes = false; // True or False (Bolean) (1 byte)

let mirtiesData; // pirmas budas kada nezinomas kintamasis (undefined)

let klaidos = null; // naudojamas: kai taupoma vieta. Uzima nieko.

let x = 128;
let y = 10;
let z = x + 1;

console.log( z );

z = x * y + 2;

console.log(z);

let antraste = "Viskas prasidejo";
let pabaiga = "ir baigiasi";
let istorija = antraste + " " + pabaiga;

console.log(istorija);

function suma() {
    let x = 2;
    let y = 2;
    let z = x*y;
    console.log(z);
}

suma();
