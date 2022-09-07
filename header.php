<?php 
//include ('data_base_sql.php'); 
//session_start();
?>
<header>
        <div class="container-xl pt-3 pb-4">
            <div class="row">
                <div class="col-5 pl-4">
                    <a href="index.php"><img src="images/earth64.png" class="earth_icon"></a>
                </div>
                <div class="col-md-7 text-right">
                    <a href="index.php" class="links">Home</a>
                    <a href="" class="links">About</a>
                    <a href="" class="links">Services</a>
                    <a href="" class="links">Prices</a>
                    <a href="#" class="links"> <img src="images/notification.svg" class="notification"></a>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <a href="registration.php" target="_blank" style="margin-left:0;"><img src="images/user4.svg" class="user"></a>
                            <a href="login.php"><img src="images/user_3sv.svg" class="user_exit"></a>
                            <a href="registration.php" target="_blank" style="margin-left:0;"><?php echo $_SESSION['user_login'];?></a>
                        <?php else:?>    
                            <a href="registration.php" target="_blank" class="links"> <img src="images/user_ghost.svg" class="user"></a>
                        <?php endif?>
                </div>
            </div>
        </div>
    </header>