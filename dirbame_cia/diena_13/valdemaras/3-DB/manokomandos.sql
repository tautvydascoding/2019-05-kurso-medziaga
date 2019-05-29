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
