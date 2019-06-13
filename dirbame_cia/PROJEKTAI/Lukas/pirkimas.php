<?php
include("header.php");

?>

<section class="container-fluid reg-background">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-2 rounded ">
            <h3 class="pt-3 text-center regButton white" >Pirkimo forma</h3>
            <form id = "pirkimas" class="" action="send-pirkimo-uzklausa.php" method="post">
                <ul>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-user prefix theme-color"></i>
                            <label class = "white" for="vardas">Vardas: </label>
                            <input name="vardas" type="text" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-lock prefix theme-color"></i>
                            <label class="white" for="pavarde" data-error="wrong" data-success="right">Pavardė: </label>
                            <input name="pavarde" type="text" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix theme-color"></i>
                            <label class="white" for="pastas" data-error="wrong" data-success="right">Elektroninio pašto adresas: </label><br>
                            <input name="pastas" type="email" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class=""></i>
                            <label class="white" for="gatve" data-error="wrong" data-success="right">Gatvė ir namo numeris:</label><br>
                            <input name="gatve" type="text" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class=""></i>
                            <label class="white" for="kodas" data-error="wrong" data-success="right">Pašto kodas:</label><br>
                            <input name="kodas" type="text" required>
                        </div>
                    </li><br>
                    <li>
                        <div class="md-form">
                            <i class=""></i>
                            <label class="white" for="miestas" data-error="wrong" data-success="right">Miestas:</label><br>
                            <input name="miestas" type="text" required>
                        </div>
                    </li><br>
                    <li><button class="btn-loginReg" name="reg_mygtukas" type="submit"  >
                        <span class="white" class="strong">SIŪSTI UŽKLAUSĄ</span></button><br>
                    </li>
                </ul>
            </form>
        </div>
        <!-- <div class="col-1 rounded border-left-0  d-flex align-items-md-center text-center black">
            <img src="img/reg.png" alt="">
        </div> -->  <!-- IDEA: galima bus padaryti prie registracijos nuotrauka, jeigu bus noro uzsakovei -->
    </div>
</section>
<?php include_once('footer.php');?>


        <script src="http://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
