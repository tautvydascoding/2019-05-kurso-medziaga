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
                    <h2 class = 'text-center' >Atsiliepimu kontrolė</h2>
                    <table style = 'width: 100%'>
                        <tr>
                            <th class = 'text-center'>Atsiliepimo ID</th>
                            <th class = 'text-center'>Vardas</th>
                            <th class = 'text-center'>Elektroninio pašto adresas</th>
                            <th class = 'text-center'>Atsiliepimas</th>
                            <th class = 'text-center'>Data</th>
                            <th class = 'text-center'>Trinti</th>
                    <div>
                    </tr class = 'text-center'>
                        <?php
                        echo "<h2 class= 'bg-red'>Atsiliepimu valdymas</h2> <h3>Norėdami matyti pasikeitimus po ištrinimo perkraukite puslapį (F5)</h3>";
                        include("db_functions.php");
                        $nr = 1000;
                        $vardasOBJ = getAtsiliepimai();
                        $vienasVardasArray = mysqli_fetch_assoc($vardasOBJ); // paima pirma elementa is objekto ir pavercia masyvu
                        if (mysqli_num_rows($vardasOBJ) > 0) {
                            // mysqli_fetch_assoc - paima viena eilue is OBJ ir pavercia i array
                        $i = 1;
                            while ($vienasVardasArray == true) {
                                echo "
                                                    <th class = 'text-center'>" . $vienasVardasArray['id'] . "</th>
                                                    <td class = 'text-center'>" . $vienasVardasArray['vardas'] . "</td>
                                                    <td class = 'text-center'>" . $vienasVardasArray['pastas'] . "</td>
                                                    <td class = 'text-center'>" . $vienasVardasArray['atsiliepimas'] . "</td>
                                                    <td class = 'text-center'>" . $vienasVardasArray['data'] . "</td>
                                                    <td class = 'text-center'> <a href ='trinti-atsiliepima.php/?id=" . $vienasVardasArray['id'] ."'><button class = 'btn btn-danger'>Trinti</button></a> </td>
                                                    </tr>
                                                </div>

                                ";
                                $vienasVardasArray = mysqli_fetch_assoc($vardasOBJ);
                                $i = $i + 1;
                            }
                        } else {
                            echo "Neradome nei vieno atsiliepimo.<br />";
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










<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin panel</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">

                </div>
            </div>
        </div>
    </body>
</html>
