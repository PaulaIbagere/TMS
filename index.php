<?php

	require_once('main.php');
	
	$conn = db_connect();
	
	Display_Title();
	
	Background_Page();
	
	include("header2.php");
	
	$f=2;
	$year=GetMaxYear();
	// $uncode1 = mysqli_query($conn, "SELECT UniversityCode FROM colleges");
	// $CollegeCode1 = mysqli_query($conn, "SELECT CollegeCode FROM colleges");
	$uncode1 = isset($_GET['uncode1']) ? $_GET['uncode1'] : '';
	$CollegeCode1 = isset($_GET['CollegeCode1']) ? $_GET['CollegeCode1'] : '';

	MainDisplay($uncode1,$CollegeCode1,$f,$year);//CollegeMethod.php
?>
