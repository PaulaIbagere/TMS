<?php
/***************************************************************/
/*   contains Methods used to design the Layout of any Page    */
/***************************************************************/
//[1]Set Packground to all pages
function Background_Page()
{
	?>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title></title>
	<link rel="stylesheet" href="../Background/ripp1011.css">
	<!--mstheme--><link rel="stylesheet" href="ripp1011.css">
	<meta name="Microsoft Theme" content="ripple 1011">
	<link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="/static/pictures/favicon.png">
	<script language="JavaScript">
	
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
	</head>

	<?php
}

//[2]Display Page Title
function Display_Title()
{

	print('<title> Time Management System (TMS)</title>');

}

//[3] Display Date on the Main page
function Diplay_Date()
{
   ?>
   <tabel>
   <tr>
   		<td align="right">
   		<font color="#FFFFFF" size="4" face="Traditional Arabic"><b>

   		Date:

   		</b></font>
   		<font color="#B0CCFF" size="4" face="Traditional Arabic"><b>
		<?php

   		$day=date('D');
		switch($day)
		{
		 case 'Sat':
	            echo('Saturday');
				break;

	 	 case 'Sun':
				echo('Sunday');
				break;

	 	 case 'Mon':
			    echo('Monday');
				break;

	     case 'Tue':
				echo('Tuesday');
				break;

	     case 'Wed':
				echo('Wednesday');
				break;

	     case 'Thu':
				echo('Thursday');
				break;

	     case 'Fri':
				echo('Friday');
				break;
         }//end of switch
        ?>
  		</font>
  		<font color="#FFFFFF" size="3" face="Times New Roman">
  		<?php
  		echo("  ");
		echo date('d /m /Y');
  		?>
  		</font></b></td>
   	</tr>
</table>

<?php
}// end of Method

//[4]display Footer: Date on Report
function Diplay_RDate()
{
   ?>
   <table border="0" width="100%">
   <tr align="right">
   		<td >
   		<font color="black" size="2" face="Traditional Arabic"><b>
   		<?php
   			echo("&#1606;&#1592;&#1575;&#1605; &#1575;&#1583;&#1575;&#1585;&#1577; &#1575;&#1604;&#1580;&#1583;&#1608;&#1604;&#1577; &nbsp;- &nbsp;"."&#1575;&#1604;&#1578;&#1575;&#1585;&#1610;&#1582; :&nbsp;");

   		$day=date('D');
		switch($day)
		{
		 case 'Sat':
	            echo('Saturday');
				break;

	 	 case 'Sun':
				echo('Sunday');
				break;

	 	 case 'Mon':
			    echo('Monday');
				break;

	     case 'Tue':
				echo('Tuesday');
				break;

	     case 'Wed':
				echo('Wednesday');
				break;

	     case 'Thu':
				echo('Thrsday');
				break;

	     case 'Fri':
				echo('Friday');
				break;
         }//end of switch

  		echo("&nbsp;");
		echo date('d /m /Y');
  		//echo("&nbsp;");
  		//echo Time('h:m');
  		?>
  		</b></font>
  		</td>
   	</tr>
</table>

<?php
}// end of Method


//[5]Display Admin Menu1 contains: [Mainpage] [ChangePassword] [ChangeTimeSlot] [Logout]

