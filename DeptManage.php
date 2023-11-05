<?php
session_start();
require_once('main.php');

$conn = db_connect();

//Page Title

Display_Title();

Background_Page();

$username=$_SESSION['username'];

$year=$_SESSION['year'];

//Page Title
Display_Title();

if($username)
{

	include("header2.php");
	//get variables
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

	$notshare=isset($_POST['anysection']) ? $_POST['anysection'] : '';
	
	//echo("notshare=".$notshare);
	
	if(isset($_GET['checkit'])==1)
	{
		
		$SecID=$_POST['DSec'];
		//echo("in deptm sec=".$SecID);

	}
	else
		$SecID=0;
	
	$op=$_GET['op'];
	$op=intval($op);

	$s=isset($_GET['s']) ? $_GET['s'] : '';
	$s=intval($s);
	
	//Check Subject Form Feild
	//-------------------------
	$LectureName=isset($_POST['D2']) ? $_POST['D2'] : '';

	$msub=isset($_POST['D4']) ? $_POST['D4'] : '';
	
	$mday=isset($_POST['D3']) ? $_POST['D3'] : '';

	$mteach=isset($_POST['D5']) ? $_POST['D5'] : '';
	
	//--------------------------
	//College header
	Display_welcomeHeader_College($_SESSION['collegename']);

	//Deptartment Header

	$deptName=GetDeptName($uncode1,$CollegeCode1,$DeptNo);

	$href="CollegeManage.php?AcadDeg=$AcadDeg&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo#AcadDeg";

	//op=11 when we clicked on Lectuer
	if(($op==1)&&($s==1))
	{
		$header=$deptName."&nbsp;&gt; &nbsp;"."&#1580;&#1583;&#1608;&#1604;&#1577; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;"."&nbsp;&nbsp; - &#1605;&#1581;&#1575;&#1590;&#1585;&#1575;&#1578;";
	}
	else
	//op=12 when we clicked on Tuotorial
	if(($op==1)&&($s==2))
	{
		$header=$deptName."&nbsp;&gt; &nbsp;"."&#1580;&#1583;&#1608;&#1604;&#1577; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;"."&nbsp;&nbsp;- &#1578;&#1605;&#1575;&#1585;&#1610;&#1606;";
	}
	else
	//op=2 when we clicked on Lab
	if($op==2)
	{
		$header=$deptName."&nbsp;&gt; &nbsp;"."&#1580;&#1583;&#1608;&#1604;&#1577; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;";
	}
	Href2($href,$header);

	if((($uncode1>0)&&($CollegeCode1>0))&&(($AcadDeg>0)&&($DeptNo>0)))
	  {
		if(($Classno>0)&&($Sem>0))
		 {
			echo("</br>");

			// check Subjects inserted
			$conn = db_connect();
			//lectuer and Lab

			if((($op==1)&&($s==1)) ||($op==2))
			{
					$sql = "select * from CollegeSubject where AcadYNo='$year' and UniversityCode='$uncode1' and CollegeCode='$CollegeCode1' and DeptNo='$DeptNo' and AcadDegreeId='$AcadDeg' and ClassNo='$Classno' and SemNo='$Sem' and SubType=1 and SubHour!=0";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result))
				{
					$mtime = isset($_GET['mtime']) ? $_GET['mtime'] : '';
					$StudGroup = isset($_GET['StudGroup']) ? $_GET['StudGroup'] : '';

						DeptLec_Form($uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,$Sem,$op,$s,$year,$LectureName,$mday,$mtime,$msub,$mteach,$StudGroup,$SecID);
				}
				else
			 	{
					$msg="&#1604;&#1605; &#1610;&#1578;&#1605; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1605;&#1608;&#1575;&#1583; - &#1575;&#1604;&#1585;&#1580;&#1575;&#1569; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1605;&#1608;&#1575;&#1583; &#1575;&#1608;&#1604;&#1575; &#1579;&#1605; &#1576;&#1593;&#1583; &#1584;&#1604;&#1603; &#1575;&#1580;&#1585;&#1575;&#1569; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1580;&#1583;&#1608;&#1604;&#1577;";
					echo("<center><font size='4' face='Traditional Arabic' color='#FFFFFF'>"."<a href='Subject.php?AcadDeg=$AcadDeg&Class=$Classno&Sem=$Sem&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&f=1'>".$msg."</a></font></center>");
 			 	}
 			 }
 			 else
 			 //totorial lectuer
 			 if(($op==1)&&($s==2))
			 {
			 	$sql = "select * from CollegeSubject where AcadYNo='$year' and UniversityCode='$uncode1' and CollegeCode='$CollegeCode1' and DeptNo='$DeptNo' and AcadDegreeId='$AcadDeg' and ClassNo='$Classno' and SemNo='$Sem' and SubType=1 and SubTHour!=0";
			 	$result = mysqli_query($conn, $sql);
			 	if(mysqli_num_rows($result))
			 	{
					$mtime = isset($_GET['mtime']) ? $_GET['mtime'] : '';
					$msub = isset($_GET['msub']) ? $_GET['msub'] : '';
					$StudGroup = isset($_GET['StudGroup']) ? $_GET['StudGroup'] : '';
			
			 		DeptLec_Form($uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,$Sem,$op,$s,$year,$LectureName,$mday,$mtime,$msub,$mteach,$StudGroup,$SecID);
			 	}
			 	else
			 	{
			 		$msg="&#1604;&#1605; &#1610;&#1578;&#1605; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1605;&#1608;&#1575;&#1583; - &#1575;&#1604;&#1585;&#1580;&#1575;&#1569; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1605;&#1608;&#1575;&#1583; &#1575;&#1608;&#1604;&#1575; &#1579;&#1605; &#1576;&#1593;&#1583; &#1584;&#1604;&#1603; &#1575;&#1580;&#1585;&#1575;&#1569; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1580;&#1583;&#1608;&#1604;&#1577;";
					echo("<center><font size='4' face='Traditional Arabic' color='#FFFFFF'>"."<a href='Subject.php?AcadDeg=$AcadDeg&Class=$Classno&Sem=$Sem&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&f=1'>".$msg."</a></font></center>");
			    }
 			 }

		 }
	  }
	else
		{
		  include("ErrorPage.php");
		}
}
else
{
	include("ErrorPage.php");
}
?>