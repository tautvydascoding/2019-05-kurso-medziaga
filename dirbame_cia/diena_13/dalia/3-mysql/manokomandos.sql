--komentaras
--parodo visas DB terminale
show databases;

--!!! issirinkti duomenu baze, tik joje veiks visos komandos
use msql;

--pamatyti visas lenteles
show tables;

SELECT * FROM user;

SELECT User, Password, Delete_priv FROM user;

--sukuriame duomenu baze
CREATE DATABASE hospital5;
use hospital5;

--pasitikrinam

show databases;

--lenteles kurimas

CREATE TABLE doctors(
id INT (6) AUTO_INCREMENT PRIMARY KEY,
name varchar(25),
lname varchar(30)
);
--pasitikrinti
show tables;
--uzpildymas/idejimas

INSERT INTO doctors VALUES (NULL, "Tim", "Logan");
INSERT INTO doctors VALUES (NULL, "Paul", "Leo");
INSERT INTO doctors VALUES (NULL, "Ona", "Onute");
INSERT INTO doctors VALUES (NULL, "Lite", "Jopt");
INSERT INTO doctors VALUES (NULL, "Koris", "Kukul");
--testas

SELECT * FROM doctors;

CREATE DATABASE patients;
use hospital5;

CREATE TABLE patients(
id INT (6) AUTO_INCREMENT PRIMARY KEY,
name varchar(25),
lname varchar(30),
doctor_id INT (6)
);

INSERT INTO patients VALUES (NULL, "Mark", "Logan", 2);
INSERT INTO patients VALUES (NULL, "Tom", "Leo", 2);
INSERT INTO patients VALUES (NULL, "Aris", "Onute", 1);
INSERT INTO patients VALUES (NULL, "Tom", "Jopt", 3);
INSERT INTO patients VALUES (NULL, "Co", "Blala", 1);
INSERT INTO patients VALUES (NULL, "Tom", "Damdam", 5);
INSERT INTO patients VALUES (NULL, "Jili", "Polop",4);
