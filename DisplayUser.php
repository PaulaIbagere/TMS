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

//Page Title



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

	
	$href="welcomeAdmin.php";
	Href($href);
	$conn = db_connect();

    ?>
    <div align="center">&nbsp;</div>
<div align="center">
	<table border="2" width="70%" id="table33" cellpadding="5" cellspacing="6" bordercolorlight="#2F446F" bordercolordark="#2F446F" bordercolor="#003366">
	<?php
		//display all universities with their Colleges
		$conn = db_connect();
		$sql1 = "select UniversityCode,UniversityName from Universities";
		$result=mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result))
		{
			while($row=mysqli_fetch_row($result))
			{
				$collegename="";
				$sql2 = "select CollegeCode,CollegeName,UserName,Passwd from Colleges where
						UniversityCode='$row[0]' ";
				$result2=mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2))
				{
				?>
					<tr>
						<td dir="rtl" align="right" width="95%" bordercolorlight="#2F446F" bordercolordark="#2F446F" colspan="4" bgcolor="#2F446F">
						<p align="center">
						<b>
						<font size="5" face="Traditional Arabic" color="#FFFF00">Colleges Registered In the System  
						</font><font size="5" face="Traditional Arabic"></span>
						<font color="#FFFFFF">[ <span lang="ar-sa">Users</span>]</font>						
						</font></font></font></b></td>
					</tr>
					<tr>
						<td dir="rtl" align="right" width="95%" bordercolorlight="#2F446F" bordercolordark="#2F446F" colspan="4" bgcolor="#2F446F">
						<b><font size="4" face="Traditional Arabic" color="#FFFFFF">
						<?php echo($row[1]);?>
						</font></b>
						</td>
					</tr>
					<tr>
						
						<td dir="rtl" align="center" width="15%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						<b>
						<font face="Traditional Arabic" size="4" color="#FFFFFF">Password
						</font></b>
						</td>

						<td dir="rtl" align="center" width="15%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						<span lang="en"><b>
						<font face="Traditional Arabic" size="4" color="#FFFFFF">Username
						</font></b></span></td>

						<td dir="rtl" align="center" width="45%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						<b>
						<font face="Traditional Arabic" size="4" color="#FFFFFF">
						The College</font></b></td>

					<td width="15%" dir="rtl" align="center" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
					<font face="Traditional Arabic" color="#FFFFFF" size="4"><b>
					<span lang="ar-sa">College Code</span></b></font></td>
					</tr>
				<?php
					//Display Regiseted Colleges
					while($row2=mysqli_fetch_row($result2))
					{
					?>
					<tr>
						<td dir="rtl" align="center" width="15%" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<font face="Traditional Arabic" color="white"><b>
						<?php
							echo($row2[3]);
						?>
						<td dir="rtl" align="center" width="15%" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<font face="Traditional Arabic" color="white"><b>
						<?php
							echo($row2[2]);
						?>
						</b></font>
					</td>

						<td dir="rtl" align="center" width="45%" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<font face="Traditional Arabic"><b>
						<?php
							echo($row2[1]);
						?>
						</b></font></td>

						<td width="15%" dir="rtl" align="center" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						<font face="Traditional Arabic" color="#FFFFFF"><b>
						<span lang="en">
						<?php
							echo($row2[0]);
						?>
						</span></b></font>
						</td>
					</tr>
				<?php
				}//end of while 2
			   }//end of if 2
				else
				{
					//if no College Inserted
				?>
					<tr>
						<td dir="rtl" align="right" width="95%" bordercolorlight="#2F446F" bordercolordark="#2F446F" colspan="4" bgcolor="#2F446F">
						<b><font size="4" face="Traditional Arabic" color="#FFFFFF">
						<?php echo($row[1]);?>
						</font></b>
						</td>
					</tr>
					<tr>
						<td dir="rtl" align="center" colspan="4">
							<font face="Arial" color="white">
							<b>
							<?php
								//there is no Colleges inserted
								echo("No colleges were entered");
							?>
							</b>
							</font>
						</td>
					</tr>
				<?php
				}//end of else
			}//end of while
		}//end of main if
		else
		{
			//echo("no data to show ");
		?>	
			<tr>
						<td dir="rtl" align="center" colspan="4">
							<font face="Traditional Arabic" color="white">
							<b>
							<?php
								//there is no Colleges inserted
								echo("&#1604;&#1605; &#1610;&#1578;&#1605; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1603;&#1604;&#1610;&#1575;&#1578;");
							?>
							</b>
							</font>
						</td>
					</tr>
		<?php
		}
		?>
	</table>
</div>

<?php
}//end of if
else
{
	include("ErrorPage.php");
}

?>



    </main>
    <footer class="footer"></footer>
</body>
</html>