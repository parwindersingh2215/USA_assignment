<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include_once "headerfiles.php";
    ?>
    <title>Login page</title>
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
<section id="aboutus">
    <div class="col-5" style="padding-left: 380px;padding-top: 20px">
        <div class="form-outer">
            <form action="/action_page.php" method="post">
                <div style="text-align: center">
                    <img class="img-fluid-f" style="width: 7em;border-radius: 50%" src="./images/3.jfif" alt="Avatar">
                </div>


                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw" style="margin-top: 10px"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="password" required>

                <button type="submit" class="btn btn-success btn-mr">Login</button>
                <br/>
                <br/>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <div class="row">
                    <div class="col-5">
                        <button type="button" class="btn" onclick="location.href='Register.html'">Register Here!</button>
                    </div>
                    <div class="col-5">
                        <a href="#" class="btn btn-reject">Forgot password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

<br>
<?php include "footer.php"; ?>
?>
</body>
</html>
