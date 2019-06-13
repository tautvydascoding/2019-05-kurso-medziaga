
      <tbody>
        <tr class="">
          <div class="row justify-content-center">
            <div class="col-5">
                <td data-th="Product" >
                      <h5 class="nomargin font-weight-light">Canva "<?php
                      echo $order['canvaname'];?>"</h5>
                </td>
            </div>

            <div class="col-4">
                <td data-th="Price"><?php
                      echo $order['totalprice'];?> Eur</td>
            </div>

            <div class="col-3">
                <td class="actions" data-th="">
                    <form method="post" action="order-contact.php">
                        <input type="hidden" name="id" value="<?php echo $order['id'];?>"/>
                        <button class='btn btn-danger btn-sm t btn-outline-dark' name="" type="submit" >Shipping info</button>
                    </form>

                </td>
            </div>
        </tr>
      </tbody>
