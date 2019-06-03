-- komentaras
-- parodo visas DB-es
show databases;

-- !!! issirinkti DB (TIK joje veiks visos komandos)
use mysql;

-- pamasyti visas lenteles
show tables;

SELECT * FROM user;

SELECT User, Password, Delete_priv  FROM user;
-- sukuriam DB
CREATE DATABASE hospital5;
-- pasitikrinimui
show databases;
-- !!  BUTINA - issirinkti DB
use hospital5;

-- lenteles kurimas
CREATE TABLE doctors (
       id INT(6) AUTO_INCREMENT PRIMARY KEY,
       name varchar(25),
       lname varchar(30)
       );
-- pasitikrinti
show tables;
-- uzpildymas / idejimas
INSERT INTO doctors VALUES (null, "Tim", "Logan");
INSERT INTO doctors VALUES (null, "Paul", "Leo");
INSERT INTO doctors VALUES (null, "Ona", "Onute");
INSERT INTO doctors VALUES (null, "Lite", "Onota");
INSERT INTO doctors VALUES (null, "Koris", "Pita");
-- test
SELECT * FROM doctors;


-- lenteles kurimas
CREATE TABLE patients (
       id INT(6) AUTO_INCREMENT PRIMARY KEY,
       name varchar(25),
       lname varchar(30),
       doctor_id INT(6)
       );
-- pasitikrinti
show tables;
INSERT INTO patients VALUES (null, "Mark", "Johm", 2);
INSERT INTO patients VALUES (null, "Tom", "Karlos", 2);
INSERT INTO patients VALUES (null, "Aris", "Tiedo", 1);
INSERT INTO patients VALUES (null, "Tom", "Karlito", 3);
INSERT INTO patients VALUES (null, "Co", "John", 1);
INSERT INTO patients VALUES (null, "Tom", "Naro", 5);
INSERT INTO patients VALUES (null, "Jili", "Jato", 4);

-- test
SELECT * FROM patients;

-- surandame visas Lita's
SELECT * FROM patients WHERE name='Lita';
