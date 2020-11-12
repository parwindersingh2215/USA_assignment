<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
  include_once "headerfiles.php";
  ?>

    <style>
        #content-body {
            padding: 10px 0;
        }

        .row {
            display: inline-flex;
            width: 100%;
        }

        .col-5 {
            width: 50%;
        }
    </style>
</head>
<body>
<?php
include_once "header.php";
?>
<section id="content-body">
    <div class="columns-2">
        <div >
            <img src="images/Home.jpg" style="width: 100%" alt="">
        </div>
        <div >
            <div class="inner-col">
                <div class="inner-col-h1">Meet the new volunteering management system app.</div>
                <div class="inner-col-p">
                    This web-app is a comprehensive tool, and is for International Graduate students who can volunteer,
                    and
                    work with a professor to assist projects, gain professional experience, understand the pre-job
                    scenarios, and prepare for applications till they find a job.
                </div>
                <div class="btn-mr">
                    <a class="btn btn-success">About us</a>
                    <a class="btn btn-transparent">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>
</body>
</html>
