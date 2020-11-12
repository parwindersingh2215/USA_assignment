<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include_once "headerfiles.php";
    ?>
    <title>Contact us</title>
</head>
<body>
<?php
include_once "header.php";
?>

<section class="container margin-top-down">
    <h2 class="align-center">Contact Us</h2>
    <br>
    <div class="columns-2 sm-text-center">
        <div class="contact-left">
            <h3 class="hide">Contacts</h3>
            <p>If you want help regarding account details or just have some questions,feel free
                to get in touch with
                us.
            </p>
            <br>
            <div class="columns-12">
                <p class="text-bold">Address: </p>
                <p>701 S Nedderman Dr.Arlington, TX 76019</p>
            </div>
            <div class="columns-12">
                <p class="text-bold">Hours: </p>
                <p>Monday-Saturday: 10 AM - 5 PM <br>
                    Sunday: 12 AM - 4 PM
                </p>
            </div>
            <div class="columns-12">
                <p class="text-bold">Contacts: </p>
                <p style="text-decoration: underline;"><span> M  +1(234)567 89 00</span><br>
                    <span style="margin-top: 5px;"> admin@website.com</span></p>
            </div>
            <div style="margin-top: 20px">
                <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="contact-right">
            <div class="form-outer">
                <h2 style="margin: 0">Get In Touch</h2>
                <form action="#">
                    <input type="text" placeholder="Enter your full name*">
                    <input type="text" placeholder="Enter your phone number*">
                    <input type="text" placeholder="Enter your e-mail*">
                    <textarea placeholder="Type your message"></textarea>
                    <input type="submit" value="Send Message" class="btn-contact">
                </form>
            </div>
        </div>
    </div>

</section>
<?php include "footer.php"; ?>

</body>
</html>
