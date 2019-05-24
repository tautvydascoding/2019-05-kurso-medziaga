// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (i = min; i <= max; i++) {
    masyvas.push("lyginis");
}

for (i = 0; i < masyvas.length; i+=2) {
    masyvas[i] = "nelyginis";
}

document.write(masyvas);
