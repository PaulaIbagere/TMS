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
	$conn = db_connect();
  	
  	// create short variable names

  	$univCode = $_POST['D1'];
  	$r = isset($_POST['R1'])?$_POST['R1']:'';

    if((strcmp($univCode,"")==0)||(strcmp($r,"")==0))
     {
		$href="welcomeAdmin.php?flag=2";
		backto($href);
     	$path="error_msg_files/image001.gif";
  			$msg="Please enter all data";
  		Display_error_msg($msg,$path);
  		display_Building_form();
  	  }

  	else
  	{
  	  if($r==1)//r=1(lecture Room)
  	    {
  	       $href="welcomeAdmin.php?flag=2";
		   backto($href);
  	       $msg='Halls and Laboratories';
		   DisplayHeader($msg);

  	       display_Building_form();
  		   Display_Lecture($univCode,$r);
    	 }
      else
      if($r==2)//r=2(Labaratories)
  	    {
  		  $href="welcomeAdmin.php?flag=2";
		  backto($href);
  		  $msg='&#1575;&#1604;&#1602;&#1575;&#1593;&#1575;&#1578; &#1608; &#1575;&#1604;&#1605;&#1593;&#1575;&#1605;&#1604;';
		  DisplayHeader($msg);

  		 display_Building_form();

  		 Display_Lab($univCode,$r);

    	 }
     }//end of if
  }

?>