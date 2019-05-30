-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors
set lname = "Litaitė"
WHERE id=5;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors
ORDER BY lname ASC;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors
WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
-- SELECT * FROM patients
-- WHERE name >= 'A'
-- ORDER BY name;

select * from patients
WHERE name like 'a%';

-- SELECT name
-- from patients
-- WHERE name = "A"
-- ORDER by name;

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
select * from doctors
where id = 5 and id = 4;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * from doctors
where name = "Tim" or lname = 'Leo';
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors
WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
where not name = 'Ona';
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda

SELECT * FROM patients
ORDER BY name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors
set name = "Litas"
WHERE id=5;


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors
set name = "Makalas"
WHERE id=6;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE doctors
set lname = "Paulaitis"
WHERE id=6 and name = "Makalas";
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
select * from doctors
WHERE lname like 'l%';


--

SELECT patients.lname from patients
            inner join doctors
            on patients.doctor_id = doctors.id
            where doctors.name = "Ona";
