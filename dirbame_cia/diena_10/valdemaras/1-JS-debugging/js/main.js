console.log(" Labas ");
// bug - klaida
// debuger - klaidu ieskojimas

let i = 0;
// kes treciam duoti paskola. turime 12 norinciu
let arDuotiPaskola = false;
let pretendentai = [];
for ( i = 0; i < 13; i+=3 ) {
    pretendentai[i] = true;
}
console.log( pretendentai.join("; "));
console.log(pretendentai);
