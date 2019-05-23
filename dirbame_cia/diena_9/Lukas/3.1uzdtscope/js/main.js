var katinas = "juodas";   //global

function test2() {
    var katinas = "baltas";  // local
   console.log("1 katinas:", katinas);
   console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
}
test2();

console.log("3 katinas:", katinas);

//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
    document.querySelector("body").innerHTML += "<h1>" + x + "</h1>";
}
//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

function printStraipsnis(x) {
    document.querySelector("body").innerHTML += "<p>" + x + "</p>";
}

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",
printAntraste("Antraste 1")
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
printAntraste("Antraste 2")
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
printAntraste("Antraste 3")
printStraipsnis("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
