<?php 
include('miniserver.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="minilogin.php">
  	<div class="input-group">
  		<label>Roll No</label>
  		<input type="text" name="rollno" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet registered? <a href="sturegister.php">Sign up</a>
  	</p>
     <?php $errors = array(); ?>
    <?php if (count($errors) > 0) : ?>
    <div class="error">
      <?php foreach ($errors as $error) : ?>
        <p><?php echo $error ?></p>
      <?php endforeach ?>
    </div>
    <?php endif ?>
    
  </form>
</body>
</html>
