
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

<!-- !!idedame CSS faila, nes kitaip neveiks -->
<link rel="stylesheet" href="css/main.css">

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <nav>
        <ul>
          <li>Home</li>
          <li>About</li>
          <li>Gallery</li>
          <li>Contact</li>
        </ul>
      </nav>

    <?php
      $prekesPav = "Dviratis";
      $prekesAprasymas = "Mazas rozinis ratai 28\" dviratukas"; //\isjunge kabutes, ignoruoja super simboli
      $prekesKaina = "599";
     ?>

  <div class="container bg-warning">
    <div class="row">
      <?php
      for ($i=0; $i < 6; $i++) {
        echo "<div class='col-4'>";
        include("preke.php");
        echo "</div>";

      }

       ?>

    <!-- END container -->
  </div>

  </body>
</html>
