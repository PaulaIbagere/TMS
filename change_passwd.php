<?php
session_start();
require_once('main.php');
//Page Title
Display_Title();

Background_Page();

$username=$_SESSION['username'];

if($username)
{
	include("header.php");
	
	$href="welcomeAdmin.php";
	Href($href);
	
	$conn = db_connect();
  
  // create short variable names
  	$old_passwd = $_POST['old_passwd'];
  	$new_passwd = $_POST['new_passwd'];
  	$new_passwd2 = $_POST['renew_passwd'];
	
    $i=0;
    $flag=true;
    if (!filled_out($_POST))
    {
    	echo("</br>");
			$msg='Please enter all fields';
		$flag=false;
		Display_error_msg($msg);
       
        
    }
	else
    if ($new_passwd!=$new_passwd2)
    {
    	echo("</br>");
     	$msg='Password Mismatch';
		$flag=false;
     	Display_error_msg($msg);
       
        
      }
  else
    if (strlen($new_passwd)>16 || strlen($new_passwd)<6)
    {
    	echo("</br>");
       	$msg='Password must be between 6 and 16 characters';
		$flag=false;
		Display_error_msg($msg,$path);
    	
    	
    }
    if($flag==true)
    {
    	// attempt update	
    	$rslt=change_password($_SESSION['username'], $old_passwd, $new_passwd);
    	if($rslt)
    	{
    	?>
    		<div align="center">
				<table border="0" width="100%" cellspacing="6" cellpadding="10">
					<tr>
						<td dir="rtl" bgcolor="#3D5285"><b><span lang="ar-sa" ><font size="5" face="Traditional Arabic" color="yellow">
							&#1578;&#1605;&#1578; &#1593;&#1605;&#1604;&#1610;&#1577; &#1578;&#1594;&#1610;&#1610;&#1585; &#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1605;&#1585;&#1608;&#1585;</font></span></b></td>
					</tr>
					<tr>
						<td>
						<p align="center"><b><span lang="ar-sa">
						<font size="5" face="Traditional Arabic">
							<a href="TMS.php">&#1575;&#1590;&#1594;&#1591; &#1607;&#1606;&#1575; &#1604;&#1610;&#1578;&#1605; &#1578;&#1601;&#1593;&#1610;&#1604; &#1603;&#1604;&#1605;&#1577;
							&#1575;&#1604;&#1605;&#1585;&#1608;&#1585; &#1575;&#1604;&#1580;&#1583;&#1610;&#1583;&#1577; &#1608;&#1584;&#1604;&#1603; &#1576;&#1575;&#1604;&#1583;&#1582;&#1608;&#1604; &#1604;&#1604;&#1606;&#1592;&#1575;&#1605; &#1605;&#1606; &#1580;&#1583;&#1610;&#1583;</a></font></span></b>
						</p></td>
					</tr>
				</table>
			</div>
    	<?php
    	}//end of if
    }//end of if flag=true
}//end of main if
else
{
	include("ErrorPage.php");
}

?>