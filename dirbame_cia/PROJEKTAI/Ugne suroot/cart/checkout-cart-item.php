<tbody>
  <tr class="">
    <div class="row justify-content-center">
      <div class="col-5">
          <td data-th="Product" >
                <h5 class="nomargin font-weight-light">Canva "<?php
                echo getItem($key)['name'];


                ?>"</h5>
          </td>
      </div>

      <div class="col-4">
          <td data-th="Price"><?php
                echo getItem($key)['price'];
                ?> Eur</td>
      </div>

      <div class="col-3">
          <td class="actions" data-th="">
              <form method="post" action="delete_cart_item.php">
                  <input type="hidden" name="id" value="<?php echo $key;?>"/>
                  <button class='btn btn-danger btn-sm font-weight-light btn-outline-dark' name="" type="submit" ><i class="fas fa-trash"></i></button>
              </form>

          </td>
      </div>
  </tr>
</tbody>
