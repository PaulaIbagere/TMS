<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Fraunces:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="icon" href="/static/pictures/favicon.png">
    <title>Timetable Management System</title>
</head>
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



?>


<body class="body">
    <header class="header">
        <section class="header__top">
            <section class="header__logo">
                <h3 class="logo-title">ADMIN</h3>
            </section>
            <article class="header__icons">
                <section>
                    <a href="logout.php">
                        <span class="material-symbols-outlined arrow-centre">
                        logout
                        </span>
                    </a>
                </section>
                <section>
                    <a href="index.php">
                        <span class="material-symbols-outlined arrow-centre">
                        home
                        </span>
                    </a>
                </section>
            </article>
        </section>
        <nav class="header__nav">
        <?php
		$id=1;
	      ?>
                <ul>
                    <li><a href="university.php?id=<?php echo($id); ?>">UNIVERSITIES</a></li>
                    <li><a href="BuildingForm.php?id=<?php echo($id); ?>">HALLS & LABS</a></li>
                    <li><a href="DisplayUser.php">USERS</a></li>
                    <li><a href="AdminReport.php">REPORTS</a></li>
                    <li><a href="password-change.php">CHANGE PASSWORD</a></li>
                </ul>
        </nav>
    </header>
    <main class="main">
       
    <?php

if (strcmp($_SESSION['username'],"")!=0)
{
	
	$conn = db_connect();
	
	//return Menu
	$href="welcomeAdmin.php";
	Href($href);	
	
	if( !(isset($_POST['BS'])?$_POST['BS']:'') && ( (isset($_POST['univCode'])?$_POST['univCode']:'') || (isset($_POST['CollegeCode'])?$_POST['CollegeCode']:'' ) ))
	{
		$univCode=$_POST['univCode'];
		$univCode=intval($univCode);
		
		$year=$_POST['MaxYear'];
		
		$CollegeCode=isset($_POST['CollegeCode'])?$_POST['CollegeCode']:'';

		$SemNo=isset($_GET['SemNo'])?$_GET['SemNo']:'';
		
		display_AdminReport_form($year,$SemNo,$univCode,$CollegeCode,1);

	}
	else
	if ( (isset($_POST['BS'])?$_POST['BS']:'') && (isset($_POST['univCode'])?$_POST['univCode']:'') && (isset($_POST['CollegeCode'])?$_POST['CollegeCode']:'')) 
	{
		$univCode=isset($_POST['univCode'])?$_POST['univCode']:'';

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


    </main>
    <footer class="footer"></footer>
</body>
</html>