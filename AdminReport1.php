<?php

session_start();

require_once('main.php');

require_once('Report_Method.php');

//-------------------------------------------------------------------------
//This page used to Display the Current Status of Managing Lectures for each College on specific University

//Create on : Saturday- 28/2/2009

//Creater: Hind from SUST

//Copywrite : @SUST@2009
//-------------------------------------------------------------------------

//Page Title and Background from [Page_layout.php]

Display_Title();

Background_Page();

if (strcmp($_SESSION['username'],"")!=0)
{

	include("header.php");
	
	$conn = db_connect();
	
	//return Menu
	$href="welcomeAdmin.php";
	Href($href);	
	
	if( !(isset($_POST['BS'])?$_POST['BS']:'') && ( (isset($_POST['univCode'])?$_POST['univCode']:'') || (isset($_POST['CollegeCode'])?$_POST['CollegeCode']:'' ) ))
	{
		$univCode=$_POST['UnivCode'];
		$univCode=intval($univCode);
		
		$year=$_POST['MaxYear'];
		
		$CollegeCode=isset($_POST['CollegeCode'])?$_POST['CollegeCode']:'';

		$SemNo=isset($_GET['SemNo'])?$_GET['SemNo']:'';
		
		display_AdminReport_form($year,$SemNo,$univCode,$CollegeCode,1);

	}
	else
	if ( (isset($_POST['BS'])?$_POST['BS']:'') && ($_POST['UnivCode']) && (isset($_POST['CollegeCode'])) )
	{
		$univCode=$_POST['UnivCode'];
		$univCode=intval($univCode);
		
		$year=$_POST['MaxYear'];
		
		$SemNo=$_POST['SemNo'];
		
		$CollegeCode=$_POST['CollegeCode'];
		
		$report=$_POST['report'];
		
		display_AdminReport_form($year,$SemNo,$univCode,$CollegeCode,$report);
		
		//[2] Get Colleges
	
		$sql2 = "select CollegeCode,CollegeName from Colleges where UniversityCode='$univCode' order by CollegeCode";
			
		$result2 = mysqli_query($conn, $sql2);


		//[3] Get all Depart on specific College and make paging Mechanism
		
		
		$Depts=GetAllDeparts($univCode,$CollegeCode);
		
		$option=1;
		
		if($Depts != -1)
		{
			switch($report)
			{
				case 1:{
							//Display Current Managed Hours
							echo("<a name='#Report1'>");
							include('AdReport1.php');
							echo("</a>");
							break;
					   }
					   
				case 2:{
							//Display Numbers of Students and Groups
							echo("<a name='#Report1'>");
							include('AdReport2.php');
							echo("</a>");
							break;
					   }
				
				case 3:{
							//Display Numbers of Students and Groups
							echo("<a name='#Report1'>");
							//include('AdReport3.php');
							echo("</a>");
							break;
					   }

					   
			}//end of switch
		}//end of if
		
	}//end of POST[BS]
	else
	{
		$SemNo=1;
		$year=GetMaxYear();
		$SemNo=isset($_GET['SemNo'])?$_GET['SemNo']:'';
		$univCode=isset($_GET['univCode'])?$_GET['univCode']:'';
		$CollegeCode=isset($_GET['CollegeCode'])?$_GET['CollegeCode']:'';
		$report=isset($_GET['report'])?$_GET['report']:'';

		display_AdminReport_form($year,$SemNo,$univCode,$CollegeCode,$report);
	}
	
}//end of session
else
{
	include("ErrorPage.php");
}
?>