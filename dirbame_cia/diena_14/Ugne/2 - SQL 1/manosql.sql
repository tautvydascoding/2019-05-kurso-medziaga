-- // uzduotis 1: istrinti gydytoja "Jis"
DELETE FROM doctors
WHERE name = "Jis";

-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients
SET name = 'Karolis'
WHERE name = 'Co';

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients
SET name = 'Tomas'
WHERE name = 'Tom';

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients
SET doctor_id = '4'
WHERE name LIKE 't%';

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT lname FROM patients
WHERE name = "Mark";
