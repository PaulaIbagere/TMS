<?php
session_start();

require_once('main.php');

//Page Title

Display_Title();

Background_Page();

$r = isset($_GET['r'])?$_GET['r']:'';
$value=intval($r);

$univCode = isset($_GET['univCode'])?$_GET['univCode']:'';
$uncode=intval($univCode);

//echo("r=".$value."  uncode=".$uncode);

// Destroy sessions
$old1 = isset($_SESSION['Ltype'])?$_SESSION['Ltype']:'';
$old2 = isset($_SESSION['loct'])? $_SESSION['loct']:'';

//echo("sr=".$old1."  sl=".$old2);
if((strcmp($old1,"")!=0)&&(strcmp($old2,"")!=0))
{
	unset($_SESSION['Ltype']);

	unset($_SESSION['loct']);
}
//
if (strcmp($_SESSION['username'],"")!=0)
{
	include("header.php");
	$href="BuildingForm.php?id=2";
	backto($href);

   // Check the Location
	$conn = db_connect();
	$sql_query22="select UnLoc from univloc where UniversityCode='$uncode'";
	$result22=mysqli_query($conn,$sql_query22);
	if (!(mysqli_num_rows($result22)))
	{
		// Go to Insert Location Page
		$_SESSION['Ltype']=$value;
		$loct=1;
		$_SESSION['loct']=$loct;
		if($value==1)
		{
			$msg='damn!!!&#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;';
			DisplayHeader($msg);
		}
		else
		{
			$msg="Enter the parameter";
			DisplayHeader($msg);
		}
		?>
		<p>
		</p>
		<table border="0" width="100%" id="table2">
			<tr>
			<td align="center">
			<p>
			<b>
			<span style="text-decoration: overline">
			<a href="UnivLocation.php?uncode=<?php echo($uncode);?>&r=<?php echo($value);?>">
			<font color="#B0CCFF" size="4" face="Traditional Arabic">
			<?php
			if($value==1)
			{
				$msg="&#1601;&#1590;&#1604;&#1575; &#1602;&#1605; &#1576;&#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1601;&#1585;&#1608;&#1593; (&#1575;&#1604;&#1605;&#1608;&#1575;&#1602;&#1593;)
				&#1575;&#1604;&#1578;&#1575;&#1576;&#1593;&#1577; &#1604;&#1604;&#1580;&#1575;&#1605;&#1593;&#1577; &#1575;&#1608;&#1604;&#1575; &#1548; &#1579;&#1605; &#1576;&#1593;&#1583; &#1584;&#1604;&#1603; &#1602;&#1605; &#1576;&#1575;&#1580;&#1585;&#1575;&#1569; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1575;&#1590;&#1575;&#1601;&#1577; &#1604;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;";
				echo($msg);

			}
			else
			if($value==2)
			{
				$msg="&#1601;&#1590;&#1604;&#1575; &#1602;&#1605; &#1576;&#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1601;&#1585;&#1608;&#1593; (&#1575;&#1604;&#1605;&#1608;&#1575;&#1602;&#1593;)
				&#1575;&#1604;&#1578;&#1575;&#1576;&#1593;&#1577; &#1604;&#1604;&#1580;&#1575;&#1605;&#1593;&#1577; &#1575;&#1608;&#1604;&#1575;&#1548; &#1579;&#1605; &#1576;&#1593;&#1583; &#1584;&#1604;&#1603; &#1602;&#1605; &#1576;&#1575;&#1580;&#1585;&#1575;&#1569; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1575;&#1590;&#1575;&#1601;&#1577; &#1604;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;";
				echo($msg);
			}
			?>
			</font>
			</a>
			</span>
			</b>
			</p>
			</td>
			</tr>
		</table>
		<?php
	}
	else
	{
	//
 	if(($value==1)&&($uncode>0))
  	{
  		//insert Lecture
		$msg='The new hall was successfully inserted';
		DisplayHeader($msg);
  		Lecture_Form($value,$uncode,$LectureName,$Capacity,$Loc);

    }//end of if
    if(($value==2)&&($uncode>0))
  	{
    	//insert lab
		$msg='The new Lab was successfully inserted';
		DisplayHeader($msg);

		$LabName=$_GET['LabName'];
		$Capacity=$_GET['Capacity'];
		$Loc=$_GET['Loc'];

		Lab_Form($value,$uncode,$LabName,$Capacity,$Loc);
    }
    } //end of else
 }

 else
 {
	include("ErrorPage.php");
 }

?>