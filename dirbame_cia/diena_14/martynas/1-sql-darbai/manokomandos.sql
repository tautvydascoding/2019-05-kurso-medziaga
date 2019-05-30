--komentaras
--parodo visas DB.
show databases;

-- !!! issirinkti DB (TIK joje veiks visos komandos)
use mysql;


show tables;

SELECT * FROM user;


SELECT Users, Password, Delete_priv FROM user;

--sukuria duombaze

CREATE DATABASE hospital5;

--stulpelio kurimas

CREATE TABLE doctors(
    id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    name  VARCHAR(25),
    lname  VARCHAR(30)
);

--duombaziu duomen supildymas

INSERT INTO doctors VALUES (null, "Tim", "Logan");
INSERT INTO doctors VALUES (null, "Paul", "Leo");
INSERT INTO doctors VALUES (null, "Ona", "Onutaite");
INSERT INTO doctors VALUES (null, "Lite", "Rene");
INSERT INTO doctors VALUES (null, "Koris", "Pitas");


--trinant unikalius vartotojus
DELETE FROM doctors WHERE id=1;

CREATE TABLE patients(
    id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    name  VARCHAR(25),
    lname  VARCHAR(30),
    doctor_id INT(6)

);

INSERT INTO patients VALUES (null, "Mark", "John", 2);
INSERT INTO patients VALUES (null, "Tom", "Karlos", 2);
INSERT INTO patients VALUES (null, "Aris", "Tiedo", 1);
INSERT INTO patients VALUES (null, "Tom", "Karlito", 3);
INSERT INTO patients VALUES (null, "Co", "John", 1);
INSERT INTO patients VALUES (null, "Tom", "Naro", 5);
INSERT INTO patients VALUES (null, "Jili", "Jato", 2);


SELECT * FROM doctors WHERE name='Lite'; --tam kad rasti zmogu pagal rodmenis
