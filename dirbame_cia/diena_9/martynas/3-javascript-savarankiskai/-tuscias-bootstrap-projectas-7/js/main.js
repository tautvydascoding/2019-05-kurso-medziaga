console.log(" Labas ");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

// metodai:
// .shift()
names.shift("Tomas");
console.log(names);
// .length
// .join()
// .pop()
// .slice()
// ...
// pvz    names.shift("Tomas");

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];


// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR
//  ir uzpildyti visa skaiciais "0"
//  (kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (i = 0; i < 50; i++){
    masyvas[i] = 0;
}
console.log(   masyvas.join("; ")     );
console.log(   masyvas     );

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let y = 0;
let masyvas2 = [];
while (  y < 50 ) {
    masyvas2[y] = 1;
    y++;
}
console.log(   masyvas2  );

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (  i = 1; i < masyvas2.length; i=i+2) {
    masyvas2[i] = 3;
}
console.log(   masyvas2  );

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (  i = 4; i < masyvas2.length; i=i+5) {
    masyvas2[i] = 9;
}
console.log(   masyvas2  );
