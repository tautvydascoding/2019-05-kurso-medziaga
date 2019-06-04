<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img class="logo img-responsive" src="img/logo-paint-me.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php

        require_once('db_functions.php');

        $allItems = [];
        for($i=1; $i<15; $i++){
          if (!empty(getMenu($i))){
            $allItems[$i] = getMenu($i);
            }
          }

          for($i=1; $i<count($allItems)+1; $i++){
            if (getMenu($i)['item'] != "Cart"){
            echo "<li class='nav-item'><a class='nav-link' href='" . getMenu($i)['link'] . "?id=$i" . "'>";
            echo getMenu($i)['item'] . "</a></li>";
            }
          }

         ?>
            <a class="nav-item btn btn-outline-dark my-2 my-sm-0 ml-1" href="cart.php?id=5">
              <i class="fas fa-shopping-cart"></i> 0 / 0,00 Eur</a>

      </ul>
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
