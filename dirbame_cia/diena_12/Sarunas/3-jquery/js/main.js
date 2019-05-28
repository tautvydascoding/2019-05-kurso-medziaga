console.log(" Labas ");
let vardas = "TOmas";


$('h1').hide(3000); // 1000 mili sek = 1 sek

$(".paslepti").click(function(){
  $("p").hide();
});
$(".rodyti").click(function(){
  $("p").show(1500);  // 1.5 sek
});

// isvesti i console mygtuko HTML elementa
console.log(   document.querySelector(".paslepti")   );
// arba

// grazima DOM  HTML elementa (!ant jo neveikia jQuery komandos)
let manoMygtukas = document.querySelector(".paslepti");
// grazina  jQuery Objekta (todel veikia komandos show(), hide()...)
let manoMygtukas2 = $(".paslepti");

console.log(   manoMygtukas2   );
console.log(   manoMygtukas   );
console.log(   manoMygtukas   );

// UZDUOTIS
// paimti H1 teksta (naudojant jQuery)
// ir si teksta atspausdinti i console
console.log(   $('h1').text()    );
// arba
let manoH1 =  $('h1').text();
console.log(   manoH1   );
// UZDUOTIS
// paimti antraji  <p> teksta (naudojant jQuery)
// ir si teksta atspausdinti i console
let manoP2 = $("p").eq(1).text();   // 1 paims antraji <p> elementa
console.log(   manoP2  );

let manoP3 = $("p")[2].innerHTML;    // DOM html elementas
console.log(   manoP3  );
//
 // suras paskutini <p>
let paskutinisP = $("p").last().text();
// arba
// paskutinisP = $("p").eq(-1).text();
console.log(   "paskutinisP" + paskutinisP  );
