console.log(" Labas ");

//debuger - klaidu ieskojimas

let i = 0;
//kas treciam duoti paskola. turime 12 norinciu
let arDuotiPaskola = false;
let pretendentai = [];
for (let i = 0; i < 13; i+=3 ) {//i+=3 arba i=1+3
  pretendentai[i] = true;
}
console.log( pretendentai.join("; ") );
console.log( pretendentai );
