<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
  <div class="header">
  	<h2>Prisijungimas</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Vartotojo vardas</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Slaptažodis</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Prisijungti</button>
  	</div>
  	<p>
  		 <a href="register.php">Registruotis</a><br>
  		 <a href="index.html">Grįžti</a>
  	</p>
  </form>
</body>
</html>