function Display_Admin_Menu1()
{
?>
<body style="text-align: right">

<div align="right">
	<table border="0" width="54%" id="table3">
		<tr>
			
			<td align="center" bgcolor="#5A74A0"  dir="rtl">
				<a href="logout.php" style="color: #FFFFFF; text-align: center; text-decoration: none;">Logout
					<!--<img border="0" id="img25" src="AdminMenu/buttoneE.jpg" height="26" width="130" 
					alt="&#1582;&#1585;&#1608;&#1580;" onmouseover="FP_swapImg(1,0,/*id*/'img25',/*url*/'AdminMenu/buttoneF.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img25',/*url*/'AdminMenu/buttoneE.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img25',/*url*/'AdminMenu/buttone10.jpg')" 
					onmouseup="FP_swapImg(0,0,/*id*/'img25',/*url*/'AdminMenu/buttoneF.jpg')" fp-style="fp-btn: Braided Row 1; 
					fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; 
					fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" 
					fp-title="&#1582;&#1585;&#1608;&#1580;">-->
				</a>
				
			</td>
			
			<td align="center" bgcolor="#5A74A0"  dir="rtl">
				<a href="AdminChangeStartTime.php"style="color: #FFFFFF; text-align: center; text-decoration: none;">Change Time of lectures
					<!--<img border="0" id="img30" src="AdminMenu/startTime3.jpg" height="26" width="130" alt="&#1578;&#1594;&#1610;&#1610;&#1585; &#1586;&#1605;&#1606; &#1575;&#1604;&#1605;&#1581;&#1575;&#1590;&#1585;&#1575;&#1578;" onmouseover="FP_swapImg(1,0,/*id*/'img30',/*url*/'AdminMenu/startTime1.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img30',/*url*/'AdminMenu/startTime3.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img30',/*url*/'AdminMenu/startTime2.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img30',/*url*/'AdminMenu/startTime1.jpg')" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1594;&#1610;&#1610;&#1585; &#1586;&#1605;&#1606; &#1575;&#1604;&#1605;&#1581;&#1575;&#1590;&#1585;&#1575;&#1578;">-->
				</a>
			</td>
			
			<td align="center" bgcolor="#5A74A0"  dir="rtl">
				<a href="ChangePasswdForm.php"style="color: #FFFFFF; text-align: center; text-decoration: none;">Change Password
					<!--<img border="0" id="img24" src="AdminMenu/buttoncB.jpg" height="26" width="130" 
					alt="&#1578;&#1594;&#1610;&#1610;&#1585; &#1603;&#1604;&#1605;&#1577; 
					&#1575;&#1604;&#1605;&#1585;&#1608;&#1585;" onmouseover="FP_swapImg(1,0,/*id*/'img24',/*url*/
					'AdminMenu/buttoncC.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img24',/*url*/'AdminMenu/buttoncB.jpg')" 
					onmousedown="FP_swapImg(1,0,/*id*/'img24',/*url*/'AdminMenu/buttoncD.jpg')" 
					onmouseup="FP_swapImg(0,0,/*id*/'img24',/*url*/'AdminMenu/buttoncC.jpg')" fp-style="fp-btn: 
					Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; 
					fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; 
					fp-bgcolor: #5A74A0" fp-title="&#1578;&#1594;&#1610;&#1610;&#1585; &#1603;&#1604;&#1605;&#1577; 
					&#1575;&#1604;&#1605;&#1585;&#1608;&#1585;">-->
				</a>
			</td>
			
			<td align="center" bgcolor="#5A74A0"  dir="rtl">
					<!--<img border="0" id="img17" src="AdminMenu/button2.jpg" height="26" width="130" 
					alt="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1585;&#1574;
					&#1610;&#1587;&#1610;&#1577;" fp-style="fp-btn: Braided Row 1; fp-font: 
					Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: 
					#FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: 
					#5A74A0" fp-title="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1585;&#1574;
					&#1610;&#1587;&#1610;&#1577;" onmouseover="FP_swapImg(1,0,/*id*/'img17',/*url*/
					'AdminMenu/button2.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img17',/*url*/'AdminMenu/button1.jpg')" 
					onmousedown="FP_swapImg(1,0,/*id*/'img17',/*url*/'AdminMenu/button3.jpg')" onmouseup="FP_swapImg
					(0,0,/*id*/'img17',/*url*/'AdminMenu/button2.jpg')">--> HomePage
			</td>
		</tr>
	</table>
	</div>
<?php
}

//[6]Display Admin Menu2 contains: [University] [Lectures&Labs] [Users] [Reports]

