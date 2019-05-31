-- // surasti Ona Onute paciento pavarde
SELECT patients.lname FROM patients
            INNER JOIN doctors
            ON patients.doctor_id = doctors.id
            WHERE doctors.name = "Ona";
-- // uzduotis 1: istrinti gydytoja "K
DELETE FROM doctors
WHERE name LIKE "K%";
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients
SET name = "Karolis"
WHERE name = "Co";
-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients
SET name = "Tomas"
WHERE name = "Tom";
-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients
SET doctor_id = 4
WHERE name LIKE "T%";
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON patients.doctor_id = doctors.id
WHERE patients.name = "Mark";
--
--
--
--
--
-- //
