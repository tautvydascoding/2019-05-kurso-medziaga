console.log(" Labas ");


//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$('.uzduotis6').click(function(){
  $("h2.reklama").attr("style", "color: red");
})

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
$(".uzduotis7a").click(function(){
  $('li').attr("class", "nav-item");
})

// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$('.uzduotis7b').click(function(){
  $("li:first").addClass("active");
})


// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
