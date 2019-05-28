console.log(" Labas ");
// let dukte = ["Jore", 1980, "Zalias"];
// let sunus = ["Jonas", 1991, "Juoda"];
//
// let seima = [0, 1, 2, 3, 4];
//
// console.log(seima);
//
// seima [0]=dukte; //idedamas masyvas i masyva
//
// seima.push(sunus); //idedmas masyvas i masyvo pabaiga
//
// console.log(seima[0]);
// console.log(seima[5]);
//
// seima[0][1]=1981;
// seima[0][0]="Jorinita"
//
// console.log(seima[0]);
//
// seima [5][2]="Balta";
//
// console.log(seima[5]);
//
//
//
//
// // =================svarbus patarimai===================:
// // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// // matricos ilgis daznai skiriasi nuo plocio.
// //  pvz.:
//  // for ( i < eiluciuSkaicius)
//  //    for ( k < stulpeliuSkaicius)
//  // =================// =================// ========
//
//
//
//      // UZDUOTIS 1.0
//      // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
//      let darbuotojas1=["Jonas", "Jonaitis", 1980, "Inspektorius"];
//      // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
//      let darbuotojas2=["Ona", "Onute", 1980, "sekretore"];
//      // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
//      let darbuotojas3=["Kestas", "Kerta", 2001, "pavaduotojas"];
//      // D. sukurti masyva 'visiDarbuotojai'
//      let visiDarbuotojai=[];
//      // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
//      // UZDUOTIS 1.0
//      visiDarbuotojai[0]=darbuotojas1;
//      visiDarbuotojai[1]=darbuotojas2;
//      visiDarbuotojai[2]=darbuotojas3;
//
//      console.log(visiDarbuotojai);
//      // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
//      // console.log(darbuotojas1);
//      // UZDUOTIS 1.1
//      // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
//      let i =0;

     // for ( i = 0; i < darbuotojas1.length; i++) {
     //     document.write(visiDarbuotojai[0][i])
     // }
     // UZDUOTIS 1.2
     // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
     // for ( i = 0; i < visiDarbuotojai.length; i++) {
     //     document.write(visiDarbuotojai[i][0])
     // }
     // UZDUOTIS 1.3
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
     // for ( i = 0; i < visiDarbuotojai.length; i++) {
     //     document.write(visiDarbuotojai[i][0] + "<br>");
     //     document.write(visiDarbuotojai[i][1] + "<br>");
     //     document.write(visiDarbuotojai[i][2] + "<br>");
     //
     // }

     //
     // document.write("===========for for============= <br>");
     // // UZDUOTIS 1.4
     // let r = 0; //eilutes
     // // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
     // for (i = 0; i < visiDarbuotojai.length; i++) {
     //     console.log("darbuotojo numeris" + i);
     //       //pirmas ciklas dirbs kiek turim darbuotoju
     //     for (r = 0; r < visiDarbuotojai[i].length; r++) { //konkretaus darbuotojo duomenys
     //     document.write(visiDarbuotojai[i][r] + "<br>");
     //     }
         // document.write(visiDarbuotojai[i][1] + "<br>");  //i yra eilutes
         // document.write(visiDarbuotojai[i][2] + "<br>");
     // }
     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 1.5) surasti jauniausia darbuotoja
     // function jauniausias() {
     //
     // }
     // jauniausias();
     // 1.6) surasti seniausia darbuotoja
     // 1.6) apskaiciuoti darbuotoju amziaus vidurki

    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
    let preke1 = ["Dviratis","1.jpg", 299,"Juodas kalnu dviratis"];
    let preke2 = ["Paspirtukas","2.jpg", 45,"elektrinis paspirtukas"];
    let preke3 = ["Rieduciai","3.jpg", 250,"Be ratuku"];
    // 2.B. i masyva visosPrekes, ideti "preke" masyva
    let visosPrekes = [];
    visosPrekes.push(preke1);
    visosPrekes.push(preke2);
    visosPrekes.push(preke3);
    // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina
for (i = 0; i < visosPrekes.length; i++) {
    tekstas = "<h2>" + visosPrekes[i][0] + "</h2>";
    tekstas = tekstas + "<p>" + visosPrekes[i][2] + "</p>";

    document.querySelector('body').innerHTML+= tekstas;

    // document.querySelector('body').innerHTML+="<h3 class='bg-info col-4'>" + visosPrekes[i][0] + "<br>" + "</h3>";
    // document.querySelector('body').innerHTML+="<h3 class='bg-success col-2'>" + visosPrekes[i][1] + "<br>" + "</h3>";
    // document.querySelector('body').innerHTML+="<h3 class='bg-warning col-3'>" + visosPrekes[i][2] + "<br>" + "</h3>";
    // document.querySelector('body').innerHTML+="<h3 class='bg-dark col-3'>" + visosPrekes[i][3] + "<br>" + "</h3>";
    // document.write(visosPrekes[i][0] + "<br>");
    // document.write(visosPrekes[i][1] + "<br>");
    // document.write(visosPrekes[i][2] + "<br>");
    // document.write(visosPrekes[i][3] + "<br>");
    // document.write("<br>");
}

   // nuotrauka (javascript kalbai)
   let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

   // document.querySelector('body').innerHTML += 

   // 2  budai nuotraukoms (PHP kalbai)
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



    // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
    // 3.1 surikiuoti prekes pagal kaina didejanciai
    // 3.2 atrinkti prekias iki 100 eur
    // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
    // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
