<?php 
  include('mini1server.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Welcome and Register your Company Here</h2>
  </div>
    
  <form method="post" action="compregister.php">
    <?php $errors = array(); // Initialize $errors as an empty array ?>
    <?php if (count($errors) > 0) : ?>
      <div class="error">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
      </div>
    <?php endif ?>

    <div class="input-group">
      <label>Company Name</label>
      <input type="text"
       name="comp_name" >
    </div>
    <div class="input-group">
      <label>Roles you are going offering Here?</label>
      <select name="comp_roles">
        <option value="">--Select--</option>
        <option value="Online">SDE</option>
        <option value="Offline">Management</option>
        <option value="Offline">Data Scientist</option>
        <option value="Offline">Production</option>
        <option value="Offline">Core Related</option>
      </select>
    </div>
    <div class="input-group">
      <label>is this role open to all branches?</label>
      <select name="branch_res">
        <option value="">--Select--</option>
        <option value="Online">Yes</option>
        <option value="Offline">No</option>
        <option value="Offline">Open to only circutal branches</option>
      </select>
    </div>
    <div class="input-group">
      <label>CGPA cutoff</label>
      <input type="number" step="0.01"
       name="cpicut" value="<?php echo $cpicut; ?>">
    </div>
    <div class="input-group">
      <label>CTC</label>
      <input type="varchar" 
      name="ctc" value="<?php echo $ctc; ?>">
    </div>
    <div class="input-group">
      <label>Mode of Interview</label>
      <select name="mod_inter">
        <option value="">--Select--</option>
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
      </select>
    </div>
    <div class="input-group">
      <label>From which year Have you been recruting from IIT Patna?</label>
      <input type="number" 
      name="recyear" value="<?php echo $recyear; ?>">
    </div>

    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="det_comp">Submit</button>
    </div>
</form>

</body>
</html>
