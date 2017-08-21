<?php
session_start();
//CONFIRM WEEK SCHEDULE PAGE
//Created by Neidi Chavez
//Copyright (c) 2014. All rights reserved.
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
			width:500px;
			height:400px;
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
			width:400px;
			display:block;
			position:relative;
			top: -1px;
			left:-50px;
			bottom:20px;
			border-radius: 5px;
			height: 40px;
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
	  <form action="" method="POST">
	  <button id="logbutt" type="submit" name="logout"> Logout  </button>
	  </form>
    <h1>Is This Correct?</h1>
    <form id="oneform" action="insert.php" method="POST">
		 Monday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		 <?php
		 $mon = $_POST["mon_time"];
		 $mondate=$_POST["mon_date"];
		 //saving the values for later
		 $_SESSION['mon_time']=$_POST["mon_time"];
		 $_SESSION['mon_date']=$_POST["mon_date"];
		 
		 if(DATE("m/d/Y",STRTOTIME($mondate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($mondate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($mon)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($mon));
		 }
		 
		 ?>
		 
    <br>
    <br>
    	Tuesday &#160;&#160;&#160;&#160;&#160;&#160;&#160;
    	<?php
		 $tues = $_POST["tues_time"];
		 $tuesdate=$_POST["tues_date"];
		 //saving the values for later
		 $_SESSION['tues_time']=$_POST["tues_time"];
		 $_SESSION['tues_date']=$_POST["tues_date"];
		 
		if(DATE("m/d/Y",STRTOTIME($tuesdate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($tuesdate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($tues)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($tues));
		 }
		 ?>
    
	<br>
	<br>
		Wednesday &#160;
		<?php
		 $wed = $_POST["wed_time"];
		 $weddate=$_POST["wed_date"];
		 //saving the values for later
		 $_SESSION['wed_time']=$_POST["wed_time"];
		 $_SESSION['wed_date']=$_POST["wed_date"];
		 
		if(DATE("m/d/Y",STRTOTIME($weddate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($weddate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($wed)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($wed));
		 }
		 ?>
    
    <br>
    <br>
		Thursday &#160;&#160;&#160;&#160;&#160;
		<?php
		 $thur = $_POST["thur_time"];
		 $thurdate=$_POST["thur_date"];
		 //saving the values for later
		 $_SESSION['thur_time']=$_POST["thur_time"];
		 $_SESSION['thur_date']=$_POST["thur_date"];
		 
		 if(DATE("m/d/Y",STRTOTIME($thurdate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($thurdate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($thur)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($thur));
		 }
		 ?>
    <br>
    <br>
		Friday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<?php
		 $fri = $_POST["fri_time"];
		 $fridate=$_POST["fri_date"];
		 //saving the values for later
		 $_SESSION['fri_time']=$_POST["fri_time"];
		 $_SESSION['fri_date']=$_POST["fri_date"];
		 
		if(DATE("m/d/Y",STRTOTIME($fridate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($fridate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($fri)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($fri));
		 }
		 ?>
    
    <br>
    <br>
		Saturday &#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<?php
		 $sat = $_POST["sat_time"];
		 $satdate=$_POST["sat_date"];
		 //saving the values for later
		 $_SESSION['sat_time']=$_POST["sat_time"];
		 $_SESSION['sat_date']=$_POST["sat_date"];
		 
		 if(DATE("m/d/Y",STRTOTIME($satdate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($satdate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($sat)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($sat));
		 }
		 ?>
    
    <br>
    <br>
		Sunday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<?php
		 $sun = $_POST["sun_time"];
		 $sundate=$_POST["sun_date"];
		 //saving the values for later
		 $_SESSION['sun_time']=$_POST["sun_time"];
		 $_SESSION['sun_date']=$_POST["sun_date"];
		 
		 if(DATE("m/d/Y",STRTOTIME($sundate)) == "12/31/1969")
		 {
			 echo "None";
		 }
		 else
		 {
			 echo DATE("m/d/Y",STRTOTIME($sundate));
		 }
		 echo str_repeat('&nbsp;', 5);
		 if(DATE("g:i a", STRTOTIME($sun)) == "4:00 pm")
		 {
			 echo "";
		 }
		 else
		 {
			 echo DATE("g:i a", STRTOTIME($sun));
		 }
		 ?>
    
    <br>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <button type="submit" onclick="yes();"> Yes </button>
    <button type="submit" onclick="no();"> No </button>
    
    <script>
    function yes()
    {
		this.oneform.action = "insert.php";
	}
	function no()
	{
		this.oneform.action = "week.php";
	}
    
    </script>
    

</form>

  
  </body>
  
  
  </html>
  
  
  
  
