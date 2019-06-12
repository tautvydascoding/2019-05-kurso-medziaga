<tbody>
  <tr class="">
    <div class="row justify-content-center">
      <div class="col-5">
          <td data-th="Product" >
                <h4 class="nomargin font-weight-light">Canva "<?php
                $id = $sessionCart[$i];
                echo getItem($id)['name'];


                ?>"</h4>
          </td>
      </div>

      <div class="col-4">
          <td data-th="Price"><?php
                $id = $sessionCart[$i];
                echo getItem($id)['price'];
                ?> Eur</td>
      </div>

      <div class="col-3">
          <td class="actions" data-th="">
              <form method="get" action="delete_cart_item.php?=<?php
// -----------------------ČIA REIKIA KAŽKĄ FAKIN SUGALVOTI---------------------

                ?>">
                  <button class='btn btn-danger btn-sm font-weight-light btn-outline-dark' name="remove" type="submit" ><i class="fas fa-trash"></i></button>
              </form>
          </td>
      </div>
  </tr>
</tbody>
