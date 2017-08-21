<?php
//LOGOUT PAGE
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
    <title>Logged Out</title>
    
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
			top: 60px;
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
	  
	  <h1>You Have Logged Out</h1>
	  <form action="index.php" method="POST">
	  
	  <button type="submit" name="home"> Go Back to Login Page  </button>
	  
	  </form>

  </html>
