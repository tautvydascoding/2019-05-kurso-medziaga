// document.querySelector("body").innerHTML += "<img width = 200px height = 200 px src = './img/1.png' alt = 'nuotrauka'>";

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body
// 1.2
// i <header> ir <footer> ideti <img> elementa
document.querySelector("body").innerHTML += "<header></header><footer></footer>";
document.querySelector("header").innerHTML += "<img height = 200px width = 200px src = './img/2.png' alt = 'nuotrauka'>";
document.querySelector("footer").innerHTML += "<img height = 200px width = 200px src = './img/1.png' alt = 'nuotrauka'>";

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px



// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$("header img").addClass('logo')

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
$("header").prepend('<main>text</main>');
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
$("body").append("<article><h2>Antraste 2</h2> <p>Lorem Lorem Lorem</p></article>");
// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa
$("article").appendTo("main");

// 1.8
// perkelti LOGOTIPA i kita vieta naudojant js
// A) perkelti i footer
$("img.logo").appendTo('footer');
// B) perkelti i article ( tarp h2 ir p)
$("img.logo").appendTo('article')

// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5

$("img.logo").click(function() {
    $("img.logo").css('position', 'absolute');
    $("img.logo").animate({
          left: "93%",
          bottom: "87%",
          opacity: "0.5",
      },
        {
            duration: "slow"
        }
    );
});
