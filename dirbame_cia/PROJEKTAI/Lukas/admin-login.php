<section class="container-fluid reg-background">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-2 rounded">
            <h3 class="pt-3 text-center regButton white" >Prisijungti</h3>
            <form id = "registracija" class="" action="login.php" method="post">
                <ul class="text-center">
                    <li>
                        <div class="md-form">
                            <i class="fas fa-user prefix theme-color"></i>
                            <label class = "white" for="username">Vardas</label>
                            <input name="username" type="text">
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-lock prefix theme-color"></i>
                            <label class="white" for="password">Slaptažodis</label>
                            <input name="password_1" type="password" >
                        </div>
                    </li><br>
                    <li><button class="btn text-justify-center" name="reg_mygtukas" type="submit"  >
                        <span class="white" class="strong">PRISIJUNGTI</span></button><br>
                    </li>
                </ul>
                <?php include_once('db_functions.php');
                if (!empty($_POST)) {
                    login($_POST['username'], $_POST['password_1']);
                }
                ?>
                <!-- <div class="col-1 rounded border-left-0  d-flex align-items-md-center text-center black">
                    <img src="img/reg.png" alt="">
                </div> -->  <!-- IDEA: galima bus padaryti prie registracijos nuotrauka, jeigu bus noro uzsakovei -->
            </div>
            </form>
        </div>

</section>
