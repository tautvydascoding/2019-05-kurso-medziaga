show databases; --Parodo duomenu bazes
--- Tada reikia issirinkti dumenu bazes. Tik joje veiks komandos tolimesnes

use mysql;

--- pamatyti visas lenteles

show tables;
SELECT User, Password, Delete_priv FROM user;

--Sukuriam duomenu baze
CREATE DATABASE hospital5;
use hospital5;

--Lenteles kurimas

CREATE TABLE doctors (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar (25),
  lname varchar (30)
);

-- Pridedam duomenu

INSERT INTO doctors VALUES (null, "Tim", "Logan");
INSERT INTO doctors VALUES (null, "Kazys", "Loga");
INSERT INTO doctors VALUES (null, "Ugne", "Gan");
INSERT INTO doctors VALUES (null, "Tomas", "Ogan");
INSERT INTO doctors VALUES (null, "Jis", "Loan");
INSERT INTO doctors VALUES (null, "Ji", "Lo");

SELECT * FROM doctors;

--- Kuriu nauja lentele

CREATE TABLE patients (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar (25),
  lname varchar (30),
  doctor_id INT(6)
);

INSERT INTO patients VALUES (null, "Mark", "Logan", 2);
INSERT INTO patients VALUES (null, "Tom", "Loga", 2);
INSERT INTO patients VALUES (null, "Aris", "Gan", 1);
INSERT INTO patients VALUES (null, "Tom", "Ogan", 3);
INSERT INTO patients VALUES (null, "Co", "Loan", 1);
INSERT INTO patients VALUES (null, "Tom", "Lo", 5);
INSERT INTO patients VALUES (null, "Juli", "Loan", 4);

-- uzduotis:
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors
SET lname = 'Litaite'
WHERE name = 'Ji';

-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- 3. ISVESTI paciantus kuriu vardas is raides "A"

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
