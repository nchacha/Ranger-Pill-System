<?php
//SETS UP THE ENTIRE WEEK
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
    <title>Set Up Week</title>
    
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
			width:650px;
			height:550px;
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
			top: 5px;
			left: 50px;
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
	<form action="logout.php" method="POST">
	  <button id="logbutt" type="submit" name="logout"> Logout  </button>
	  </form>
	<h1>Set Schedule </h1> 	
	<form id="oneform" action="confirm.php" method="POST">
		<h2>Pick Dates and Times </h2>
	Monday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
	<input type="date" name="mon_date">	
    <input type="time" name="mon_time">
    
    <br>
    <br>
    	Tuesday &#160;&#160;&#160;&#160;&#160;&#160;&#160;
    	<input type="date" name="tues_date">	
    <input type="time" name="tues_time">
    
	<br>
	<br>
	Wednesday &#160;
	<input type="date" name="wed_date">	
    <input type="time" name="wed_time">
    
    <br>
    <br>
    Thursday &#160;&#160;&#160;&#160;&#160;
    <input type="date" name="thur_date">	
    <input type="time" name="thur_time">
    
    <br>
    <br>
    Friday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
    <input type="date" name="fri_date">	
    <input type="time" name="fri_time">
    
    <br>
    <br>
    Saturday &#160;&#160;&#160;&#160;&#160;&#160;&#160;
    <input type="date" name="sat_date">	
    <input type="time" name="sat_time">
    
    <br>
    <br>
    Sunday &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
    <input type="date" name="sun_date">	
    <input type="time" name="sun_time">
    
    <br>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <button type="submit" value="submit"> Submit </button>
    <button type="reset" value="reset"> Reset </button>

</form>

</body>



</html>

