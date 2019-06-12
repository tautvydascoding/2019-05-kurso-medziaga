-- -----------------Duomenu bazes kurimas---------------------------

CREATE DATABASE paintmeshop;
show databases;

use paintmeshop;

-- -----------------Images lenteles komandos---------------------------

CREATE TABLE images(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50)
);

INSERT INTO images VALUES (null,'header-img-1');
INSERT INTO images VALUES (null,'header-img-2');

INSERT INTO images VALUES (null,'acrylic-canva-playing.jpg');
INSERT INTO images VALUES (null,'acrylic-canva-contrast.jpg');
INSERT INTO images VALUES (null,'acrylic-canva-goals.jpg');
INSERT INTO images VALUES (null,'acrylic-canva-visionary.jpg');
INSERT INTO images VALUES (null,'acrylic-canva-brightside.jpg');





-- -----------------Items lenteles komandos---------------------------

CREATE TABLE items(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50),
  description varchar (500),
  price decimal(19,4),
  imgname varchar(50)
);



INSERT INTO items
VALUES (null, 'Playing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 200.00 , 'acrylic-canva-playing.jpg');

INSERT INTO items
VALUES (null, 'Bright side', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 150.00 , 'acrylic-canva-brightside.jpg');

INSERT INTO items
VALUES (null, 'Effect', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 50.00 , 'acrylic-canva-effect.jpg');

INSERT INTO items
VALUES (null, 'Contrast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 150.00 , 'acrylic-canva-contrast.jpg');

INSERT INTO items
VALUES (null, 'Visionary', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 150.00 , 'acrylic-canva-visionary.jpg');

INSERT INTO items
VALUES (null, 'Goals', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 150.00 , 'acrylic-canva-goals.jpg');


UPDATE items
SET imgname = 'acrylic-canva-playing.jpg'
WHERE name = 'Playing';

ALTER TABLE items
ADD thumbnail varchar(50);




UPDATE items
SET thumbnail = 'canva-playing-thumb.png'
WHERE name = 'Playing';

UPDATE items
SET thumbnail = 'canva-brightside-thumb.png'
WHERE name = 'Bright side';

UPDATE items
SET thumbnail = 'canva-effect-thumb.png'
WHERE name = 'Effect';

UPDATE items
SET thumbnail = 'canva-goals-thumb.png'
WHERE name = 'Goals';

UPDATE items
SET thumbnail = 'canva-contrast-thumb.png'
WHERE name = 'Contrast';

UPDATE items
SET thumbnail = 'canva-visionary-thumb.png'
WHERE name = 'Visionary';



-- ----------------- navigation lenteles komandos---------------------------

CREATE TABLE navigation(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  item varchar(50)
);

ALTER TABLE navigation
ADD link varchar(50);

UPDATE navigation
SET link = 'index.php'
WHERE id = 1;


INSERT INTO navigation VALUES (null,'Home');
INSERT INTO navigation VALUES (null,'Products');
INSERT INTO navigation VALUES (null,'About');
INSERT INTO navigation VALUES (null,'Contact');
INSERT INTO navigation VALUES (null,'Cart', 'cart.php');


-- ----------------- carousel lenteles komandos---------------------------

CREATE TABLE carousel(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  imgname varchar(50)
);

INSERT INTO carousel VALUES (null,'slider-img-1.jpg');
INSERT INTO carousel VALUES (null,'slider-img-2.jpg');
INSERT INTO carousel VALUES (null,'slider-img-3.jpg');
INSERT INTO carousel VALUES (null,'slider-img-4.jpg');

-- -----------------Contactform lenteles komandos---------------------------

CREATE TABLE contactform (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50),
  email varchar(50),
  message varchar(2000)
);


DELETE FROM navigation WHERE item = "Cart";

-- -----------------Login komandos---------------------------
CREATE TABLE users (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50),
  email varchar(50),
  password varchar(30)
);

INSERT INTO users VALUES (null, 'Ugne', 'u.gajauskaite@gmail.com', 'katukavakare');
INSERT INTO users VALUES (null, 'Test', 'u.gaja.com', 'katukavakare');

-- -----------------About aprasas komandos---------------------------
CREATE TABLE about (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  atext varchar(2000)
);

ALTER TABLE about
ADD title varchar(100);

INSERT INTO about VALUES (null, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
