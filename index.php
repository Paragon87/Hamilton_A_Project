<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <title>Andrew Hamilton Working Title</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js"></script>
</head>
<body>
    <div class="page-wrapper">
        <!--Header section-->
        <header id="header">

            <?php
                include "nav.html"
            ?>
        
        </header>

        <!--Intro section-->
        <section id="intro">
            <div class="content-wrapper">

                <!--Quick Contact Form-->
                <div class="form-box">
                    <form id="quickContactForm" action="#">
                        <h1>Need to sell your home fast? I can help!</h1>
                        <h2>Contact me today:</h2>
                        <input type="text" name="custName" id="name" placeholder="Name *" required>
                        <input type="email" name="custEmail" id="email" placeholder="Email *" required>
                        <input type="tel" name="custPhone" id="phoneNum" placeholder="Phone Number">
                        <button type="submit" name="submit" id="submit">Contact</button>
                    </form>
                </div>

            </div>
        </section>

        <!--Property Listing section-->
        <section id="prop-list">

            <div class="jumbotron">
                <!--Photo Gallery-->
                <div id="carousel-container" class="flex-container">
                    <div id="photo-carousel" class="carousel slide" data-ride="carousel">

                        <!--Indicators-->
                        <ul class="carousel-indicators">
                            <li data-target="#photo-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#photo-carousel" data-slide-to="1"></li>
                            <li data-target="#photo-carousel" data-slide-to="2"></li>
                            <li data-target="#photo-carousel" data-slide-to="3"></li>
                        </ul>

                        <!--Pictures-->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="pictures/Home1.jpeg" alt="" >
                                <div class="carousel-caption">
                                    <h3>Home 1</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="pictures/Home2.jpeg" alt="">
                                <div class="carousel-caption">
                                    <h3>Home 2</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="pictures/Home3.jpeg" alt="">
                                <div class="carousel-caption">
                                    <h3>Home 3</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="pictures/Home4.jpeg" alt="">
                                <div class="carousel-caption">
                                    <h3>Home 4</h3>
                                </div>
                            </div>
                        </div>

                        <!--Slide controls-->
                        <a class="carousel-control-prev" data-target="#photo-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>    
                        <a class="carousel-control-next" data-target="#photo-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
        </section>
    
        <!--Footer Section-->
        <section id="footer">
            <div class="legal-info">
                <h3>Copyright 2018</h3>
                <h4>Designed and coded by: Geoffrey Germann</h4>
            </div>
        </section>

    </div>
</body>
</html>