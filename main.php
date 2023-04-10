<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome!!</title>
</head>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="container">
	<div class="top-menu">
	College Placement System
	</div>
	<div class="login-menu">
	<a href="sturegister.php">Student Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="Adminlogin.php">Admin Login</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="alumni.php">Are you an Alumnus, click here</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="student.php">Student info</a>
	</div>
	<?php
	$con=mysqli_connect("localhost","root","","placementdb");
	$qry="select * from placement_tbl";
	
	$run=mysqli_query($con,$qry);
	/*while ($rows=mysqli_fetch_array($run))
	{
		echo "<div class=\"jobbox\">";
		echo "<h3>".$rows['jobid'].". ".$rows['JobDesc']."</h3>";
		echo "<b>Company:</b>".$rows['companyname']."<br>";
		echo "<b>Marks Criteria:</b>".$rows['cgpa']."<br>";
		echo "<b>Salary Package:</b>".$rows['package']."<br>";
	    echo "<b>Mode of Interview:</b>".$rows['intermode']."<br>";
		echo "<b>Other Requirements:</b>".$rows['req']."<br>";
		echo "</div>";
	}*/
	
	?>
</div>
</body>
<body class="bg-dark">

        <div class="container">
       
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> <b>JobId</b> </td>
                                <td><b> Company</b> </td>
                                <td><b> Marks Criteria </b></td>
                                <td><b> Salary Package </b> </td>
                                <td><b> Mode of Interview</b> </td>
                                <td><b> Recruitment Since</b> </td>
                                <td> <b>Other Requirements</b> </td>
                            </tr>
                            <?php 
                                    while($row=mysqli_fetch_assoc($run))
                                    {
                                        $jobid = $row['jobid'];
                                        $companyname = $row['companyname'];
                                        $cgpa = $row['cgpa'];
                                        $package = $row['package'];
                                        $intermode = $row['intermode'];
                                        $recyear = $row['recyear'];
                                        $req = $row['req'];
                                    
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $jobid ?></td>
                                        <td><?php echo $companyname ?></td>
                                        <td><?php echo $cgpa ?></td>
                                        <td><?php echo $package ?></td>
                                        <td><?php echo $intermode ?></td>
                                        <td><?php echo $recyear ?></td>
                                        <td><?php echo $req ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                      

                        </table>
                    </div>
                </div>
            </div>
                    
        </div>
</body>
</html>
