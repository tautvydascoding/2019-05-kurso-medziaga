
        <?php
        include("header.php");
        ?>

    <div class="container ">
        <div class="row  justify-content-center mb-4 ">
            <div class="col-12">
                <h2 class="mt-1" >Dažniausiai užduodami klausimai</h2>
            </div>
        </div>

            <div class="row">
                    <div class="col-4">
                        <img class="slepti img-fluid" src="img/duk.jpg"  alt="individualūs buhalterių mokymai">
                    </div>
<?php require_once('db_functions.php'); ?>
<div class="col-8">


      <?php $questions = getQuestions();
      $question = mysqli_fetch_assoc($questions);
      while (  $question == true ) {

          echo "<h4>". $question['id'] . $question['question'] . "</h4>";
          $atsakymai = getAtsakymaipglQuestion($question['id']);
          $atsakymas = mysqli_fetch_assoc($atsakymai);
          while (  $atsakymas == true ) {

          echo "<p>".  $atsakymas['atsakymas'] ."</p>";
          $atsakymas = mysqli_fetch_assoc($atsakymai);
              }
          $question = mysqli_fetch_assoc($questions);

              }
              ?>
</div>
</div>


<?php
include("footer.php");
 ?>
