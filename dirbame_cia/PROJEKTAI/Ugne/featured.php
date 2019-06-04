<?php require_once('db_functions.php')?>

<?php

$allItems = [];
for($i=1; $i<30; $i++){
  if (!empty(getItem($i))){
    $allItems[$i] = getItem($i);
}
}


echo "<article class='row m-3 justify-content-center '>";
  for($i=1; $i<=HOME_NUMBER_OF_ARTICLES; $i++){
    echo "<div class='col-lg-5 m-4 col-md-12'><a href='template_product.php?id=$i'>";
    echo "<img class='item-img img-responsive img-thumbnail' src='img/" . getItem($i)['thumbnail'] . "'>";
    echo "<div class= 'col-12 text-center m-2 text-dark'><h4 class='font-weight-light card-title'>\"" . getItem($i)['name'] . "\"</h4>";
    echo "<h5 class='font-weight-light'>" . getItem($i)['price'] . " Eur</h5></div>";
    echo "</div></a>";
  }
echo "</article>";

?>
