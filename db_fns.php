<?php

function db_connect()
{
	//Connect to Database
	//---------------------
	//DB Name:ManageTime
	//username:TMS
	//passwd:  TMS
	//--------------------

   $db =mysqli_connect('localhost', 'root', '', 'managetime') or die ("cannot make the connection");

//    $db=mysqli_select_db($result, "ManageTime") or die ("cannot connect to DB ");
	return $db;

   }

?>
