<?php


        require_once('db_functions.php');

        // $getOneItem=getItem( 1 );
        // print_r($getOneItem);

        // print_r($_GET);

        $getOneItemID=$_POST['id'];
        $getOneItemName=$_POST['name'];
        $getOneItemDescription=$_POST['description'];
        $getOneItemPrice=$_POST['price'];
        $getOneItemImageName=$_POST['imageName'];
        $getOneItemAmount=$_POST['amount'];

        $updatintaPreke=updateStock($getOneItemID,$getOneItemName,$getOneItemDescription,$getOneItemPrice,$getOneItemImageName,$getOneItemAmount);

        print_r($updatintaPreke);

        // require_once('db_function.php')
        //
        // $updatePrekeId=$_GET['id'];
        // $updatedPreke=updateStock($updatePrekeId);
        //
        //
        // print_r($GET);





            ?>


<a href="admin_panel.php" class="btn-lg btn-dark"> Back To Admin Panel</a>
