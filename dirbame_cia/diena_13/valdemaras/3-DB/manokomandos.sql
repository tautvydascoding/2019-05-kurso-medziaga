-- kementarai
-- parodo visas DB
show databases;

-- !!!!!! issirinkti DB, tik joje veiks visos komandos
use mysql;

-- pamatyt visas lenteles
show tables;

SELECT * FROM user;

SELECT User, Password, Delete_priv FROM user;

-- sukuria DB
CREATE DATABASE hospital5;
-- pasitikrinti
show databases;

-- kursim lenteles
CREATE TABLE doctors (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(25),
    lname varchar(30)
    );

-- uzpildymas / idejimas
INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan');
INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute');
INSERT INTO doctors VALUES (NULL, 'Lita', 'Onata');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pits');
-- pasitikrinti
SELECT * FROM doctors;

CREATE TABLE patients (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(25),
    lname varchar(30),
    doctor_id INT(6)
    );

INSERT INTO patients VALUES (NULL, 'Mark', 'Joks', 2);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Trodo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlito', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'John', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jili', 'Jato', 4);

SELECT * FROM patients;

UPDATE doctors
SET name = "Lite"
WHERE id=4;



UPDATE doctors
set lname = "Makalas"
WHERE id=5;

-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors
SET lname = "Litaitė"
WHERE id=4;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors
ORDER BY lname ASC;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors
WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"

SELECT * FROM patients
WHERE name LIKE 'A%'
ORDER BY name;


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors
WHERE Id=4 OR Id=5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors
WHERE name = "Tim" OR lname = 'Leo';
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors
WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
WHERE name <> "Ona";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients
ORDER BY name;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors
SET name = "Litas"
WHERE id=4;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors
SET lname = "Makalas"
WHERE id=5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE doctors
SET lname = "Paulaitis"
WHERE Id=5 AND lname "Makalas";

-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors
WHERE lname LIKE 'L%';
