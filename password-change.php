<?php
session_start();

require_once('main.php');



$username=$_SESSION['username'];

$passwd=$_SESSION['passwd'];

if($username)
{

	

	$href="welcomeAdmin.php";
	Href($href);

	$conn = db_connect();
	
	

}
else
{
	include("ErrorPage.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="/static/pictures/favicon.png">
    <title>LOGIN</title>
</head>
<body class="body">
   <main class="main">
<section >
    <figure class="main__image">
        <img src="images/index-0.jpg" alt="" width="100px" height="100px">
    </figure>
</section>
<section class="main__form">
    <legend class="cursive pad-bottom">ADMIN</legend>
    <form action='change_passwd.php' method='post'>
        <div>
            <label for="id_password1">Previous Password</label>
            <input type="password"  name="old_passwd" autocomplete="off" required id="id_password_1">
        </div>
        <div>
            <label for="id_password1">New Password</label>
            <input type="password" name="new_passwd" autocomplete="off" required id="id_password_1">
        </div>
        <div>
            <label for="id_password1">Confirm Password</label>
            <input type="password" name="renew_passwd" autocomplete="off" required id="id_password_1">
        </div>
        <button type="submit" class="btn" id="submitBtn" value='signup' name="B1">CHANGE</button>
    </form>
    <div class="message"></div>
    <p class="pad-top-bottom pad-inline"><span class="dash"></span><span class="dash"></span></p> 
    <p><a href="welcomeAdmin.php">
        <span class="material-symbols-outlined arrow-centre">
            Back
        </span>
    </a></p>
</section>
</main>

</body>
</html>