let klase = [
    {
        vardas: "Jolita",
        pazymiai: [10, 7, 9, 9, 5, 6]
    },
    {
        vardas: "Dalia",
        pazymiai: [10, 2, 3, 4, 5, 6]
    },
    {
        vardas: "Lukas",
        pazymiai: [1, 2, 3, 4, 5, 6]
    },
    {
        vardas: "Valdemaras",
        pazymiai: [1, 7, 10, 10, 5, 6]
    },
    {
        vardas: "Sarunas",
        pazymiai: [8, 9, 10, 10, 5, 6]
    },
    {
        vardas: "Martynas",
        pazymiai: [8, 9, 10, 10, 7, 2]
    }
];

console.log("Klasiokų kiekis: ", klase.length);
klase.forEach(function(obj) {
console.log(obj.vardas);
});


//for (let i = 0; i < arr.length; i++) {
  //alert( arr[i] );
//}
