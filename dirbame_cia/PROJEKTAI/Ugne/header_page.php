<?php include('nav.php'); ?>


<header class="header-page">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light p-5"><span class="header-page-name "><?php
        $menuID = $_GET['id'];
        echo getHeader($menuID)['item'];
         ?></span></h1>
      </div>
    </div>
  </div>
</header>
