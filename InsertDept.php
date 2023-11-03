<?php

	session_start();
	require_once('main.php');

	//Page Title

	Display_Title();

	$username=$_SESSION['username'];
	if($username)
	{

		$conn = db_connect();
		Background_Page();
		include("header2.php");


		$CollegeCode = $_GET['CollegeCode'];
		$CollegeCode=intval($CollegeCode);



		$uncode=$_GET['uncode'];
		$uncode=intval($uncode);

 		//echo($CollegeCode.$uncode);
 		$href="ConfigDept.php?CollegeCode=$CollegeCode&uncode=$uncode";
		$header="CollegeCode=$CollegeCode&uncode=$uncode";
		
		$DeptName = isset($_GET['DeptName']) ? $_GET['DeptName'] : '';
		$AcadDeg = isset($_GET['AcadDeg']) ? $_GET['AcadDeg'] : '';
		$noOfSem = isset($_GET['noOfSem']) ? $_GET['noOfSem'] : '';
		$do = isset($_GET['do']) ? $_GET['do'] : '';
		$AcadProgId = isset($_GET['AcadProgId']) ? $_GET['AcadProgId'] : '';
		$ProgType = isset($_GET['ProgType']) ? $_GET['ProgType'] : '';
		//Href2($href,$header);
		Href2Dept($href,$header); //found on Method.php

		DisplayDept_Form($CollegeCode,$uncode,$DeptName,$AcadDeg,$noOfSem,$do,$AcadProgId,$ProgType);
	}
	else
	{
		include("ErrorPage.php");
	}


	?>




