<?php

require_once('db_fns.php');
require_once('main.php');

echo('<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	</head>');

function Checkuser($username,$Passwd)
{

 $conn = db_connect();

$sql = "select * from LoginAdmin where UserName='$username' and Passwd='$Passwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0 )

   	return true;

else
   return false;

 }

 // Check all Fields Inserted
 function filled_out($form_vars)
 {
   // test that each variable has a value
   foreach ($form_vars as $key => $value)
   {
      if (!isset($key) || ($value == ''))
         return false;
   }
   return true;
 }

//check LectureName

function checkLName($LName,$univcode,$value,$Loc)
{
	//Check if Lecture Room already Registered or Not
	$flag = isset($_GET['flag']);
		
	$conn = db_connect();
	
	$sql3="select SubBName from Subbuildingseminar where UniversityCode='$univcode' and  BId='$value' and UnLoc='$Loc'";
	
	$result3 = mysqli_query($conn, $sql3);
	
	//echo("no of row=".mysqli_num_rows($result3) );
	
	if (mysqli_num_rows($result3)>0 )
	  {
		 while($row3=mysqli_fetch_row($result3))
		  {
		    if(preg_match("/".$LName."/i" ,$row3[0])) //match 
		    { 	
		    	$flag=false;
		    	break;
		    }
		  }//end of while
	   }
	else
		{
			$flag=true;
		}
	
  return $flag;
}

//
//Get Location Name

function GetLocName($LectureName,$univcode,$value,$Bid)
{

	$conn = db_connect();
	$sql2="select UnLoc from SubBuildingSeminar where UniversityCode='$univcode' and BId='$value' and SubBId='$Bid'";
	$result2 = mysqli_query($conn,$sql2);
	$LocName=mysqli_fetch_row($result2);
	return $LocName[0];

}

///

//check the University Code

function checkUniversityCode($univCode)
{
	$conn=db_connect();

	db_connect();
	$sql_query="select UniversityCode from Universities where UniversityCode='$univCode'";//
	$result2=mysqli_query($conn,$sql_query);
	if(mysqli_num_rows($result2)==1)
	{
		$flag=true;
	}
	else
	{
		$flag=false;
	}
	return $flag;
}

function checkUniversityName($univName)
{$conn=db_connect();

	db_connect();
	$sql_query="select UniversityName from universities where UniversityName='$univName'";//
	$result2=mysqli_query($conn, $sql_query);
	if(mysqli_num_rows($result2)==1)
	{
		$flag=true;
	}
	else
	{
		$flag=false;
	}
	return $flag;
}
//

function DoUpdate()
{
$conn = db_connect();
$sql1="select count(SubBId) from subbuildingseminar where UniversityCode='$univcode' and BId='$value'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1)>0 )
	{
		$row=mysqli_fetch_row($result1);
		$id=$row[0]+1;
	}
else
	{
		$id=1;
	}

	//(2)Insert Data to Table
	//echo($univcode."</br> ".$id."</br> ".$LabName."</br> ".$Capacity."</br> ".$Loc);
		$sql2 = "insert into Subbuildingseminar (UniversityCode,BId,SubBId,SubBName,Capacity,UnLoc) values ($univcode,2,$id,'$LabName',$Capacity,'$Loc')";
	$result2 = mysqli_query($conn,$sql2);
	if ($result2)
		{

		}
}
?>
