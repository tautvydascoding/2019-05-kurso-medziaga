console.log(" Labas ");
let vardas = "Tomas";


//$('h1').hide(3000); //1000milisek = 1 sek

$(".paslepti").click(function() {
$("p").hide();
});

$(".parodyti").click(function() {
$("p").show(1500);// 1,5 sek

});
//isvesti i konsole mygtuko HTML elemento
let manoMygtukas = document.querySelector( ".paslepti");
let manoMygtukas2 = $( ".paslepti");
console.log( manoMygtukas2);
console.log( manoMygtukas);
console.log( manoMygtukas);

//paimti h1 teksta ir su jQuery atvaizduoti i konsole
console.log($('h1').text() );
//arba

let manoH1 = $('h1').text();
console.log( manoH1 );

//paimti 2 <p> teksta su jQuery ir atspausdinti i console

let manoP2 = $("p").eq(1).text();// 1 paims 2 <p> elementa
console.log( manoP2);

let manoP3 = $("p")[2].innerHTML;
console.log( manoP3);

let paskutinisP = $("p").last().text();// suras paskutini paragrafa
console.log( "paskutinisP" + paskutinisP);

//arba

paskutinisP = $("p").eq(-1).text();
console.log( "paskutinisP" + paskutinisP);

//  visur naudoti tik jQuery!!!!!!




// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX"
//( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$("h1").eq(0).text( "Antraste nr 1" );
$("h1").eq(1).text( "Antraste nr 2" );

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$("section  h2").text( "Pakeista antraste" );

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

let manoLi = $("li.reklama").text();
console.log( manoLi );

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naudojant jQuery)


let manoAbout = $("li").eq(1).text();
let manoGallery = $("li").eq(2).text();
$("li").eq(1).text( manoGallery );
$("li").eq(2).text( manoAbout );


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
