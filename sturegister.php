<?php 
  include('miniserver.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
    
  <form method="post" action="sturegister.php">
 <?php $errors = array(); // Initialize $errors as an empty array ?>
    <?php if (count($errors) > 0) : ?>
      <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
      </div>
    <?php endif ?>
    <div class="input-group">
      <label>Roll No</label>
      <input type="text" name="rollno" value="<?php echo $rollno; ?>">
    </div>
    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="first_name" value="<?php echo $first_name; ?>">
    </div>
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="last_name" value="<?php echo $last_name; ?>">
    </div>
    <div class="input-group">
      <label>WebMail</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already registered? <a href="minilogin.php">Sign in</a>
    </p>
  </form>
</body>
</html>