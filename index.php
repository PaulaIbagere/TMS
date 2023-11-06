


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Fraunces:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="/static/pictures/favicon.png">
    <title>Timetable Management System</title>
</head>
<body>
    <header class="header">
        <a href="#" class="scrollTopLink">
            <span class="material-symbols-outlined">
                north
            </span>
        </a>
        <section>
            <figure class="img-container">
                <img src="images/index-0.jpg" alt="background image" class="img img-bg" width="250" height="250px">
            </figure>
        </section>
        <section class="header__menu">
            <h2>Timetable Management System</h2>

            <article class="header__buttons-container">
                <button class="header__btn">
                    <a href="student-login.html">Student</a>
                </button>
                <button class="header__btn">
                    <a href="lecturer-login.html">Lecturer</a>
                </button>
                <button class="header__btn">
                    <a href="TMS-college.php">Manager</a>
                </button>
                <button class="header__btn">
                    <a href="TMS-Manager.php">Admin</a>
                </button>
            </article>
        </section>
        <section>
            <h1 class="header__title">
                TIMELY <span class="underline">SCHEDULES</span>
                ,SEAMLESS
                <span class="underline">LIFE</span>
            </h1>
            <span class="material-symbols-outlined arrow-centre">
                south
            </span>
        </section>
    </header>



    <?php

require_once('main.php');

$conn = db_connect();

Display_Title();





$f=2;
$year=GetMaxYear();
// $uncode1 = mysqli_query($conn, "SELECT UniversityCode FROM colleges");
// $CollegeCode1 = mysqli_query($conn, "SELECT CollegeCode FROM colleges");
$uncode1 = isset($_GET['uncode1']) ? $_GET['uncode1'] : '';
$CollegeCode1 = isset($_GET['CollegeCode1']) ? $_GET['CollegeCode1'] : '';

MainDisplay($uncode1,$CollegeCode1,$f,$year);//CollegeMethod.php
?>










    <main class="main">
        <section class="card">
            <article class="card__body">
                <h2 class="card__title">Do you like being Organised ?</h2>
                <p class="card__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam vel, eius consequuntur maiores hic illo consequatur cumque aliquid? Mollitia, pariatur. <span class="underline">10,000 </span><span class="wigly">lorem</span></p>
            </article>
            <figure>
                <img src="images/index-1.jpg" alt="bitcoin" height="100px" width="100px" class="card__image">
            </figure>
        </section>
        <section class="card card-reversed">
            <figure>
                <img src="images/index-2.jpg" alt="leaves" height="100px" width="100px" class="card__image">
            </figure>
            <article class="card__body">
                <h2 class="card__title">We got you covered</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quisquam officia consequatur aspernatur, saepe nam.<span class="underline">SEARCH </span></p>
            </article>
        </section>
        <section class="card">
            <article class="card__body">
                <h2 class="card__title">Start Planning</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, et!<span class="wigly">Cryptocurrency</span> for <span class="underline">FREE</span></p>
            </article>
            <figure>
                <img src="images/index-3.avif" alt="leaves" height="100px" width="100px" class="card__image">
            </figure>
        </section>
    </main>
    <footer class="footer">
        <p class="footer__text">Timetable Manager&#174;</p>
    </footer>
</body>
<script>
let scrollTopLink = document.querySelector(".scrollTopLink");
document.addEventListener('scroll', ()=>{
    scroll = document.documentElement.scrollTop > 100 || document.body.scrollTop > 100;
    if(scroll)
    scrollTopLink.classList.add('showBtn')
    else
    scrollTopLink.classList.remove('showBtn')
})
</script>
</html>