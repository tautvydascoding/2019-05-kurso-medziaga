console.log(" Labas ");

$("h1").hide(3000);

// paslepia paragrafa
  $(".paslepti").click(function(){
    $("p").hide(2000);
});
// parodo paslepta paragrafa
$(".parodyti").click(function() {
    $("p").show(2000);
});

// isvesti i console mygtuko HTML elementa
console.log(document.querySelector(".paslepti")); //grazina DOM/HTML elementa (ant jo neveikia jQuery komandos)
// arba
let manoMygtukas = document.querySelector(".paslepti");
console.log(manoMygtukas);

// let manoH1 = $("h1").text();
// console.log(manoH1);
console.log($("h1").text());
// paimti antraji <p> teksta ir atspausdint i console
let manoP2 = $("p").eq(1).text(); //1 paims antraji <p>
console.log(manoP2);
let manoP3 = $("p")[2]; //paima kaip DOM HTML elementa
console.log(manoP3);


let paskutinisP = $("p").last().text();
// arba
// $("p").eq(-1).text();
console.log("paskutinis paragrafas " + paskutinisP);
