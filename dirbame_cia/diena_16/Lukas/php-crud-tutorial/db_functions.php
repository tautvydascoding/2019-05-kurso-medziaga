<!-- CRUD yra gebejimas paleisti mysql komandas per PHP koda. -->

<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    //PRISIJUNTIMAS
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );

    // kad lietuviskos ir ru veiktu
    mysqli_set_charset($prisijungimas, 'utf8mb4');

    // ! - AR FALSE?
    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error(); // rodo tik prisijungimo klaidas
    }
    function getPrisijungtimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungtimas();

    function getDoctor( $nr ) {
        // $query
        $manoSQL = "SELECT * FROM doctors  WHERE id='$nr'";
        // $rezultatai - mysql'o objektas
        $rezultataiOBJ = mysqli_query(getPrisijungtimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        // $rezultataiArray = mysqli_fetch_row($rezultataiOBJ);     // print_r(    $rezultataiArray );  // test
        return $rezultataiArray;
    }


    // create doctor ($vardas, $pavarde)
    function createDoctor($vardas, $pavarde) {
            $manoSQL = "INSERT INTO doctors VALUES (null, '$vardas', '$pavarde')";
            // pasitikrinti irasius i konsole phpmyadmin ar ides
            $rezultatai = mysqli_query(   getPrisijungtimas() , $manoSQL);
            if (!$rezultatai) {
                echo "Error: nepavyko sukurti gydytojo" . mysqli_error(getPrisijungtimas());
            }
    }
    // createDoctor("Karolina", "Karlova");
    // createDoctor("Karolina", "Karlova");
    // createDoctor("Karolina", "Karlova");
    // createDoctor("Karolina", "Karlova");

    // Delete doctor
    function deleteDoctor($nr) {
        $nr = mysqli_real_escape_string(getPrisijungtimas(), $nr); // uzkoduojam
        $manoSQL = "DELETE FROM doctors WHERE id = $nr"; // cia beprasmis stringas kol jo nepaleidi su serveriu
        $rezultatai = mysqli_query(getPrisijungtimas() , $manoSQL); // paleidziam i serveri.
        if (!$rezultatai) { // tikrinam errora
            echo "Error: nepavyko istrinti gydytojo" . mysqli_error(getPrisijungtimas());
        }
    }
    deleteDoctor(7); // Jeigu elemento nebera, tai jis tiesiog bandys vis tiek trinti tiesiog nieko nebus

    // update doctors BUTINA APSAUGA string escape
    function updateDoctor($nr, $vardas, $pavarde) {
        $nr_apdorotas =  mysqli_real_escape_string (getPrisijungtimas(), $nr );
        $vardas_apdorotas =  mysqli_real_escape_string (getPrisijungtimas(), $vardas );
        $pavarde_apdorotas =  mysqli_real_escape_string (getPrisijungtimas(), $pavarde );
        $manoSQL = "UPDATE doctors SET
                                    name = '$vardas_apdorotas',
                                    lname = '$pavarde_apdorotas'
                                    WHERE id = '$nr_apdorotas'
                                    LIMIT 1"; // nurodo kiek kartu ivyks komanda.

        // paleidi testa html
        $rezultatai = mysqli_query(getPrisijungtimas(), $manoSQL);
        if (!$rezultatai) { // tikrinam errora
            echo "Error: nepavyko redaguoti gydytojo: mano sql vardas: " . mysqli_error(getPrisijungtimas());
    }
}
// updateDoctor(6, "Jonas", "Emigrantas");

         getDoctors
 ?>
