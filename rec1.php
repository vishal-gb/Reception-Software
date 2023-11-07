<?php
// Initialize the session
session_start();

// database connection
include('reconfig.php');

$added = false;


//Add  new student code 

if(isset($_POST['submit'])){

    $MobileNumber = $_POST['MobileNumber'];

    
    $insert_data = "INSERT INTO student_data2 SELECT * FROM student_data1 WHERE MobileNumber = '$MobileNumber'";
  	$run_data = mysqli_query($con,$insert_data);
    
    $update_data="UPDATE student_data2 SET Time=NOW() ORDER BY id desc LIMIT 1";
    $run_data = mysqli_query($con,$update_data);

    $_SESSION['MobileNumber'] = $_POST['MobileNumber'];

    header("Location: ./viewpdf6.php");


}

?>

<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width,initial scale=1"/>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
	<title>Student Crud Operation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<div class="container">

<a href="http://125.17.181.198/" target="_blank"><img src="College.jpg" alt="" width="500px" ></a><br><hr>



<h3>INFORMATION</h3>

<div class="form-group">
<label for="inputAddress">Mobile Number</label>
<input type="text" class="form-control" name="MobileNumber" placeholder="Enter Mobile Number">
</div>

<input type="submit" name="submit" id="submit" class="btn btn-info btn-large" value="Submit"/>
                </form>

</body>
</html>