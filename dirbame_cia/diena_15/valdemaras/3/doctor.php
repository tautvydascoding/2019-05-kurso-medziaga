<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1> </h1>
        <?php
            include('db_functions.php');
            $sk = ($_GET['nr']);
            $gydytojas = getdoctor($sk);
            echo "asmeninis gyd. puslapis <hr />";
            echo "<h1>" . $gydytojas['name']. " ". $gydytojas['lname']. "</h1>";
         ?>
    </body>
</html>
