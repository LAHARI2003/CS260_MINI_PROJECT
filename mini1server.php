<?php
session_start();

// initializing variable

$comp_name="";
$comp_roles="";
$branch_res="";
$cpicut = "";
$ctc = "";
$mod_inter="";
$recyear= "";
$errors= array();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'placementdb');

// REGISTER company
if (isset($_POST['det_comp'])) {
  // receive all input values from the form
  $comp_name = mysqli_real_escape_string($db, $_POST['comp_name']);
  $comp_roles = mysqli_real_escape_string($db, $_POST['comp_roles']);
  $branch_res = mysqli_real_escape_string($db, $_POST['branch_res']);
  $cpicut = mysqli_real_escape_string($db, $_POST['cpicut']);
  $ctc = mysqli_real_escape_string($db, $_POST['ctc']);
  $mod_inter = mysqli_real_escape_string($db, $_POST['mod_inter']);
  $recyear = mysqli_real_escape_string($db, $_POST['recyear']);
  
  
  
  
  if (empty($comp_name)) { 
    array_push($errors, "Mentioning the company name is necessary");
    echo "Mentioning the company name is necessary"; 
  }

  if (empty($comp_roles)) { 
    array_push($errors, "Mentioning the roles which company is going to offer is necessary");
    echo "Mentioning the roles which company is going to offer is necessary"; 
  }
  
  if (empty($branch_res)) { 
    array_push($errors, "branch restrictions are necessaary to mention");
    echo "branch restrictions are necessaary to mention"; 
  }
  if (empty($ctc)) { 
    array_push($errors, "Mentioning a approximate ctc you are going to offer is necessary");
    echo "Mentioning a approximate ctc you are going to offer is necessary"; 
  }

  if (empty($cpicut)) { 
    array_push($errors, "Minimum cpi cutoff needs to be mentioned");
    echo "Minimum cpi cutoff needs to be mentioned"; 
  }
  if (empty($mod_inter)) { 
    array_push($errors, "It is necessary to mention the mode of interview which the company will be taking");
    echo "It is necessary to mention the mode of interview which the company will be taking"; 
  }
  if (empty($recyear)) { 
    array_push($errors, "It is necessary to mention the year your company has started recruting Students from IIT PATNA");
    echo "It is necessary to mention the year your company has started recruting Students from IIT PATNA"; 
  }
  


  
  if (count($errors) == 0) {
  
    $query = "INSERT INTO companydb (comp_name, comp_roles, branch_res, ctc, cpicut, mod_inter, recyear) 
              VALUES('$comp_name','$comp_roles', '$branch_res', '$ctc', '$cpicut', '$mod_inter', '$recyear')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Your Company has been Sucessfully registered";
    header('location: comp_display');
  }
  else{
    echo "Something went wrong, Please try to register again";
  }
}