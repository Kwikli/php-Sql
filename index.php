<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="fonts/font.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">

    <title>Traveling</title>
</head>
<?php 
    include ('data_base_sql.php');
?>
<body>  

    <?php 
        include('header.php');
    ?>

      <main>
        <div class="container-xl mb-0 pb-5 mt-5 pr-0 pl-0 align-content-center tour1">
                <img src="images/point.svg" class="point">
                <img src="images/shar.svg" class="shar">
                <img src="images/sms_love.svg" class="sms_love">
            <div class="content mb-3 bg_filter">
                <div class="content_text">
                    Traveling opens door to creating memories
                </div>
                <div class="choose_data">
                    <select name="citys" class="citys">
                        <optgroup label="Sth here">
                            <option>Sth here, there</option>
                            <option>Sth here, up there</option>
                        </optgroup>
                        <optgroup label="I do nont know">
                            <option>I do nont know, sdasdssd</option>
                            <option>I do nont know, dasdasd</option>
                            <option>I do nont know, sdad</option>
                        </optgroup>
                    </select>
                    <div class="vertical_line"></div>
                    <input type="date" class="kalendar">
                        <button class="get_start">
                            Get start
                        </button>
                </div>
            </div>
        </div>

        <div class="container text-right">
            <img src="images/dot.svg" style="height: 231px; width:550px;">
            <img src="images/plane.svg">
        </div>

        <div class="container-xl mt-0 mb-5">
            <div class="row mb-5">
                <div class="col-7-md">
                    <img src="images/tourist_svg.svg">
                </div>
                <div class="col-md">
                    <b>A life without journeys is one not lived at all</b>
                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    <br>
                    <button class="explore_now">Explore Now</button>
                </div>
            </div>

            <div class="row text-center">
                <div class="col text-center">
                    Let our experts plan your trip
                </div>
            </div>

            <div class="row pop_plc mb-5">
                Popular places
                <div class="container container_cards pl-0 pr-0 m-0">
                    <div class="card">
                        <div class="card_image">
                            <img src="images/1slide.svg">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> 80 Wood St. <br>
                            Glen Ellyn, IL 60137</P>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_image">
                            <img src="images/2slide.svg">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> 515 Jefferson St.<br> 
                                Helotes, TX 78023</P>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_image">
                            <img src="images/3slide.png">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> 21 Pineknoll Ave. <br>
                                Greensboro, NC.</P>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card_image">
                            <img src="images/4slide.png">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> SE. Nichols Ave.<br>
                                Halethorpe, MD</P>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_image">
                            <img src="images/5slide.png">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> Vine Court<br>
                                East Stroudsburg</P>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_image">
                            <img src="images/6slide.png">
                        </div>
                        <div class="card_title">
                            <P><img src="images/point_mark.svg"> Southampton <br>
                            Drive Avon Lake</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <b>Make your Hassle-Free travel plans now!</b>
                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    <button class="explore_now">Explore Now</button>
                </div>
                <div class="col-md-7">
                    <img src="images/fly_full.svg">
                </div>
            </div>
        </div>
            <div class="container bg_img">
                <div class="feedback_form">
                    <input type="text" placeholder="Email" name="email"><br>
                    <textarea placeholder="Type Your Message.." style="height:35%; padding-top: 11px;"></textarea><br>
                    <button class="send_now">Send now</button>
                </div>
        </div>
    </main>

    <?php 
        include('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>