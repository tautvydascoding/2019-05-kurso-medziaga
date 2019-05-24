console.log(" Labas ");


let zmg = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log( zmg );

console.log(  zmg.join( "::")  );  // sujungia visus stalcius i VIENA string
console.log(  zmg.toString()  );  // sujungia visus stalcius i VIENA string

// idejimas i masyvo gala
zmg.push("2 kursas"); // push - idejimas i gala
console.log( "idejau i gala: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

zmg.pop(); // pop - istrini paskutini masyvo elementa
console.log(  "istryniau paskutini: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

zmg.unshift('Vyras');
console.log(  "idejau i pradzia: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

zmg.shift( );
console.log(  "istrynem is priekio" + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

let x = zmg.slice( 2, 4 ); // kopijuoja dali masyvo !nepamirsti issisaugoti naujos kopijos kintamajame
console.log(  "kopija nuo 2-4: " + x.join( "; ")  );  // sujungia visus stalcius i VIENA string

// splice iterpimas
//        1 - nuo kur masyve; 0 - kiek istrinti; kitos - iterpiamos reiksmes
zmg.splice(1, 0, "Kaunas", "Centras");
console.log( "PO ITERPIMO:: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

zmg.splice(2, 1);  // istriname nuo 2 , viena stalciu
console.log( "PO ISTRiNIMO:: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

// vietoj Kauno parasyti VIlnisu (istrinti kauna ir iterpti vilniu)
zmg.splice(1, 1, "Vilnius");  // istriname nuo 2 , viena stalciu
console.log( "PO SUKEITIMO:: " + zmg.join( "; ")  );  // sujungia visus stalcius i VIENA string

let ilgis = zmg.length; // grazima masyvo ilgi
console.log(  " masyvo ilgis:" +  ilgis);

// zmg.conCat // sujungia du masyvus
let veronika = ["Veronika", "Verute", 23];
let visiZmones = zmg.concat(veronika);
console.log( "PO MASYVU SUJUNGIMO:: " + visiZmones.join( "; ")  );  // sujungia visus stalcius i VIENA string


// metodai:
// .shift()
// .unshift('xxx')

// .length
// .join()
// .pop()
// .slice()
// ...
// pvz    names.shift("Tomas");
