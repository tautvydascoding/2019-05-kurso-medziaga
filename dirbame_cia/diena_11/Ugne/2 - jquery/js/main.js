console.log(" Labas ");
$("h1").hide(800);
$(".rodyti").hide();

$(".paslepti").click(function(){
  $("p").hide(500);
  $(".rodyti").show(800);
})

$(".rodyti").click(function(){
  $("p").show(500);
})

console.log($(".paslepti"));
console.log ( document.querySelector(".paslepti"));
