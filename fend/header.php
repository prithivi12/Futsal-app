<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Futsal Info System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
</head>

<body  style="background: url('../img/bg.jpg') repeat 0 0 scroll;">
	<header>		
		<h2 class="title">Futsal Information System</h2>

    </header>
    
	<script></script>


    <div class="search-box">
		<?php 
		ob_start();
		session_start();
		if(!isset($_SESSION['logged_in_user']))
		{
			$_SESSION['logged_in_user']=0;
		}

		if(!isset($_SESSION['logged_in_user_id']))
		{
			$_SESSION['logged_in_user_id']=0;
		}
		?>
		<form onSubmit="return(searchValidate())"action="search.php" name="searchForm" methord="GET">
		<div class="boxes">
			<div class="sb-textarea1">
				<input class="input" type="text" name="search" id="name" placeholder="Search by name"></textarea>
				<button class="button">Search</button>
			</div>
			
		</form>

		<?php 
		if($_SESSION['logged_in_user']==1)
		{
			echo('<a class="button" href="logout.php">Logout</a>');
		}
		?>
		</div>	
	</div>