function Display_Admin_Menu2()
{
?>
<p>&nbsp;</p>

<div align="center">
	<?php
		$id=1;
	?>
	<table border="0" width="22%" id="table4" cellspacing="15" cellpadding="15" style="border-color: #2F446F; color:white">
		<tr>
			<td bgcolor="#3D5285" height="41" bordercolorlight="#7985A8" bordercolordark="#92B0E4" style="border-color: #B0CCFF">
				<p align="center">
					<a href="university.php?id=<?php echo($id); ?>"style="color: #FFFFFF; text-align: center; text-decoration: none;">
					  <p style="color:white; text-align:center;" >Universities</p>
						<!--<img border="0" id="img20" src="AdminMenu/TMSButon23.jpg" height="36" width="180" 
						alt="&#1575;&#1604;&#1580;&#1575;&#1605;&#1593;&#1575;&#1578;" onmouseover="FP_swapImg
						(1,0,/*id*/'img20',/*url*/'AdminMenu/TMSButon21.jpg')" onmouseout="FP_swapImg
						(0,0,/*id*/'img20',/*url*/'AdminMenu/TMSButon23.jpg')" onmousedown="FP_swapImg
						(1,0,/*id*/'img20',/*url*/'AdminMenu/TMSButon22.jpg')" onmouseup="FP_swapImg
						(0,0,/*id*/'img20',/*url*/'AdminMenu/TMSButon21.jpg')" fp-style="fp-btn: 
						Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 22; 
						fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; 
						fp-bgcolor: #003366" fp-title="&#1575;&#1604;&#1580;&#1575;&#1605;&#1593;&#1575;&#1578;">-->
					</a>
				</p>
			</td>
		</tr>
		
		<tr>
			<td bgcolor="#3D5285" height="41" bordercolorlight="#7985A8" bordercolordark="#92B0E4" style="border-color: #B0CCFF" >
				<p align="center">
					<a href="BuildingForm.php?id=<?php echo($id); ?>" style="color: #FFFFFF; text-align: center; text-decoration: none;">
					   <p style="color: #FFFFFF; text-align:center;">Halls and Laburatory</p>
						<!--<img border="0" id="img23" src="AdminMenu/TMSButon33.jpg" height="36" width="180" 
						alt="&#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578; &#1608;&#1575;&#1604;&#1605;&#1593;
						&#1575;&#1605;&#1604;" onmouseover="FP_swapImg(1,0,/*id*/'img23',/*url*/'AdminMenu/TMSButon31.jpg')" 
						onmouseout="FP_swapImg(0,0,/*id*/'img23',/*url*/'AdminMenu/TMSButon33.jpg')" onmousedown="FP_swapImg
						(1,0,/*id*/'img23',/*url*/'AdminMenu/TMSButon32.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img23',/*url*/'AdminMenu/TMSButon31.jpg')" 
						fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 22; 
						fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #003366" 
						fp-title="&#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578; &#1608;&#1575;&#1604;&#1605;&#1593;&#1575;
						&#1605;&#1604;">-->
					</a>
				</p>
			</td>
		</tr>
		
		<tr>
			<td bgcolor="#3D5285" height="39" bordercolorlight="#7985A8" bordercolordark="#92B0E4" style="border-color: #B0CCFF">
				<p align="center">
					<a href="DisplayUser.php" style="color: #FFFFFF; text-align: center; text-decoration: none;"><p style="color:white; text-align:center;">Users</p>
							<!--<img border="0" id="img21" src="AdminMenu/TMSButon13.jpg" height="36" width="180" 
							alt="&#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;&#1610;&#1606;" 
							onmouseover="FP_swapImg(1,0,/*id*/'img21',/*url*/'AdminMenu/TMSButon1.jpg')" 
							onmouseout="FP_swapImg(0,0,/*id*/'img21',/*url*/'AdminMenu/TMSButon13.jpg')" 
							onmousedown="FP_swapImg(1,0,/*id*/'img21',/*url*/'AdminMenu/TMSButon12.jpg')" 
							onmouseup="FP_swapImg(0,0,/*id*/'img21',/*url*/'AdminMenu/TMSButon1.jpg')" 
							fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: 
							Bold; fp-font-size: 22; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; 
							fp-font-color-press: #FFFFFF; fp-bgcolor: #003366" fp-title="&#1575;&#1604;&#1605;
							&#1587;&#1578;&#1582;&#1583;&#1605;&#1610;&#1606;">-->
					</a>
				</p>
			</td>
		</tr>
		
		<tr>
			<td bgcolor="#3D5285" height="39" bordercolorlight="#7985A8" bordercolordark="#92B0E4" style="border-color: #B0CCFF">
				<p align="center">
				<a href="AdminReport.php" style="color: #FFFFFF; text-align: center; text-decoration: none;">
					<img border="0" src="report.JPG" width="62" height="53" />
					Reports</a>
				</p>
			</td>
		</tr>
		</table>

</div>

<?php
}

