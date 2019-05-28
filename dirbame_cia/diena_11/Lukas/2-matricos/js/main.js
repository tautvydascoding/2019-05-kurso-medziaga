// // // console.log(" Labas ");
// //
// // let seima = [["jore", 1980, "raudona"],["Jonas",1991, "Juodi"]];
// // seima[0,0] = "Janina";
// // seima[0,1] = 1990;
// // seima[1,3] = "geltoni";
// // console.log(seima[0,0] + " " + seima[0,1] + " " + seima[1,3]);
//
// // UZDUOTIS 1.0
// // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// // D. sukurti masyva 'visiDarbuotojai'
// // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
//
// let visiDarbuotojai = [["Jonas", "Jonaitis", 1980, "Inspektorius"], ["Ona", "Onute", 1980, "sekretore"], ["Kestas", "Kerta", 2001, "pavaduotojas"]];
//
// // UZDUOTIS 1.0
// // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
// console.log(visiDarbuotojai[0]);
// // UZDUOTIS 1.1
// // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
// let i = 0;
// for (i = 0; i < visiDarbuotojai[0].length; i++) {
//     document.querySelector("body").innerHTML += i + ". " + visiDarbuotojai[0][i] + "<br>";
// }
// // UZDUOTIS 1.2
// // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// i = 0;
// for (i = 0; i < visiDarbuotojai.length; i++) {
//     let k = 0;
//     document.write(visiDarbuotojai[i][k] + " ");
//     k++;
// }
// // UZDUOTIS 1.3
// // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// i = 0;
// for (i = 0; i < visiDarbuotojai.length; i++) {
//     document.write("<br>" + i + ". " + visiDarbuotojai[i] + " ");
// }
// // UZDUOTIS 1.4
// // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
// i = 0;
// for (i = 0; i < visiDarbuotojai.length; i++) {
//     document.write("<br>");
//     for (let k = 0; k < visiDarbuotojai.length; k++) {
//         document.write(visiDarbuotojai[i][k] + " ");
//     }
// }


     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 1.5) surasti jauniausia darbuotoja
     // 1.6) surasti seniausia darbuotoja
     // 1.6) apskaiciuoti darbuotoju amziaus vidurki

     // UZDUOTIS 2 --------------
     // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
     // Antraste, img pavadinimas, kaina, prekes aprasymas
     // let visosPrekes = [["antraste", "img pavadinimas", "kaina", "prekes aprasymas"]];
     // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
     let preke1 = ["dviratis", "dviratis.jpg", "100", "grazus raudonas dviratis"];
     let preke2 = ["paspirtukas", "paspirtukas.jpg", "50", "grazus raudonas paspirtukas"];
     let preke3 = ["motoroleris", "motoroleris.jpg", "200", "grazus raudonas motoroleris"];
     let preke4 = ["vienratis", "vienratis.jpg", "100", "grazus raudonas vienratis"];
     let preke5 = ["masina", "masina.jpg", "50", "grazi raudona masina"];
     let preke6 = ["keturatis", "keturatis.jpg", "200", "grazus raudonas keturatis"];
     // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
     // 2.B. i masyva visosPrekes, ideti "preke" masyva
     let visosPrekes = [];
     visosPrekes.push(preke1);
     visosPrekes.push(preke2);
     visosPrekes.push(preke3);
     visosPrekes.push(preke4);
     visosPrekes.push(preke5);
     visosPrekes.push(preke6);
     // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina
     let i = 0;
     document.write("<div class = 'row'>");
     for (i = 0; i < visosPrekes.length; i++) {

             document.write("<div class = 'col-4'>" + visosPrekes[i][0] + "</div>");

         if (i+1 % 3 == 0     ) {
             document.write("</div>");
             document.write("<div class='row'>");
         }
    }

    // nuotrauka (javascript kalbai)
    // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

    // 2  budai nuotraukoms (PHP kalbai)
     // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
     // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
