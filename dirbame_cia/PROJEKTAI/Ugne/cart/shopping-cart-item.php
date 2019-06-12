<table class="table table-hover table-condensed font-weight-light">
      <thead>
            <tr>
              <th  class=" col-md-5 font-weight-light">Product</th>
              <th  class=" col-md-4 font-weight-light">Price</th>
              <th  class=" col-md-3"></th>
            </tr>
      </thead>

      <tbody>
        <tr class="">
          <div class="row justify-content-center">
            <div class="col-5">
                <td data-th="Product" >
                      <h5 class="nomargin font-weight-light">Canva "<?php
                      echo getItem($key)['name'];?>"</h5>
                </td>
            </div>

            <div class="col-4">
                <td data-th="Price"><?php
                      echo getItem($key)['price'];?> Eur</td>
            </div>

            <div class="col-3">
                <td class="actions" data-th="">
                    <form method="post" action="cart/delete_cart_item.php">
                        <input type="hidden" name="id" value="<?php echo $key;?>"/>
                        <button class='btn btn-danger btn-sm font-weight-light btn-outline-dark' name="" type="submit" ><i class="fas fa-trash"></i></button>
                    </form>

                </td>
            </div>
        </tr>
      </tbody>
      <tfoot>

        <tr >
          <td class="col-4"><a href="products.php?id=2" class="btn btn-outline-dark"></i>Shop more</a></td>

          <td class="hidden-xs text-center col-4"><strong>Total <?php
          $totalPriceSum = array_sum($totalPrice);
          $_SESSION['total'][0] = $totalPriceSum;
          $_SESSION['quantity'][0] = count($totalPrice);
          echo $totalPriceSum;
          ?>
            Eur</strong></td>
          <td class="col-4"><a href="cart/form_checkout.php" class="btn btn-block btn-outline-dark">Checkout</i></a></td>
        </tr>
      </tfoot>
</table>
