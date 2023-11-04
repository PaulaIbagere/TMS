<?php
//echo(" This Page Display Reports for : Teacher and Student on each College");
session_start();
require_once('main.php');

$conn = db_connect();

//Page Title

Display_Title();

Background_Page();

//Get variables

$CollegeCode = $_GET['CollegeCode'];
$CollegeCode1=intval($CollegeCode);

$uncode=$_GET['uncode'];
$uncode1=intval($uncode);

$flag=$_GET['f'];
$flag=intval($flag);


//f==1 [Administrator]
//f==2 [Guest]
if($flag==1)

	$year=$_SESSION['year'];
else
if($flag==2)
	{
		$year=GetMaxYear();
		//$_SESSION['year']=$year;
	}

if(($uncode1>0)&&($CollegeCode1>0))
{
	include("header2.php");

	//College Admin
	if($flag==1)
	{
		$href="welcomeCollege.php?flag=1";

		$header=GetCollegeName($uncode1,$CollegeCode1);

		Href2($href,$header."&nbsp;&nbsp;>>Extracting Reports");
	}
	//
	else
	if($flag==2)
	{
		//Guest
		// Display College header
		$CollegeName=GetCollegeName($uncode1,$CollegeCode1);
	
		Display_welcomeHeader_College($CollegeName);

	}
	DisplayTMRmenu($uncode1,$CollegeCode1,$flag);

}
else
{
	include("ErrorPage.php");
}
?>
