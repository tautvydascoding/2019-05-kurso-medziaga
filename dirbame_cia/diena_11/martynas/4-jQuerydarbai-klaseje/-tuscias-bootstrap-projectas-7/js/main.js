console.log(" Labas ");
//  visur naudoti tik jQuery!!!!!!


// .html kodas:
// <h1>Isijunk konsole</h1>
// <h1>Isijunk konsole</h1>
//
// <h2> 1. h2 Isijunk konsole</h2>
// <h2> 2. h2 Isijunk konsole</h2>
// <h2> 3. h2 Isijunk konsole</h2>
//
//  <section>
//      <h2 class='reklama'> 1. h2 Isijunk konsole</h2>
//      <h2> 2. h2 Isijunk konsole</h2>
//      <h2> 3. h2 Isijunk konsole</h2>
//      <h2> 4. h2 Isijunk konsole</h2>
//  </section>
//
// <ul>
//     <li>Home</li>
//     <li>About</li>
//     <li class='reklama'>Gallery</li>
//     <li>Contact</li>
// </ul>
//
// <form>
// 	<input type="text" name="vardas" value="">
// 	<input type="email" name="pastas" value="">
// </form>

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$("h1").eq(0).text("Antraste nr: 1");
$("h1").eq(1).text("Antraste nr: 2");

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$("h2").text("Pakeista antraste");

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
let reklamaLi = $("li.reklama").text();
console.log(reklamaLi);
// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
let elementasLi = $("li").text();

console.log(elementasLi);
//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
// $("li").toggleClass('B C');
let manoAbout = $("li").eq(1).text();
let manoGallery = $("li").eq(2).text();
$("li").eq(1).text( manoGallery );
$("li").eq(1).text( manoAbout );



// =========================================My way
let laikinas = "about";

$("li").eq(1).text("gallery");
$("li").eq(2).text("about");





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
