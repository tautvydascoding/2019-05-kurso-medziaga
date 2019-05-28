console.log(" Labas ");
let i = 0;

// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// ========



     // UZDUOTIS 1.0
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
     darbuotojas1 = ["Jonas", "Jonaitis", "1980", "Inspektorius"];

     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
     darbuotojas2 = ["Ona", "Onute", "1980", "Sekretore"];

     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
     darbuotojas3 = ["Kestas", "Kerta", "2001", "Pavaduotojas"];

     // D. sukurti masyva 'visiDarbuotojai'
     visiDarbuotojai =[darbuotojas1, darbuotojas2, darbuotojas3];

     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
     // UZDUOTIS 1.0
     // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)
     document.querySelector('body').innerHTML += darbuotojas1;

     // UZDUOTIS 1.1
     // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
     for(i=0; i<darbuotojas1.length; i++){
       console.log(darbuotojas1[i]);
     }

     // UZDUOTIS 1.2
     // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
     for(i=0; i<visiDarbuotojai.length; i++){
       console.log(visiDarbuotojai[i][0]);
     }

     // UZDUOTIS 1.3
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
     document.write("<br>" + "--------------------1.3 uzduotis-----------------" + "<br>");

     for(i=0; i<visiDarbuotojai.length; i++){
       document.write(visiDarbuotojai[i][0]);
       document.write(visiDarbuotojai[i][1]);
       document.write(visiDarbuotojai[i][2] + "<br>");
     }

     // UZDUOTIS 1.4
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

     document.write("--------------------1.4 uzduotis-----------------" + "<br>");
     for(i=0; i < visiDarbuotojai.length; i++){
      for(k=0; k < visiDarbuotojai[i].length; k++){
        document.write(visiDarbuotojai[i][k] + ", ");
     }
     document.write("<br>");
   }

     // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
     // 1.5) surasti jauniausia darbuotoja
          document.write("--------------------1.5 uzduotis-----------------" + "<br>");

function jauniausias(){
  let amzius = 0;
  let darbuotojas = 0;
  for(i=0; i<visiDarbuotojai.length; i++){
    if (amzius < visiDarbuotojai[i][2]){
      amzius = visiDarbuotojai[i][2];
      darbuotojas = visiDarbuotojai[i][0];
    }
  }
  document.write("Jauniausias darbuotojas yra: " + darbuotojas + "<br>");
  document.write("darbuotojo amzius: " + (2019 - amzius) + "<br>");
}

jauniausias();

     // 1.6) surasti seniausia darbuotoja
  document.write("--------------------1.6 uzduotis-----------------" + "<br>");

  function vyriausias(){
    let amzius = 3000;
    let darbuotojas = 0;
    for(i=0; i<visiDarbuotojai.length; i++){
      if (amzius > visiDarbuotojai[i][2]){
        amzius = visiDarbuotojai[i][2];
        darbuotojas = visiDarbuotojai[i][0];
      }
    }
    document.write("Vyriausias darbuotojas yra: " + darbuotojas + "<br>");
    document.write("Darbuotojo amzius: " + (2019 - amzius) + "<br>");
  }

  vyriausias();


     // 1.6) apskaiciuoti darbuotoju amziaus vidurki
  document.write("--------------------1.7 uzduotis-----------------" + "<br>");
 function vidurkis(){
  var amziausSuma = 0;
  for (i=0; i<visiDarbuotojai.length; i++){
    amziausSuma += 2019 - visiDarbuotojai[i][2];
  }
  var vidurkis = amziausSuma/visiDarbuotojai.length;
  document.write("Amziaus vidurkis: " + vidurkis + "metai." + "<br>");

 }

 vidurkis();

    // UZDUOTIS 2 --------------
  document.write("--------------------2 UZDUOTIS-----------------" + "<br>");

    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    visosPrekes = [];
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
    let preke1 = ["Zaislas", "1.jpg", "25 Eur", "Minkstas zaislas"];
    let preke2 = ["TV", "2.jpg", "99 Eur", "Televizorius"];
    let preke3 = ["Zvake", "3.jpg", "2 Eur", "Kvapioji zvake"];

    // 2.B. i masyva visosPrekes, ideti "preke" masyva
visosPrekes.push(preke1);
visosPrekes.push(preke2);
visosPrekes.push(preke3);

    // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina
    // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>"
document.querySelector('body').innerHTML += "<div class = 'container'></div>";

    for (i=0; i<visosPrekes.length; i++){
      tekstas = "<h2>" + visosPrekes[i][0] + "<h2>";
      tekstas = tekstas + "<p class='bg-info'>" + visosPrekes[i][2] + "<p>";
      document.querySelector('.container').innerHTML += "<div class = 'row'></div>";
      document.querySelector('.row').innerHTML += tekstas;
    }






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
