<?php
session_start();
require_once('main.php');
require_once('University_Method.php');
//Page Title

Display_Title();

Background_Page();
$username=$_SESSION['username'];

if($username)
{
	include("header2.php");
	$conn = db_connect();

	$uncode1 = $_GET['uncode'];
	$univCode=intval($uncode1);

	$r=isset($_SESSION['Ltype']) ? $_SESSION['Ltype'] : '';
	$r=intval($r);

	$loct=isset($_SESSION['loct']) ? $_SESSION['loct'] : '';
	$loct=intval($loct);

	//Display UniversityName..
	$sql = "select UniversityName from Universities where UniversityCode='$univCode'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);

	if($loct==1)
	{

		if($r==1)
		{
		$href="insertBuilding.php?r=$r&univCode=$univCode";
		addLectures($href);
		}
		else
		if($r==2)
		{
			$href="insertBuilding.php?r=$r&univCode=$univCode";
			addLabs($href);
			//echo("lab");
		}


	}
	else
	{
		$href="university.php?id=1";
		backto($href);
	}


?>
<div align="center">
	<table border="0" width="100%" id="table1" height="246">

		<tr>
			<td colspan="2">
			<p align="right">
			<b><font size="6" color="#FFFFFF" face="Arial">
			<?php
			echo($row[0]);
			?>
			</font></b></p></td>
		</tr>
		<tr>
			<td colspan="2">
			<p align="right">
			<?php
			 	$msg2="Branches affiliated with the university";
			 	DisplaySuccHeader($msg2);

			?>
			</td>
		</tr>
		<tr>
		<td width="56%">
			<?php

				include("insert_Location.php");

			?>
			</td>
			<td width="42%" rowspan="2">
			<iframe name="I1" src="display_Loc.php?uncode=<?php echo($univCode);?>#form" width="300" height="238" >

			</iframe>
			</td>
		</tr>
		<tr>
		<td width="56%">
			&nbsp;</td>
		</tr>
	</table>
</div>

<?php
}
?>