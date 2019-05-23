console.log(" Labas ");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);

names.shift();
document.querySelector("body").innerHTML += "<p>" + "Panaudota shift: " + names + "</p>" + "<br>";

names.pop();
document.querySelector("body").innerHTML += "<p>" + "Panaudota pop: " + names + "</p>" + "<br>";



// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

// metodai:
// .length
// .join()
// .slice()
// ...
// pvz    names.shift("Tomas");

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
document.querySelector("body").innerHTML += "<p>" + "Keliautojas: " + keliautojas + "</p>" + "<br>";


keliautojas.push("butelis vandens");
keliautojas.unshift("ziebtuvelis");
keliautojas.splice(3, 1);

document.querySelector("body").innerHTML += "<p>" + "keliautojas pakeistas: " + keliautojas + "</p>" + "<br>";

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (i = 0; i<50; i++){
  masyvas.push(0);
}
document.querySelector("body").innerHTML += "<p>" + "masyvas su for: " + masyvas + "</p>" + "<br>";

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let masyvas1 = [];
while (masyvas1.length<50) {
  masyvas1.push(1);
  i++;
}
document.querySelector("body").innerHTML += "<p>" + "masyvas su while: " + masyvas1 + "</p>" + "<br>";
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (i = 1; i<masyvas1.length; i+=2){
  masyvas1[i]=3;
}
document.querySelector("body").innerHTML += "<p>" + "masyvas su 3: " + masyvas1 + "</p>" + "<br>";

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

for (i = 4; i<masyvas1.length; i+=5){
  masyvas1[i]=9;
}
document.querySelector("body").innerHTML += "<p>" + "masyvas su 3 ir 9: " + masyvas1 + "</p>" + "<br>";

//=============bootstrap---sm-md-lg-xl (30-60m)==========
