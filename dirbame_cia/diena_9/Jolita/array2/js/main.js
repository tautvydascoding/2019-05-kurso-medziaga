console.log(" Labas ");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
auto = ["opel", "bmw", "mazda", "mocas"];
names.shift() //shift - istryne pirmaji masivo elementa, nu graziausia masyvas liko be Tomas
console.log(names);

names.unshift("vedes")//unshift - ideda nauja index i array'ju I PRIEKI
console.log(names);

names[names.length] = "ITysnikas"; //length - idejo i masyva nauja index elementa pacioje pabaigoje
console.log(names);

naujasmasyv = names.concat(auto);//concat-sujunge du masyvus i viena nauja,
//pirma eina pirmo masyvo elementai, paskui antrojo
console.log(naujasmasyv);


sumazinta = names.slice(3); // slice - istryne elementus nuo nulinio iki antrojo (tris elementus)
console.log(sumazinta);

// x = names.pop(); // pop() panaikina paskutini elementa is masyvo
// console.log(x);
// console.log(names);

names.push(320); // push ideda nauja elementa i masyva GALE
console.log(names);
console.log(names.join(":")); // ideda skirtukus ir The join() method also joins all array elements into a string.

names.splice(1, 0, "Kaunas", "Centras");
//1-nuo kur masyve; 0-kiek istrinti, kitos reiksmes yrra iterpiamos reiksmes
console.log("po splice" + names);

names.splice(0, 3);
console.log("po splice-istrynimas" + names);


//masyvo ilgi suzinoti
let ilgis = names.length;
console.log("masyvo ilgis    " + ilgis);

//sujungia duomenis, bet BUTINA issisaugoti duomenis, nes jie dings
let visiDuomenys = names.contact();

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.push("butelis vandens");
// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.unshift("ziebtuvelis")
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"

delete keliautojas[2];
console.log(keliautojas);
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// let masyv = [];
// for  (i = 0; i < 50; i++) {
//     masyv.push(0);
// }
// document.write(masyv);
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let i = 0;
let vienetai = [];

// while (i < 50) {
//     vienetai.push(1);
//   i++;
// }

for (let i = 0; i < 50; i++) {
    vienetai[i] = 1;
}
console.log(vienetai.join(":"));

for (let i = 1; i < vienetai.length; i++) {
    vienetai[i] = 3;
    i++;
}
    console.log(vienetai);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

//1-rasti kas antra i masyvo elementa(1variantas jei i padalinus is dvieju liekana =0, kitas variantas )
//2-pakeisti ji i 3, jo reiksmes


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
