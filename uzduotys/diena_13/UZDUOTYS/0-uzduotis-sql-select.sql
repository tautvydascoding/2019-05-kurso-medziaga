-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė



-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3

-- 3. ISVESTI paciantus kuriu vardas is raides "A"
-- SELECT * FROM patients
-- WHERE name >= 'A'
-- ORDER BY name;


-- SELECT name
-- from patients
-- WHERE name = "A"
-- ORDER by name;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors
set name = "Makalas"
WHERE id=6;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde) //KLAIDA
UPDATE doctors
set lname = "Paulaitis"
WHERE id=6 and name = "Makalas";
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
