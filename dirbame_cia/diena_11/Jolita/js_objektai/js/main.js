console.log(" Labas ");
$('h1').hide(3000);
$('.paslepti').click(function() {
    $('p').hide(1000)
});
$('.rodyti').click(function() {
    $('p').show(1500)
});
//grazina html elementa DOM, ant jo neveikia jQuery()komandos
console.log(document.querySelector(".paslepti"));
let manoMygtukas = document.querySelector(".paslepti");
console.log(manoMygtukas);


let manoMygtukas2 = $('.paslepti');//grazina jquery objekta(todel veikia komandos)
console.log(manoMygtukas2);

//paimam is html texta ir atspausdinam i console
let tekstas = $('h1').text();
console.log(tekstas);

//pakeisti norima elementa
let manop2 = $("p").eq(1).text();  //skaicius vienas paims antraji <P> elementa
console.log(manop2);

let manop3 = $("p")[2].innerHTML; //grazina dom html elementa,
//lauztiniai skliaustai grazina html, isjungia jQuery()
//del to neveikia jQuery() komandos pvz  .text()
console.log( manop3 );
let paskutinisp = $('p').last().text();
//arba
//paskutinisp = $('p').eq(-1).text();
console.log(paskutinisp + "paskutinisp");
