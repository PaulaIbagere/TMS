<?php
session_start();
require_once('main.php');
require_once('Method.php');

$username=$_SESSION['username'];


if($username)
{
	
	
	$conn = db_connect();
	//$un= $_POST['D1'];
	//$z = $_POST['R1'];

	
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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Fraunces:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="icon" href="/static/pictures/favicon.png">
    <title>Timetable Management System</title>
</head>
<body class="body">
    <header class="header">
        <section class="header__top">
            <section class="header__logo">
                <h3 class="logo-title">ADMIN</h3>
            </section>
            <article class="header__icons">
                <section>
                    <a href="logout.php">
                        <span class="material-symbols-outlined arrow-centre">
                        logout
                        </span>
                    </a>
                </section>
                <section>
                    <a href="index.php">
                        <span class="material-symbols-outlined arrow-centre">
                        home
                        </span>
                    </a>
                </section>
            </article>
        </section>
        <nav class="header__nav">
        <?php
		$id=1;
	      ?>
                <ul>
                    <li><a href="university.php?id=<?php echo($id); ?>">UNIVERSITIES</a></li>
                    <li><a href="BuildingForm.php?id=<?php echo($id); ?>">HALLS & LABS</a></li>
                    <li><a href="DisplayUser.php">USERS</a></li>
                    <li><a href="AdminReport.php">REPORTS</a></li>
                    <li><a href="password-change.html">CHANGE PASSWORD</a></li>
                </ul>
        </nav>
    </header>
    <main class="main">

    <?php

        $href="welcomeAdmin.php";
        Href($href);

        $msg='Halls and laboratories';
       DisplayHeader($msg);

       display_Building_form();
    ?>
    </main>
    <footer class="footer"></footer>
</body>
</html>