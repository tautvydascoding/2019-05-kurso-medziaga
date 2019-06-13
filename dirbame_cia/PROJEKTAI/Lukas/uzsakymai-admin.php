<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link href="css/all.css" rel="stylesheet"> <!-- Awesome font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>
    <body>
        <div class = 'container'>
            <div class = 'row'>
                <div class = 'col'>
                    <h2 class = 'text-center'>Užsakymų valdymas</h2>
                    <table style = 'width: 100%'>
                        <tr>
                            <th class = 'text-center'>OrderID</th>
                            <th class = 'text-center'>Prekės ID</th>
                            <th class = 'text-center'>Prekės pavadinimas</th>
                            <th class = 'text-center'>Kliento vardas</th>
                            <th class = 'text-center'>Kliento pavardė</th>
                            <th class = 'text-center'>Užsakymo laikas</th>
                            <th class = 'text-center'>Trinti</th>
                            <th class = 'text-center'>Redaguoti</th>
                    <div>
                    </tr class = 'text-center'>
                        <?php
                        echo "<h2 class= 'bg-red'>Užsakymų valdymas</h2> <h3>Norėdami matyti pasikeitimus po ištrinimo perkraukite puslapį (F5)</h3>";
                        include("db_functions.php");
                        $nr = 1000;
                        $uzsakymasOBJ = getOrders();
                        $vienasUzsakymasArray = mysqli_fetch_assoc($uzsakymasOBJ); // paima pirma elementa is objekto ir pavercia masyvu
                        if (mysqli_num_rows($uzsakymasOBJ) > 0) {
                            // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
                        $i = 1;

                            while ($vienasUzsakymasArray == true) {
                                echo "
                                                    <th class = 'text-center'>" . $vienasUzsakymasArray['OrderID'] . "</th>
                                                    <td class = 'text-center'>" . $vienasUzsakymasArray['prek_id'] . "</td>
                                                    <td class = 'text-center'>" . $vienasUzsakymasArray['prekes_pavadinimas'] . "</td>
                                                    <td class = 'text-center'>" . $vienasUzsakymasArray['klien_vardas'] . "</td>
                                                    <td class = 'text-center'>" . $vienasUzsakymasArray['klien_pavarde'] . "</td>
                                                    <td class = 'text-center'>" . $vienasUzsakymasArray['uzsakymo_laikas'] . "</td>
                                                    <td class = 'text-center'> <a href ='trinti-uzsakyma.php/?id=" . $vienasUzsakymasArray['OrderID'] ."'><button class = 'btn btn-danger'>Trinti</button></a> </td>
                                                    <td class = 'text-center'> <a href ='uzsakymu-redagavimo-forma.php/?id=" . $vienasUzsakymasArray['OrderID'] ."'><button class = 'btn btn-danger'>Redaguoti</button></a> </td>
                                                    </tr>
                                                </div>

                                ";
                                $vienasUzsakymasArray = mysqli_fetch_assoc($uzsakymasOBJ);
                                $i = $i + 1;
                            }
                        } else {
                            echo "<h2 class= 'bg-red'>Neradome nei vieno užsakymo.</h2> <br />";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <?php  ?>
            <br>
            <a href='admin-panel.php'><button class="btn btn-primary">Atgal</button></a>
        </div>

    </body>
