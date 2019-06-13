<?php include('header.php'); ?>

        <div class="container-fluid reg-background ">
            <h1 class="text-center white">Atsiliepimai</h1>
            <p class="text-justify white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="row text-center">
                <div class="col-md-12">
                    <form action="send-mail.php" method="post" enctype="multipart/form-data">
                        <label class="white" for="name">Jūsų vardas: </label><br>
                        <input class="grey atsiliepimaiBorder" type="text" name="name" value="" required> <br><br>
                        <label class="white" for="mail">Jūsų elektroninio pašto adresas: </label><br>
                        <input class="grey atsiliepimaiBorder" type="mail" name="mail" value="" required><br><br>
                        <label class="white" for="klausimas">Įveskite savo atsiliepimą: </label><br>
                        <textarea class="grey atsiliepimaiBorder" name="klausimas" rows="4" cols="60" required></textarea><br>
                        <button class="btn mb-3" type="submit" name="button">Siųsti</button>
                        <?php if (!empty($_POST)) { include('db_functions.php'); newAtsiliepimas(); } ?>
                    </form>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <!-- <script type="text/javascript" src="js/main.min.js">     </script> -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
    <?php include('footer.php'); ?>
</html>
