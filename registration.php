<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="fonts/font.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">

    <title>Registation</title>
</head>
<?php 
    include('reg.php');
?>
<body> 
<?php 
    include('header.php');
?>
    <main>
        <form class="container_reg reg_form" method="POST" action="">
            <div class="reg_form_Text">Registation form<br></div> 
            <div class="reg_content">
                Login<br>
            <div class="input_reg"><input type="text" value="<?=$login?>" name="login" class="inpt_reg" placeholder="Type your login..."></div>
            Email<br>
            <div class="input_reg"><input type="email"  value="<?=$email?>" name="email" class="inpt_reg" placeholder="Type your email..." autocomplete="on"></div>
            Password<br>
            <div class="input_reg"><input type="password" name="reg_passwrd1" class="inpt_reg" placeholder="Type your password..."></div>
            Repeate the password<br>
            <div class="input_reg"><input type="password" name="reg_passwrd2" class="inpt_reg" placeholder="Repeat the password..."></div>
            <div class="errmsg"><?=$reg_errMsg?></div>
            <button type="submit" class="reg_btn">Submit</button>
            </div>
            
        </form>
    </main>
<?php 
    include('footer.php');
?>
</body>
</html>