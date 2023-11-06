<?php
	


 

 require_once('main.php');
	
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
    <legend class="cursive pad-bottom">Manager</legend>
    <form method="POST" action="welcomeCollege.php">
        <div>
            <label for="id_username">Username</label>
            <input type="text" name="T1" id="T1" placeholder="username" maxlength="100" required id="id_username" autocomplete="off">
        </div>
        <div>
            <label for="id_password1">Password</label>
            <input type="password" name="T2" id="T2" autocomplete="off" required id="id_password_1">
        </div>
        <tr>
		<td width="35%" bordercolorlight="#9999FF" bordercolordark="#6600FF" bgcolor="#5A74A0" height="25" dir="ltr" align="center"> School Year
			<!-- <img border="0" id="img82" src="header_files/AcadYearBut.jpg" height="24" width="120" alt="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;" fp-style="fp-btn: Simple Text 1; fp-font: Traditional Arabic; fp-font-style: Bold; fp-font-size: 18; fp-font-color-normal: #FFFFFF; fp-img-hover: 0; fp-img-press: 0; fp-preload: 0; fp-bgcolor: #5A74A0" fp-title="&#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;"> -->
		</td>

		<td width="62%" height="25" dir="ltr">

			<p align="right">
					<select size="1" name="D3" dir="rtl" style="color: #003366; font-family: Traditional Arabic; font-size: 12pt; font-weight: bold" tabindex="3">
					<!--
					<option value="" selected>
						&#1575;&#1582;&#1578;&#1585; &#1575;&#1604;&#1593;&#1575;&#1605; &#1575;&#1604;&#1583;&#1585;&#1575;&#1587;&#1609;
					</option>-->
					<?php
						$conn = db_connect();
						$sql_query3="select AcadYNo from AcadYear order by AcadYNo DESC";
						$result3=mysqli_query($conn, $sql_query3);
						if (mysqli_num_rows($result3))
						{
						while($row3=mysqli_fetch_row($result3)){
					?>
						<option value="<?php echo $row3[0];?>">
						<?php echo $row3[0] ?>
						</option>
						<?php
						}//end of while
						?>
						</select>
					<?php
					}//end of if
				?>
		</td>

	</tr>
        <button type="submit" class="btn" id="submitBtn" value='signup'>LOGIN</button>
    </form>
    <div class="message"></div>
    <p class="pad-top-bottom pad-inline"><span class="dash"></span><span class="dash"></span></p> 
    <p><a href="index.html">
        <span class="material-symbols-outlined arrow-centre">
            Back
        </span>
    </a></p>
</section>
</main>

</body>
</html>