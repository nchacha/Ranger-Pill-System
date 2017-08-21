<?php
//MAKES THE CHANGE TO THE DATABASE
//Created by Neidi Chavez
//Copyright (c) 2014. All rights reserved.

$change_date=$_POST['change_date'];
$changedate = date('Y-m-d', strtotime($change_date));
$new_time=$_POST['new_time'] . ":00";
		
$host="mysql.rangerpillsystem.com"; // Host name 
$username="[REDACTED]"; // Mysql username [REDACTED]
$password="[REDACTED]"; // Mysql password [REDACTED]
$db_name="pill_records"; // Database name 
$tbl_name="schedule"; // Table name 

// Connect to server and select databse.

$con=mysqli_connect($host,$username,$password,$db_name);

// Check connection
if (mysqli_connect_errno())
 {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
  
 $sql="UPDATE `schedule` SET `times`='$new_time' WHERE `dates`='$changedate'";

if (mysqli_query($con,$sql))
{
  header("location:updatecomp.php");
}
else if(!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
else
{
	echo "";
}
  
  $con->close();
		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <title>View Time</title>
    
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body {
			background-color : #C0C0C0;
			margin: 0;
			padding-right: 10px;
			padding-bottom: 10px;
			}
		h1 {
			color : #000000;
			text-align : center;
			font-family: Book Antiqua, Calista MT, Cambria;
			}
		h2 {
			color : #000000;
			text-align : left;
			font-family: Book Antiqua, Calista MT, Cambria;
			}
		h3 {
			color : #000000;
			text-align : left;
			font-family: Book Antiqua, Calista MT, Cambria;
			}		
		#oneform {
			background-color : #7094DB;
			margin:auto;
			position:relative;
			width:600px;
			height:100px;
			color : #000000;
			font-size: 20px;
			font-family: Book Antiqua, Calista MT, Cambria;
			text-decoration: none;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			padding-left:100px;
			padding-top:10px;
			border: 1px solid #999;
			border: inset 1px solid #333;
			-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			}
		button{
			width:250px;
			display:block;
			position:relative;
			top: 5px;
			left: 550px;
			bottom: 20px;
			border-radius: 5px;
			height: 30px;
			background:#333399;
			color:#fff;
		}
		#logbutt{
			width:100px;
			margin-left: auto;
			left: 5px;
			display: block;
			position: relative;
			border-radius: 5px;
			height: 25px;
			background:#333399;
			color:#fff;
		}
		input:focus {
		border: 3px solid #09C;
		}
	</style>

  </head>
  
  <body>
	  
	  <form action="menu.php" method="POST">
	  <button id="logbutt" type="submit" name="logout"> Logout  </button>
	  </form>
	  
	  <h1>Change Complete</h1>
	  <form action="menu.php" method="POST">
	  <button type="submit" name="back"> Go Back to Menu  </button>
	  </form>

  </body>
