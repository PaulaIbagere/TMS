<?php

session_start();

require_once('main.php');

//Page Title

Display_Title();

$id = isset($_GET['id'])?$_GET['id']:'';
$value=intval($id);

$uncode1 = isset($_GET['uncode'])?$_GET['uncode']:'';//universityCode
$uncode11=intval($uncode1);


if (strcmp($_SESSION['username'],"")!=0)
{

  if($value==1)
 {

	if($uncode11>0)
	{
		$conn = db_connect();
		 $sql2 = "select UniversityName from Universities where UniversityCode='$uncode11'";
		 $result2 = mysqli_query($conn, $sql2);

	 ?>
	 <div align="center">
	 	<table border="0" width="78%" id="table1" height="219">
	 	   <tr>

	 		  <td height="55" colspan="2">&nbsp;
	 		  <div align="center">
	 		  <table border="2" width="95%" bordercolorlight="#003366" bordercolordark="#003366" id="table2" bordercolor="#003366" cellpadding="5" cellspacing="5">
	 			<tr>
	 			<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="31" colspan="2" bordercolorlight="#003366" bordercolordark="#003366">
				   <p align="center"><span lang="ar-sa"><b>
				   <font face="Traditional Arabic" color="#FFFFFF" size="4">
				   <?php
					if (mysqli_num_rows($result2)>0 )
					{
					$row2=mysqli_fetch_row($result2);
					DisplaySuccHeader($row2[0]);
					//echo($row2[0]);
					}
					?>
				    </font></b></span>
				</td>
				</tr>
	 			<tr>
	 				<td bordercolor="#003366" align="right" bgcolor="#5A74A0" height="31" colspan="2" bordercolorlight="#003366" bordercolordark="#003366">
	 			    <img border="0" id="img44" src="College_files/college.jpg" height="27" width="135" alt="&#1575;&#1604;&#1603;&#1604;&#1610;&#1575;&#1578;" fp-style="fp-btn: Embossed Capsule 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 20; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1603;&#1604;&#1610;&#1575;&#1578;"></td>
	 			</tr>
	 		    <tr>
			<?php
				$sql = "select CollegeName,CollegeCode from Colleges where UniversityCode='$uncode11'order by CollegeCode";
				$result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result)>0 )
		          {
			      ?>
			      <td bordercolor="#5A74A0" align="center" bgcolor="#5A74A0" height="31" width="73%" bordercolorlight="#003366" bordercolordark="#003366">
				  	 <p dir="rtl">
				  	 <img border="0" id="img27" src="College_files/button2B.jpg" height="27" width="135" alt="&#1575;&#1587;&#1605; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1587;&#1605; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;"></td>
				  <td width="24%" bordercolor="#5A74A0" align="center" bgcolor="#5A74A0" height="31" bordercolorlight="#003366" bordercolordark="#003366">
				  	 <p align="center" dir="rtl">
				  	 <img border="0" id="img25" src="College_files/button27.jpg" height="27" width="135" alt="&#1603;&#1608;&#1583; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1603;&#1608;&#1583; &#1575;&#1604;&#1603;&#1604;&#1610;&#1577;"></td>
				  </tr>
				  <tr>
				  <?php
				  	 while($row=mysqli_fetch_row($result))
				  	 {
				  	 ?>

					 <td bordercolor="#003366" align="center" width="73%" height="35">
					 	 <p dir="rtl">
					 	 <span lang="ar-sa">
					 	 <?php $CollegeCode=$row[1];?>
					 	<font face="Traditional Arabic" size="3" color="#FFFFFF">
					 	<a href='university.php?id=<?php echo($id)?>&uncode=<?php echo($uncode11);?>&CollegeCode=<?php echo($CollegeCode);?>#depart'>
					 	 	<font color="#FFFFFF">
					 	 	<?php

					 	 	echo($row[0]);?>
					 	 	</font></a></font></span>
					 </td>
					 <td width="24%" bordercolor="#003366" align="center" height="35">
					 	<font color="#FFFFFF" face="Times New Roman" size="3">
					 	<?php echo($row[1]);?>
					 	</font></td>
					 </tr>
					 <tr>
					 <?php
					  }//end of while
					} //end of if
				else
				 	{
				 	?>
				 	<td bordercolor="#003366" align="center" width="73%" bgcolor="#5A74A0" colspan="2">
					<img border="0" id="img42" src="College_files/button2C.jpg" height="40" width="200" alt="&#1604;&#1605; &#1610;&#1578;&#1605; &#1573;&#1583;&#1582;&#1575;&#1604; &#1571;&#1609; &#1603;&#1604;&#1610;&#1577;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 16; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1604;&#1605; &#1610;&#1578;&#1605; &#1573;&#1583;&#1582;&#1575;&#1604; &#1571;&#1609; &#1603;&#1604;&#1610;&#1577;"></td>
					</tr>
					<?php
					 }
					?>
					</tr>
					</table>
					</div>
					</td>
				    </tr>
					<tr>
						 <td width="18%">
						 	<p align="center">
						 	<a href="CollegForm.php?uncode=<?php echo($uncode11);?>">
						 		<img border="0" id="img45" src="College_files/button1Dc.jpg" height="20" width="100" alt="&#1575;&#1590;&#1575;&#1601;&#1577; &#1603;&#1604;&#1610;&#1577;" onmouseover="FP_swapImg(1,0,/*id*/'img45',/*url*/'College_files/button1Ec.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img45',/*url*/'College_files/button1Dc.jpg')" onmousedown="FP_swapImg(1,0,/*id*/'img45',/*url*/'College_files/button1Fc.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img45',/*url*/'College_files/button1Ec.jpg')" fp-style="fp-btn: Braided Column 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 14; fp-font-color-normal: #FFFFFF; fp-font-color-hover: #FFFFFF; fp-font-color-press: #FFFFFF; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1590;&#1575;&#1601;&#1577; &#1603;&#1604;&#1610;&#1577;">
						 	</a>
						 </td>
						 <td width="80%">&nbsp;</td>
				    </tr>
				</table>
				</div>
				<?php
     }//end of if
     }//end of if

$id = isset($_GET['id'])?$_GET['id']:'';
$value=intval($id);

$uncode1 = isset($_GET['uncode'])?$_GET['uncode']:'';
$uncode11=intval($uncode1);

$CollegeCode1 = isset($_GET['CollegeCode'])?$_GET['CollegeCode']:'';
$CollegeCode11=intval($CollegeCode1);

if(($id==1)&&($uncode11>0)&&($CollegeCode11>0))
{
?>
<a name="depart">
<?php
 	include("Departs.php");
?>
</a>
<?php
} //end of if
}//end of if

else
{
	include("ErrorPage.php");
}
?>