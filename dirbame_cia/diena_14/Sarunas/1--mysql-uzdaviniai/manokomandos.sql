-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors
    set name="Lita"
    WHERE id = 4;
--PASITIKRINTI--
SELECT * FROM doctors;

    show tables;

-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors ORDER BY lname DESC;
SELECT * FROM doctors ORDER BY lname ASC;
SELECT * FROM doctors ORDER BY lname;

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors
         WHERE doctors.id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
-- SELECT * FROM patients
SELECT * FROM patients
WHERE name LIKE 'T%' ;



-- SELECT name
-- from patients
-- WHERE name = "A"
-- ORDER by name;

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors
WHERE id = 4 OR id = 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors
WHERE name = 'Tim' OR lname = 'Leo';
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors
WHERE id < 3;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
WHERE name != 'Ona';
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients
ORDER by name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)

-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides


--uzduotis
-- SURASTI GYDYTOJOS Ona Onute , paciento pavarde
SELECT patients.lname FROM patients
             INNER JOIN doctors
             ON patients.doctor_id = doctors.id;
             WHERE doctors.name = "Ona";
