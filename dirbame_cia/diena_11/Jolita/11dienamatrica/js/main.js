console.log(" Labas ");
// let seima = [];
// let dukte = ["Jore", 1980, "Zalia"];
// let sunus = ["Jonas", 1991, "Juodi"];
//
// // matrica
// seima [0] = dukte;
// seima [1] = sunus;
//
//  //pasitikrinti
//
//  console.log( seima);
//  //pakeisti jores varda ir gimimo data
//
//  seima[0][0] = "Agne";
//  seima[0][1] = 1990;
//
//  console.log(seima[0]);
//
//  //pakeisti Jono plauku spalva
//
//  seima[1][2] = "balta";
//  console.log(seima[1]);
//

 // =================svarbus patarimai===================:
 // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i"
 //(pvz.: myArray[i])
 // FOR:   "for (i = 0; i < x; i++)
 //{"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
 // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
 // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
 // matrica - pasitikritni ar nereik x ir y sukeisti vietomis
 //(ar nesuklydai kuris stulpelis ir kuris eilute )
 // matricos ilgis daznai skiriasi nuo plocio.
 //  pvz.:
  // for ( i < eiluciuSkaicius)
  //    for ( k < stulpeliuSkaicius)
  // =================// =================// ========



      // UZDUOTIS 1.0
      // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
      // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
      // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
      // D. sukurti masyva 'visiDarbuotojai'
      // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
      let visiDarbuotojai = [];
      let darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
      let darbuotojas2 = ["Ona", "Onute", 1981, "sekretore"];
      let darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
visiDarbuotojai[0] = darbuotojas1;
visiDarbuotojai[1] = darbuotojas2;
visiDarbuotojai[2] = darbuotojas3;
console.log(visiDarbuotojai);
            // UZDUOTIS 1.0
      // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
      document.write(visiDarbuotojai[0])
      // UZDUOTIS 1.1
      // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
      for ( i = 0; i < darbuotojas1.length; i++) {
          document.write(darbuotojas1[i]);
      }
      // UZDUOTIS 1.2
      // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

      for (var i = 0; i < visiDarbuotojai.length; i++) {
          document.write(visiDarbuotojai[i][0]+ "<br>");
      }
      // UZDUOTIS 1.3
      // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
      for (var i = 0; i < visiDarbuotojai.length; i++) {
           document.write(visiDarbuotojai[i]+"<br>");
      }
      // UZDUOTIS 1.4
      // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
document.write("==============FOR FOR ================= <br>")
for ( i = 0; i < visiDarbuotojai.length; i++) { //pirmasisi ciklas dirbs tiek, kiek turime darbotoju

        for ( k = 0; k < visiDarbuotojai[i].length; k++) {
             //paims konkretaus darbuotojo duomenis
document.write(visiDarbuotojai[i][k]);
    }
    document.write("<br>");

}
      // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
      // 1.5) surasti jauniausia darbuotoja

      let laikinas = 2;//jei sukuriu kintamaji ciklo viduje, tai kintamaji sukuriu daugybe kartu, ar tikrai to reikia?

      for ( i = 0; i < visiDarbuotojai.length; i++) {

          if (laikinas < visiDarbuotojai[i][2]) {   //laikinas, bet koks mazas skaicius
              // maziau uz masyve esanciu zmoniu gimimo metus
      laikinas = visiDarbuotojai[i][2]; //isimenam i kintamaji laikinas
      //sekancia didesne uz pradine reikasme
document.write("<br>"+laikinas+"<br>")
          }
      }
      console.log(laikinas+"jauniausias");
      // 1.6) surasti seniausia darbuotoja
      // 1.6) apskaiciuoti darbuotoju amziaus vidurki

      document.write("<br>==============vidurkis ================= <br>")
      let vidurkis = 0;
      let amzius = 0;
      let  d = new Date(2018);
      for (i = 0; i < visiDarbuotojai.length; i++) {
          amzius += ((d - visiDarbuotojai[i][2])+1);

    }
    vidurkis = amzius / visiDarbuotojai.length;
document.write(vidurkis + "<br>");

     // UZDUOTIS 2 --------------
     // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
     // Antraste, img pavadinimas, kaina, prekes aprasymas

     // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
     // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)

     let preke1 = ["Dviratis", "1.jpg", 299, "Juodas kalnu Dviratis"];
     let preke2 = ["paspirtukas", "2.jpg", 45, "Elektrinis pasirtukas"];
     let preke3 = ["rieduciai", "3.jpg", 250, "orandzinis ratukas"];
let visosPrekes = [];
visosPrekes.push (preke1);
visosPrekes.push (preke2);
visosPrekes.push (preke3);
for (var i = 0; i < visosPrekes.length; i++) {
    tekstas = "<h2>" + visosPrekes[i][0] + "</h2>";
    tekstas = tekstas + "<p>" + visosPrekes[i][2] + "</p>";
    document.querySelector('body').innerHTML += tekstas;
}
     // 2.B. i masyva visosPrekes, ideti "preke" masyva
     // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

    // nuotrauka (javascript kalbai)
    // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

    // 2  budai nuotraukoms (PHP kalbai)
     // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
     // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 3.1 surikiuoti prekes pagal kaina didejanciai
     // 3.2 atrinkti prekias iki 100 eur
     // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
     // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer
