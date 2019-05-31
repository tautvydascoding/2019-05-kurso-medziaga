-- // uzduotis 1: istrinti gydytoja "K
DELETE from doctors
where name = "Makalas" and id = 6;
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
update patients
set name = "Karolis"
where id = 5;
-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
update patients
set name = "Tomas"
where name = "Tom";
-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
update patients
set doctor_id = 4
where name like "t%";
-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
