<?php 
session_start(); // start the session
if(isset($_SESSION['email'])) { // check if user is logged in
  $email = $_SESSION['email']; // get user's email from session
  // query the database to get user's information
  $conn = new mysqli('localhost', 'root', '', 'dblab08');
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>My PHP Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
        }
        a {
            color: #fff;
        }
        a:hover {
            color: #f8f9fa;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        a, .btn {
            margin: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $first_name.' '.$last_name. "!" ?></h1>
        <p>Select any one</p>
        <div class="d-flex justify-content-center">
            <a href="details.php">Enter your details</a>
            <a href="placement.php">Sit for placement?</a>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">Log Out</button>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
} else { // if user is not logged in, redirect to login page
  header("Location: login.php");
  exit();
}
?>
