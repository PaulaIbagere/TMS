<?php
session_start();
require_once('main.php');

//Page Title
Display_Title();

$conn = db_connect();
Background_Page();

// Get Values
$CollegeCode = $_GET['CollegeCode'];
$CollegeCode1=intval($CollegeCode);

$uncode=$_GET['uncode'];
$uncode1=intval($uncode);

$value=$_GET['value'];
$value=intval($value);

$f=$_GET['f'];
$f=intval($f);


//check value

if(($uncode1>0)&&($CollegeCode1>0))
{
	include("header2.php");

	$CollegeName=GetCollegeName($uncode1,$CollegeCode1);

	$href="TMSR.php?uncode=$uncode1&CollegeCode=$CollegeCode1&f=$f";

	Href2($href,$CollegeName);

	if($f==1)
		$year=$_SESSION['year'];
	else
	if($f==2)
		$year=GetMaxYear();

	$Sem = isset($_GET['Sem'])? $_GET['Sem'] : '';
	$Select = isset($_GET['Select'])? $_GET['Select'] : '';
	SelectMForm($uncode1,$CollegeCode1,$year,$Sem,$Select,$value,$f);

}//end of if
else
{
	include("ErrorPage.php");
}

?>