<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>About us</title>
    <?php include 'headerfiles.php'?>
</head>
<body>
<nav class="navbar header-top">
    <ul>
        <li><a href="tel:+1-234-567-8910">+1-234-567-8910</a></li>
    </ul>
    <span class="header-top-icon">
    <a href=""><i class="fa fa-facebook"></i></a>
    <a href=""><i class="fa fa-instagram"></i></a>
    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
    </span>
</nav>
<nav class="navbar header">
    <ul>
        <li><a href="index.php" style="font-weight: bolder;font-size: 19px">Volunteering Management System</a></li>
        <li><a href="AboutUs.php">About us</a></li>
        <li><a href="features.php">Services</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Testimonials.php">Testimonials</a></li>
        <li><a href="Login.php" class="btn btn-success">Login/Register</a></li>
    </ul>
</nav>
<section id="about-us">
    <div class="about-title">About Us</div>
    <div class="about-subtitle">This system provide wide variety of services to meet all requirements.</div>
    <div class="row-about">
        <div class="col-5">
            <img src="images/About.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-5 mx-auto">
            <ul class="about-ul">
                <li><span><i class="fa fa-money" aria-hidden="true"></i></span> Guidance and full support for students
                    from various departments
                </li>
                <li><span><i class="fa fa-line-chart" aria-hidden="true"></i></span> Trainee program for graduating
                    international talents with big ambitions
                </li>
                <li><span><i class="fa fa-users" aria-hidden="true"></i></span> 100+ professors having expertise in
                    different industry fields
                </li>
            </ul>

        </div>
    </div>
    <div style="text-align: center"><a href="" class="btn about-btn btn-transparent">Learn more</a></div>
</section>
<?php include "footer.php"; ?>
</body>
</html>