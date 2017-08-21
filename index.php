<?php

//LOGIN IN PAGE
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
    <title>Ranger Pill System</title>
    
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
			text-align : center;
			font-family: Book Antiqua, Calista MT, Cambria;
			}	
		form {
			background-color : #7094DB;
			margin:auto;
			position:relative;
			width:550px;
			height:450px;
			color: #606060;
			text-decoration: none;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			padding:10px;
			border: 1px solid #999;
			border: inset 1px solid #333;
			-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			}
		input {
			width:375px;
			display:block;
			border: 1px solid #999;
			margin: 0 auto;
			height: 40px;
			border-radius: 5px;
			-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			}
		button{
			width:375px;
			display:block;
			margin: 0 auto;
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
  <body>

  <body>
	  <h1>Ranger Pill System</h1>
<form action='checklogin.php' method='POST'>
			<h2>Caretaker Login</h2>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type='email' name='myemail' id='myemail' class='input' placeholder='Email'></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type='password' name='mypassword' id='mypassword' class='input' placeholder='Password'></td>
			<td>&nbsp;</td>
			<button type='submit' name='submit' value='login'>Sign in</button>
		</form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
