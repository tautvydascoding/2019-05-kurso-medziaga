<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
  <div class="container-fluid text-center">
    <a class="navbar-brand" href="index.php"><img class="logo img-responsive" src="img/logo-paint-me.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php
        session_start();
        require_once('db_functions.php');


        $allmenu = getMenu(9);

        $item = mysqli_fetch_assoc($allmenu);



          while (  $item == true ) {
              echo "<li class='nav-item'><a class='nav-link' href='" . $item['link'] . "?id=" . $item['id'] . "'>";
              echo $item['item'] . "</a></li>";
              $item = mysqli_fetch_assoc($allmenu);
          }

         ?>


      </ul>
      <a class="btn btn-outline-dark my-2 my-sm-0 ml-3" href="cart.php?id=5">
        <i class="fas fa-shopping-cart"></i> <?php  echo $_SESSION['quantity'][0]; ?> / <?php
          echo $_SESSION['total'][0]; ?> Eur</a>


          <input class="form-control mr-sm-0 my-2 m-1 search" type="text" placeholder="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0 m-1" type="submit">Search</button>


    </div>

  </div>

</nav>

<!-- <li class="nav-item">
  <a class="nav-link" href="products.php">Products</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="about.php">About</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contacts.php">Contact</a>
</li> -->
