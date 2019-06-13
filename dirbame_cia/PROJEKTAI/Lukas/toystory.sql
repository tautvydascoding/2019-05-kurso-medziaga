-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 10:26 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toystory`
--

-- --------------------------------------------------------

--
-- Table structure for table `apie`
--

CREATE TABLE `apie` (
  `id` int(11) NOT NULL,
  `nuotrauka` varchar(255) NOT NULL,
  `pavadinimas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `aprasymas` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apie`
--

INSERT INTO `apie` (`id`, `nuotrauka`, `pavadinimas`, `aprasymas`) VALUES
(1, 'apie.jpg', 'Apie ToyStory parduotuvę', 'Žaislai - vaikų džiaugsmai\r\n\r\nTurbūt kiekvienam iš mūsų prisiminus vaikystę, pirmiausia prieš akis išnyra mylimiausi žaislai: lėlės, kaladėlės, mašinėlės, linksmi barškučiai, pliušiniai žaisliukai. Pačius mylimiausius nuolat nešiodavomės su savimi ir eidavome kartu miegoti. Galbūt kai kuriuos iki šiol esame išsaugoję ir mums gera prie jų prisiliesti, priglausti prie savęs, tuomet užplūsta malonūs jausmai ir laiku nusikeliame atgal į vaikystę, kuomet mus glostė mylimos mamos rankos, o nagingi tėčiai sumeistraudavo rankų darbo žaislus. Būdavo taip linksma ir gera.\r\n\r\nŽaislai - mokymosi priemonė\r\n\r\nNiekam nebe paslaptis, kad žaislai yra pirmoji vaikų lavinimo ir ugdymo priemonė. Mažyčiai kūdikių pirštukai susipažįsta su formomis, funkcijomis, akys su spalvomis. Vėliau, paūgėję vaikučiai, mokosi veiksmo ir atoveiksmio proceso, pavyzdžiui, paspaudus mygtuką, užgroja muzikėlė ar išlenda figūrėlė.\r\n\r\nKūribiniai ir lavinamieji žaislai ugdo smulkiąją motoriką, loginį mąstymą. Vaikai išmoksta įv');

-- --------------------------------------------------------

--
-- Table structure for table `atsiliepimai`
--

CREATE TABLE `atsiliepimai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pastas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atsiliepimas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atsiliepimai`
--

INSERT INTO `atsiliepimai` (`id`, `vardas`, `pastas`, `atsiliepimas`, `data`) VALUES
(10, 'lukasmartinaitis', 'server4you.lt@gmail.com', 'aaaa', '2019-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `berniuku_prekes`
--

CREATE TABLE `berniuku_prekes` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `trumpas_aprasymas` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `aprasymas` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `kaina` double NOT NULL,
  `img_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berniuku_prekes`
--

INSERT INTO `berniuku_prekes` (`id`, `pavadinimas`, `trumpas_aprasymas`, `aprasymas`, `kaina`, `img_name`) VALUES
(38, 'Puzlė', 'Sudėliok visą pasaulį!', 'Sudėliok visą nuostabų mūsų pasaulį.\r\nDidelė dėlionė iš 24 didelių dalių. Dėlionė sudėta į gražią dovanų dėžutę. Dėžutė turi rankeną, todėl bus labai patogi vaikui nešiotis. \r\nPuikus lavinamasis ekologiškas žaislas. Žaislas gaminamas iš perdirbto popieriaus ir augalinių nekenksmingų dažų.', 19.89, '1_bern.jpg'),
(39, 'Žaidimų kilimėlis', 'Žaidimų kilimėlis ir žaislų krepšys', 'Tai žaislų krepšys, kuris padės Jums palaikyti tvarką namuose, kuriuose yra vaikų ir jų žaislų. Ištiestas krepšys bus žaidimų ar poilsio kilimėlis, o patraukus už virvutės jis taps puikiu krepšiu žaislams.', 34.49, '2_bern.jpg'),
(40, 'Magnetinis žaidimas', 'magnetiniai superherojai', 'Du draugai - magnetiniai superherojai turi rimtų planų šiandien. Padėk jiems susiruošti rimtai dienai. Reiks rinkti net iš 59 magnetinių dalių - variantų tikrai daug. Išrink pačius tinkamiausius šiai dienai!\r\nRinkinį sudaro dvi magnetinės lėlytės, du medinia stoveliai padedantys joms stovėti, 59 magnetiniai rūbai ar aksesuarai ir kartono dėžutė su magnetiniu uždarymu, kuri praverta virsta į gražų ', 19.99, '3-bern.jpg'),
(41, 'Kamuoliukai - šokliukai', 'Kamuoliukai', 'Super šoklus kamuoliukai! Ar spėsi pamatyti kaip jie šokinėja :)\r\nVietoj dėžutėje 4 nedideli spalvoti kamuoliukai - šokliukai.\r\nRekomenduojama vaikams nuo 6 metų.', 5.49, '4_bern.jpg'),
(42, 'Žongliravimo kamuoliukai', 'Išmokite žongliruoti', 'Išmokite žongliruoti ! Tai lavina ne tik kūną, bet ir protą.\r\nKamuoliukai tiks ir treniruotėms ir scenos pasirodymams :)\r\nViduje yra instrukcija.\r\nKamuoliuko skersmuo 6 cm.\r\nRekomenduojama nuo 6 metų.', 11.99, '5_bern_.jpg'),
(43, 'Lūpinė armonikėlė', 'Klasikinė armonikėlė', 'Gal norėtum išmokti groti lūpine armonikėle?\r\nTai klasikinė metalinė lūpinė armonikėlė, skleidžianti puikų, tikrą garsą. Armonika turi dėžutę jos nešiojimui ir medžiagėlė jos nublizginimui. Rinkinyje taip pat yra lapas su natomis. Patikėkite, ja groti neatsisakys nei trimetis, nei jo močiutė ar senelis. ', 7.49, '6_bern.jpg'),
(44, 'Kambario dekoracija', 'grožėkis žvaigždėmis', 'Stambesnių šviečiančių planetų bei įvairių smulkių žvaigdžių ir planetų rinkinys.\r\nNuo šiol ėjimas miegoti bus daug įdomesnis. Šių fantastiškų tamsoje šviečiančių žvaigždžių ir planetų dėka, šviesoms užgesus, prieš akis sužibs žvaigždėtas dangus. Daugelis mūsų atsimena turėję tokius lipdukus vaikystėje ir pamena kasnakt jų teikiamą džiaugsmą.', 8.39, '7_bern.jpg'),
(45, 'Vandens šautuvas', 'Vandens mūšiams', 'Ilgiems vandens mūšiams vasaros dienomis :)\r\nSaugokitės! Šie vandens šautuvėliai skirti tik drąsiausiems kosmoso užkariautojams. Tik pripildyk vandens.. ir į mūšį! Smagūs, nedideli ir labai ateiviški :) Dėžutėje rasite 1 žalią ir 1 oranžinį šautuvėlius. ', 5.89, '8_bern.jpg'),
(46, 'Laikinosios tatuiruotės', 'Klasikinio stiliaus', 'Klasikinio stiliaus vaikiškos tatuiruotės - mažiesiams stileivoms.\r\nTatuiruotės yra dermatologų patikrinos ir saugios klijuoti ant odos. Rinkinį sudaro 2 lapai (14x21cm) tatuiruočių lipdukų. Lengva naudoti.\r\nNaudojimas:\r\n1. išsikirpkite norimą tatuiruotę,\r\n2. nuplaukite vietą kur klijuosite,\r\n3. pridėkite tatuiruotę prie reikiamos vietos,\r\n4. stipriai paspauskite,\r\n5. švelniai nuimkite popierių an', 4.19, '9_bern.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karusele`
--

