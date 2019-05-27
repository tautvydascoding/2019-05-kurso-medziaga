console.log(" Labas ");
let vardas = "TOmas"


$('h1').hide(3000);

$("button").click(function(){
  $("p").hide()
});
$("rodyti").click(function(){
  $("p").show(1500); //1.5sek
  });
  //isvesti i console mygtuko HTML elementa
  console.log( document.queryselector(".paslepti" ) );
  //arba
  let manoMygtukas = document.queryselector(".paslepti");
  let manoMygtukas2 = $(".paslepti");
  console.log( manoMygtukas.innerHTML);
  console.log( manoMygtukas );
  console.log( manoMygtukas );
