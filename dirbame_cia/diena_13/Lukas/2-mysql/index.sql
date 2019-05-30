-- komentaras
-- parodo visas duomenu bazes jau esamas
show databases;

-- !! issirinkti duomenu baze, tik joje veiks visos komandos.
use mysql;
-- pamatyti visas lentele
show tables;

SELECT * FROM user;
SELECT User, Password, Delete_priv FROM user; -- issirenki userius, kurie turi delete privilegija.
CREATE DATABASE pavadinimas; -- sukuria duomenu baze
CREATE TABLE pavadinimas (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, -- pavadinimas, duomenu tipas pvz INT - skaiciai, skaiciai skliaustuose max nurodo ilgi , auto_inciment automatiskai didina skaiciu, kai atsiranda naujas narys lentelei, PRIMARY KEY  reiskia, kad negali buti dvi vienodos reiksmes. Pvz uzdetum primary key ant vardo, tai tada negaletu buti du vienodi Tomai.
    name VARCHAR(25),
    lname VARCHAR(30)
);

-- UZPILDYMAS ------------------------
