<?php 
    include 'newsletter.php';
?>
<footer>
        <form class="container-xl" method="POST" action="">
            <div class="row pt-4 align-items-baseline">
                <div class="col">
                    <img src="images/earth64.png" style="margin-top:0.5em; width: 40px; height: 40px;">
                    <div class="footer_text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                    <div class="links_soc">
                        <a href=""><img src="images/in_soc.svg"></a>
                        <a href=""><img src="images/messg_soc.svg"></a>
                        <a href=""><img src="images/twitter_soc.svg"></a>
                        <a href=""><img src="images/twoo_soc.svg"></a>
                    </div>
                </div>
                <div class="col">
                    <a href="#"><b>Company</b></a>
                    <a href="#">About us</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">Pricing</a>
                </div>
                <div class="col">
                    <a href="#"><b>Resources</b></a>
                    <a href="#">Proposal Template</a>
                    <a href="#">Invoice Template</a>
                    <a href="#">Tuturoial</a>
                    <a href="#">How to write a contract</a>
                </div>
                <div class="col-xl-4 p-0">
                    <b style="margin-top:1em;">Join Our Newsletter</b><br>
                    <div class="sub_email"><input type="text" name="email" placeholder="Your email adress">
                        <button type="submit" class="sub_btn" name="subscribe_btn">Subscribe</button> <br></div>
                        <div class="errMsg"><b><?=$errMsg?></b></div>
                        <div class="successMsg"><b><?=$successMsg?></b></div>
                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
            </div>
            <div class="row pb-4">
                <hr>
                <div class="col-6">
                    Copyright @TANMARF 2022  All Rights Reserved.
                </div>
                <div class="col-6 text-right">
                    Design by <a href="https://github.com/Kwikli?tab=repositories" target="_blank"><b>Kwikli</b></a>
                </div>
            </div>
        </form>
    </footer>