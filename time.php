<?php
//DISPLAYS THE MEDICATION TIME FOR TODAY 
//Created by Neidi Chavez
//Copyright (c) 2014. All rights reserved.

$today_date = date('Y-m-d', time());

$host="mysql.rangerpillsystem.com"; // Host name 
$username="[REDACTED]"; // Mysql username [REDACTED]
$password="[REDACTED]"; // Mysql password [REDACTED]
$db_name="pill_records"; // Database name 
$tbl_name="schedule"; // Table name 

// Connect to server and select databse.
$con=new mysqli($host,$username,$password,$db_name);

// Check connection
if ($con->connect_errno > 0)
  {
  	echo "Failed to connect to MySQL: " . $con->connect_error;
  }
  
 $sql="SELECT `times` FROM `schedule` WHERE `dates`= '$today_date'";

if (!$query=$con->query($sql))
  {
  die('Error: ' . $con->error);
  }
  //get the time from databases
  $result=$query->fetch_object();
  $today_time=date("H:i:s", STRTOTIME($result->times));
  
  if($today_time == '' or $today_time == '16:00:00')
  {
	  echo "No time listed for today";
  }
  else
  {
	  echo $today_time;
  }
  
  $con->close();
?>
