
<html dir="ltr">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">

<?php

require_once('main.php');


function display_College_form($colLoc,$colCode,$colName,$colUName,$colPass)
{
$uncode=isset($_SESSION['UnivCode'])?$_SESSION['UnivCode']:'';
?>
<script language="JavaScript">

function FP_preloadImgs() {//v1.0
	var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
	for(var i=0; i<a.length; i++){ 
		d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; 
	}
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
<div align="center">

<table border="0" width="73%" id="table1">
<tr>
	<td align="center">

<form method="POST"  action="InsertCollege.php?uncode=<?php echo ($uncode);?>" >
<div align="center">

	<table class="aaa" border="0" width="93%" id="table2" dir="rtl" height="221">

		<tr>
			<td width="22%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" dir="ltr" height="30">
				<p align="center">
				college Site<!--<img border="0" id="img6" src="College_files/CollegeLocation.jpg" height="22" width="110" 
				alt="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;" 
				fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 
				16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" 
				fp-title="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;">-->
			</td>

			<td width="72%" dir="ltr" height="30" colspan="3">

			<p align="right">
			<select size="1" name="D2" dir="rtl" tabindex="1" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold">
		
		<?php
		if(strcmp($colLoc,"")==0)
		{
		?>
			<option   value="" selected>College Branch

		</option>
		<?php
		}//end of if
				
				$conn = db_connect();
				$sql_query22="select LocId,UnLoc from UnivLoc where UniversityCode='$uncode'";
				$result22=mysqli_query($conn,$sql_query22);
				if (mysqli_num_rows($result22))
				{
					while($row22=mysqli_fetch_row($result22))
					{?>
					<option value="<?php
					echo($row22[1]);
					?>"
					<?php
					if(strcmp($colLoc,$row22[1])==0) { ?> selected <?php }
					?> >
					<?php
						echo($row22[1]);
					?>
					</option>
					<?php
					}
					?>
					</select>
				<?php
				}
				?>
		</td>
		</tr>

		<tr>
		<td width="22%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" dir="ltr" height="30">
		<p align="center">&nbsp;College Code<!--<img border="0" id="img1" src="College_files/CollegeCode.jpg" height="22" width="110" alt="&#1603;&#1608;&#1583; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1608;&#1583; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;">--></td>

		<p align="right">
		<td width="72%" dir="ltr" height="30" colspan="3">

		<p align="right">
		<?php
			//Get Max College No

			$conn = db_connect();

			// Define the SQL query
            $sql_query = "SELECT MAX(CollegeCode) FROM Colleges";

			$res = mysqli_query($conn, $sql_query);

             if (!$res) {
                 die("Query failed: " . mysqli_error($conn));
             }

             // Fetch the result as a single value
             $row = mysqli_fetch_array($res);

            // Extract the maximum CollegeCode value and calculate the next one
             $colCode = (intval($row[0]) == 0) ? 1 : intval($row[0]) + 1;

		

		?>






		<input type="text"  name="T1" value="<?php echo($colCode);?>"  size="23" dir="rtl" tabindex="2" style="font-size: 12pt; color: #2F446F; font-weight: bold; font-family:Traditional Arabic; "  readonly ></td>
		</tr>

		<tr>
		<td width="22%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" height="25" dir="ltr">
		<p align="center">
		College Name<!--<img border="0" id="img2" src="College_files/CollegeName.jpg" height="22" width="110" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;">--></td>

		<p align="right">

		<td width="72%" height="25" dir="ltr" colspan="3">

		<p align="right">

		<input type="text" name="T3" value="<?php echo($colName);?>" size="40" dir="rtl" tabindex="3" style="color: #2F446F; font-size: 12pt; font-weight: bold; font-family:Traditional Arabic">
		</td>

		</tr>

	<tr>
	<td width="22%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" bgcolor="#5A74A0">
	<p align="center">
	Username<!--<img border="0" id="img3" src="College_files/CollUsername.jpg" height="22" width="110" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;">--></td>

	<td width="34%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" colspan="2">
		<input name="T4" value="<?php echo($colUName);?>" size="23" dir="rtl" tabindex="4" style="color: #2F446F; font-size: 12pt; font-weight: bold; font-family:Traditional Arabic; float:right"></td>
	<td width="38%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" align="center">
	<Font size="3" color="yellow" face="Traditional Arabic" ><b>

	<?php
	//������ �� ��� �������� ��� �� ����� ��� ���� �������� ���
		$note="It should contain only english letters";
	echo($note);
	?>
	</b>
	</font>
	</td>
	</tr>

	<tr>
	<td width="22%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" bgcolor="#5A74A0">
	<p align="center">
	Password<!--<img border="0" id="img4" src="College_files/CollegePasswd.jpg" height="22" width="110" alt="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;">--></td>
	<td width="34%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" colspan="2">

		<input name="T5" value="<?php echo($colPass);?>" size="18" tabindex="5" style="font-size: 12pt; color: #2F446F; font-weight: bold;float:right" type="password" dir="rtl"></td>
	<td width="38%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="32" dir="ltr" align="center">
<Font size="3" color="yellow" face="Traditional Arabic" ><b>
<?php
//������ �� ���� ������ ��� �� ����� ��� ����� ���� �����
$note2="It must contain 4 letter or more";
echo($note2);
?>
</b></font>
		</td>
	</tr>
	<tr>
	<td width="47%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="47" dir="ltr" colspan="2">
	<input name="Submit" type="submit" value="  &#1581;&#1601;&#1592;  "  tabindex="3" style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0; float:left" dir="rtl"></td>
	<td width="55%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="47" dir="ltr" align="center" colspan="2">
	&nbsp;</td>
	</tr>
</table>
</div>
</form>
</td>
</tr>
</table>
</div>
<?php
}
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// validation of College Form
//(1)
function ValidCollCode($colCode,$uncode,$colLoc)
{
	$conn = db_connect();
	$sql_query="select CollegeCode from Colleges where UniversityCode='$uncode' and UnLoc='$colLoc'";
	$result=mysqli_query($conn, $sql_query);

	$flag=true;
	while ($row=mysqli_fetch_row($result))
	{
		if( $colCode==$row[0])
		{
			$flag=false;
			break;
		}

	}
	return $flag;
}
//(2)
function ValidCollName($colName,$uncode,$colLoc)
{
	$conn = db_connect();
	$sql_query="select CollegeName from Colleges where UniversityCode='$uncode' and UnLoc='$colLoc'";
	$result=mysqli_query($conn, $sql_query);
	$flag=true;
	while ($row=mysqli_fetch_row($result))
	{

		if(strcmp($colName,$row[0])==0)
		{
			$flag=false;
			break;
		}
	}
	return $flag;
}

//(3)
function ValidCollUserName($colUName,$uncode,$colLoc)
{
	$conn=db_connect();
	$sql_query="select UserName from Colleges where UniversityCode='$uncode' and UnLoc='$colLoc'";
	$result=mysqli_query($conn,$sql_query);
	$flag=true;
	while ($row=mysqli_fetch_row($result))
	{
		if(strcmp($colUName,$row[0])==0)
		{
			$flag=false;
			break;
		}
	}
	return $flag;
}
//



// College Login form
function DisplayLoginForm()
{
?>

<div align="center">
<form method="POST" action="welcomeCollege.php">

	<table border="0" width="51%" id="table5" dir="rtl" height="120">

	<tr>
		<td width="35%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" dir="ltr" height="30" align="center">
			<p align="center">UserName
			<!-- <img border="0" id="img4" src="header_files/userName.jpg" height="24" width="120" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;"> -->
		</td> 

		<p align="right">
		<td width="62%" dir="ltr" height="30">

			<input name="T1" id="T1" size="14" tabindex="1" style="font-family: Times New Roman; color: #003366; font-size: 14pt; font-weight: bold; float:right" dir="rtl"></td>
	</tr>

	<tr>
		<td width="35%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" height="25" dir="ltr" align="center">
		<p align="center"> Password
		<!-- <img border="0" id="img81" src="header_files/PasswdBut.jpg" height="24" width="120" alt="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;"> -->
	</td>

		<p align="right">

		<td width="62%" height="25" dir="ltr">

			<p align="right">
			<input name="T2" id="T2" size="14" tabindex="2" style="font-family: Times New Roman; 
			color: #003366; font-size: 14pt; font-weight: bold; float:right" dir="rtl" type="password">
		</td>

	</tr>

	<tr>
		<td width="35%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" height="25" dir="ltr" align="center"> School Year
			<!-- <img border="0" id="img82" src="header_files/AcadYearBut.jpg" height="24" width="120" alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
		</td>

		<td width="62%" height="25" dir="ltr">

			<p align="right">
					<select size="1" name="D3" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3">
					<!--
					<option value="" selected>
						&#1575;&#1582;&#1578;&#1585; &#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;
					</option>-->
					<?php
						$conn = db_connect();
						$sql_query3="select AcadYNo from AcadYear order by AcadYNo DESC";
						$result3=mysqli_query($conn, $sql_query3);
						if (mysqli_num_rows($result3))
						{
						while($row3=mysqli_fetch_row($result3)){
					?>
						<option value="<?php echo $row3[0];?>">
						<?php echo $row3[0] ?>
						</option>
						<?php
						}//end of while
						?>
						</select>
					<?php
					}//end of if
				?>
		</td>

	</tr>

	<tr>
		<td width="83%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="47" dir="ltr" align="center" colspan="2"> 
			<input name="Submit" type="submit" value=" Submit  "  tabindex="4" 
			style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; 
			vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0" 
			dir="rtl">
		</td>
	</tr>
	</table>
</form>
</div>

<?php
}
//
//Menus

function Display_College_Menu1($CollegeCode,$uncode)
{
?>
<div align="right">
	<table border="0" width="54%" id="table3">
		<tr>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">Reports
			<a target="_blank" href="TMSR.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&f=1">
			<img border="0" id="img24" src="Colleges-PAGE/bReport3.jpg" height="26" width="130" alt="&#1575;&#1604;&#1578;&#1602;&#1575;&#1585;&#1610;&#1585;" onmouseover="FP_swapImg(1,0,/*id*/'img24',/*url*/'Colleges-PAGE/bReport2.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img24',/*url*/'Colleges-PAGE/bReport3.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img24',/*url*/'Colleges-PAGE/bReport1.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img24',/*url*/'Colleges-PAGE/bReport2.jpg')" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1578;&#1602;&#1575;&#1585;&#1610;&#1585;"></a></td>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">Scheduling
			<a href="CollegeManage.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>">
			<img border="0" id="img52" src="Colleges-PAGE/Manag3.jpg" height="26" width="130" alt="&#1575;&#1604;&#1580;&#1583;&#1608;&#1604;&#1577;" onmouseover="FP_swapImg(1,0,/*id*/'img52',/*url*/'Colleges-PAGE/Manag1.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img52',/*url*/'Colleges-PAGE/Manag3.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img52',/*url*/'Colleges-PAGE/Manag2.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img52',/*url*/'Colleges-PAGE/Manag1.jpg')" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1580;&#1583;&#1608;&#1604;&#1577;"></a></td>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">Exit
			<a href="llogout.php">
			<img border="0" id="img17" src="Colleges-PAGE/butLogOut2.jpg" height="26" width="130" alt="&#1582;&#1585;&#1608;&#1580;" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1582;&#1585;&#1608;&#1580;" onmouseover="FP_swapImg(1,0,/*id*/'img17',/*url*/'Colleges-PAGE/butLogOut2.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img17',/*url*/'Colleges-PAGE/butLogOut2.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img17',/*url*/'Colleges-PAGE/ButLogout.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img17',/*url*/'Colleges-PAGE/butLogOut2.jpg')"></a></td>
		</tr>
	</table>
<?php
}

function Display_College_Menu2($CollegeCode,$uncode)
{
?>
</br>
</br>
<div align="center">

	<table border="0" width="25%" id="table6" cellpadding="3" cellspacing="3" bgcolor="#2F446F" bordercolor="#003366">
		
		<!--Add Depart-->
		<tr>
			<td bgcolor="#2F446F" height="38" align="center">
			<a href="ConfigDept.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>">
			<p style = "border: 1px solid blue; width: 50%; border-radius: 40%; padding: 10px; background-color: 
			lightblue; text-decoration: none">Section</p>
			<!-- <img border="0" id="img40" src="College_files/Dept1.jpg" height="38" width="190"  fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1575;&#1604;&#1575;&#1602;&#1587;&#1575;&#1605;"></a></td> -->
		</tr>
		
		<!--Configration-->
		<tr>
			<td bgcolor="#2F446F" height="38" align="center">
			<a href="ConfigNewYear.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=1">Settings
			<img border="0" id="img42" src="Colleges-PAGE/PeriodSt.jpg" height="38" width="190"  fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1573;&#1593;&#1583;&#1575;&#1583;&#1575;&#1578; " alt="&#1573;&#1593;&#1583;&#1575;&#1583;&#1575;&#1578; "></a></td>
		</tr>
		
		<!--Add Teachers-->
		<tr>
			<td bgcolor="#2F446F" align="center">
			<p align="center">
			<a href="insertTeacher.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=1">Teaching Members
			<img border="0" id="img43" src="College_files/Teachers.jpg" height="38" width="190"  fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1578;&#1583;&#1585;&#1610;&#1587;"></a></td>
		</tr>
	</table>

</div>

<?php
}
//
//Display welcome Header to College..
function Display_welcomeHeader_College($msg)
{
?>
<div align="center">
<table border="0" width="100%" id="table12" cellpadding="4" cellspacing="4" bordercolor="#003366">
	<tr>
		<td align="right" bgcolor="#2F446F">
		<?php
				DisplaySuccHeader($msg);
		?>
		</td>
	</tr>
</table>
</div>

<?php
}

//
function CheckCollege($username,$Passwd)
{

 $conn = db_connect();

//$sql = "select * from LoginAdmin where UserName='$username' and Passwd='$Passwd'";
//windows
$sql = "select * from Colleges where UserName='$username' and Passwd ='$Passwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0 )
{
   	return true;
}
else
  {
  	return false;
  }

}
//

function DisplayLectureBuilding($op,$univCode,$CollegeCode,$value)
{
//echo("lec=".$Lec."</br> univ=".$univCode."</br> coll=".$CollegeCode);

$year= isset($_POST['D4']) ? $_POST['D4'] : '';
$LecName= isset($_POST['D5']) ? $_POST['D5'] : '';
$yyear=$_SESSION['year'];

?>

<form method="POST" action="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=<?php echo($op);?>&value=<?php echo($value);?>">
<div align="center">
	<table border="0" width="78%" id="table7">
		<tr>
			<td>
				<div align="center">
				<table border="2" width="79%" bordercolorlight="#003366" bordercolordark="#003366" id="table10" bordercolor="#003366">
					<tr >
						<td bordercolor="#003366" align="right" bgcolor="#2F446F" height="16">
						<?php
						if($op==1)
						{
							//Lecture: display msg when mouser over picture
							$Dmsg="&#1593;&#1585;&#1590; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578; &#1575;&#1604;&#1605;&#1578;&#1575;&#1581;&#1577; &#1604;&#1604;&#1603;&#1604;&#1610;&#1577;";
						?>
							<p>Select Halls</p>
							<!-- <img border="0" id="img44" src="College_files/lect8.jpg" height="35" width="175" alt="&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;"> -->
						<?php
						}
						else
						{
							//Lab: display msg when mouser over picture
							$Dmsg="&#1593;&#1585;&#1590; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604; &#1575;&#1604;&#1605;&#1578;&#1575;&#1581;&#1577; &#1604;&#1604;&#1603;&#1604;&#1610;&#1577;";

						?>
							Specify the parameter
							<!-- <img border="0" id="img44" src="College_files/labss.jpg" height="35" width="175" alt="&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;"> -->
						<?php
						}
						?>
						</td>
						<td>
							<a href="BuildingReport.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=<?php echo($op);?>" target="_blank" ><img src='print.gif' width='37' height='28' align='left' alt='<?php echo($Dmsg);?>'></a>
						</td>
					</tr>
					<tr>
						<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF">
						<table border="0" width="100%" id="table11">
							<tr>
			<td height="28%" width="76%" colspan="2">
			<p align="right">
			<select size="1" name="D4" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1">
			<option value="<?php echo($yyear);?>" selected >
			<?php
					echo($yyear);
			?>
			</option>
			</select>
		    <?php
			 //}//end of if
		    ?>
			</td>
			<td height="28%" width="22%">
			<p align="center">
			Academic Year
			<!-- <img border="0" id="img45" src="Colleges-PAGE/year22.jpg" height="24" width="118" alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
			</td>
			</tr>
			<tr>
			<td height="28%" width="25%">
			
				<td height="28%" width="52%">
			<p align="right">
			<select size="4" name="D5" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="2">
		<?php
			if($op==1)
			{
				//Lecture
			?>
				<option value="" selected>Choose the hall designated for the college
			</option>
			<?php
			}
			else
			{
				//Lab
			?>
				<option value="" selected><p align="right"><b>
				<font color="#FFFFFF" face="Traditional Arabic">Choose laboratory assigned to college</font></b></option>
			<?php
			}
			$conn = db_connect();
			//(1)select the Location Of College
			$sql = "select UnLoc from colleges where UniversityCode='$univCode' and CollegeCode='$CollegeCode'";
			$result = mysqli_query($conn, $sql);
			$row=mysqli_fetch_row($result);

			//(2)Then select the Lecture Room at the Same Location
			$sql_query33="select SubBId,SubBName from SubBuildingSeminar where BId='$op' and UniversityCode='$univCode' and UnLoc='$row[0]'";
			$result33=mysqli_query($conn, $sql_query33);
			if (mysqli_num_rows($result33))
			{
			  while($row33=mysqli_fetch_row($result33))
			   {
			   	//check if Lecture inserted before
					$conn = db_connect();
					$sql_query332="SELECT count(SubBId) FROM usedBy where AcadYNo='$yyear' and UniversityCode='$univCode' 
					and CollegeCode='$CollegeCode' and BId='$op' and SubBId='$row33[0]'";
					$result332=mysqli_query($conn, $sql_query332);
					$row332=mysqli_fetch_row($result332);
					if($row332[0]==0)
					{
					?>
						<option value="<?php echo($row33[0]);?>">
						<?php
							echo($row33[1]);
						?>
						</option>
						<?php
				  	}//end of if
				}//end of while
				?>
				</select>
		    <?php
		   }//end of if
		    ?>
			<td height="28%" width="22%">
			<p align="center">
						<?php
						if($op==1)
						{
						?>
							<p>Hall Name</p>
							<!-- <img border="0" id="img37" src="Colleges-PAGE/chLecct.jpg" height="24" width="118" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;"></td> -->
						<?php
						}
						else
						{
						?>
							Lab Name
							<!-- <img border="0" id="img47" src="Colleges-PAGE/chLabs.jpg" height="24" width="118" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1593;&#1605;&#1604;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1593;&#1605;&#1604;"> -->
						<?php
						}
						?>
						</tr>
			
			<?php 
			
			if($op==1)
			{
			//Add Lecture
			?>
			<tr>
			<td height="28%" width="99%" colspan="3">
				
				<div align="right" dir="rtl">
						<b><font face="Traditional Arabic" color="white">*<font size="2"> </font></font><font size="2">
						<font face="Traditional Arabic" color="#FFFF00"> If there is no room available for the college in the list shown, 
							the hall can be added by clicking on *
						</font></font><font size="2" color="#FFFF00" face="Traditional Arabic">
						</font></b> 
				</div>
				
				<div align="right">
				<font face="Traditional Arabic"><b>
					<a href="SpecifyBuilding.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=<?php echo($op);?>&tab=<?php echo($value);?>">
				<font color="#FFFFFF">
				<span lang="ar-sa" style="text-decoration: none">Add Halls
					
				<img border="0" src="College_files/Add.gif" width="15" height="15" align="bottom"></span></font></a><font color="#FFFFFF">
				</font></b></font>
				</div>
				</tr>
			<?php
			}//end of op==1
			else
			if($op==2)
			{
			//Add Lab
			?>
			<tr>
			<td height="28%" width="99%" colspan="3">
				
				<div align="right" dir="rtl">
						<b><font face="Traditional Arabic" color="white">*<font size="2"> </font></font><font size="2"> 
						<font face="Traditional Arabic" color="#FFFF00">If the class available to the college is not 
							in the list shown, It can be added by clicking on 			
						<!-- &#1601;&#1609; &#1581;&#1575;&#1604;&#1577; &#1593;&#1583;&#1605; &#1608;&#1580;&#1608;&#1583;
						 &#1575;&#1604;&#1605;&#1593;&#1605;&#1604; &#1575;&#1604;&#1605;&#1578;&#1575;&#1581; &#1604;
						 &#1604;&#1603;&#1604;&#1610;&#1577; &#1601;&#1609; &#1575;&#1604;&#1602;&#1575;&#1574;&#1605;
						 &#1577; &#1575;&#1604;&#1605;&#1608;&#1590;&#1581;&#1577;&#1548;
						 &#1610;&#1605;&#1603;&#1606; &#1575;&#1590;&#1575;&#1601;&#1577; &#1575;&#1604;&#1605;&#1593;
						 &#1605;&#1604; &#1605;&#1606; &#1582;&#1604;&#1575;&#1604; &#1575;&#1604;&#1590;&#1594;&#1591; &#1593;&#1604;&#1609; -->
						
						</font></font><font size="2" color="#FFFF00" face="Traditional Arabic">
						</font></b> 
				</div>
				
				<div align="right">
				<font face="Traditional Arabic"><b>
					<a href="SpecifyBuilding.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=<?php echo($op);?>&tab=<?php echo($value);?>">
				<font color="#FFFFFF">
				<span lang="ar-sa" style="text-decoration: none">
					<!--����� ����-->
					Add a class
				<img border="0" src="College_files/Add.gif" width="15" height="15" align="bottom"></span></font></a><font color="#FFFFFF">
				</font></b></font>
				</div>
				</tr>
			<?php
			}//end of op==2
			?>
			<tr>
				<td height="28%" width="99%" colspan="3">
			
				</tr>
						</table>
						</td>
						</tr>
					<tr>
						<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<input type="submit" value="Submit" name="B1" style="color: #FFFFFF; font-family: Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" tabindex="3"></td>
					</tr>
				</table>
				</div>
			</div>
			</td>
		</tr>
	</table>
</div>
</form>
<?php
}

function DisplayRegMenu($univCode,$CollegeCode)
{
?>
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
<header class="header">
        <section class="header__top">
            <section class="header__logo">
                <h3 class="logo-title">SETTINGS</h3>
            </section>
            <article class="header__icons">
                <section>
                    <a href="settingspage.html">
                        <span class="material-symbols-outlined arrow-centre">
                        settings
                        </span>
                    </a>
                </section>
                <section>
                    <a href="homepage.html">
                        <span class="material-symbols-outlined arrow-centre">
                        home
                        </span>
                    </a>
                </section>
            </article>
        </section>
        <nav class="header__nav">
                <ul>
                    <li><a href="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=5#CollegeStartTime">Start Time of Lectures</a></li>
                    <li><a href="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=2&value=4#RegLab">Parameters</a></li>
                    <li><a href="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&op=1&value=3#RegLec">Halls</a></li>
                    <li><a href="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=2#RegNewYear">Number of Students</a></li>
                    <li><a href="ConfigNewYear.php?uncode=<?php echo($univCode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=1#RegNoOfStud">Academic Year</a></li>
                </ul>
        </nav>
    </header>
<?php
}

//Cofigration For New Year
function DisplayRegNewYearForm($uncode,$CollegeCode)
{
?>
<div align="center">
<?php
$href="SuccDirect.php?uncode=$uncode&CollegeCode=$CollegeCode";
?>
<form action="<?php echo($href);?>" method="post">
	<table border="0" width="78%" id="table17">
		<tr>
			<td>
			<div align="center">
			<table border="2" width="95%" bordercolorlight="#003366" bordercolordark="#003366" id="table18" bordercolor="#003366">
				<tr >
					<td bordercolor="#003366" align="right" bgcolor="#2F446F" height="16">
						<p>Registration for a new academic Year</p>
						<!-- <img border="0" id="img61" src="Colleges-PAGE/Regheader.jpg" height="35" width="175" 
						alt="&#1578;&#1587;&#1580;&#1610;&#1604; &#1593;&#1575;&#1605; &#1583;&#1585;&#1575;
						&#1587;&#1609; &#1580;&#1583;&#1610;&#1583;" fp-style="fp-btn: Simple Text 1; fp-font: 
						Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; 
						fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="&#1578;
						&#1587;&#1580;&#1610;&#1604; &#1593;&#1575;&#1605; &#1583;&#1585;&#1575;&#1587;&#1609; 
						&#1580;&#1583;&#1610;&#1583;"> -->
					</td>
				</tr>
				<tr>
					<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF">
					<table border="0" width="100%" id="table19">
					<tr>
					   <td height="28%" width="76%">
						<p align="right">
						<select size="1" name="D1" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1">
							<option value="" selected>Select Academic Year</option>
							<!-- come back -->
							<option value="2009/2008">2009/2008</option>
							<!--
							<option value="2010/2009">2010/2009</option>
							<option value="2011/2010">2011/2010</option>
							<option value="2011/2010">2012/2011</option>
							-->

						</select>

					   </td>
					<td height="28%" width="22%">
					<p align="center"> School Year </p>
						<!-- <img border="0" id="img60" src="Colleges-PAGE/year22.jpg" height="24" width="118" 
						alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" 
						fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 
						14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; 
						fp-orig: 0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
					</td>
				   </tr>
				    </table>
					</td>
					</tr>
					<tr>
						<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<input type="submit" value="Submit" name="B2" style="color: #FFFFFF; font-family: 
						Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" 
						tabindex="3"></td>
					</tr>
				</table>
				</div>
			</div>
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php
}

//Cofigration For New Year
function DisplayRegStudentForm($uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,$Sem,$year,$NoOfStud,$NoOfGroup,$flag,$SecID)
{
	$conn = db_connect();
	//Get Dept Name
	$sql2 = "select DeptName from Departments where
			UniversityCode='$uncode1' and
			CollegeCode='$CollegeCode1' and
			DeptNo='$DeptNo' and AcadDegreeId='$AcadDeg'";
	$result2 = mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_row($result2);

	//Get Acadmic Name
	$sql3 = "select AcadDegreeName from AcadDegree where
	   	AcadDegreeId='$AcadDeg'";
	$result3 = mysqli_query($conn, $sql3);
	$row3=mysqli_fetch_row($result3);

	//Display ClassName & SemName
	$sql4 = "select ClassName,SemName from Semester,ClassYear
	where Semester.ClassNo='$Classno' and
	ClassYear.ClassNo=Semester.ClassNo and
	Semester.SemNo='$Sem'";
	$result4 = mysqli_query($conn, $sql4);
	$row4=mysqli_fetch_row($result4);
?>
</br>
<div align="center">

<table border="0" width="79%" id="table20">
<tr>
<td>
<?php
	if($flag!=1)
	{
?>
		<form name="fr" method="POST"  action="SInsertNoStud.php?AcadDeg=<?php echo($AcadDeg);?>&Class=<?php echo($Classno);?>&Sem=<?php echo($Sem);?>&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&Dept=<?php echo($DeptNo);?>&SecID=<?php echo($SecID);?>" >
<?php
	}
	else
	{
		$href="SchangeStud.php?AcadDeg=$AcadDeg&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&Class=$Classno&Sem=$Sem&SecID=$SecID&f=1";
?>
		<form  name="fr" method="POST"  action="<?php echo($href);?>" >
	<?php
	}
	?>
<div align="center">

	<table class="aaa" border="2" width="85%" id="table21" dir="rtl" height="311" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<tr>
		<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="28" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">Department Name </p>
		<!-- <img border="0" id="img7" src="Colleges-PAGE/DEptName4.jpg" height="22" width="110" alt="&#1575;&#1587;&#1605;
		 &#1575;&#1604;&#1602;&#1587;&#1605;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; 
		 fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; 
		 fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1587;
		 &#1605;"> -->
		</td>

		<td width="68%" dir="ltr" height="28" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right"><font face="Traditional Arabic" color="#FFFFFF"><b><span lang="en-us">
		<?php
		//DeptName
			echo($row2[0]."&nbsp;- &nbsp;".$row3[0]);
		?>
		</span></b></font></td>
		</tr>

		<tr>
		<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="12" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">Academic Year
		<!-- <img border="0" id="img62" src="Depart_Files/ACDYEARS.jpg" height="22" width="110" 
		alt="&#1575;&#1604;&#1587;&#1606;&#1577; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577;" 
		fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; 
		fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0"
		 fp-title="&#1575;&#1604;&#1587;&#1606;&#1577; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577;"> -->
		</td>

		<td width="68%" dir="ltr" height="12" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right"><font face="Traditional Arabic" color="#FFFFFF"><b>
		<span lang="en-us">
		<?php
		//Class Year
			echo($row4[0]);
		?>
		</span></b></font></td>
		</tr>
		<tr>
		<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="30" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">Semester
		<!-- <img border="0" id="img63" src="Colleges-PAGE/Year26.jpg" height="22" width="110" alt="&#1575;&#1604;&#1601;
		&#1589;&#1604; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: 
		Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; 
		fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1601;&#1589;&#1604; &#1575;
		&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
		</td>

		<td width="68%" dir="ltr" height="30" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">
		<p align="right">

		<font face="Traditional Arabic" color="#FFFFFF"><b><span lang="en-us">
		<?php
			//SemesterName
			echo($row4[1]);
		?>
		</span></b></font></td>
		</tr>

		<tr>
		<td bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#B0CCFF" dir="ltr" height="30" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold" colspan="3">
		<p align="right">
		</td>

		</tr>

		<tr>
		<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" height="34" dir="ltr">
		<p align="center">School Year </p>
		<!-- <img border="0" id="img64" src="Colleges-PAGE/year27.jpg" height="22" width="110" alt="&#1575;&#1604;&#1593;
		&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: 
		Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; 
		fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;
		&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
		</td>

		<p align="right">

		<td width="68%" height="34" dir="ltr" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">
		<p align="right">
			<select size="1" name="D1" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1">
			<option value="<?php echo($year);?>" selected>
			<?php
				echo($year);
			?>
			</option>
		</td>
	</tr>
	<?php
	
		//check if (ClassNo=Final year) based on AcadProg
	
		$NumClasses=GetNumberOfClasses($AcadDeg);
		
		if($NumClasses==$Classno)
		{
			//check if there any section on depart
			//$uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,
			if(CheckDeptSection($uncode1,$CollegeCode1,$DeptNo,$AcadDeg,$Classno))
			{
	?>
			<tr>
				<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" bgcolor="#5A74A0">
				<p align="center">
					<img border="0" id="img77" src="Colleges-PAGE/DeptSeciont.jpg" height="22" width="110"  fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" />
				</p>
				</td>

				<td width="68%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" colspan="2">
				<p align="right">
					<select size="1" name="D2" dir="rtl" style="font-family: Traditional Arabic; font-size: 12pt; color: #003366; font-weight: bold" onchange="javascript:document.fr.action='InsertNoStud.php?AcadDeg=<?php echo($AcadDeg);?>&Class=<?php echo($Classno);?>&Sem=<?php echo($Sem);?>&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&Dept=<?php echo($DeptNo);?>&checkit=1';javascript:document.fr.submit();">
						<option value="" <?php if( strcmp($SecID,"")==0 ){ ?>selected <?php }?>>&#1601;&#1590;&#1604;&#1575; &#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1578;&#1582;&#1589;&#1589;</option>
				<!-- $DeptSection-->
						<?php
						
							//Display all Sections
							
							$conn = db_connect();
							
							
							$result=mysqli_query($conn, "select SecID,SecName from DeptSection where 
    		 									UniversityCode='$uncode1' and CollegeCode='$CollegeCode1' and 
    		 									DeptNo='$DeptNo' and AcadDegreeId='$AcadDeg' and ClassNo='$Classno'");
								
							if(mysqli_num_rows($result)>0)
							{
								
								while($row=mysqli_fetch_row($result))
								{
						?>
								<option <?php if( strcmp($SecID,$row[0])==0 ){?> selected <?php }?> value="<?php echo($row[0]);?>">
								<?php 
									//depart name
									echo($row[1]);
									
								?>
								</option>
						<?php
								}//end of while
							}//end of if
						?>
						</select>
					</p>
				</td>
			</tr>
	<?php
			}//end of if
		}//end of check final year
	?>
	<tr>
	<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" bgcolor="#5A74A0">
	<p align="center">Number of Students
	<!-- <img border="0" id="img65" src="Colleges-PAGE/stud28.jpg" height="22" width="110" alt="&#1593;&#1583;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1593;&#1583;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;"></td> -->

	<td width="68%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" colspan="2">
		<p align="right">

		<input name="T1" size="19" value="<?php echo($NoOfStud);?>" dir="rtl" tabindex="2" style="font-size: 12pt; color: #2F446F; font-weight: bold; font-family:Traditional Arabic; float:right"></td>
	</tr>

	<tr>
	<td width="28%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="32" dir="ltr" bgcolor="#5A74A0">
	<p align="center">Number of Groups
	<!-- <img border="0" id="img66" src="Colleges-PAGE/noofGroup29.jpg" height="22" width="110" alt="&#1593;&#1583;&#1583; &#1575;&#1604;&#1605;&#1580;&#1605;&#1608;&#1593;&#1575;&#1578;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1593;&#1583;&#1583; &#1575;&#1604;&#1605;&#1580;&#1605;&#1608;&#1593;&#1575;&#1578;"></td> -->
	<td width="68%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="32" dir="ltr" colspan="2">

		<p align="right">

		<input name="T2" size="19" value="<?php echo($NoOfGroup);?>" dir="rtl" tabindex="3" style="font-size: 12pt; color: #2F446F; font-weight: bold; font-family:Traditional Arabic; float:right"></td>
	</tr>

	<tr>
	<td width="28%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#B0CCFF">
	<p align="center">&nbsp;</td>
	<td width="24%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#5A74A0">
	<p align="center">
	<?php
		if($flag!=1)
		{
	?>
			<input name="Submit" type="submit" value="  &#1581;&#1601;&#1592;  "  tabindex="4" style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0; " dir="rtl" align="absmiddle"></td>
			<td width="21%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#B0CCFF">
		&nbsp;</td>
		</tr>
	<?php
		}
		else
		{
	?>
			<input name="Submit" type="submit" value="Submit"  tabindex="4" style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0; " dir="rtl" align="absmiddle"></td>

			<td width="21%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#5A74A0">
		<div align="center">
			<table border="1" width="55%" id="table32" bordercolorlight="#B0CCFF" bordercolordark="#2F446F" bgcolor="#5A74A0" bordercolor="#2F446F" cellpadding="5" cellspacing="5">
				<tr>
					<td bordercolorlight="#5A74A0" bordercolordark="#5A74A0">
				<?php
			 			$href="InsertNoStud.php?AcadDeg=$AcadDeg&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&Class=$Classno&Sem=$Sem";
				?><a href="<?php echo($href);?>" ><img border="0" id="img86" src="header_files/CanUpdate.jpg" height="20" width="100" alt="&#1575;&#1604;&#1594;&#1575;&#1569;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1594;&#1575;&#1569;"></a></td>
				</tr>
			</table>
		</div>
		</td>
			<td width="21%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#B0CCFF">
		&nbsp;</td>
		</tr>
		<?php
		}
		?>
</table>
</div>
</form>
			</td>
		</tr>
	</table>
</div>
<?php
}

//*************************
// Display Menu : [ addNew ] [ All ready existed]
function DisplayTeacherMenu($uncode,$CollegeCode)
{
?>
<div align="right">
	<table border="0" width="36%" id="table27">
		<tr>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<a href="insertTeacher.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=2">
			<img border="0" id="img75" src="Colleges-PAGE/pdisplayTeach3.jpg" height="35" width="175" alt="&#1578;&#1581;&#1583;&#1610;&#1579; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1604;&#1575;&#1587;&#1575;&#1578;&#1584;&#1607; " fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1581;&#1583;&#1610;&#1579; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1604;&#1575;&#1587;&#1575;&#1578;&#1584;&#1607; "></a></td>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<a href="insertTeacher.php?uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&value=1">
			<img border="0" id="img74" src="Colleges-PAGE/pAddTeach.jpg" height="35" width="175" alt="&#1578;&#1587;&#1580;&#1610;&#1604; &#1575;&#1587;&#1578;&#1575;&#1584; &#1580;&#1583;&#1610;&#1583;" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1587;&#1580;&#1610;&#1604; &#1575;&#1587;&#1578;&#1575;&#1584; &#1580;&#1583;&#1610;&#1583;"></a></td>
		</tr>
	</table>
</div>

<?php
}
//
// Check Teacher Name Inserted before
function checkTeacherName($TName,$uncode,$CollegeCode)
{
	$conn = db_connect();
	$year=$_SESSION['year'];
	$sql = "select TeacherNo from Teachers where
	TeacherName='$TName' and AcadYNo='$year' and UniversityCode='$uncode' and CollegeCode='$CollegeCode'";
 	$results=mysqli_query($conn,$sql);
 	$rows=mysqli_fetch_row($results);
 	if($rows[0]==0)
 		return true;
 	else
 		return false;

}

//
//Teacher Form
function DisplayTeacherForm($uncode1,$CollegeCode1,$value,$TName,$TQ,$status)
{
	$conn=db_connect();
	$year=$_SESSION['year'];
	$selectedCollege=isset($_SESSION['SelectedCollege']) ? $_SESSION['SelectedCollege'] : '';
	//echo("selected College=".$selectedCollege);

?>
</br>
<table border="0" width="100%" id="table22">
	<tr>
		<td  dir="rtl" height="234">
			<iframe name="I1" src="DisplayTeachers.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&flag=1" width="100%" border="0" frameborder="0" height="259">
			Display Teacher
		</iframe>
		</td>
		<td dir="rtl" width="445" height="234">
			<div align="center">
			<?php
				if($value==1)
				{
			?>
				<form name="f1" method="POST"  action="sinsertTeacher.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=<?php echo($value);?>&TName=<?php echo($TName);?>&TQ=<?php echo($TQ);?>" >
			<?php
				}
				else
				{
			?>
				</form>
				<form name="f1" method="POST"  action="sinsertTeacher.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=<?php echo($value);?>&TName=<?php echo($TName);?>" >
				<?php
				}
				?>
			<table border="2" width="95%" bordercolorlight="#003366" bordercolordark="#003366" id="table25" bordercolor="#003366">
			<?php
			if($value==1)
			{
				//add New Teacher
			?>
			  <tr>
				 <td bordercolor="#003366" align="right" bgcolor="#2F446F" height="16">
				 <font face="Traditional Arabic" color="yellow" size="4"><b>
				 <?php
					 	$header="<span dir='rtl'>".$year."</span>" ." Teaching members for the academic year ";
					 echo($header);
				  ?>
				  </b></font>
				 </td>
				</tr>
				<tr>
					<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF">
					<table border="0" width="100%" id="table26">
					<tr>
					   <td height="28%" width="24%"><p>Professors Name</p>
					  		<!-- <img border="0" id="img69" src="Colleges-PAGE/pTeacherNam.jpg" height="24" width="118" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;"> -->
					  </td>
					   <td height="28%" width="9%">
					  		<p align="right">
					  			<select size="1" name="pre" dir="rtl" style="color: #000000; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold; vertical-align:baseline; letter-spacing:1" tabindex="1">
					  			<option value="&#1571;." selected >&#1571;.</option>
								<option value="of the.">of the.</option>
								<option value="&#1583;.">&#1576;.</option>

					  		</select>
					  		</p>
					  </td>
					  <td height="28%" width="57%">
								<input name="T1" value="<?php echo($TName);?>" size="30" dir="rtl" tabindex="1" style="font-size: 12pt; color: #2F446F; font-weight: bold; font-family:Traditional Arabic; ">
					  </td>
				   		</tr>
						<tr>
					   <td height="28%" width="24%"><p>Teachers Job</p>
						<!-- <img border="0" id="img70" src="Colleges-PAGE/PTeacherJob.jpg" height="24" width="118"  fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="������ ��������"></td> -->
					   <td height="28%" width="99%" colspan="2">
						<select size="1" name="D1" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="2">
							
							<!-- case 0 --->
							<option  value="" <?php if(strcmp($TQ,"")==0){ ?> selected <?php }	?> >
								Choose the Job
							</option>

							<!-- case 1 : Teacher --->
							<option value="1" <?php if($TQ==1){ ?> selected <?php }?> >Mr</option>

							<!-- case 2 : Co.Teacher --->
							<option value="2" <?php if($TQ ==2){ ?> selected <?php }?> >Associate Professor</option>

							<!-- case 3 : Assist.Teacher --->
							<option value="3" <?php if($TQ == 3){ ?> selected <?php }?> >Assistant Professor</option>

							
							<!-- case 4: Lectural --->
							<option value="4" <?php if($TQ ==4){ ?> selected <?php }?> >Lecturer</option>
								
						   
						   <!-- case 5 : Teaching Assistant--->
							<option value="5" <?php if($TQ ==5){ ?> selected <?php }?> >Teaching Assistant</option>
								
						   <!-- case 6 : Kapeer.Teacher[Modares]--->
							<option value="6" <?php if($TQ ==6){ ?> selected <?php }?> >Senior teacher</option>
	
						   <!-- case 7 : First.Teacher[Modares]--->
							<option value="7" <?php if($TQ == 7 ){ ?> selected <?php }?> >First Teacher</option>
							
							<!-- case 8 : Modares--->
							<option value="8" <?php if( $TQ ==8){ ?> selected <?php }?> >Teacher</option>
							
							<!-- case 9 : Technical Lectural--->
								<option value="9" <?php if($TQ == 9){ ?> selected <?php }?> >Technology lecturer</option>

						</select>
						</td>
				  </tr>
						<tr>
					   <td height="28%" width="24%">
						&nbsp;</td>
					   <td height="28%" width="99%" colspan="2">
						<!-- Status of Teacher 
							 0 >>  work on a College (default value)
							 1 >>  assisstance from other College -->
						
							<select size="1" name="DS" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3">
							
							<option  value="0" <?php if(strcmp($status,"0")==0){ ?> selected <?php }?> selected >
							College Professor
							</option>
							
							<option  value="1" <?php if(strcmp($status,"1")==0){ ?> selected <?php }?> >
								A cooperating professor from another college
							</option>
						</select>
							
						</td>
				  </tr>
				    </table>
					</td>
					</tr>
					<tr>
						<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<input type="submit" value="Submit" name="B3" style="color: #FFFFFF; font-family: Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" tabindex="3"></td>
					</tr>
				</table>
			<?php

			}//end of value==1
			else
			if($value==2)
			{
				//Register Teacher from Previous Year
			?>
			  <tr>
				 <td bordercolor="#003366" align="right" bgcolor="#2F446F" height="4">
				  <font face="Traditional Arabic" color="yellow" size="4"><b>
				 <?php
					 	$header="&#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1578;&#1583;&#1585;&#1610;&#1587; &#1604;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"."<span dir='rtl'>".$year."</span>";
					 echo($header);
				  ?>
				  </b></font>
				 </td>
				</tr>
				
				<tr>
					<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF">
					<table border="0" width="100%" id="table26">
					<tr>
					   <td height="28%" width="24%">
					  	&nbsp;</td>
					
					<!-- Specify Status of Teachers-->
					<td height="28%" width="75%">
					
							<select size="1" name="DS" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1" onchange="javascript:document.f1.action='sinsertTeacher.php?f=1&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=<?php echo($value);?>';javascript:document.f1.submit();">
						<!-- ����� ������ �������� -->	
							<option  value="0" <?php if(strcmp($status,"0")==0){ ?> selected <?php }?>>
							<!--����� �������-->
							&#1575;&#1587;&#1578;&#1575;&#1584; &#1576;&#1575;&#1604;&#1603;&#1604;&#1610;&#1577;
							</option>
							
							<option  value="1" <?php if(strcmp($status,"1")==0){ ?> selected <?php }?> >
							<!--����� ������ �� ���� ����-->
								&#1575;&#1587;&#1578;&#1575;&#1584; &#1605;&#1578;&#1593;&#1575;&#1608;&#1606; &#1605;&#1606; &#1603;&#1604;&#1610;&#1577; &#1571;&#1582;&#1585;&#1609;
							</option>
						</select>
					</td>
				   
				   </tr>
					
					<?php
					if($status == 1)
					{
						$query = "SELECT DISTINCT CollegeCode, CollegeName FROM Colleges WHERE UniversityCode = '$uncode1' AND CollegeCode != '$CollegeCode1' ORDER BY CollegeName";

                            $result = mysqli_query($conn, $query);
						if(mysqli_num_rows($result)>0)
						{
		
					?>
					<tr>
					   <td height="28%" width="24%">
							<p align="center"><b>
							<font color="#FFFFFF" face="Traditional Arabic">&#1575;&#1604;&#1603;&#1604;&#1610;&#1577;</font></b>

					  	</td>
					
						<td height="28%" width="75%">
							<!-- Select Colleges--->
							
									<select size="1" name="DCollege" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="2" onchange="javascript:document.f1.action='sinsertTeacher.php?f=1&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=<?php echo($value);?>';javascript:document.f1.submit();">
							
								<?php
								$c = 0;
									while($row=mysqli_fetch_row($result))
									{	
								?>
										<option value="<?php echo($row[0]);?>" 
										
										<?php if($selectedCollege == $row[0]){?> selected <?php }?> >
											<?php 
												echo($row[1]); 
												$c++;
											?>
										</option>
								<?php
									}//end of while
								?>
								<!--other option : Teacher from other univerities-->
									<option value="-1" <?php if($selectedCollege == -1){?> selected <?php }?> >
										&#1575;&#1582;&#1585;&#1609;
									</option>


							</select>
		
						</td>
				   
				   </tr>
					<?php
						}//end of if
					}//end of if
					?>
					<tr>
					   <td height="28%" width="24%">
					  		<p align="center">
					  		<img border="0" id="img69" src="Colleges-PAGE/pTeacherNam.jpg" height="24" width="118" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;">
					  </td>
					
					<td height="28%" width="75%">
					
							<select size="4" name="D2" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3" multiple>
						<option value="" selected>&#1575;&#1582;&#1578;&#1585; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;</option>
					<?php
					$conn = db_connect();
						
					
					if(intval($status)==0)
					{				
						//����� �������	
							$sqls_query8 = "select TeacherNo,TeacherName from Teachers where UniversityCode='$uncode1' and CollegeCode='$CollegeCode1' and Status='0' group by TeacherName order by TeacherName ";
					}
					else
					if(intval($status)==1)
					{
						//������ �� ���� ����						

						if($selectedCollege== -1)
								$sqls_query8 = "select TeacherNo,TeacherName from Teachers where UniversityCode='$uncode1' and Status='1' or CollegeCode='$CollegeCode1' group by TeacherName order by TeacherName ";
						else
								$sqls_query8 = "select TeacherNo,TeacherName from Teachers where UniversityCode='$uncode1' and Status='0' and CollegeCode='$selectedCollege' group by TeacherName order by TeacherName ";

					}
											
					$results8=mysqli_query($conn,$sqls_query8);
					if (mysqli_num_rows($results8))
					{
						while($rows8=mysqli_fetch_row($results8))
						{?>
						<option value="<?php echo($rows8[0]);?>"
						<?php
							if(strcmp($TName,$rows8[0])==0)
							{ ?> selected <?php }
						?> >
						<?php
							echo($rows8[1]);
						?>
						</option>
					<?php
					}
					?>
					</select>
				<?php
				}//end of if
				?>
				</td>
				   </tr>
				 </table>
				 </td>
				</tr>
				<tr>
					<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
					<input type="submit" value="   &#1581;&#1601;&#1592;  " name="B3" style="color: #FFFFFF; font-family: Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" tabindex="3"></td>
					</tr>
					</table>
			<?php
			}
		    ?>
				</form>
				</div>
			</td>
	</tr>
</table>
<?php
}//end of Teacher Form


//HERE Update Teacher Form
function UpdateTeacherForm($uncode1,$CollegeCode1,$TNo,$TName,$TQ,$status,$doupdate)
{
	$year=$_SESSION['year'];
	
	
?>
</br>
<table border="0" width="100%" id="table22">
	<tr>
		<td  dir="rtl" height="234">
	   	<iframe name="I1" src="DisplayTeachers.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&flag=1" width="100%" border="0" frameborder="0" height="259">
			Display Teacher
		</iframe>
		</td>
		<td dir="rtl" width="445" height="234">
			<div align="center">
			<?php
			if($doupdate==1)
			{
			?>
					<form name="fteacher" method="POST"  action="sinsertTeacher.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&TNo=<?php echo($TNo);?>year=<?php echo($year);?>&doupdate=1" >
				
			<?php
			}//end of if
				
			?>
			<table border="2" width="95%" bordercolorlight="#003366" bordercolordark="#003366" id="table25" bordercolor="#003366">
			
			  <tr>
				 <td bordercolor="#003366" align="right" bgcolor="#2F446F" height="16">
				 <font face="Traditional Arabic" color="yellow" size="4"><b>
				 <?php
					 	$header="&#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1578;&#1583;&#1585;&#1610;&#1587; &#1604;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"."<span dir='rtl'>".$year."</span>";
					 echo($header);
				  ?>
				  </b></font>
				 </td>
				</tr>
				<tr>
					<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF">
					<table border="0" width="100%" id="table26">
					<tr>
					   <td height="28%" width="24%">
					  <img border="0" id="img69" src="Colleges-PAGE/pTeacherNam.jpg" height="24" width="118" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;"></td>
					<td height="28%" width="75%">

						<input name="T1" value="<?php echo($TName);?>" size="30" dir="rtl" tabindex="1" style="font-size: 12pt; color: #2F446F; font-weight: bold; font-family:Traditional Arabic; float:right">
						</td>
				   		</tr>
						<tr>
					   <td height="28%" width="24%">
						<img border="0" id="img70" src="Colleges-PAGE/PTeacherJob.jpg" height="24" width="118"  fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="������ ��������"></td>
						<td height="28%" width="75%">
						<select size="1" name="D1" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="2">
						
							<!-- case 1 : Teacher --->
							<option value="1" <?php if($TQ ==1){ ?> selected <?php }?> >&#1575;&#1587;&#1578;&#1575;&#1584;</option>

							<!-- case 2 : Co.Teacher --->
							<option value="2" <?php if($TQ ==2){ ?> selected <?php }?> >&#1575;&#1587;&#1578;&#1575;&#1584; &#1605;&#1588;&#1575;&#1585;&#1603;</option>

							<!-- case 3 : Assist.Teacher --->
							<option value="3" <?php if($TQ == 3){ ?> selected <?php }?> >&#1575;&#1587;&#1578;&#1575;&#1584; &#1605;&#1587;&#1575;&#1593;&#1583;</option>

							
							<!-- case 4: Lectural --->
							<option value="4" <?php if($TQ ==4){ ?> selected <?php }?> >&#1605;&#1581;&#1575;&#1590;&#1585;</option>
								
						   
						   <!-- case 5 : Teaching Assistant--->
							<option value="5" <?php if($TQ ==5){ ?> selected <?php }?> >&#1605;&#1587;&#1575;&#1593;&#1583; &#1578;&#1583;&#1585;&#1610;&#1587;</option>
								
						   <!-- case 6 : Kapeer.Teacher[Modares]--->
							<option value="6" <?php if($TQ ==6){ ?> selected <?php }?> >&#1603;&#1576;&#1610;&#1585; &#1605;&#1583;&#1585;&#1587;&#1610;&#1606;</option>
	
						   <!-- case 7 : First.Teacher[Modares]--->
							<option value="7" <?php if($TQ == 7 ){ ?> selected <?php }?> >&#1605;&#1583;&#1585;&#1587; &#1571;&#1608;&#1604;</option>
							
							<!-- case 8 : Modares--->
							<option value="8" <?php if( $TQ ==8){ ?> selected <?php }?> >&#1605;&#1583;&#1585;&#1587;</option>
							
							<!-- case 9 : Technical Lectural--->
								<option value="9" <?php if($TQ == 9){ ?> selected <?php }?> >&#1605;&#1581;&#1575;&#1590;&#1585; &#1578;&#1603;&#1606;&#1608;&#1604;&#1608;&#1580;&#1609;</option>
								
						</select>
						</td>
				  </tr>
						<tr>
					   <td height="28%" width="24%">
						&nbsp;</td>
						<td height="28%" width="75%">
						<!-- Status of Teacher 
							 0 >>  work on a College (default value)
							 1 >>  assisstance from other College -->
						
							<select size="1" name="DS" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3">
							
							<option  value="0" <?php if(strcmp($status,"0")==0){ ?> selected <?php }?> selected >
							<!--����� �������-->
							&#1575;&#1587;&#1578;&#1575;&#1584; &#1576;&#1575;&#1604;&#1603;&#1604;&#1610;&#1577;
							</option>
							
							<option  value="1" <?php if(strcmp($status,"1")==0){ ?> selected <?php }?> >
							<!--����� ������ �� ���� ����-->
								&#1575;&#1587;&#1578;&#1575;&#1584; &#1605;&#1578;&#1593;&#1575;&#1608;&#1606; &#1605;&#1606; &#1603;&#1604;&#1610;&#1577; &#1571;&#1582;&#1585;&#1609;
							</option>
						</select>
							
						</td>
				  </tr>
				    </table>
					</td>
					</tr>
					<tr>
						<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<input type="submit" value="   &#1578;&#1593;&#1583;&#1610;&#1604;  " name="B3" style="color: #FFFFFF; font-family: Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" tabindex="3"></td>
					</tr>
				</table>
				
				</form>
				</div>
			</td>
	</tr>
</table>
<?php
}//end of Update Teacher Form


//use on Page: TMSR.php
// Display Menu
function DisplayTMRmenu($uncode1,$CollegeCode1,$flag)
{
//echo("f=".$flag);
	if($flag==1)
		$tar="";
	else
	if($flag==2)
		$tar="target=''";
?>
<div>&nbsp;</div>
<div align="center">
	<table border="2" width="27%" id="table22" cellspacing="10" cellpadding="10" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bordercolor="#000080">
		<tr>
			<td bgcolor="#B0CCFF" width="81%" dir="rtl" bordercolorlight="#003366" bordercolordark="#003366" align="center">

			<a <?php echo($tar);?> href="StudDept.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&f=<?php echo($flag);?>">
			<font face="Traditional Arabic" size="5"><b>
			Academic Year Tables<img border="0" id="img76" src="Colleges-PAGE/FinalBu1.jpg" height="38" width="190" alt="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1587;&#1606;&#1608;&#1575;&#1578; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577; " fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1587;&#1606;&#1608;&#1575;&#1578; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577; " onmouseover="FP_swapImg(0,0,/*id*/'img76',/*url*/'Colleges-PAGE/FinalBu11.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img76',/*url*/'Colleges-PAGE/FinalBu1.jpg')"></b></font>
			</a>
			</td>
		</tr>
		<tr>
			<td bgcolor="#B0CCFF" width="81%" dir="rtl" bordercolorlight="#003366" bordercolordark="#003366" align="center">
			<a <?php echo($tar);?> href="FormDept.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=1&f=<?php echo($flag);?>">
			Professors Schedule<img border="0" id="img77" src="Colleges-PAGE/FinalBu2.jpg" height="38" width="190" alt="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1575;&#1587;&#1575;&#1578;&#1584;&#1607;" onmouseover="FP_swapImg(0,0,/*id*/'img77',/*url*/'Colleges-PAGE/FinalBu21.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img77',/*url*/'Colleges-PAGE/FinalBu2.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1575;&#1587;&#1575;&#1578;&#1584;&#1607;">
			</a>
			</td>
		</tr>
		<tr>
			<td bgcolor="#B0CCFF" width="81%" dir="rtl" height="23" bordercolorlight="#003366" bordercolordark="#003366" align="center">
			<a <?php echo($tar);?> href="FormDept.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=2&f=<?php echo($flag);?>">
			Hall Schedules<img border="0" id="img78" src="Colleges-PAGE/FinalBu3.jpg" height="38" width="190" alt="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" onmouseover="FP_swapImg(0,0,/*id*/'img78',/*url*/'Colleges-PAGE/FinalBu31.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img78',/*url*/'Colleges-PAGE/FinalBu3.jpg')" fp-title="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;"></td>
			</a>
		</tr>
		<tr>
			<td  bgcolor="#B0CCFF" width="81%" dir="rtl" bordercolorlight="#003366" bordercolordark="#003366" align="center">
			<a <?php echo($tar);?> href="FormDept.php?uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&value=3&f=<?php echo($flag);?>">
			Factor Tables<img border="0" id="img79" src="Colleges-PAGE/FinalBu4.jpg" height="38" width="190" alt="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;" onmouseover="FP_swapImg(0,0,/*id*/'img79',/*url*/'Colleges-PAGE/FinalBu4.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img79',/*url*/'Colleges-PAGE/FinalBu4.jpg')" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;"></td>
			</a>
		</tr>
	</table>
	<p>&nbsp;</div>
<?php
}

// This Method used on selectYear.php Page
function SelectYear($uncode1,$CollegeCode1,$AcadDeg,$Classno,$Sem,$f,$DeptNo,$year,$ProgType)
{
	$DeptNo = $_GET['Dept'];
	$DeptNo=intval($DeptNo);

	
?>
<div>&nbsp; </div>
<div align="center">
	<table border="1" width="51%" id="table21" cellpadding="0" cellspacing="0">
		<tr>
			<td width="627" height="23" dir="rtl" bgcolor="#003366">
			<p align="right"><font face="Traditional Arabic" size="4"><b>&nbsp;<font color="#FFFFFF">
				 <!-- &#1601;&#1590;&#1604;&#1575; 	&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;</font></b></font> -->
				Please Select Academic Year
			</p>

			</font></b></font></td>
		</tr>
		<tr>
			<td width="627" dir="rtl" bgcolor="#5A74A0">
			<?php
				$href="sselectYear.php?AcadDeg=$AcadDeg&Class=$Classno&Sem=$Sem&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&f=1&frep=1&ProgType=$ProgType";
			?>
			<form method="POST" action="<?php echo($href);?>">
				<div align="center">
				<table border="2" width="74%" id="table23" bordercolorlight="#003366" bordercolordark="#003366">
					<tr>
						<td width="169" bgcolor="#2F446F" bordercolorlight="#003366" bordercolordark="#003366" align="center">
						<p align="center"><font face="Traditional Arabic"><b>
						<font color="#FFFFFF">
						School year
						<!-- &#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; -->
						</font></b></font><font color="#FFFFFF">
						</font>
						</td>
						<td bgcolor="#2F446F" bordercolorlight="#003366" bordercolordark="#003366" align="center">
						<p align="right">
						<select size="1" name="D1" dir="rtl" tabindex="1" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold">
						<option value=""
						<?php
							if(strcmp($year,"")==0)
							{ ?> selected <?php }
						?> >Select Academic Year</option>
						<?php
						$conn = db_connect();
						$sql_query3="select * from AcadYear";
						$result3=mysqli_query($conn, $sql_query3);
						if (mysqli_num_rows($result3))
						{
						  while($row3=mysqli_fetch_row($result3))
					   {?>
						<option value="<?php echo($row3[0]);?>"
						<?php
						if(strcmp($year,$row3[0])==0)
						{ ?> selected <?php }
						?> >
						<?php
						echo($row3[0]);
						?></option>
						<?php
						}
						?>
					</select>
					<?php
					} //end of if
					?>
					</td>
					<td width="115" bordercolorlight="#003366" bordercolordark="#003366" align="center">
						<input type="submit" value="Table Review" name="B1" style="font-family: Traditional Arabic; font-size: 12pt; color: #FFFFFF; font-weight: bold; background-color:#003366" tabindex="2">
					</td>
					</tr>
				</table>
				</div>
			</form>
			</td>
		</tr>
		</table>
</div>
<?php
}

//This Method used on selectTeacher.php Page
function SelectMForm($uncode1,$CollegeCode1,$year,$Sem,$Select,$value,$f)
{
?>
<div>&nbsp;</div>
<div align="center">
	<table border="1" width="52%" id="table30" cellpadding="0" cellspacing="0">
		<tr>
			<td width="638" height="48" dir="rtl" bgcolor="#003366">
			<p align="right">
			<font face="Traditional Arabic" size="4" color="#FFFFFF"><b>
			<span lang="ar-sa">
			<?php
			if($value==1) // teacher
				echo("&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1575;&#1587;&#1575;&#1578;&#1584;&#1607;");
			else
			if($value==2) // Lecture
				echo("&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578;");
			else
			if($value==3) // Lab
				echo("&#1580;&#1583;&#1575;&#1608;&#1604; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;");
			?>
			</span></b></font></td>
		</tr>
		<tr>
			<td width="638" dir="rtl" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
			<?php
				$href="sFormDept.php?uncode=$uncode1&CollegeCode=$CollegeCode1&value=$value&f=$f";
			?>
				<form method="POST"  action="<?php echo($href);?>" target="_blank">
				<div align="center">
				<table border="0" width="100%" id="table31" bordercolorlight="#003366" bordercolordark="#003366">
					<tr>
						<td width="143" bgcolor="#2F446F" bordercolorlight="#003366" bordercolordark="#003366">
						<p align="center">
						<font face="Traditional Arabic" color="#FFFFFF"><b>
						<!--����� ������� -->
						
						<!-- &#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; -->
						Academic Year

						</b></font>
						</td>
						<td bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<p align="right">
						<select size="1" name="D1" dir="rtl" tabindex="1" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold">
						  <option value="<?php echo($year);?>" selected >
						  <?php
						  echo($year);
						  ?>
						  </option>
					</select>
					</td>
					<td width="115" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						&nbsp;</td>
					</tr>
					<tr>
						<td width="143" bgcolor="#2F446F" bordercolorlight="#003366" bordercolordark="#003366">
						<b><font color="#FFFFFF" face="Traditional Arabic">
						</font></b>
						<p align="center">
						<font face="Traditional Arabic" color="#FFFFFF"><b>
						<span lang="ar-sa">
						<!-- ����� ������� -->
						<!-- &#1575;&#1604;&#1601;&#1589;&#1604; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; -->
						Semester

						</span></b></font></td>
						<td bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
							<select size="1" name="D2" dir="rtl" tabindex="2" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold">
						
						<?php
							$c=1;
							
						?> 

						<option value="1"
						<?php
						if((strcmp($Sem,"1")==0)||($c==1))
						 {?> selected <?php } ?>
						>
						<!--����� ������� �����-->
						<!-- &#1575;&#1604;&#1601;&#1589;&#1604; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; &#1575;&#1604;&#1575;&#1608;&#1604; -->
						First Semester 
						
						</option>

						<option value="2"
						<?php
							if(strcmp($Sem,"2")==0)
						 	{?> selected <?php } ?>
						>
						<!--����� ������� ������-->
						<!-- &#1575;&#1604;&#1601;&#1589;&#1604; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; &#1575;&#1604;&#1579;&#1575;&#1606;&#1609; -->
						Second Semester
						</option>
						<?php
							$c++;
						?>
						</select>
					</td>
					<td width="115" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						&nbsp;</td>
					</tr>
					<tr>
						<td width="143" bgcolor="#2F446F" bordercolorlight="#003366" bordercolordark="#003366">
						<p align="center"><b>
						<font color="#FFFFFF" face="Traditional Arabic"><span lang="ar-sa">
						<?php
						if($value==1) // teacher
						{
							echo("&#1575;&#1587;&#1605; &#1575;&#1604;&#1575;&#1587;&#1578;&#1575;&#1584;");
						}
						else
						if($value==2) // Lecture
						{
							echo("&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;");
						}
						else
						if($value==3) // Lecture
						{
							echo("&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1593;&#1605;&#1604;");
						}
						?>
						</span>
						</font></b>
						</td>
						<td bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F">
						<?php
						if($value==1) // teacher
						{
						?>
						<select size="5" name="D3" dir="rtl" tabindex="3" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold" multiple>
						<option value=""
						<?php
							if(strcmp($Select,"")==0)
							{ ?> selected <?php }
						?> >Select The professor

						</option>
						<?php
						$conn = db_connect();
							$sqls_query8 = "select TeacherNo,TeacherName from Teachers where AcadYNo='$year' and UniversityCode='$uncode1' and CollegeCode='$CollegeCode1' group by TeacherName order by TeacherName ";
						$results8=mysqli_query($conn, $sqls_query8);
						if (mysqli_num_rows($results8))
						{
							while($rows8=mysqli_fetch_row($results8))
							{?>
							<option value="<?php echo($rows8[0]);?>"
							<?php
								if(strcmp($Select,$rows8[0])==0)
								{ ?> selected <?php }
							?> >
							<?php
								echo($rows8[1]);
							?>
							</option>
							<?php
							} //end of while
							?>
					  	<?php
						}//end of if
						?>
						</select>
						<?php
						} //end of value1
						else
						if($value==2)
						{
						?>
						<select size="5" name="D3" dir="rtl" tabindex="3" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold" multiple>
						<option value=""
						<?php
							if(strcmp($Select,"")==0)
							{ ?> selected <?php }
						?> >&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;

						</option>
						<?php
						$conn = db_connect();

						//(1)select the Location Of College

						$sql = "select UnLoc from Colleges where UniversityCode='$uncode1' and CollegeCode='$CollegeCode1'";
						$result = mysqli_query($conn,$sql);
						$row=mysqli_fetch_row($result);

						$sqls_query8 = "select distinct(usedBy.SubBId),SubBuildingSeminar.SubBName from usedBy,SubBuildingSeminar where
								usedBy.BId=1 and
								usedBy.AcadYNo='$year' and
								SubBuildingSeminar.BId=1 and
								usedBy.SubBId=SubBuildingSeminar.SubBId and
								usedBy.UniversityCode='$uncode1' and
								usedBy.CollegeCode='$CollegeCode1' and
								SubBuildingSeminar.UnLoc='$row[0]' order by SubBuildingSeminar.SubBName";
						$results8=mysqli_query($conn, $sqls_query8);
						if (mysqli_num_rows($results8))
						{
							while($rows8=mysqli_fetch_row($results8))
							{?>
							<option value="<?php echo($rows8[0]);?>"
							<?php
								if(strcmp($Select,$rows8[0])==0)
								{ ?> selected <?php }
							?> >
							<?php
								echo($rows8[1]);
							?>
							</option>
							<?php
							} //end of while
							?>
					  	<?php
						}//end of if
						?>
						</select>
						<?php
						} //end of value2
						else
						if($value==3)
						{
						?>
						<select size="5" name="D3" dir="rtl" tabindex="3" style="font-size: 12pt; color: #003366; font-family: Traditional Arabic; font-weight: bold" multiple>
						<option value=""
						<?php
							if(strcmp($Select,"")==0)
							{ ?> selected <?php }
						?> >&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1605;&#1593;&#1605;&#1604;

						</option>
						<?php
						$conn = db_connect();

						//(1)select the Location Of College

						$sql = "select UnLoc from Colleges where UniversityCode='$uncode1' and CollegeCode='$CollegeCode1'";
						$result = mysqli_query($conn,$sql);
						$row=mysqli_fetch_row($result);

						$sqls_query8 = "select distinct(usedBy.SubBId),SubBuildingSeminar.SubBName from usedBy,SubBuildingSeminar where
								usedBy.BId=2 and
								usedBy.AcadYNo='$year' and
								SubBuildingSeminar.BId=2 and
								usedBy.SubBId=SubBuildingSeminar.SubBId and
								usedBy.UniversityCode='$uncode1' and
								usedBy.CollegeCode='$CollegeCode1' and
								SubBuildingSeminar.UnLoc='$row[0]' order by SubBuildingSeminar.SubBName";
						$results8=mysqli_query($conn, $sqls_query8);
						if (mysqli_num_rows($results8))
						{
							while($rows8=mysqli_fetch_row($results8))
							{?>
							<option value="<?php echo($rows8[0]);?>"
							<?php
								if(strcmp($Select,$rows8[0])==0)
								{ ?> selected <?php }
							?> >
							<?php
								echo($rows8[1]);
							?>
							</option>
							<?php
							} //end of while
							?>
					  	<?php
						}//end of if
						?>
						</select>
						<?php
						} //end of value3
						?>
					</td>
					<td width="115" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F">
						&nbsp;
					</td>
					</tr>
					<tr>
						<td bgcolor="#003366" colspan="3" bordercolorlight="#003366" bordercolordark="#003366">
						<p align="center">
						<input type="submit" value="&#1575;&#1587;&#1578;&#1593;&#1585;&#1575;&#1590; &#1575;&#1604;&#1580;&#1583;&#1608;&#1604;" name="B4" style="font-family: Traditional Arabic; font-size: 12pt; color: #FFFFFF; font-weight: bold; background-color:#003366">
						</td>
					</tr>
				</table>
				</div>
			</form>
			</td>
		</tr>
		</table>
</div>
<?php
}//end of method

//--------------------------------------------------------------------------
//[1] Prepare College's Color
function GetCollegeColor()
{
	// prepare the color of each college [numofcolor=40]
	//-------------------------------------------------------------------------------------------------------------------------
		
	$CollegeColor= array('white','#FFFF99','#FFCC66','#FFCC99','#FF9966','#CCFF66','#CCFF33','#CCFFFF','#33CCCC','#9966FF',
							'#CC66FF','#CC6699','#FFCCFF','#9999FF','#6699FF','#99CCFF','#6666FF','#FFFF99','#33CCCC','#FFCCFF',
						  	'#6699FF','#FFCC66','#FFCC99','#FF9966','#CCFF66','#CCFF33','#CCFFFF','#33CCCC','#9966FF','#FFCCFF',
						  	'#9999FF','#9999FF','#6699FF','#99CCFF','#6666FF','#FFFF99', '#CCFF66','#CCFF33','#CCFFFF','#33CCCC',
						  	'#9966FF','#FFCC99','#FF9966','#CCFF66','#CCFF33','#CCFFFF','#6666FF','#FFFF99','#FFCCFF','#9999FF');
	return $CollegeColor;
	
}//end of method


//[2] Prepare Depart's Color
function GetDeptColor()
{
	
	// prepare the color of each Depart [numofcolor=40]
	//-------------------------------------------------------------------------------------------------------------------------
		$DeptColor= array('white','#FFFF99','#FFCC66','#FFCC99','#FF9966','#CC99FF','#FFFF99','#9966FF','#CC6699','#FFCCFF','#9999FF',
						  '#6699FF','#99CCFF','#6666FF','#CC99FF','#33CCCC','#CCFFFF','#CCFF33','#CCFF66','#FF9966','#FFCC99','#FFCC66',
						  '#FFFF99','#FFCCFF','#6699FF','#FFCC66','#FFCC99','#FF9966','#CCFF66','#CCFF33','#CCFFFF','#33CCCC','#9966FF',
						  '#FFCCFF');
	return $DeptColor;
}//end of method

//--------------------------------------------------------------------------

// Display Final Details
// To Display Reports

function ReportDetails($year,$mday,$avTime,$Sem,$Select,$value,$uncode,$CollegeCode,$flagcolor)
{
	if($flagcolor==0)
	{
		// Get the color of each college [numofcolor=40]
		$CollegeColor = GetDeptColor();
		
		//Get Dept Color
		$DeptColor = GetDeptColor();

	}
	else
	{
		//ready to print
		$bgcolor='white';
	}
	// Display contains:
	// SubjectName:
			//> if(GId==0): Lecture
			//> if(GId>0)and(SubType==1):Tutorial
			//> if(GId>0)and(SubType==2):Lab
	// TeacherName:
	// Building Lecture:

	// first return the Building ($BId and $LectureName)
  

	$details="";
	
	$color='black';

	$conn = db_connect();
	
	
  	if($value==1) //Teacher's TimeTable
	{
		$Mang_query1 = "select UniversityCode,CollegeCode,DeptNo,AcadDegreeId,ClassNo,SubCode,GId,BId,SubBId,SecID from ManagingLec where
		AcadYNo='$year' and
		MDays ='$mday' and
		MTimes='$avTime' and
		SemNo='$Sem' and
		TeacherId='$Select'";

		$Mresult1=mysqli_query($conn,$Mang_query1);

    	if($mrow1=mysqli_fetch_row($Mresult1))
   		{
			$uncode1=$mrow1[0];

			$CollegeCode1=$mrow1[1];

			$DeptNo=$mrow1[2];

			$AcadDeg=$mrow1[3];

			$Classno=$mrow1[4];
		
			$SecID=$mrow1[9];

			//Class Name
			if(($uncode1==$uncode)&&($CollegeCode1==$CollegeCode))

				$color="black";
			else
				$color="blue";

				//$details=$details."<div style='color:$color'><b><span dir='rtl'>".GetClassName($uncode1,$CollegeCode1,$DeptNo,$AcadDeg,$Classno,$Sem)."</span></b></div>";

				$details=$details."<div style='color:$color'><b><span dir='rtl'>".GetShortClassName($uncode1,$CollegeCode1,$DeptNo,$AcadDeg,$Classno,$Sem)."</span></b></div>";
			
			$SubCode=$mrow1[5];

			$SubjectName=GetSubjecttName($CollegeCode1,$uncode1,$DeptNo,$AcadDeg,$Sem,$Classno,$SubCode,$year,$SecID);

			//Return GroupName

			$GId=$mrow1[6];

			if($GId>0)
			{
				$GroupName=GetGroup($CollegeCode1,$uncode1,$DeptNo,$AcadDeg,$Sem,$Classno,$year,$GId,$SecID);

				$details=$details."<div><span dir='rtl'>".$SubjectName."-".$GroupName."</span>&nbsp;";
			}
			else
			{
				$details=$details."<div><span dir='rtl'>".$SubjectName."</span>&nbsp;";

			}

			// Get the Name of Building

			$BId=$mrow1[7];

			$SubBId=$mrow1[8];
		

			$BName=GetBuildingName($CollegeCode1,$uncode1,$BId,$SubBId);

			$details=$details."<div>"."[".$BName."]"."</div>";

  		}//end if
	} //end of value=1
	else
	{
		//Display [Lecture]  or  [Lab]
		if($value==2) //Lecture
			$BId=1;
		else
		if($value==3) //Lab		
			$BId=2;

		$Mang_query1 = "select UniversityCode,CollegeCode,DeptNo,AcadDegreeId,ClassNo,SubCode,GId,TeacherId,SecID from managinglec where
		AcadYNo='$year' and
		MDays ='$mday' and
		MTimes='$avTime' and
		SemNo='$Sem' and
		BId='$BId' and
		SubBId='$Select'";

		$Mresult1=mysqli_query($conn, $Mang_query1);

    	if($mrow1=mysqli_fetch_row($Mresult1))
   		{
			$uncode1=$mrow1[0];

			$CollegeCode1=$mrow1[1];

			$DeptNo=$mrow1[2];

			$AcadDeg=$mrow1[3];

			$Classno=$mrow1[4];
		
			$SecID=$mrow1[8];

			if($flagcolor==0)
			{
				if($BId==1)
				{
					//prepare Background Color			
					$bgcolor=$CollegeColor[$CollegeCode1];
				}
				else
				if($BId==2)
				{
					if(($uncode1==$uncode)&&($CollegeCode1==$CollegeCode))
						$bgcolor=$DeptColor[$DeptNo];
					else
						
						$bgcolor='#C0C0C0';
				}
				
				//put color
				$details=$bgcolor;
			}
			else
			{
				$bgcolor='white';
				
			}
				
			//Class Name
				//$details=$details."<div style='color:$color; background-color:$bgcolor'><b><span dir='rtl'>".GetClassName($uncode1,$CollegeCode1,$DeptNo,$AcadDeg,$Classno,$Sem)."</span></b></div>";
			
				$details=$details."<div style='color:$color; background-color:$bgcolor'><b><span dir='rtl'>".GetShortClassName($uncode1,$CollegeCode1,$DeptNo,$AcadDeg,$Classno,$Sem)."</span></b></div>";

			
			$SubCode=$mrow1[5];

			$SubjectName=GetSubjecttName($CollegeCode1,$uncode1,$DeptNo,$AcadDeg,$Sem,$Classno,$SubCode,$year,$SecID);

			//Return GroupName

			$GId=$mrow1[6];
			
			$TeacherId=$mrow1[7];
			
			if($GId>0)
			{
				$GroupName=GetGroup($CollegeCode1,$uncode1,$DeptNo,$AcadDeg,$Sem,$Classno,$year,$GId,$SecID);

				if($TeacherId > -1)	
					
						$details=$details."<div style='color:$color; background-color:$bgcolor'><span dir='rtl'>".$SubjectName."-".$GroupName."</span>&nbsp;&nbsp;";
				else
						$details=$details."<div style='color:$color; background-color:$bgcolor'><span dir='rtl'>".$SubjectName."-".$GroupName."</span>&nbsp;&nbsp;";
			}
			else
			{
				$details=$details."<div style='color:$color; background-color:$bgcolor'><span dir='rtl'>".$SubjectName."</span>&nbsp;&nbsp;";

			}
			// Get the Name of Building
			//check if No Teacher
			if($TeacherId > -1)
			{
				$TeacherName=GetTeacherName($CollegeCode1,$uncode1,$TeacherId);

					$details=$details."<div style='color:$color; background-color:$bgcolor'>".$TeacherName."</div>";
			}
							
  		}//end if

	} //end of else

	return $details;
}

//[3] VERY IMPORTANT : Merge Table according to the Repetition of SubCode

function PrepareTeacherReport($year,$mday,$Sem,$Select,$value,$uncode1,$CollegeCode1,$flagcolor)
{
	//This Method used to Merege Tabel's cells
	//Created on : 14-December-2008
	//Time 		 : 12:00PM
	
	$conn = db_connect();
	$detail="";  //set default value
	
	$i=0;
	$j=0;
	
	//[1] Get Time Slot
	
	$TimeSlot=GetCollegeTimeSlot($uncode1,$CollegeCode1,$Sem,$year);
	
	//[2] get Lectures details
	
	while($i<=23)
	{
		$detail[$j]=ReportDetails($year,$mday,$TimeSlot[$i],$Sem,$Select,$value,$uncode1,$CollegeCode1,$flagcolor);
		$j++;
		$i++;

  	}//end while
  	
  	
  	//[3] Prepaere to Merege by Compare Details
  
  	$i=0;
  	$counter=1; //set default values of counter
  	
  	while($i<=23)
	{
		if(strcmp($detail[$i],"")!=0)
		{
			
			if( strcmp($detail[$i],$detail[++$i])==0)
			{
				//get Number of repeatitions
				$counter++;
			}
			else
			{
				//return to previous cell
				
				$ibefore=$i-1;
				
				//get color
				
				if($flagcolor==0)
				{
					$bgcolor=substr($detail[$ibefore],0,7);
				
					$finDetail=substr($detail[$ibefore],7,strlen($detail[$ibefore]));
				}
				else
				if($flagcolor==1)
				{
					$finDetail=$detail[$ibefore];
				}

				?>
					<td valign="top" bgcolor="<?php echo($bgcolor);?>" align="center" bordercolor="#003366" width="4%" bordercolorlight="#000000" bordercolordark="#000000" dir="rtl" colspan="<?php echo($counter);?>">
					
						<font size="3" face="Traditional Arabic">
							<b> <?php echo($finDetail);?> </b> 
						</font>
					
				</td>
	
				<?php
				$counter=1; //set default values of counter
				$ibefore=0;
			}//end of else
			
		}//end of if 
		else
		{
			//if there is no lecture
			echo('<td bordercolor="#003366" align="center" width="4%" bordercolorlight="#000000" bordercolordark="#000000" dir="rtl">&nbsp;</td>');
			$counter=1; //set default values of counter
			$ibefore=0;
			$i++;
		}
		
	}//end of while
	 
}//end of method


//Update Student Number
function DisplayAlter($uncode,$CollegeCode,$AcadDeg,$DeptNo,$Classno,$Sem,$year,$NoOfStud,$NoOfGroup,$SecID)
{
	//echo($uncode.$CollegeCode.$AcadDeg.$DeptNo.$Classno.$Sem);
?>
<div>&nbsp;</div>
<div align="center">
	<table border="2" width="42%" id="table24" bordercolorlight="#003366" bordercolordark="#003366" cellspacing="3" cellpadding="3">
		<tr>
			<td colspan="4" dir="rtl" height="32">
			<p align="right">
			<font face="Traditional Arabic" size="5" color="#FFFFFF"><b> 
			
					&#1578;&#1605; &#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1593;&#1583;&#1575;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;

			</b></font></td>
		</tr>
		<tr>
			<td colspan="2" dir="rtl" align="right">
			<b><font face="Times New Roman" size="4">
			<?php
			echo($year);
			?>
			</font></b>
			</td>
			<td colspan="2" dir="rtl" bgcolor="#5A74A0">
			<p align="center">
					<img border="0" id="img83" src="Colleges-PAGE/year27.jpg" height="22" width="110" alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"></td>
			</p>
		</tr>
		<tr>
			<td colspan="2" dir="rtl" align="right">
			<b><font face="Times New Roman" size="4">
			<?php
			echo($NoOfStud);
			?>
			</font></b>
			</td>
			<td colspan="2" dir="rtl" bgcolor="#5A74A0">
			<p align="center">
					<img border="0" id="img84" src="Colleges-PAGE/stud28.jpg" height="22" width="110" alt="&#1593;&#1583;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1593;&#1583;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;"></td>
		</tr>
		<tr>
			<td colspan="2" dir="rtl" align="right">
			<b><font face="Times New Roman" size="4">
			<?php
			echo($NoOfGroup);
			?>
			</font></b>
			</td>
			<td colspan="2" dir="rtl" bgcolor="#5A74A0">
			<p align="center">
					<img border="0" id="img85" src="Colleges-PAGE/noofGroup29.jpg" height="22" width="110" alt="&#1593;&#1583;&#1583; &#1575;&#1604;&#1605;&#1580;&#1608;&#1593;&#1575;&#1578;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1593;&#1583;&#1583; &#1575;&#1604;&#1605;&#1580;&#1608;&#1593;&#1575;&#1578;"></td>
		</tr>
		<tr>
			<td dir="rtl" width="32%" bgcolor="#003366" bordercolorlight="#003366" bordercolordark="#003366">
			<p align="center"><font color="#FFFFFF">
			<?php
			 	$href="ConfigNewYear.php?AcadDeg=$AcadDeg&uncode=$uncode&CollegeCode=$CollegeCode&Dept=$DeptNo&value=2#AcadDeg";
			?>
			<a href="<?php echo($href);?>">
				<img border="0" id="img4" src="header_files/butCancle.jpg" height="25" width="125" alt="&#1575;&#1604;&#1594;&#1575;&#1569;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 12; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #003366" fp-title="&#1575;&#1604;&#1594;&#1575;&#1569;">
			</a>
			</font></td>
			<td dir="rtl" width="30%" bgcolor="#003366" bordercolorlight="#003366" bordercolordark="#003366" colspan="2">
			&nbsp;</td>
			<td dir="rtl" width="32%" bgcolor="#003366" bordercolorlight="#003366" bordercolordark="#003366">
			<p align="center"><font color="#FFFFFF">
		<?php
			$href="changeStud.php?AcadDeg=$AcadDeg&uncode=$uncode&CollegeCode=$CollegeCode&Dept=$DeptNo&Class=$Classno&Sem=$Sem&year=$year&NoOfStud=$NoOfStud&NoOfGroup=$NoOfGroup&flag=1&SecID=$SecID";
		?>
		<a href="<?php echo($href);?>" target="_parent">
			<img border="0" id="img2" src="header_files/butupdate.jpg" height="25" width="125" alt="&#1578;&#1593;&#1583;&#1610;&#1604; &#1575;&#1593;&#1583;&#1575;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #003366" fp-title="&#1578;&#1593;&#1583;&#1610;&#1604; &#1575;&#1593;&#1583;&#1575;&#1583; &#1575;&#1604;&#1591;&#1604;&#1575;&#1576;">
		</a>
		</font></td>
		</tr>
	</table>
</div>
<?php
}

// Display SubjectMenu on subject.php page
// [add New Subject || Update Subject ]
function DisplaySubjectMenu($uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,$Sem)
{
?>
<div align="right">
	<table border="0" width="36%">
		<tr>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<?php
				$href="subject.php?AcadDeg=$AcadDeg&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&Class=$Classno&Sem=$Sem&value=2";
			?><a href="<?php echo($href);?>"><img border="0" id="img91" src="Colleges-PAGE/BUPIntSubject3.jpg" height="32" width="160" alt="&#1578;&#1581;&#1583;&#1610;&#1579; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1604;&#1605;&#1608;&#1575;&#1583;" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1581;&#1583;&#1610;&#1579; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1604;&#1605;&#1608;&#1575;&#1583;" onmouseover="FP_swapImg(1,0,/*id*/'img91',/*url*/'Colleges-PAGE/BUPIntSubject1.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img91',/*url*/'Colleges-PAGE/BUPIntSubject3.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img91',/*url*/'Colleges-PAGE/BUPIntSubject2.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img91',/*url*/'Colleges-PAGE/BUPIntSubject1.jpg')"></a></td>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<?php
				$href="subject.php?AcadDeg=$AcadDeg&uncode=$uncode1&CollegeCode=$CollegeCode1&Dept=$DeptNo&Class=$Classno&Sem=$Sem&value=1";
			?><a href="<?php echo($href);?>"><img border="0" id="img90" src="Colleges-PAGE/BAddNewSubject3.jpg" height="32" width="160" alt="&#1578;&#1587;&#1580;&#1610;&#1604; &#1580;&#1583;&#1610;&#1583; " onmouseover="FP_swapImg(1,0,/*id*/'img90',/*url*/'Colleges-PAGE/BAddNewSubject1.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img90',/*url*/'Colleges-PAGE/BAddNewSubject3.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img90',/*url*/'Colleges-PAGE/BAddNewSubject2.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img90',/*url*/'Colleges-PAGE/BAddNewSubject1.jpg')" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1587;&#1580;&#1610;&#1604; &#1580;&#1583;&#1610;&#1583; "></a></td>
		</tr>
	</table>

</div>
<?php
}

// Display UpdateInsSubject Form
function Subject_UpdateForm($uncode1,$CollegeCode1,$AcadDeg,$DeptNo,$Classno,$Sem,$f,$SubName,$year)
{
	$conn = db_connect();
	//
	//Get Dept Name
	$sql2 = "select DeptName from Departments where
			UniversityCode='$uncode1' and
			CollegeCode='$CollegeCode1' and
			DeptNo='$DeptNo' and AcadDegreeId='$AcadDeg'";
	$result2 = mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_row($result2);

	//Get Acadmic Name
	$sql3 = "select AcadDegreeName from AcadDegree where
	   	AcadDegreeId='$AcadDeg'";
	$result3 = mysqli_query($conn, $sql3);
	$row3=mysqli_fetch_row($result3);

	//Display ClassName & SemName
	$sql4 = "select ClassName,SemName from Semester,ClassYear
	where Semester.ClassNo='$Classno' and
	ClassYear.ClassNo=Semester.ClassNo and
	Semester.SemNo='$Sem'";
	$result4 = mysqli_query($conn, $sql4);
	$row4=mysqli_fetch_row($result4);

?>
<div align="center">

<table border="0" width="96%" id="table3">
<tr>
<td align="center">

<iframe name="I1" width="50%" height="299" src="DisplaySubject.php?AcadDeg=<?php echo($AcadDeg);?>&Class=<?php echo($Classno);?>&Sem=<?php echo($Sem);?>&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&Dept=<?php echo($DeptNo);?>" scrolling="auto">
Your browser does not support inline frames or is currently configured not to display inline frames.
</iframe>
</td>
<td align="center" width="34%">

<form method="POST"  action="SSubject.php?AcadDeg=<?php echo($AcadDeg);?>&Class=<?php echo($Classno);?>&Sem=<?php echo($Sem);?>&uncode=<?php echo($uncode1);?>&CollegeCode=<?php echo($CollegeCode1);?>&Dept=<?php echo($DeptNo);?>&f=<?php echo($f);?>&value=2" >
<div align="center">

	<table class="aaa" border="2" width="85%" id="table4" dir="rtl" height="237" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<tr>
		<td width="95%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="28" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold" colspan="3">
		<p align="right"><span lang="ar-sa"><font color="#FFFF00" size="5">
		 &nbsp;&#1578;&#1581;&#1583;&#1610;&#1579; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1604;&#1605;&#1608;&#1575;&#1583;
		</font>&nbsp;</span></td>

		</tr>

		<tr>
		<td width="31%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="28" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">
		<img border="0" id="img7" src="Colleges-PAGE/DEptName4.jpg" height="22" width="110" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1587;&#1605;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1587;&#1605;"></td>

		<td width="64%" dir="ltr" height="28" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right"><font face="Traditional Arabic" color="#FFFFFF"><b><span lang="en-us">
		<?php
		//DeptName
		echo($row2[0]);
		?>
		</span></b></font></td>
		</tr>

		<tr>
		<td width="31%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="28" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">
		<img border="0" id="img50" src="Depart_Files/ACDYEARS.jpg" height="22" width="110" alt="&#1575;&#1604;&#1587;&#1606;&#1577; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1587;&#1606;&#1577; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1610;&#1577;"></td>

		<td width="64%" dir="ltr" height="28" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right"><font face="Traditional Arabic" color="#FFFFFF"><b>
		<span lang="en-us">
		<?php
		//Class Year
		echo($row4[0]);
		?>
		</span></b></font></td>
		</tr>

		<tr>
		<td width="31%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" dir="ltr" height="30" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold">
		<p align="center">&nbsp;<img border="0" id="img8" src="Colleges-PAGE/Acadmic.jpg" height="22" width="110" alt="&#1575;&#1604;&#1576;&#1585;&#1606;&#1575;&#1605;&#1580; &#1575;&#1604;&#1575;&#1603;&#1575;&#1583;&#1610;&#1605;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1576;&#1585;&#1606;&#1575;&#1605;&#1580; &#1575;&#1604;&#1575;&#1603;&#1575;&#1583;&#1610;&#1605;&#1609;">
		</td>

		<p align="right">
		<td width="64%" dir="ltr" height="30" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right">

		<font face="Traditional Arabic" color="#FFFFFF"><b><span lang="en-us">
		<?php
		//Acadmic Program Name
			echo($row3[0]);
		?>
		</span></b></font></td>
		</tr>

		<tr>
		<td width="92%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#B0CCFF" dir="ltr" height="30" style="font-family: Traditional Arabic; font-size: 14pt; color: #FFFFFF; font-weight: bold" colspan="3">
		<p align="right">
		<?php
			//SemesterName
			$head="&#1605;&#1608;&#1575;&#1583;"."&nbsp;";
			echo($head.$row4[1]);
		?>
		</td>

		</tr>

		<tr>
		<td width="31%" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#5A74A0" height="34" dir="ltr">
		<p align="center">
		<img border="0" id="img9" src="Colleges-PAGE/year27.jpg" height="22" width="110" alt="&#1603;&#1608;&#1583; &#1575;&#1604;&#1605;&#1575;&#1583;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1608;&#1583; &#1575;&#1604;&#1605;&#1575;&#1583;&#1577;"></td>

		<p align="right">

		<td width="64%" height="34" dir="ltr" colspan="2" bordercolorlight="#2F446F" bordercolordark="#2F446F">

		<p align="right">

		<select size="1" name="D1" dir="rtl" tabindex="1" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold">
		<option value="<?php echo($year);?>">
		<?php
			echo($year);
		?>
		</option>
	</select>
	</td>
	</tr>
	<tr>
		<td width="31%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" bgcolor="#5A74A0">
	<p align="center">
		<img border="0" id="img10" src="Colleges-PAGE/SubjName.jpg" height="22" width="110" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1575;&#1583;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1575;&#1583;&#1577;"></td>

	<td width="64%" bordercolorlight="#2F446F" bordercolordark="#2F446F" height="34" dir="ltr" colspan="2">
		<p align="right">
		<select size="1" name="D2" dir="rtl" tabindex="2" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold">
		
		<?php
		$MaxYear=GetMaxYear();
		
		//Get Previous Year
		
		$MaxYear2=intval($MaxYear);

		$oldyear1=$MaxYear2-1;
		$oldyear2=$MaxYear2-2;

		$oldYear=$oldyear1."/".$oldyear2;
		

		//Check if Current year == Max year or not
		
		/*if(strcmp($MaxYear,$oldYear)==0)
		{
			
			//There is no data on old years
			//echo('<script>alert("Sorry, Subject Not Available On Previous Year");</script>');
		
			echo('<option value="" selected>');
			echo("	&#1604;&#1575;&#1578;&#1608;&#1580;&#1583; &#1605;&#1608;&#1575;&#1583; &#1605;&#1587;&#1580;&#1604;&#1577; &#1576;&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; &#1575;&#1604;&#1587;&#1575;&#1576;&#1602;"."  ".$oldYear);
			echo('</option>');
		
		}
		else
		{*/
		
		//Get Subject from Previous Year
		$conn = db_connect();
		$sql1 = "select distinct(SubName) from CollegeSubject where
		AcadYNo='$oldYear' and
		UniversityCode='$uncode1' and
		CollegeCode='$CollegeCode1' and
		DeptNo='$DeptNo' and
		AcadDegreeId='$AcadDeg' and
		ClassNo='$Classno' and
		SemNo='$Sem'";
		$result=mysqli_query($conn,$sql1);
		$count=mysqli_num_rows($result);
		if (mysqli_num_rows($result)>0)
		{
			//�� ������ ������
		
			echo("<option value=''>"."&#1602;&#1605; &#1576;&#1578;&#1581;&#1583;&#1610;&#1583; &#1575;&#1604;&#1605;&#1575;&#1583;&#1607;"."</option>");
			
			while($row=mysqli_fetch_row($result))
			{
				//check if subject inserted or not
					$sql2 = "select count(distinct(SubName)) from CollegeSubject where
					AcadYNo='$year' and
					UniversityCode='$uncode1' and
					CollegeCode='$CollegeCode1' and
					DeptNo='$DeptNo' and
					AcadDegreeId='$AcadDeg' and
					ClassNo='$Classno' and
					SemNo='$Sem' and
					SubName='$row[0]'";
				$result2=mysqli_query($conn,$sql2);
				$row2=mysqli_fetch_row($result2);
				$counter=0;
				if($row2[0]==0)
				{
				?>
					<option value="<?php echo($row[0]);?>">
						<?php echo($row[0]);?>
					</option>
				<?php
				}
				else
				{
					$counter=$counter+1;
				}
			}//end of while
		}//end of main if
		if( ($counter==0)&&($count==0) )
		{
			//<!--	������ ���� ����� ������ ������� ������ -->
			echo("<option value='' selected>"."	&#1604;&#1575;&#1578;&#1608;&#1580;&#1583; &#1605;&#1608;&#1575;&#1583; &#1605;&#1587;&#1580;&#1604;&#1577; &#1576;&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609; &#1575;&#1604;&#1587;&#1575;&#1576;&#1602;"."  ".$oldYear."</option>");
			
			echo('<script>alert("Sorry, Subject Not Available On Previous Year");</script>');
		}
		else
		if ( ($counter>0)&&($count>0)&&($counter==$count) )
		{
			//that means all data inserted
		?>
			<option value="" selected>
			<!--	��� ����� ������� ����� ������ -->
				
				&#1578;&#1605;&#1578; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1604;&#1580;&#1605;&#1610;&#1593; &#1575;&#1604;&#1605;&#1608;&#1575;&#1583;

			</option>
		<?php
		
		}
	//}//end of else

	?>
		</select>
		
		</td>
	</tr>


	<tr>
	<td width="31%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#B0CCFF">
	<p align="center">&nbsp;</td>
	<td width="31%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#5A74A0">
	<p align="center">
	<input name="Submit" type="submit" value="  &#1581;&#1601;&#1592;  "  tabindex="3" style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0; " dir="rtl"></td>
	<td width="31%" bordercolorlight="#5A74A0" bordercolordark="#5A74A0" height="35%" bgcolor="#B0CCFF">
	&nbsp;</td>
	</tr>
</table>
</div>
</form>
</td>
</tr>
</table>
</div>
<?php
}


//----------------------------------------
//Modified on : 25-Sep-2008
//Specify Lectures an Labs

function CollegeLecture_Form($value,$uncode,$LectureName,$Capacity,$Loc,$CollegeCode,$tabval)
{

	//Lecture >> 1
	if(intval($value)==1)
	{

	?>
	<div align="center">
		<form method="POST" action="SpecifyBuilding.php?op=<?php echo($value);?>&uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&tab=<?php echo($tabval);?>">

	<table border="0" width="57%" id="table10">
	<tr>
		<td>
			<p align="right">
				<select size="1" name="D2" dir="rtl" tabindex="1" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold">

			<?php
			if(strcmp($Loc,"")==0)
			{
					
			?>	
					<option  value=""  selected  >Choose the location of the hall

				</option>
		
			<?php
			}//end of if
		
			$conn = db_connect();
			$sql_query22="select LocId,UnLoc from univloc where UniversityCode='$uncode'";
			$result22=mysqli_query($conn, $sql_query22);
			if (mysqli_num_rows($result22))
			{
				while($row22=mysqli_fetch_row($result22))
				{?>
					<option value="<?php
						echo($row22[1]);
					?>"
					<?php
					if(strcmp($Loc,$row22[1])==0) { ?> selected <?php }?> >
					<?php
						echo($row22[1]);
					?>
					</option>
				<?php
				}//end of while
				?>
			</select>
		<?php
		}
		?>
			</td>
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Hall Location
					<!-- <img border="0" id="img67" src="Colleges-PAGE/selectLOC.jpg" height="30" width="150" alt="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;"> -->
			</td>
		</tr>
		<tr>
			<td>
					<input name="T1" value="<?php echo($LectureName);?>" size="30" style="float: right; color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1" dir="rtl">
			</td>
			
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Hall name
					<!-- <img border="0" id="img55" src="insertLectureRoom_file/button20.jpg" height="30" width="150" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" align="right"></td> -->
		</tr>
		
		<tr>
			<td>
				<input name="T2" value="<?php echo($Capacity);?>" size="30" style="float: right; color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1" dir="rtl"></td>
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Total Capacity of students
				<!-- <img border="0" id="img56" src="insertLectureRoom_file/button21.jpg" height="30" width="150" alt="&#1575;&#1604;&#1587;&#1593;&#1577; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577; &#1604;&#1604;&#1591;&#1604;&#1575;&#1576;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1604;&#1587;&#1593;&#1577; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577; &#1604;&#1604;&#1591;&#1604;&#1575;&#1576;"></td> -->
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" value="Submit" name="B1" tabindex="3" style="color: #FFFFFF; font-size: 14pt; font-family: Traditional Arabic; font-weight: bold; background-color: #5A74A0"></td>
		</tr>
	</table>
	</form>
	</div>
	</td>
	</tr>
	</table>
	</div>

<?php

	}//end of if value==1
	
	else
	if(intval($value)==2)
	{
		//Lab >> 2
	?>
	<div align="center">
		<form method="POST" action="SpecifyBuilding.php?op=<?php echo($value);?>&uncode=<?php echo($uncode);?>&CollegeCode=<?php echo($CollegeCode);?>&tab=<?php echo($tabval);?>">

	<table border="0" width="57%" id="table10">
	<tr>
		<td>
			<p align="right">
				<select size="1" name="D2" dir="rtl" tabindex="1" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold">

			<?php
			if(strcmp($Loc,"")==0)
			{
					//���� ���� ���� ������
			?>	
				<option  value=""  selected  >Choose the location of the Laboratory
						
				</option>
		
			<?php
			}//end of if
		
			$conn = db_connect();
			$sql_query22="select LocId,UnLoc from univloc where UniversityCode='$uncode'";
			$result22=mysqli_query($conn, $sql_query22);
			if (mysqli_num_rows($result22))
			{
				while($row22=mysqli_fetch_row($result22))
				{?>
					<option value="<?php
						echo($row22[1]);
					?>"
					<?php
					if(strcmp($Loc,$row22[1])==0) { ?> selected <?php }?> >
					<?php
						echo($row22[1]);
					?>
					</option>
				<?php
				}//end of while
				?>
			</select>
		<?php
		}
		?>
			</td>
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Laboratory Location
					<!-- <img border="0" id="img67" src="insertLectureRoom_file/labLocation.jpg" height="30" width="150" alt="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1605;&#1608;&#1602;&#1593; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;"> -->
			</td>
		</tr>
		<tr>
			<td>
					<input name="T1" value="<?php echo($LectureName);?>" size="30" style="float: right; color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1" dir="rtl">
			</td>
			
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Laboratory Name
					<!-- <img border="0" id="img55" src="insertLectureRoom_file/buttonLab.jpg" height="30" width="150" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1602;&#1575;&#1593;&#1577;" align="right"></td> -->
		</tr>
		
		<tr>
			<td>
				<input name="T2" value="<?php echo($Capacity);?>" size="30" style="float: right; color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1" dir="rtl"></td>
			<td width="156" bgcolor="#5A74A0">
				<p align="center">Total Capacity of students
				<!-- <img border="0" id="img56" src="insertLectureRoom_file/button21.jpg" height="30" width="150" alt="&#1575;&#1604;&#1587;&#1593;&#1577; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577; &#1604;&#1604;&#1591;&#1604;&#1575;&#1576;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1604;&#1587;&#1593;&#1577; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577; &#1604;&#1604;&#1591;&#1604;&#1575;&#1576;"></td> -->
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" value="Submit" name="B1" tabindex="3" style="color: #FFFFFF; font-size: 14pt; font-family: Traditional Arabic; font-weight: bold; background-color: #5A74A0"></td>
		</tr>
	</table>
	</form>
	</div>
	</td>
	</tr>
	</table>
	</div>

<?php

	}//end of if value==2
	
}//end of method


//-----------------

//Modified on 11/11/2008

//Cofigration For College StartTime Per Semester
function CollegeStartTimeForm($uncode,$CollegeCode,$SemNo,$StartSlot)
{
	$conn = db_connect();
?>
<div align="center">
<?php
$href="CollegeStartTime.php?uncode=$uncode&CollegeCode=$CollegeCode";
?>
<form action="<?php echo($href);?>" method="post">
	<table border="0" width="78%" id="table17">
		<tr>
			<td>
			<div align="center">
			<table border="2" width="95%" bordercolorlight="#003366" bordercolordark="#003366" id="table18" bordercolor="#003366">
				<tr >
					<td bordercolor="#003366" align="right" bgcolor="#2F446F" height="16" colspan="2">
						<p>Determine the start time of lectures during the semester</p>
						<!-- <img border="0" id="img61" src="Colleges-PAGE/specifyCStartTime.jpg" height="63" width="314" alt="����� ��� ����� ��������� ���� ����� �������" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 17; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #2F446F" fp-title="����� ��� ����� ��������� ���� ����� �������"> -->
					</td>
				</tr>
				<tr>
					<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="15" bordercolorlight="#B0CCFF" bordercolordark="#B0CCFF" colspan="2">
					<table border="0" width="100%" id="table19">
					<tr>
					   <td height="28%" width="75%">
						<p align="right">
							<select size="1" name="D1" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="1">
						<?php
						//get Max Year
						
						$maxres=mysqli_query($conn, "SELECT max(AcadYNo) FROM acadyear");
						$maxrow=mysqli_fetch_row($maxres);

						?>	
							
							<option value="<?php echo($maxrow[0]);?>" selected><?php echo($maxrow[0]);?></option>
							
						</select>
					   </td>
					
					<td height="28%" width="23%">
					<p align="center">School Year </p>
						<!-- <img border="0" id="img60" src="Colleges-PAGE/year22.jpg" height="24" width="118" alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"></td> -->
				   </tr>
				   
					<tr>
						<td align="right" height="28%" width="75%">
								<select size="1" name="D2" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="2">
							
								<option value="1" <?php if($SemNo==1){?> selected <?php } ?> selected>First Semester</option>
								<option value="2" <?php if($SemNo==2){?> selected <?php } ?>>Second Semester</option>

						</select>

						</td>
						
						<td height="28%" width="23%">
							<p align="center">Semester
								<!-- <img border="0" id="img92" src="Colleges-PAGE/SlotSemNo.jpg" height="24" width="118"  fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" > -->
						</td>
					</tr>
				
					<tr>
						<td align="right" height="28%" width="75%">
						<!--Start Time per Semseter-->
								<select size="3" name="D3" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3">
													
								<option value="" selected> Determine the start time for lectures:</option>

								<option value="1" <?php if( strcmp($StartSlot,1)==0 ){?> selected <?php };?> > 7:30</option>
								<option value="2" <?php if( strcmp($StartSlot,2)==0 ){?> selected <?php };?> > 8:00</option>
							</select>
						
						</td>
						<td height="28%" width="23%">
						<p align="center">Lecture Start Time </p>
							<!-- <img border="0" id="img93" src="Colleges-PAGE/StartSlot.jpg" height="24" width="118" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0"> -->
						</td>
					</tr>
				 </table>
					</td>
					</tr>
				<tr>
						<td bordercolor="#003366" align="center" width="93%" bgcolor="#2F446F" bordercolorlight="#2F446F" bordercolordark="#2F446F" colspan="2">
						<input type="submit" value="Submit" name="B2" style="color: #FFFFFF; font-family: Traditional Arabic; font-size: 14pt; font-weight: bold; background-color: #5A74A0" tabindex="3"></td>
				</tr>
				</table>
				</div>
			</div>
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php
}
?>