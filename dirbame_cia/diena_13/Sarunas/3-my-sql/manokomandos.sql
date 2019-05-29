--komentaras--
--parodo visas DB-es
show databases;

--!! issirinkti DB (tik joje veiks visos komandos)
use mysql;

-- pamatyti visas lenteles
show tables;

SELECT * FROM user;

SELECT User, Delete_priv FROM user;
--sukuriam DB
CREATE DATABASE hospital5;
use hospital5;
-- pasitikrinimui
show databases;

--Lenteles kurimas
CREATE TABLE doctors (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name varchar(25),
        lname varchar(30)
        );
--pasitikrinti
show tables;
--uzpildymas / idejimas
INSERT INTO doctors VALUES (null, "Tim", "Logan");
INSERT INTO doctors VALUES (null, "Paul", "Leo");
INSERT INTO doctors VALUES (null, "Ona", "Onute");
INSERT INTO doctors VALUES (null, "Lite", "Onota");
INSERT INTO doctors VALUES (null, "Koris", "Pita");
--test
SELECT * FROM doctors;

--Lenteles kurimas
CREATE TABLE patients (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name varchar(25),
        lname varchar(30)
        doctor_id INT(6)
        );


show tables;

SELECT * FROM patients WHERE name='Lita'
INSERT INTO patients VALUES (null, "Mark", "John");
INSERT INTO patients VALUES (null, "Tom", "Karlos");
INSERT INTO patients VALUES (null, "Aris", "Tiedo");
INSERT INTO patients VALUES (null, "Tom", "Karlito");

INSERT INTO patients VALUES (null, "Co", "John");
INSERT INTO patients VALUES (null, "Tom", "Naro");
INSERT INTO patients VALUES (null, "Jili", "Jato");
