// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];


// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta
keliautojas.push("butelis vandens");
keliautojas.unshift("ziebtuvelis");
delete keliautojas[3];
console.log(keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


let i = 0;
let masyvas = [];
for (i = 0; i < 50; i++) {
    masyvas.push(0);
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

let masyvas1 = [];
i = 0;
while (i < 50) {
    masyvas1.push(1);
    i++;
}
console.log(masyvas1);

i = 0;
let masyvas2 = [];

for (i = 0; i < 50; i++) {
    masyvas2[i] = 1;
    masyvas2[i+=1] = 3;
}
console.log(masyvas2);

i = 0;

for (i = 0; i < 50; i++) {

    masyvas2[i+=5] = 9;
}
console.log(masyvas2);
