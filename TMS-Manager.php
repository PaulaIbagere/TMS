<?php
 
 require_once('main.php');
 
 //Page Title and background from [Page_layout.php]

 
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
        <img src="images/admin-login.avif" alt="" width="100px" height="100px">
    </figure>
</section>
<section class="main__form">
    <legend class="cursive pad-bottom">ADMIN</legend>
    <form method="POST" action="welcomeAdmin.php">
        <div>
            <label for="id_username">Username</label>
            <input type="text" name="T1" id="T1" dir="rtl placeholder="username" maxlength="100" required id="id_username" autocomplete="off">
        </div>
        <div>
            <label for="id_password1">Password</label>
            <input type="password" name="T2" id="T2" dir="rtl" autocomplete="off" required id="id_password_1">
        </div>
        <button type="submit" name="Submit" class="btn" id="submitBtn" value='signup'>
            <a href="admin-page.php" class="no-line">LOGIN</a>
        </button>
    </form>
    <div class="message"></div>
    <p class="pad-top-bottom pad-inline"><span class="dash"></span><span class="dash"></span></p> 
    <p><a href="index.php">
        <span class="material-symbols-outlined arrow-centre">
            Back
        </span>
    </a></p>
</section>
</main>

</body>
</html>