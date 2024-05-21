<?php
include ('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="shortcut icon" href="images/logo3.png" type="image/x-icon">
    <title>Creative Learning | Home page </title>
</head>

<body>
    <?php
    include ('header.php');
    ?>
    <div class="container">
        <div class="section1">
            <div class="section1-text">
                <h1 class="section1-big-title"><span class="style-green">Unleash</span> Knowledge <br> Empower <span
                        class="style-green">Success</span> </h1>

                <h3 class="section1-sub-title"> Empowering through transformative education. Innovative <br> solutions
                    for individuals and organizations. Unlock your potential <br> with us.</h3>

                <div class="section1-cards">
                    <div class="section1-card">
                        <div class="section1-content">
                            <img src="images/web.png" alt="" class="section1-cards-logo">
                            <h2>Web Development</h2>
                            <p>Empowering educators and captivating student.</p>
                        </div>
                        <div class="section1-content">
                            <img src="images/ART.png" alt="" class="section1-cards-logo">
                            <h2>Design</h2>
                            <p>Unlock your potential with personalised learning experience.</p>
                        </div>
                        <div class="section1-content">
                            <img src="images/MERKE.png" alt="" class="section1-cards-logo">
                            <h2>SEO </h2>
                            <p>Guiding you towards success and helping you .</p>
                        </div>
                    </div>
                </div>



                <div class="section1-buttons">

                    <div class="section1-join-button"><a href="register.php">Join For Free</a></div>

                    <div class="section1-how-button">
                        <a href="https://www.youtube.com/watch?v=Fc7gbzMpl0g">How it works</a>
                    </div>

                </div>

            </div>
            <div class="section1-picture">

                <img src="images/heroo.png" />
            </div>
        </div>
        <div class="section2">

            <h2 class="section2-big-title">Our Team</h2><br><br>

            <div class="main">


                <div class="profile-card">
                    <div class="img">
                        <img src="images/nabil hamdi.jpg">
                    </div>
                    <div class="caption">
                        <h3>Nabil <br> Hamdi</h3>
                        <p>Designer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/nbI.creations"><i class="fab fa-facebook"
                                    target="_blank"></i></a>
                            <a href="https://www.instagram.com/nbl.creations/?hl=fr"><i class="fab fa-instagram"
                                    target="_blank"></i></a>
                            <a href="https://www.behance.net/NBLCreations"><i class="fab fa-twitter"
                                    target="_blank"></i></a>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="images/wassim guessoum.jpg">
                    </div>
                    <div class="caption">
                        <h3>Wassim Guessoum</h3>
                        <p>Front End Developer</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/WassiimGsm/"><i class="fab fa-facebook"
                                    target="_blank"></i></a>
                            <a href="https://www.instagram.com/wassiim.gsm/"><i class="fab fa-instagram"
                                    target="_blank"></i></a>
                            <a href="https://twitter.com/WassiimGsm"><i class="fab fa-twitter" target="_blank"></i></a>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <div class="img">
                        <img src="images/Mido.jpg">
                    </div>
                    <div class="caption">
                        <h3>Mohamed Rahmani</h3>
                        <p>Marketing</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/iabdouboutaleb/"><i class="fab fa-facebook"
                                    target="_blank"></i></a>
                            <a href="https://www.instagram.com/iabdouboutaleb/"><i class="fab fa-instagram"
                                    target="_blank"> </i></a>
                            <a href="https://twitter.com/iabdouboutaleb"><i class="fab fa-twitter"
                                    target="_blank"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section3">
            <div class="contents">
                <div class="statistic">
                    <p class="statistic-number">20+</p>
                    <p>Courses</p>
                </div>
                <div class="statistic">
                    <p class="statistic-number">999+</p>
                    <p>Student</p>
                </div>
                <div class="statistic">
                    <p class="statistic-number">69+</p>
                    <p>5 Star Rating</p>
                </div>
            </div>
        </div>


        <div class="section4">
            <h2 class="trusted-title">Trusted By</h2>
            <br>
            <div class="trusted-by">
                <div class="container-by">

                    <div class="logos">
                        <img src="images/bmw.png">
                        <img src="images/nettt.png">
                        <img src="images/nasdaq.png">
                        <img src="images/envent.png">
                    </div>
                </div>
            </div>
        </div>


        <div class="section5">
            <div class="newsletter">
                <div class="subscribe">
                    <div class="subscribe__title">
                        <p> Subscripe to our NewsLetter</p>
                    </div>
                    <div class="subscribe__subtitle">
                        <p>Stay informed and never miss an update!</p>
                    </div>
                    <h5 class="subscribe__copy">
                        Subscribe to our newsletter now for the latest news,
                        exclusive offers,
                        and exciting updates delivered straight to your inbox
                    </h5><br><br>
                    <div class="form">
                        <input type="email" class="form__email" placeholder="Enter your email address" />
                        <button class="form__button">Send</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include ('footter.php');
        ?>


    </div>
</body>

</html>