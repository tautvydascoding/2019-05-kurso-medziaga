-- sql komentaras

sukuriau duomenu baze

CREATE DATABASE hospital5;


-- pasitikrinimui:
show databases;

USE `hospital4`;   --!!!! isveda 'Database changed'
-- arba
USE hospital4;

-- kuriame seimos gydytoju lentele
CREATE TABLE doctors(
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30)
);
-- pasitikrinimui
 show tables;

-- 'ALTER' stirta redaguot:
-- istrinti stulpeli, prideti papildoma, pakeisti stulpelio tipa
-- ! alter - neredaguoja duomenu (ji keicia tik lenteles, lenteles struktura)
--                         id     name   lname
INSERT INTO doctors VALUES ("", "Tim", "Logan");
INSERT INTO doctors VALUES ("", "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onutaite");
INSERT INTO doctors VALUES ("", "Lite", "Rene");
INSERT INTO doctors VALUES ("", "Koris", "Pitas");
-- pasitikrinimas
 SELECT * FROM doctors;


 -- kuriame pacientu  lentele
 CREATE TABLE patients(
         id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
         name  VARCHAR(30),
         lname  VARCHAR(30),
         doctor_id  INT(6)
 );
INSERT INTO patients VALUES ("", "Mark", "John", 2);
INSERT INTO patients VALUES ("", "Tom", "karlos", 2 );
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Kori", 3 );
INSERT INTO patients VALUES ("", "Co", "Jo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Naro", 5 );
INSERT INTO patients VALUES ("", "Jili", "Joli", 4 );
 --pasitikrinimnas
 SELECT id, name, lname, doctor_id FROM patients;


  -- salygos:
   -- WHERE id=2;
   -- WHERE name='Co';
   -- WHERE name='Tom' AND lname = 'Kori';

SELECT * FROM doctors, patients  WHERE id = 2;
-- WHERE  CustomerID !=  10;
-- WHERE  NOT CustomerID =  10;

-- UZDUOTIS
-- pakeisti gydytojo 'paul' varda i 'paulius
--       lentele   stulp  nauja-reiksme       salyga
UPDATE doctors SET name="Paulius"           WHERE id=2 ;
 -- WHERE id=2 OR name="paul" OR lname="Leo";

-- kuriame paveikliuku  lentele
CREATE TABLE img (
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(100),
        patient_id  INT(6)
);
INSERT INTO img VALUES ("", "C:\Users\Aceris\Desktop\skaiciuokle\img\auto.jpg",  3 );


--  iskome 3-cios nuotraukos savininko
SELECT patients.name, patients.lname
FROM patients
INNER JOIN img ON patients.id = img.patient_id
WHERE img.id = 3;



-- // uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors WHERE name="Koris";

-- // uzduotis 2: Pakeisti "Co" varda i "Karolis"
SELECT * FROM patients;
UPDATE patients SET name = "Karolis" WHERE id= 5;
SELECT * FROM patients;

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
SELECT * FROM patients;
UPDATE patients SET name = "Tomas" WHERE name='Tom';
SELECT * FROM patients;

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  doctor_id pakeisti i "4"
SELECT * FROM patients;
UPDATE patients SET doctor_id = 4 WHERE name LIKE 'T%';
SELECT * FROM patients;

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.lname
FROM doctors, patients
WHERE    patients.doctor_id = doctors.id AND patients.name = 'Mark';
--surasti Onos Onutes paciento pavarde
SELECT patients.lname FROM patients
INNER JOIN doctors
ON   patients.doctor_id = doctors.id;
WHERE doctors.name = 'Ona';
-- ARBA

SELECT doctors.lname
FROM doctors
WHERE  doctors.id IN (SELECT doctor_id FROM patients WHERE  name = 'Mark');


 uzduotis:
 -- 0. istrinti paskutine nuotrauka
 -- 0. Pakeisti Litos pavarde i Litaitė
 UPDATE doctors
 SET lname = "Litaitė"
 WHERE id = 4;

 -- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
 SELECT * FROM doctors ORDER BY lname DESC;
 -- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
 SELECT * FROM doctors
 WHERE id < 3;
 -- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients
WHERE name LIKE 'T%';
 -- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

 SELECT * FROM doctors
 WHERE id = 4 OR id = 2;
 -- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

 SELECT * FROM doctors
 WHERE name 'Tim' OR lname 'Leo';
 -- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
 SELECT * FROM doctors
 WHERE id < 4;
 -- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
 SELECT * FROM doctors
 WHERE name != 'Ona';

 -- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
 SELECT * FROM patients
 ORDER BY name DESC;
 -- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
 UPDATE doctors
 SET name = 'Litas'
WHERE name = 'Lite';


 -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
 SELECT * FROM patients
 WHERE lname = 'Kori';
 --id randu 4
 UPDATE patients
 SET lname = 'Makalas'
 WHERE id = 4;
 -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
 UPDATE patients
 SET lname = 'Paulaitis'
 WHERE id = 4 AND lname = 'Makalas';
 -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT *FROM doctors
WHERE lname LIKE 'L%';
 --// uzduotis 1: istrinti gydytoja "Koris"
 DELETE FROM doctors WHERE name="Litas";
 --// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde






 //
