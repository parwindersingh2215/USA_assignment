<?php
include_once "connection.php";
$passworderror = '';
$error = '';
$message = '';
$emailerror = '';
$email = $name = $role = $password =$resume=$currentdate ='';
date_default_timezone_set("America/Los_Angeles");
$currentdate=date('Y-m-d');
if (isset($_POST['submit'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $name = mysqli_escape_string($conn, $_POST['name']);
    $resume = mysqli_escape_string($conn, $_POST['resume']);
    $password = mysqli_escape_string($conn, $_POST['password']);


    $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
    if (!(preg_match($pattern, $password))) {
        $passworderror = "<span style='color:red;display: block;'> Password must be atleast 8 Characters, atleast 1 special characters and numbers</span>";
    }else if(){


    } else {

        $selectQuery = "select * from volunteers where email='$email'";
        $data = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($data) == 0) {



            $insertQuery = "INSERT INTO `volunteers`(`id`, `email`, `password`, `name`, `resume`,  `applieddate`)
 VALUES (null,'$email','$password','$name','$resume','$currentdate')";

            if (mysqli_query($conn, $insertQuery)) {
                $message = "<span style='color:green;display: block;'>User Addded Successfully</span>";
            }
        } else {
            $emailerror = "<span style='color:red;display: block;'>Email id is Already exist</span>";
        }

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form-container {
            margin-left: 25%;
            margin-right: 25%;
        }

        .align-center {
            text-align: center;
        }

        @media only screen and (max-width: 600px) {
            .form-container {
                margin-left: 2%;
                margin-right: 2%;
            }
        }

        .section-margin-padding-top {
            padding-top: 10px;
            margin-top: 30px;
            padding-bottom: 30px;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<div class="form-container section-margin-padding-top">
    <h2 class="align-center">Register</h2>

    <form action="">
        <label for="email">Email</label>
        <input type="email" id="email" required name="email" placeholder="@gmail.com">
        <label for="password">Password</label>
        <input type="password" id="password" required name="password" placeholder="Password">
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" id="confirmpassword" required name="confirmpassword" placeholder="Confirm your Password">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" accept=".pdf,.doc" placeholder="Full Name">
        <label for="resume">Resume (PDF,Docs)</label>
        <input type="file" id="resume" name="resume" placeholder="upload resume">
        <div class="align-center">
            <input type="button" value="Submit" id="submit" class="btn btn-success">
        </div>
    </form>
</div>
<?php include "footer.php"; ?>
</body>
</html>
