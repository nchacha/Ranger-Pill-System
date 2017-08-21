<?php
//MENU PAGE
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
    <title>Menu</title>
    
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
		#oneform {
			background-color : #7094DB;
			margin:auto;
			position:relative;
			width:600px;
			height:350px;
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
			width:450px;
			margin: auto;
			display:block;
			position: relative;
			left: -50px;
			top: 40px;
			bottom: 20px;
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
	  
	  <h1>Menu</h1>
	  
	  <form id="oneform" action="week.php" method="POST">
		  
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <button type="submit" onclick="week();"> Set Up Weekly Schedule</button>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <button type="submit" onclick="view();";> View Time for Certain Date </button>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <button type="submit" onclick="change();"> Change Time </button>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  
	      <script>
    function week()
    {
		this.oneform.action = "week.php";
	}
	function view()
	{
		this.oneform.action = "view.php";
	}
	function change()
	{
		this.oneform.action = "change.php";
	}
    
    </script>
	  
	  </form>

  </html>
