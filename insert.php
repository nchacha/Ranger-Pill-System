<?php
//INSERTS THE WEEK INTO THE DATABASE
//Created by Neidi Chavez
//Copyright (c) 2014. All rights reserved.

session_start();
//starting inserting the dates and times into the mysql database
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

//monday values and insertion
$mon_date=$_SESSION['mon_date'];
$mon_time=$_SESSION['mon_time'] . ":00";
$inmondate = date('Y-m-d', strtotime($mon_date));

if($inmondate != "1969-12-31")
{
	$sqlm="INSERT INTO schedule (dates,times) VALUES ('$inmondate','$mon_time')";

	if (!mysqli_query($con,$sqlm))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//tuesday values and insertion
$tues_date=$_SESSION['tues_date'];
$tues_time=$_SESSION['tues_time'] . ":00";
$intuesdate = date('Y-m-d', strtotime($tues_date));

if($intuesdate != "1969-12-31" )
{
	$sqlt="INSERT INTO schedule (dates,times) VALUES ('$intuesdate','$tues_time')";

	if (!mysqli_query($con,$sqlt))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//wednesday values and insertion
$wed_date=$_SESSION['wed_date'];
$wed_time=$_SESSION['wed_time'] . ":00";
$inweddate = date('Y-m-d', strtotime($wed_date));

if($inweddate != "1969-12-31")
{
	$sqlw="INSERT INTO schedule (dates,times) VALUES ('$inweddate','$wed_time')";

	if (!mysqli_query($con,$sqlw))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//thursday values and insertion
$thur_date=$_SESSION['thur_date'];
$thur_time=$_SESSION['thur_time'] . ":00";
$inthurdate = date('Y-m-d', strtotime($thur_date));

if($inthurdate != "1969-12-31")
{
	$sqlr="INSERT INTO schedule (dates,times) VALUES ('$inthurdate','$thur_time')";

	if (!mysqli_query($con,$sqlr))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//friday values and insertion
$fri_date=$_SESSION['fri_date'];
$fri_time=$_SESSION['fri_time'] . ":00";
$infridate = date('Y-m-d', strtotime($fri_date));

if($infridate != "1969-12-31")
{
	$sqlf="INSERT INTO schedule (dates,times) VALUES ('$infridate','$fri_time')";

	if (!mysqli_query($con,$sqlf))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//saturday values and insertion
$sat_date=$_SESSION['sat_date'];
$sat_time=$_SESSION['sat_time'] . ":00";
$insatdate = date('Y-m-d', strtotime($sat_date));

if($insatdate != "1969-12-31")
{
	$sqlss="INSERT INTO schedule (dates,times) VALUES ('$insatdate','$sat_time')";

	if (!mysqli_query($con,$sqlss))
	{
		die('Error: ' . mysqli_error($con));
	}
}

//sunday values and insertion
$sun_date=$_SESSION['sun_date'];
$sun_time=$_SESSION['sun_time'] . ":00";
$insundate = date('Y-m-d', strtotime($sun_date));

if($insundate != "1969-12-31")
{
	$sqlsu="INSERT INTO schedule (dates,times) VALUES ('$insundate','$sun_time')";

	if (!mysqli_query($con,$sqlsu))
	{
		die('Error: ' . mysqli_error($con));
	}
}

mysqli_close($con);

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
    <title>Confirm</title>
    
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body {
			background-color : #C0C0C0;
			margin: 0;
			padding: 0;
			}
		h1 {
			color : #000000;
			text-align : center;
			font-family: Book Antiqua, Calista MT, Cambria;
			}
		button{
			width:200px;
			margin: auto;
			display:block;
			position: relative;
			top: -1px;
			bottom:20px;
			border-radius: 5px;
			height: 40px;
			background:#333399;
			color:#fff;
		}
		input:focus {
		border: 3px solid #09C;
		}
	</style>

  </head>
  
  <html>
	  
	  <h1>Thank You</h1>
	  
	  <form action="logout.php" method="POST">
	  
	  <button type="submit" name="logout"> Logout </button>
	  
	  </form>
  
  
  
  
  
  
  </html>
