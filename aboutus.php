<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="aboutus.css">
    <title>Creative Learning | About us </title>
</head>

<body>
    <?php
    include ("header.php");
    ?>
    <div class="container">
        <div class="header">

            <section class="about-us">
                <div class="about">
                    <img src="images/about.png" class="pic">
                    <div class="text">
                        <h4>DISCOVER</h4>
                        <h2>About <span> Us </span> </h2>
                        <h5>Empowering Learning, One Click at a Time</h5>

                        <p>we believe that education should be accessible to everyone, regardless of their location or
                            circumstances. Our journey began in 2024 with a simple yet powerful vision: to revolutionize
                            the
                            way people learn by harnessing the potential of technology.</p>
                        <br>

                        <p>Driven by our passion for education and a deep understanding of the evolving learning
                            landscape,
                            we</p>
                        <p class="hidden">embarked on a mission to create a platform that breaks down barriers and
                            empowers
                            learners worldwide. We have since grown into a leading <br> e-learning platform.</p><br>
                        <button class="button-read" onclick="toggleReadMore()">Read More</button><br>

                        <script>
                            function toggleReadMore() {
                                var hiddenParagraph = document.querySelector('.hidden');
                                var readMoreButton = document.querySelector('button');

                                if (hiddenParagraph.style.display === 'none') {
                                    hiddenParagraph.style.display = 'block';
                                    readMoreButton.textContent = 'Read Less';
                                } else {
                                    hiddenParagraph.style.display = 'none';
                                    readMoreButton.textContent = 'Read More';
                                }
                            }
                        </script>

                    </div>
                </div>
            </section>
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
        include ("footter.php");
        ?>
    </div>
</body>

</html>