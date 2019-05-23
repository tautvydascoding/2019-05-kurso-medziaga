// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let masyvas = [];
for (i = 0; i < 50; i++){
    masyvas[i] = 0;
}
console.log(  masyvas.join("; ")    );
console.log( masyvas );
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let y = 0;
let masyvas2 = [];
while ( y < 50 ) {
    masyvas2[y] = 1;
}
console.log( masyvas2 );
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (var i = 0; i < masyvas2.length; i++) { // length naudoti visada
  masyvas2[i] = 3;
  i++;
}
console.log( masyvas2 );
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
