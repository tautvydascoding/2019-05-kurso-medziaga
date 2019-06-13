<?php
include("header.php"); ?>

<section class="container-fluid reg-background">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-2 rounded ">
            <h3 class="pt-3 text-center regButton white" >Registracija</h3>
            <form id = "registracija" class="" action="registracija.php" method="post">
                <ul>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-user prefix theme-color"></i>
                            <label class = "white" for="username">Vartotojo vardas</label>
                            <input name="username" type="text" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix theme-color"></i>
                            <label class="white" for="pastas" data-error="wrong" data-success="right">El. pašto adresas</label>
                            <input name="pastas" type="email" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-lock prefix theme-color"></i>
                            <label class="white" for="password_1" data-error="wrong" data-success="right">Slaptažodis</label><br>
                            <input name="password_1" type="password" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-lock prefix theme-color"></i>
                            <label class="white" for="password_2" data-error="wrong" data-success="right">Pakartoti slaptažodį</label>
                            <input name="password_2" type="password" required>
                        </div>
                    </li><br>
                    <li><button class="btn-loginReg" name="reg_mygtukas" type="submit"  >
                        <span class="white" class="strong">REGISTRUOTIS</span></button><br>
                        <a href="#"><p class="white smallText pt-2">Spausdami mygtuką registruotis Jūs patvirtinate, kad sutinkate su visomis puslapio taisyklėmis ir reikalavimais.</p></a>
                        <span class="white smallText pt-2">Jau esi užsiregistravęs? <a class="white smallText" href="login.php">Prisijunk!</a></span>
                    </li>
                </ul>
            </form>
            <?php
                if (!empty($_POST)) {
                    if ($_POST['password_1'] != $_POST['password_2']) {
                        echo "<p class = 'pReg'><strong>Jūsų slaptažodžiai nesutampa!</strong>";
                    } elseif (!empty($_POST['username'])) {
                        $username1 = $_POST['username'];
                        include('db_functions.php');
                        usernameCheck($username1);
                    }
                }
            ?>
        </div>
        <!-- <div class="col-1 rounded border-left-0  d-flex align-items-md-center text-center black">
            <img src="img/reg.png" alt="">
        </div> -->  <!-- IDEA: galima bus padaryti prie registracijos nuotrauka, jeigu bus noro uzsakovei -->
    </div>
</section>

<?php include_once('footer.php'); ?>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
