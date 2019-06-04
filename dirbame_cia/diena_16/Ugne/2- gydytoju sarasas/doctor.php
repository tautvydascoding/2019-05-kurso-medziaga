<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        include('db_functions.php');


        $id = $_GET['id'];
        $gydytojas = getDoctor( $id );
        echo "<h1>Asmeninis gydytojo puslapis: " . $gydytojas['name'] . " " . $gydytojas['lname'] . "</h1><hr />";


        $doctorID = $_GET['id'];
        $patients = getPatients($doctorID);
        $patient = mysqli_fetch_assoc($patients);

          while ($patient == true){
            echo "<li>" . $patient['name'] . " " . $patient['lname'] . "</li>";
            $patient = mysqli_fetch_assoc($patients);
          }


      // echo "<ul>";
      // for($i=1; $i<count($allPatients)+1; $i++){
      //   echo "<li>" . getPatient($i)['name'] . " " . getPatient($i)['lname'] . "</li>";
      // }
      // echo "</ul>";


         ?>


    </body>
</html>
