-- // UZDUOTIS
-- // Pasikartoti DB kurima
-- // 1. Sukurti DB 'blogas'

CREATE DATABASE "blogas";

-- // 2. sukurti table/lentele 'straipsniai' :
-- CREATE TABLE table_name (
--     column1 datatype,
--     column2 datatype,
--     column3 datatype,
--    ....
-- );

    CREATE TABLE straipsniai (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        title varchar(255),
        description text,
        date datetime,
        author varchar(60)
    );

-- // strulpeliai: id (INT), title(varchar(255)), description (text), date (datetime), author(varchar(60))
-- // 3. ideti pora straipnsiu  (ne Lorem)
-- INSERT INTO table_name (column1, column2, column3, ...)
-- VALUES (value1, value2, value3, ...);
insert into straipsniai values (null, "Smilkalai", "Smilkalai – kvapiosios medžiagos, kurios smilkdamos skleidžia aromatą. Smilkalai naudojami daugelyje religinių apeigų, taip pat medicininiais, estetiniais tikslais.

Žmonės jau tūkstančius metų žino kaip išgauti aromatus iš kvapių dervų, medienos gabalėlių, žolių, šaknų, žievės, sėklų, žiedų. Smilkalai naudojami šventyklose, ritualų ir ceremonijų, meditacijų metu[1], kai kur jie neatsiejami nuo laidojimo ritualų ir medicininės praktikos. Buityje naudojami sureguliuoti fizinius ir emocinius sutrikimus, pajusti tiesiog pasitenkinimą nuo malonaus aromato. Smilkalai, laikomi efektyviausia aromaterapine priemone (aromaterapija – mokslas apie gydymą aromatais)[2].

Antikos laikais smilkalai buvo panašūs į nedidelius skaidrius rutuliukus ir buvo laikoma kaip prabangos prekė. Dabar smilkalų galima pamatyti įvairių formų ir pavidalų (lazdelės, kūgeliai, padengti aromatizuotais milteliais). Tačiau dažnai juose vietoje natūralių kvapniųjų medžiagų naudojami sintetiniai kvapai (gaminami iš naftos pramonės medžiagų), dėl to nukenčia jų kokybė, o kartais gali net pakenkti žmogui.", date, "Lukas Martinaitis");

insert into straipsniai values (null, "BMW", "BMW AG – automobilių, motociklų ir jų variklių gamintojas Vokietijoje. Pagrindinė bendrovės būstinė yra įsikūrusi Miunchene, Bavarijos sostinėje. Visame pasaulyje BMW koncerne dirba daugiau nei 107 000 žmonių, kompanijos akcijos yra DAX indekso sudedamoji dalis.", now(), "Lukas Martinaitis");
