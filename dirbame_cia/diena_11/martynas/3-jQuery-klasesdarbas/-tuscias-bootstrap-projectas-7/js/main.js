console.log(" Labas ");



$('h1').hide(3000);

$(".paslepti").click(function(){
    $("p").hide();

});
$(".grazinti").click(function(){
    $("p").show();

});


console.log(document.querySelector(".paslepti"));

let manoMygtukas = document.querySelector(".paslepti");
let manoMygtukas2 = $(".paslepti");

console.log(manoMygtukas.innerHTML);
console.log(manoMygtukas2);
console.log(manoMygtukas);

$(".variantas3").click(function(){
    $("p").toggle();

});

console.log( $('h1').text());

let manoH1 = $('h1').text();

console.log(manoH1);

for (i = 0; i < manoH1.length; i++) {
    console.log(manoH1);
}


let paragrafas2 = $('p').eq(0).text();
console.log(paragrafas2);

let paragrafas3 = $('p')[1]; //html dom elementas

console.log(paragrafas3);


let paskutinisP = $('p').last().text();
console.log("paskutinisP" + paskutinisP);
