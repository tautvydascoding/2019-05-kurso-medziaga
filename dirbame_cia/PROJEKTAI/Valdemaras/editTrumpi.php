<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<link rel="stylesheet" href="css/main.css">
<?php
include_once('db_functions.php');
?>
<h3>Redaguoti aprasyma</h3>
<form action="editAprasymai.php" method="get">
                <input type="text" name="nr" value="<?php $nr = $_GET['nr']; echo $nr ; ?>">
                <input type="text" name="preke" value="" placeholder="prekes pavadinimas"> <br />
                <textarea name="aprasymas" rows="14"  cols="80">
    Prekes aprasymas:
                  </textarea>
                <button type="submit"> Išsaugoti </button>
</form>
