<?php
include('header.php');
require_once('db_functions.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php


        $rezultatai = paieska();
        $rezul = mysqli_fetch_assoc($rezultatai);
        print_r($rezul);
        // while (  $rezul == true ) {
                    // }
?>

        </div>
    </div>
</div>




<?php
include('footer.php');
 ?>
