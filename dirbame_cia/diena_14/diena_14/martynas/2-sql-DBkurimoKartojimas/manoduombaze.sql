CREATE DATABASE blogas;

CREATE TABLE straipsniai (

    id INT(6) AUTO_INCREMENT    PRIMARY KEY,
    title varchar(255),
    description text,
    data date,
    author varchar(60)
);


INSERT INTO straipsniai VALUES (null, "Gyvenimas Kaip Kinas", "„Gyvenimas kaip kinas“ – tai laida ne tik apie konkrečius žmones. Projekto kūrybinė grupė pasižvalgys ir po istoriją, kur knibždėte knibžda dar neatrastų ar neeskaluotų faktų. „Pavyzdžiui, papasakosime, kaip tarpukario Lietuvoje atrodė nudistų paplūdimys Druskininkuose... Bus pasakojimų ir apie šimtmečius menančius Lietuvos dvarus, pokalbiai su jų savininkų provaikaičiais. Nevengsime meno istorijos temų“, - pasakoja laidos kūrėja.

Skaitykite daugiau.", null, "Žmogus");
