<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="contact.css">
    <title>Creative Learning | Contact us </title>
    <link rel="stylesheet" href="contact.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include ("header.php");
    ?>
    <div class="container">

        <div class="container">

            <span class="big-circle"></span>
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Contact Us</h3>
                    <p class="text">
                        We value your feedback, inquiries, and suggestions. Please fill out the form below to get in
                        touch with us.
                        We'll make sure to respond as soon as possible.
                    </p>

                    <div class="info">
                        <div class="information">
                            <img src="images/location.png" class="icon" alt="" />
                            <p>5Avenue,1 novembre 1954. Setif</p>
                        </div>
                        <div class="information">
                            <img src="images/email.png" class="icon" alt="" />
                            <p>CreativeLearning@education.com</p>
                        </div>
                        <div class="information">
                            <img src="images/phone.png" class="icon" alt="" />
                            <p>0367989476</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="test.html" autocomplete="off">
                        <div class="input-container">
                            <label for="name"></label>
                            <input type="text" id="name" placeholder="Username" name="name" class="input" />
                            <span>Username</span>
                        </div>

                        <div class="input-container">
                            <label for="email"></label>
                            <input type="email" id="email" placeholder="Email" name="email" class="input" />
                            <span>Email</span>
                        </div>

                        <div class="input-container">
                            <label for="phone"></label>
                            <input type="tel" id="phone" placeholder="Phone" name="phone" class="input" />
                            <span>Phone</span>
                        </div>

                        <div class="input-container textarea">
                            <label for="message"></label>
                            <textarea id="message" name="" placeholder="Message" class="input"></textarea>


                            <span>Message</span>
                        </div>

                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php
    include ("footter.php");
    ?>
</body>

</html>