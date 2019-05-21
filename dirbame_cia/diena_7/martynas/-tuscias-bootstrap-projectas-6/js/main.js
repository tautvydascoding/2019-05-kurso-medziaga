console.log("Labas Rytas");


let i = 0;

for (i=0; i<10; i++){ //vidurinis skaicius rodo kiek kartu veiks ciklas
    console.log("labas");
    // document.write("labas <br> "); // siuot atveju 10 kart parasys Labas
}

for (i=0; i<8; i++) {
    document.write( i + "<br>");
}

// for (i=10; i > 0; i--) { //galima keisti cikla atvirkstine puse kad mazejimo tvaarka eiti keiciam i ir taip daugiau maziau zenkla
//     document.write( i + "<br>");
// }
let tekstas = '<img src="folder/vovere.jpg" alt="vovere medyje">':
for (i=0; i<8; i++) {
    tekstas = 'img src="folder/vovere.jpg" alt="vovere medyje">';
    // document.write( i + "<br>");
    document.write( i + tekstas);

}
