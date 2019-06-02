-- // UZDUOTIS
-- // Pasikartoti DB kurima
-- // 1. Sukurti DB 'blogas'
CREATE DATABASE blogas;
-- // 2. sukurti table/lentele 'straipsniai' :
-- // strulpeliai: id (INT), title(varchar(255)), discription (text), date (datetime), author(varchar(60))
CREATE TABLE straipsniai (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    discription text,
    date datetime,
    author varchar(60)
    );

    SELECT * FROM straipsniai;
-- // 3. ideti pora straipnsiu  (ne Lorem)
INSERT INTO straipsniai VALUES (NULL, 'Straipsnis, spauskit ir suzinosit...', 'Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. Coming either suffer living her gay theirs. Furnished do otherwise daughters contented conveying attempted no. Was yet general visitor present hundred too brother fat arrival. Friend are day own either lively new.', '2019.05.30' , 'autorius');

INSERT INTO straipsniai VALUES (NULL, 'Straipsnis2', 'In alteration insipidity impression by travelling reasonable up motionless. Of regard warmth by unable sudden garden ladies. No kept hung am size spot no.', '2019-04-30' , 'Valdemaras');
