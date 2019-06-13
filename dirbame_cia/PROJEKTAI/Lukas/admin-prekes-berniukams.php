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
                    <h2 class = 'text-center>Užsakymų valdymas'></h2>
                    <table style = 'width: 100%'>
                        <tr>
                            <tr>
                                <th class="border0"><a href = '../prekiu_berniukams_idejimas.php'><button class="btn btn-success">Įdėti prekę</button></th></a>
                            </tr>
                            <th class = 'text-center'>ID</th>
                            <th class = 'text-center'>Pavadinimas</th>
                            <th class = 'text-center'>Trumpas aprašymas</th>
                            <th class = 'text-center'>Ilgas aprašymas</th>
                            <th class = 'text-center'>Kaina</th>
                            <th class = 'text-center'>Nuotraukos pavadinimas</th>
                            <th class = 'text-center'>Trinti</th>
                            <th class = 'text-center'>Redaguoti</th>
                        </tr class = 'text-center'>
                        <?php
                        echo "<h2 class= 'bg-red'>Prekių berniukams valdymas</h2> <h3>Norėdami matyti pasikeitimus po ištrinimo ar redagavimo spauskite perkrauti (F5).</h3>";
                        include("db_functions.php");
                        $nr = 1000;
                        $prekeOBJ = getBerniukuPrekes();
                        $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
                        if (mysqli_num_rows($prekeOBJ) > 0) {
                            while ($vienaPrekeArray == true) {
                                echo "
                                                <th class = 'text-center'>" . $vienaPrekeArray['id'] . "</th>
                                                <td class = 'text-center'>" . $vienaPrekeArray['pavadinimas'] . "</td>
                                                <td class = 'text-center'>" . $vienaPrekeArray['trumpas_aprasymas'] . "</td>
                                                <td class = 'text-center'>" . $vienaPrekeArray['aprasymas'] . "</td>
                                                <td class = 'text-center'>" . $vienaPrekeArray['kaina'] . "</td>
                                                <td class = 'text-center'>" . $vienaPrekeArray['img_name'] . "</td>
                                                <td class = 'text-center'> <a href ='trinti-preke-berniukams.php/?id=" . $vienaPrekeArray['id'] ."'><button class = 'btn btn-danger'>Trinti</button></a> </td>
                                                <td class = 'text-center'> <a href ='prekiu-berniukams-redagavimo-forma.php/?id=" . $vienaPrekeArray['id'] ."'><button class = 'btn btn-danger'>Redaguoti</button></a> </td>
                                            </tr>

                                ";
                                $vienaPrekeArray = mysqli_fetch_assoc($prekeOBJ);
                            }
                        } else {
                            echo "<h2 class= 'bg-red'>Neradome nei vienos prekės</h2> <br />";
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
