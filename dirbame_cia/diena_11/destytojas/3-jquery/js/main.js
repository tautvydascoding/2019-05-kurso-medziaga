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
