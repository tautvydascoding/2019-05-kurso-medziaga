<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
  <div class="header">
  	<h2>Registracija</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Vartotojo vardas</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>El. paštas </label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Slaptažodis</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Patvirtinti slaptažodį</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registruotis</button>
  	</div>
  	<p>
  		Esate vartotojas? <a href="login.php">Prisijungti</a>
  	</p>
  </form>
</body>
</html>
