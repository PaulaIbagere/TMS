<?php
session_start();
require_once('main.php');
$conn = db_connect();
$username=$_SESSION['username'];

//Page Title
Display_Title();
Background_Page();

if($username)
{
	include("header2.php");
	$AcadDeg = $_GET['AcadDeg'];
	$AcadDeg=intval($AcadDeg);

	$Classno = $_GET['Class'];
	$Classno=intval($Classno);

	$CollegeCode = $_GET['CollegeCode'];
	$CollegeCode=intval($CollegeCode);

	$uncode=$_GET['uncode'];
	$uncode=intval($uncode);

	$DeptNo = $_GET['Dept'];
	$DeptNo=intval($DeptNo);

	$Sem = $_GET['Sem'];
	$Sem=intval($Sem);

	$SecID= $_GET['SecID'];
	$SecID=intval($SecID);

	
	$year = $_GET['year'];

	$NoOfStud = $_GET['NoOfStud'];
	$NoOfStud=intval($NoOfStud);

	$NoOfGroup = $_GET['NoOfGroup'];
	$NoOfGroup=intval($NoOfGroup);

	$flag = $_GET['flag'];
	$flag=intval($flag);

	//College header

	Display_welcomeHeader_College($_SESSION['collegename']);

	$deptName=GetDeptName($uncode,$CollegeCode,$DeptNo);

	//Back
	$href="InsertNoStud.php?AcadDeg=$AcadDeg&uncode=$uncode&CollegeCode=$CollegeCode&Dept=$DeptNo&Class=$Classno&Sem=$Sem";

		$header=$deptName;

	$year=$_SESSION['year'];

	$header=$header.$year;

	Href2($href,$header);


	if($flag==1)
	{
		DisplayRegStudentForm($uncode,$CollegeCode,$AcadDeg,$DeptNo,$Classno,$Sem,$year,$NoOfStud,$NoOfGroup,$flag,$SecID);
	}

}
else
{
	include("ErrorPage.php");
}

?>