//[7]Display Admin Menu3 contains: [MainPage] [ChangePassword] [logout] 
function Display_Admin_Menu3()
{
?>
<div align="right">
	<table border="0" width="54%" id="table3">
		<tr>
			<td align="center" bgcolor="#5A74A0" width="130" dir="rtl">
			<a href="logout.php">
				<img border="0" id="img27" src="AdminMenu/buttoneE.jpg" height="26" width="130" alt="&#1582;&#1585;&#1608;&#1580;" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0; fp-orig: 0" fp-title="&#1582;&#1585;&#1608;&#1580;">
			</a>Exit</td>
			<td align="center" bgcolor="#5A74A0" width="130" dir="rtl">
				<img border="0" id="img26" src="AdminMenu/buttoncB.jpg" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1578;&#1594;&#1610;&#1610;&#1585; &#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;">
			Change Password</td>
			<td  align="center" bgcolor="#5A74A0" width="130" dir="rtl">
			<a href="welcomeAdmin.php?flag=2">
					<img border="0" id="img17" src="AdminMenu/button1.jpg" height="26" width="130" 
					alt="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1585;&#1574;&#1610;&#1587;&#1610;&#1577;" 
					fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; 
					fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; 
					fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; 
					&#1575;&#1604;&#1585;&#1574;&#1610;&#1587;&#1610;&#1577;">
			</a>Home Page</td>
		</tr>
	</table>
	</div>
<?php
}

//[8]Display Admin logout Menu contains: [MainPage] [logout] 
function Display_Admin_Menu_Logout()
{
?>

<div align="right"><table border="0" width="36%" id="table3">
		<tr>
			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<p>
			<img border="0" id="img19" src="AdminMenu/buttoneE.jpg" height="26" width="130" alt="&#1582;&#1585;&#1608;&#1580;" onmouseover="FP_swapImg(1,0,/*id*/'img19',/*url*/'buttonB.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img19',/*url*/'AdminMenu/buttonA.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img19',/*url*/'buttonC.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img19',/*url*/'buttonB.jpg')" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1582;&#1585;&#1608;&#1580;"></td>

			<td bgcolor="#5A74A0" width="130" dir="rtl" align="center">
			<a href="TMS-admin.php">
			<img border="0" id="img17" src="AdminMenu/button1.jpg" height="26" width="130" alt="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1585;&#1574;&#1610;&#1587;&#1610;&#1577;" fp-style="fp-btn: Braided Row 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1585;&#1574;&#1610;&#1587;&#1610;&#1577;" onmouseover="FP_swapImg(1,0,/*id*/'img17',/*url*/'AdminMenu/button2.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img17',/*url*/'AdminMenu/button1.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img17',/*url*/'AdminMenu/button3.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img17',/*url*/'AdminMenu/button2.jpg')"></a></td>
		</tr>
	</table>

	</div>

</body>
<?php
}

//[9]Display Admin Login Form 
function display_login_form()
{
?>
  	<div align="center">
	<form method="POST" action="welcomeAdmin.php">	
	<table border="0" width="47%" id="table2" dir="rtl" height="78">
	<tr>
		<td width="38%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" dir="ltr" height="30" align="center">
				<p>&nbsp;Username
					<!-- <img border="0" id="img28" src="Background/busername.jpg" height="32" width="155" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;"> -->
		</td>
		
		<td width="59%" dir="ltr" height="30">
			<p align="right">
			<input name="T1" id="T1" size="14" tabindex="1" style="font-family: Times New Roman; color: #003366; font-size: 14pt; font-weight: bold; float:right" dir="rtl">
			</p>
		</td>
	</tr>

	<tr>
		<td width="38%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" height="25" dir="ltr" align="center">
			<p align="center">Password
					<!-- <img border="0" id="img29" src="Background/bPasswder.jpg" height="32" width="160" alt="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;"> -->
			</p>
		</td>
		
		<td width="59%" height="25" dir="ltr">
			<p align="right">
				<input name="T2" id="T2" size="14" tabindex="2" style="font-family: Times New Roman; color: #003366; font-size: 14pt; font-weight: bold; float:right" dir="rtl" type="password">
			</p>
		</td>			
	</tr>

	<tr>
		<td width="80%" bordercolorlight="#9999FF" bordercolordark="#6600FF" height="78" dir="ltr" align="center" colspan="2">
			<input name="Submit" type="submit" value="Submit"  tabindex="3" style="color: #FFFFFF; font-size: 14pt; font-weight: bold; font-family: Traditional Arabic; vertical-align: middle; letter-spacing: 2; border: 3px inset #B0CCFF; ; background-color:#5A74A0" dir="rtl"></td>
	</tr>
	</table>
	</form>
	</div>
	<p align="center">
	</td>
	</tr>
	<tr>
		<?php
			//echo date('d /m /Y');
			Diplay_Date();
		?></tr></table><?php
}

