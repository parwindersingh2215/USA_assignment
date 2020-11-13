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
        .form-container{
            margin-left: 25%;
            margin-right: 25%;
        }
        .align-center{
            text-align: center;
        }

        @media only screen and (max-width: 600px) {
            .form-container{
                margin-left: 2%;
                margin-right: 2%;
            }
        }

        .section-margin-padding-top{
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
        <input type="email" id="email" name="email" placeholder="@gmail.com">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">


        <label for="password2">Confirm Password</label>
        <input type="password" id="password2" name="password2" placeholder="Confirm your Password">


        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Full Name">


        <label for="department" style="margin-top: 10px">Department</label>
        <select name="department" id="department">
            <option value="">Select Department</option>
            <option value="Computer Science">Arts & Social Sciences</option>
            <option value="Economics & Business">Economics & Business</option>
            <option value="Engineering & Technology">Engineering & Technology</option>
            <option value="Life Sciences">Life Sciences</option>
            <option value="Physical Education">Physical Education</option>
            <option value="Visual Art & Performing Arts">Visual Art & Performing Arts</option>
            <option value="AGRICULTURE & FORESTRY">AGRICULTURE & FORESTRY</option>
        </select>


        <label for="areaofintrest">Area of Interest</label>
        <input type="text" id="areaofintrest" name="areaofintrest" placeholder="Interest">
        <div class="align-center">
            <input type="button" value="Submit" id="submit" class="btn btn-success">
        </div>
    </form>
</div>
<?php include "footer.php"; ?>
</body>
</html>