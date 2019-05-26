console.log(" Labas ");
let i = 0;

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
let masyvas = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
console.log(masyvas);

// ) sunaikinti pirma STALCIU VISA
masyvas.shift();
console.log(masyvas);

// ) tarp Petras ir Povilas, iterpti Marija
masyvas.splice(1, 0, "Marija");
console.log(masyvas);

// ) surikiuoti Masyva
masyvas.sort();
console.log(masyvas);

// ) sunaikinti Marijos stalciu
masyvas.splice(2, 1);
console.log(masyvas);

// ) sukeisti vietomis pirma ir paskutini stalciu

function change() {
  var first = masyvas[0];
  masyvas[0] = masyvas[3];
  masyvas[3] = first;
}

change();
console.log(masyvas);

// ) sukurti masyvo kojipa
let kopija = [].concat(masyvas);
console.log(kopija);

// ) kopijos masyve istrinti nuo 2 iki 4
kopija.splice(2, 2);
console.log(kopija);

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
console.log(masyvas);

// ) prijungti kopijos masyva prie orginalo masyvos galo
let naujas = masyvas.concat(kopija);
console.log(naujas);

// 6. sukurti du masyvus (skirtingus)
let masyvas1 = [1, 3, 5, 7, 9, 11]
let masyvas2 = [2, 4, 6, 8, 10, 12]

// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
var masyvas3 = [];
for (i=0; i<masyvas1.length; i++){
masyvas3.push(masyvas1[i]);
masyvas3.push(masyvas2[i]);
}

console.log(masyvas3);

// sunkesnis
// susikurti masyva su prekiu pavadinimais
masyvasPrekiu = ["Telefonas", "Kompiuteris", "Navigacija", "MP3", "TV"]

// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

let atvirksciai = [];
for (i = masyvasPrekiu.length - 1; i>= 0; i--){
atvirksciai.push(masyvasPrekiu[i]);
}

console.log(masyvasPrekiu);
console.log(atvirksciai);

//
