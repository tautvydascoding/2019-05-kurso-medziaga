$(".slepti").click(function() {
    $("p").hide(3000);
});
$(".rodyti").click(function() {
    $("p").show(3000)
});

console.log($(".rodyti")); // grazina jquery elementa, ant jo veikia jquery komandos. Kitaip nei ant tu kurie grazinti kaip DOM elementai.
console.log(document.querySelector('.rodyti')); // taisiklingas budas
let manoMygtukas = document.querySelector('.rodyti'); // Grazina DOM elementa, ant jo neveikia jquery komandos.
console.log(manoMygtukas.innerHTML); // innerHTML veikia, nes tai yra querySelector tesinys.
