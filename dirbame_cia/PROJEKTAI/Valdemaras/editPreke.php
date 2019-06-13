<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="css/main.css">
<?php
include_once('db_functions.php');
// $visosPrekes = getvisosPrekes();
// $vienaPreke = mysqli_fetch_assoc($visosPrekes);

print_r($_GET);
?>
<h3>Redaguoti preke</h3>

<form action="edit.php" method="get">

                <input type="text" name="nr" value="<?php $nr = $_GET['nr']; echo $nr ; ?>">
                <input type="text" name="preke" value="" > <br />
                <textarea name="aprasymas" rows="14"  cols="80">Prekes aprasymas:
                  </textarea>
                <button type="submit" class = "btn-primary"> Išsaugoti </button>
</form>
<!-- $preke = getvisosPrekes($_GET['nr']); echo $preke['pavadinimas']; ?> -->