CREATE TABLE `karusele` (
  `id` int(11) NOT NULL,
  `tekstash3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tekstash4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nuotrauka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karusele`
--

INSERT INTO `karusele` (`id`, `tekstash3`, `tekstash4`, `nuotrauka`) VALUES
(1, 'Žaislų išpardavimas iki 50% nuolaidos!', 'Žaislų išpardavimas iki 50% nuolaidos!', 'slider1.jpg'),
(2, 'Žaislų išpardavimas berniukams!', 'Geriausios kainos rinkoje!', 'slider2.jpg'),
(3, 'Žaislų išpardavimas mergaitėms!', 'Geriausias pasirinkimas rinkoje!', 'slider3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `klausimai`
--

CREATE TABLE `klausimai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tema` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `zinute` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `laikas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klausimai`
--

INSERT INTO `klausimai` (`id`, `vardas`, `email`, `tema`, `zinute`, `laikas`) VALUES
(2, 'Lukas', 'frogfrog741852963@gmail.com', 'Tema', 'Kod?l pasirinkote tok? keist? dizain? ?aisl? parduotuvei?', '2019-06-10 14:12:23'),
(3, 'Lukas', 'frogfrog741852963@gmail.com', 'Tema', 'aaa', '2019-06-13 09:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `id` int(11) NOT NULL,
  `gatve` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `namo_numeris` int(10) NOT NULL,
  `pasto_kodas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `miestas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mob_nr1` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mob_nr2` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pastas1` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pastas2` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `gatve`, `namo_numeris`, `pasto_kodas`, `miestas`, `mob_nr1`, `mob_nr2`, `pastas1`, `pastas2`) VALUES
(1, 'Vytauto pr', 24, '44355', 'Kaunas', '+ 123 456 700', '+ 987 654 321', 'info@toystory.lt', 'marketing@toystory.lt');

-- --------------------------------------------------------

--
-- Table structure for table `mergaiciu_prekes`
--

CREATE TABLE `mergaiciu_prekes` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `trumpas_aprasymas` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `aprasymas` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `kaina` double NOT NULL,
  `img_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mergaiciu_prekes`
--

INSERT INTO `mergaiciu_prekes` (`id`, `pavadinimas`, `trumpas_aprasymas`, `aprasymas`, `kaina`, `img_name`) VALUES
(5, 'Kostiumas drambliukas', 'Lavina vaiko fantaziją', 'Šis drambliuko kostiumas pasiruošęs padėti kažkam tapti tikru trimituojančiu drambliuku.\r\nKostiumą sudaro miela kepuraitė su drambliuko veiduku ir ausytėmis bei uodegytė. Kostiumas patiks vaikams, nes jį labai paprasta apsivilkti. Be to, vaidinant su šiuo kostiumu nepasidaro karšta.\r\n', 16.99, '1_merg.jpg'),
(6, 'Medinė lėlytė - princesė', 'Princesė Frančeska', 'Medinė lelytė Frančeska yra karūnuota, ilgaplaukė princesė.\r\nNors ir princesė - Frančeska labai draugiška. Ji pakankamai maža, kad tilptų į kišenę ir pakankamai didelė dideliems nuotykiams.\r\n\r\n„Budkins“ - mieli, užsiėmę įvairių profesijų žmogeliukai ir pasakų personažai. Jie ieško savo vietos šiame pasaulyje ir tik tu gali padėti ją rasti!', 9.99, '2_merg.jpg'),
(7, 'Gydytojo lagaminėlis', 'Jaunam ir smalsiam gydytojui', 'Šiame lagaminėlyje pakankamai rimtas gydymo priemonių rinkinys, jo tikrai pakaks nustatyti lėlytės ar meškiuko negalavimų priežastį. Žaisliniame daktaro lagaminėlyje yra šios medžiaginės priemonės: stetoskopas, kraujospūdžio matuoklis, vaistų dėžutė, termometras, švirkštas bei gydytojo prijuoste. Puikiai tinka imitaciniams žaidimams ar pasiruošti vizitui pas gydytoją. \r\n', 31.99, '3_merg.jpg'),
(8, 'Medžiaginis triušiukų namas', 'Pasakiškas ir minkštas', 'Pasakiškas minkštas medžiaginis lėlių namas triušiukams.\r\nTriušiukų šeimynėlė: mamytė, tėtis ir kūdikėlis, gyvena jaukiame šviesių pastelinių spalvų namelyje. Namukas atsidaro ir užsidaro, kad būtų patogu viską pasiekti. Namelyje yra du kambariai, lova, kūdikio lopšys ir sofutė. Galima žaisti valandų valandas. O jei nežaidžiama, namelis turi rankenėlę ir gali būti pakabintas - pasakiška dekoracija.', 39.49, '4_merg.jpg'),
(9, 'Medžiaginė rausva karūna', 'Dvipusė rožinė karūna', 'Medžiaginė dvipusė rožinė karūna mažajai princesei.\r\nKarūnos dydis reguliuojamas lipnia juostele. Tinka vaikams nuo 1,5 iki 5 metukų.\r\n\r\n\r\n„Oskar&Ellen“ žaislus kuria dviejų vaikų Oskaro ir Ellen mama, gyvenanti Švedijoje. Šie minkšti medžiaginiai žaislai vaikams mėgstami įvairiose pasaulio šalyse jau 10 metų. Jie skirti lavinti fantazijai ir žaisti nesibaigiančius imitacinius žaidimus. ', 11.99, '5_merg.jpg'),
(10, 'Apvalios vaikiškos supynės', 'Raudonos vaikiškos supynės', 'apvalios supynės tinkamos naudoti tiek namie, tiek lauke.\r\nKeliamoji galia iki 150 kg.\r\nIšmatavimai: ø60*160 сm.\r\nSpalva juoda su raudona.', 59.95, '6_merg.jpg'),
(11, 'Medinis balansinis dviratukas ', '\"Rožinės gėlės\" 2+', 'Puikus kokybiškas, medinis balansinis dviratukas, pripučiamais ratais padeda stiprinti vaiko kojytes ir kartu lavina pusiausvyrą.\r\nPadeda stiprinti vaiko kojytes ir kartu lavina pusiausvyrą. Skirtas vaikams nuo 2 metukų. Balansisnis dviratukas pagamintas iš medžio ir turi medžiaginį maišelį. Sėdynės aukšis reguliuojasi pagal vaiko ūgį. Padangos prisipučia. Supakuota kartoninėje dėžėje.', 88.95, '7_merg.jpg'),
(12, 'Naktinis šviestuvas \"Undinėlė\"', 'Labai miela naktinė lemputė', 'Labai miela naktinė lemputė - sniego rutulys. Šviestuvas keičia spalvas, o sniegelis \"šoka\" aplink undinėlę.\r\nSniego rutulys, kurio nereikia kratyti! Lemputę reik tik įjungti ir ji švies besikeičiančiomis spalvomis, o sniegelis rutulyje \"šoks\" Po 45 minučių automatiškai išsijungia.\r\nSupakuota į gražią dėžutę, todėl puikiai tinka dovanoti.\r\nReikalingos trys AA baterijos. Jų rinkinyje nėra', 35.89, '8_merg.jpg'),
(13, 'Dainų rinkinys \"Ledų Autb\"', 'CD \"Ledų autobusiukas\"', 'Atnaujintas dainų rinkinys vaikams.\r\nAtriedėjo ilgai lauktas, atnaujintas, sumažėjęs, bet papilnėjęs pirmasis Ingos Šeduikienės dainų rinkinys \"Ledų autobusiukas\"! Jame rasite trylika spalvingų dainelių su fonogramomis (papildyta \"Žalios dainos\" ir \"Raudonos dainos\" aranžuotėmis).\r\nDainas, kurios pradžiugins įvairaus amžiaus klausytojus ir atlikėjus, įdainavo Kauno meninio kūrybinio ugdymo studijos ', 15.99, '9_merg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `email`) VALUES
(19, 'Lennox', '0f3059b9550b125d8f6e9789485cb8d1', 'lennox@gmail.com'),
(22, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@gmail.com'),
(23, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@gmail.com'),
(24, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user3@gmail.com'),
(25, 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'user4@gmail.com'),
(26, 'user5', '0a791842f52a0acfbb3a783378c066b8', 'user5@gmail.com'),
(27, 'user6', 'affec3b64cf90492377a8114c86fc093', 'user6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymai`
--

CREATE TABLE `uzsakymai` (
  `OrderID` int(11) NOT NULL,
  `prek_id` int(11) NOT NULL,
  `prekes_pavadinimas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `klien_vardas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `klien_pavarde` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uzsakymo_laikas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`OrderID`, `prek_id`, `prekes_pavadinimas`, `klien_vardas`, `klien_pavarde`, `uzsakymo_laikas`) VALUES
(6, 11, 'Meškinas', 'Lukas', 'Petraitis', '2019-06-12 16:23:41'),
(7, 27, 'Lėlė', 'Lukas', 'Martinaitis', '2019-06-12 16:23:47'),
(8, 12, 'Dviratukas', 'Lukas', 'Petraitis', '2019-06-12 16:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `virsutine_navigacija`
--

CREATE TABLE `virsutine_navigacija` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `virsutine_navigacija`
--

INSERT INTO `virsutine_navigacija` (`ID`, `login`, `registration`, `mobile`, `mail`) VALUES
(1, 'Prisijungti', 'Registruotis', '+123456789', 'mail@toystory.lt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apie`
--
ALTER TABLE `apie`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `berniuku_prekes`
--
ALTER TABLE `berniuku_prekes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `karusele`
--
ALTER TABLE `karusele`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `klausimai`
--
ALTER TABLE `klausimai`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mergaiciu_prekes`
--
ALTER TABLE `mergaiciu_prekes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD UNIQUE KEY `OrderID` (`OrderID`);

--
-- Indexes for table `virsutine_navigacija`
--
ALTER TABLE `virsutine_navigacija`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apie`
--
ALTER TABLE `apie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `berniuku_prekes`
--
ALTER TABLE `berniuku_prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `karusele`
--
ALTER TABLE `karusele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klausimai`
--
ALTER TABLE `klausimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mergaiciu_prekes`
--
ALTER TABLE `mergaiciu_prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `virsutine_navigacija`
--
ALTER TABLE `virsutine_navigacija`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
