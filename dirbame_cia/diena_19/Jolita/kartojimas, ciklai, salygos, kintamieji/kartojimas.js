function myFunction() {
  var carName = "Volvo";
  // scope funkcijos viduje, vadinasi localus
}
myFunction();    //iskvieciu funcija, kad suveiiktu
//console.log(carName);    //nieko negrazina

function localScopeExample(){
  // LOCAL SCOPE
  var cat = 'Jerry';
  console.log(cat); // Jerry
}
localScopeExample();
// GLOBAL SCOPE
//console.log(cat); // Uncaught ReferenceError: cat is not defined

var j=1;
while (j<4) {
    console.log("j");
    j++;
}
// grazino tris kart j, nes nurodeme kabutese kaip stringa ne kaip skaiciu

var j=1;
while (j<4) {
    console.log(j); //spausdina skaicius 1;2;3
    j++;
}
var temp=''; //globali, sukurta ne funkcijos viduje
for (var i = 0; i < 4; i++) {
    temp +="prasidejo"; //pries tai buvusi reiksme tampa pati reiksme+"prasidejo"
}
console.log(temp); //0-prasidejo;1-prasidejoprasidejo;
//2-prasidejoprasidejoprasidejo;
//3-prasidejoprasidejoprasidejoprasidejo;
//console log ne ciklo viduje, todel grazina tik galutine reiksme

var getReiksme = function(){ //js kintamasis savyje gali tureti funkcija
    console.log('kosti');
};
function spausdina(x, y){ //funkcija, kuri laukia geliu
    console.log(x); //funkcijai suveikus,atspausdins paduota pirmaji kintamaji
    y(); //antrojo kintamojo reiksme bus paduota iskvieciant
}
spausdina('serga', getReiksme); //serga atspausdins, kaip paprasta stringa

//js nelegalus kintamasis - jei prasideda skaiciumi, spec simboliu
//f-ja switch kai tikrai zinai is anksto, ko ieskai

function getVardas(){
    let vardas = "Tomas";
    return vardas; //jei nenurodai grazinti reiksme, funkcijai ivykus, ji nieko neduos spausdinimui
}
console.log(getVardas());

//kuriant kintamaji be let, var zodelio, jis tampa globalus
//kai x=10, x+=3 reiskia x=x+3 x=10+3=13
//x++ reiskia x=x+1 didinu vienu turima reiksme ir ja isimenu
//&& privalo atitikti visas salygas
// du status bruksniai reiskia, kad privalo atitikti bent viena is salygu
//kintamuju deklaracija, kai juos isvardinu
//kintamuju initialize pradine reiksme sukurimas
