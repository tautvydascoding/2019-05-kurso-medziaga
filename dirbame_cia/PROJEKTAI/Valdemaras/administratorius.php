<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="css/main.css">


<?php
include('db_functions.php');
// print_r($_POST);
$user = $_POST['uname'];
$password = $_POST['psw'];
userCheck($user, $password);






 ?>
<main class="container">

    <h1 class="centruoti"> Produktai </h1>
    <div class="row">
        <!-- <section class="col"> -->

<a href='creatPreke.php'><button type="button" class="btn btn-success">Sukurti preke</button></a> <br />
</div>
<div class="row">

<?php
$visosPrekes = getvisosPrekes();
$vienaPreke = mysqli_fetch_assoc($visosPrekes);

while ( $vienaPreke ) {
    echo "<div class=col-md-4 col-xs-12>";
  echo " <h2>"  . $vienaPreke['pavadinimas'] ."</h2>";
  echo " <p>"  . $vienaPreke['aprasymas'] ."</p>";
  echo "<a href='deletePreke.php?nr={$vienaPreke['id']}'><button type='Submit' name='Trinti' class='btn btn-danger'> trinti </button></a>";
  echo "<a href='editPreke.php?nr={$vienaPreke['id']}'><button type='Submit' name='Redaguoti' class='btn btn-warning'> redaguoti </button></a>";
  echo "</div>";
$vienaPreke = mysqli_fetch_assoc($visosPrekes);
 }
             ?>

             <h1> Prekių aprašymai trumpi </h1>
             <?php
             // include('db_functions.php');
             $visosPrekes = getTrumpi();
             $vienaPreke = mysqli_fetch_assoc($visosPrekes);

             while ( $vienaPreke ) {
                 echo "<div class=col-md-4 col-xs-12>";
               echo " <h2>"  . $vienaPreke['pavadinimas'] ."</h2>";
               echo " <p>"  . $vienaPreke['aprasymas'] ."</p>";
               echo "<a href='deletePreke.php?nr={$vienaPreke['id']}'><button type='Submit' name='Trinti' class='btn btn-danger'> trinti </button></a>";
               echo "<a href='editPreke.php?nr={$vienaPreke['id']}'><button type='Submit' name='Redaguoti' class='btn btn-warning'> redaguoti </button></a>";
               echo "</div>";
             $vienaPreke = mysqli_fetch_assoc($visosPrekes);
              }
              ?>
          </div>


</main>