//[10] Return Button
function Hrefto($href)
{
?>
	<div align="left">
	<table border="0" width="13%" id="table2" height="24">
	<tr>
		<td align="left" bgcolor="#5A74A0">
		<p align="left" style="color: white;">
			<?php $id=1;?><a href="<?php echo($href);?>?id=<?php echo($id);?>" style="color: white;">Back <!--<img border="0" id="img4" src="InsertUniversity_file/button1B.jpg" height="22" width="111" alt="&#1585;&#1580;&#1608;&#1593;" onmouseover="FP_swapImg(1,0,/*id*/'img4',/*url*/'InsertUniversity_file/button1C.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img4',/*url*/'InsertUniversity_file/button1B.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img4',/*url*/'InsertUniversity_file/button1D.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img4',/*url*/'InsertUniversity_file/button1C.jpg')" fp-style="fp-btn: Braided Column 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1585;&#1580;&#1608;&#1593;">--></a></td>
	</tr>
	</table>
	<p align="center">&nbsp;</div>

<?php
}

//----------------------------------------------------------------
// Display Main Table of all Colleges for university in index.php 

function MainDisplay($uncode1,$CollegeCode1,$f,$year)
{
//Display All universities participate on the System
?>
<!-- display welcome Header-->
<div align="center">
	<table border="0" width="100%" id="table1" cellspacing="1" cellpadding="1">
		<tr>
			<td bgcolor="#2F446F" align="right">
			<p><span dir="rtl"><b><span lang="ar-sa">
			<font size="5" face="Traditional Arabic" color="#FFFFFF">Welcome to the Time Table Management System</font></span></b></span></td>
		</tr>
	</table>
</div>

<div align="center">&nbsp;</div>
<div align="center">
	<table border="2" width="70%" id="table33" cellpadding="2" cellspacing="2">
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
				$sql2 = "select CollegeCode,CollegeName from Colleges where
						UniversityCode='$row[0]' order by CollegeName";
				$result2=mysqli_query($conn,$sql2);
				if (mysqli_num_rows($result2) > 0)
				{
					$collegename="<ul>";
					//Display Regiseted Colleges
					while($row2=mysqli_fetch_row($result2))
					{
					?>
					<tr>
						<td dir="rtl" align="right" width="49%" bordercolorlight="#2F446F" bordercolordark="#2F446F"><b>

					<?php
						$collegename=$collegename."<li><a style='text-decoration:none' target='_Blank' href='TMSR.php?uncode=$row[0]&CollegeCode=$row2[0]&f=$f&year=$year'>".$row2[1]."</a>"."</li>";
					}//end of while2
					
					?>
					<font face="Traditional Arabic" color="white"><?php echo($collegename);?></font></b>
					</td>

					<td width="46%" dir="rtl" align="center" bordercolorlight="#2F446F" bordercolordark="#2F446F" bgcolor="#2F446F"><b>
						<font size="4" face="Traditional Arabic" color="#FFFFFF"><?php echo($row[1]);?></font></b></td>
					</tr>
				<?php
				}//end of if
				else
				{
					//if no College Inserted
				?>
					<tr>
						<td dir="rtl" align="center">
						<b>
							<font face="Traditional Arabic" color="white">
							<b>
							<?php
								//there is no Colleges inserted
								echo("&#1604;&#1605; &#1610;&#1578;&#1605; &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1603;&#1604;&#1610;&#1575;&#1578;");
							?>
							</b>
							</font>
						</b>
						</td>
							<td width="374" dir="rtl" align="center" bgcolor="#2F446F"><b>
						<font size="4" face="Traditional Arabic" color="#FFFFFF"><?php echo($row[1]);?></font></b></td>
					</tr>
				<?php
				}//end of else
			}//end of while
		}//end of main if
		else
		{
			//echo("no data to show ");
		}
		?>
	</table>
</div>
<!--about System-->
</br></br></br></br></br></br>
<div align="center">
	<table border="0" width="100%" id="table1" cellspacing="2" cellpadding="2">
		<tr>
			<td bgcolor="#2F446F" align="right">
			<font color="#FFFFFF" face="Traditional Arabic">
			<a onclick="window.open('abstract.php',false,false,false);" target="_blank">
				<b><span style="text-decoration: none">
					<img border="0" src="Background/d2.gif" width="48" height="48" align="right">
				</span></b>
				<font color="#FFFFFF" face="Traditional Arabic">
				<span style="text-decoration: none" dir="rtl"><b>About the system</b></span></font></b>
			</a></td>
		</tr>
	</table>
</div>

<?php
}//end of method
?>