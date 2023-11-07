<?php
session_start();
require_once('main.php');
require_once('Method.php');

//Page Title

Display_Title();

Background_Page();

$username=$_SESSION['username'];


if($username)
{
	include("header.php");
	$href="welcomeAdmin.php";
	Href($href);

	$msg='Halls and laboratories';
	DisplayHeader($msg);

	$conn = db_connect();
	//$un= $_POST['D1'];
	//$z = $_POST['R1'];

	display_Building_form();
}
else
{
	include("ErrorPage.php");
}


?>