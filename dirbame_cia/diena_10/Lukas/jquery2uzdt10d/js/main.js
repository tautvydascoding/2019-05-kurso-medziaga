// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
$("h1").eq(0).text("Antraste nr: 0");
$("h1").eq(1).text("Antraste nr: 1");
//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$("section h2").text("Pakeista antraste");

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
let x = $("li.reklama").text();
console.log(x);
// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
console.log($("li").text());

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
let y = $("li").eq(1).text();
$("li").eq(1).text(     $("li").eq(2).text()  );
$("li").eq(2).text(y);

// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$(".reklama").attr("style", "color: red");

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
$("li").addClass('nav-item');
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$("li").first().addClass('active');

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
$("form input").eq(0).val("Tomas");
$("form input").eq(1).val("a@a.lt");
