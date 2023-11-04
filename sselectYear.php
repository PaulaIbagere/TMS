<?php

session_start();
require_once('main.php');
//Page Title

Display_Title();

$conn = db_connect();

$AcadDeg = $_GET['AcadDeg'];
$AcadDeg=intval($AcadDeg);

$Classno = $_GET['Class'];
$Classno=intval($Classno);

$CollegeCode = $_GET['CollegeCode'];
$CollegeCode1=intval($CollegeCode);

$uncode=$_GET['uncode'];
$uncode1=intval($uncode);

$DeptNo = $_GET['Dept'];
$DeptNo=intval($DeptNo);

$Sem = $_GET['Sem'];
$Sem=intval($Sem);

//if ($f==1)> Administrator
//if ($f==2)> users

$f=$_GET['f'];
$f=intval($f);

$frep=$_GET['frep'];
$frep=intval($frep);

$ProgType=$_GET['ProgType'];
$ProgType=intval($ProgType);


if($frep==1)

	$year=$_POST['D1'];


$username=$_SESSION['username'];

if($username)
{

	if((($uncode1>0)&&($CollegeCode1>0))&&(($AcadDeg>0)&&($DeptNo>0)))
	{
		$flag=true;

		if (!filled_out($_POST))
		{
			include("header2.php");
			Background_Page();

			// Display College header

			$CollegeName=GetCollegeName($uncode1,$CollegeCode1);

			Display_welcomeHeader_College($CollegeName);

				$msg='Please enter all data';
				$path = isset($_GET['path']) ? $_GET['path'] : '';
			Display_error_msg($msg,$path);
			SelectYear($uncode1,$CollegeCode1,$AcadDeg,$Classno,$Sem,$DeptNo,$f,$year,$ProgType);
			$flag=false;
    	}

    	if($flag==true)
    	{
    		// valid data

				include("displaytable.php");
		}

	}
	else
	{

		include("ErrorPage.php");
	}
}//end of main if

else
{

	include("ErrorPage.php");
}
?>