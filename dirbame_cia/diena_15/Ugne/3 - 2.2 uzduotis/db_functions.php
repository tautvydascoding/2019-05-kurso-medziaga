<?php
require_once('config.php');

// include_once
// include

$prisijungimas = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);

// Kal lietuviskos raides veiktu

mysqli_set_charset($prisijungimas, 'utf8');

//PRISIJUNGIMAS, tikrinam ar prisijungiam

if(!$prisijungimas){
  echo "Bandykite taisyti klaidas";
}
//Norint rasyti komandas SQL getprisijungimas() bus kaip $prisijungimas
function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}





function getDoctor($x){
  $query = "SELECT name, lname, id FROM doctors WHERE id=$x";
  $result = mySQLi_query(getPrisijungimas(), $query);
  // prit_r ($result); pasitikrinimui
  $result = mysqli_fetch_assoc($result);
  // $result = mysqli_fetch_row($result); - paprasta masyva grazina
  // print_r ($result);
  return $result;
}


// $gydytojas2 = getDoctor(2);
// $gydytojas3 = getDoctor(3);
// $gydytojas4 = getDoctor(4);
// $gydytojas1 = getDoctor(1);

// print_r (getDoctor(4));



 ?>


<!-- // UZDUOTIS
// google CRUD



// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja is DB naudojant foreach ir getDoctor($nr) f-ja

// UZDUOTIS 1.2:
// be foreach atspausdinti visa gydytojo info
// <h2> <em>nr</em> vardas pavarde</h2>

// UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info m-1'> vardas pavarde</h2>

// UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php
// C)    index failo cikle (1.3) ideti:
//       include  (' template-item.php');
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti -->
