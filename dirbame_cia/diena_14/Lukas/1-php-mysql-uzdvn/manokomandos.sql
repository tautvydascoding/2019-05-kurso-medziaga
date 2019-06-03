-- surasti onos onutes paciento varda pavarde;
SELECT patients.lname -- kas domina
FROM patients -- is kurios lenteles
INNER JOIN doctors -- sujungiam su kita lentele, pagal kuria ieskosim lname.
ON patients.doctors_id = doctors.id -- pagal ka lyginam
WHERE doctors.id = 3; -- kuria reiksme imam, kad sulygintume ir gautume select reiksme


-- kitas budas

SELECT name FROM doctors, patients -- paselektina vardus is doctors ir pacientu lenteliu. bet turi abu turet
--name stulpeli.
WHERE doctors.id = patients.doctors_id AND doctors.name = "Ona"; -- isrinks visus pacientus kuriu daktaras yra
-- ona.

-- // uzduotis 1: istrinti gydytoja "Koris"
SELECT * FROM doctors
WHERE name = "litas";
DELETE FROM doctors WHERE id = 5;
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
SELECT * FROM patients WHERE name = "Co";

UPDATE patients SET name = "Karolis" WHERE doctor_id = 5;
SELECT * FROM patients WHERE name = "Karolis";
-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET name ="Tomas" WHERE name = "Tom";
SELECT * FROM patients WHERE name = "Tomas";
-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET doctor_id = 4 WHERE name LIKE 'T%';
SELECT * FROM patients WHERE name LIKE 'T%';
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.lname
FROM doctors
inner join patients
ON doctors.id = patients.doctor_id
WHERE patients.name = "Mark";

--
