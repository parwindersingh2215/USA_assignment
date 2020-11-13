<?php
session_start();
include_once "../connection.php";

$passworderror = '';
$passworderrorold = '';
$passworderrorsame = '';
$userid='';
$error = '';
$message = '';
$emailerror = '';
$email = $name = $role = $password = '';
if (isset($_POST['submit'])) {
    $userid= mysqli_escape_string($conn, $_POST['userid']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $oldpassword = mysqli_escape_string($conn, $_POST['oldpassword']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_escape_string($conn, $_POST['confirmpassword']);

    $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
    if (!(preg_match($pattern, $password))) {
        $passworderror = "<span style='color:red;display: block;'> Password must be atleast 8 Characters, atleast 1 special characters and 1 digit</span>";
    }
    if($confirmpassword !=$password)
    {
        $passworderrorsame="<span style='color:red;display: block;'> Password and Confirm Password must be same</span>";
    }
    if($passworderror =="" && $passworderrorsame=='')
    {

        $selectQuery = "select * from users where emailid='$email' and password='$password'";
        $data = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($data) == 0) {
            $updateQuery = "update  `users`  set `password`='$password' where id='$userid'";

            if (mysqli_query($conn, $updateQuery)) {
                $message = "<span style='color:green;display: block;'>Password Updated Successfully</span>";
            }
        } else {
            $error = "<span style='color:red;display: block;'>Invalid Old Password</span>";
        }

    }
}else{

    $email=$_SESSION["data"]['emailid'];
    $userid=$_SESSION["data"]['id'];
}
?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "userheader.php";

?>
<section id="aboutus">
    <div>
        <div class="form-outer">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div style="text-align: center">
                    <h2> New User</h2>
                </div>

                <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>">
                <label for="email"><b>Email</b></label>
                <input type="email" readonly placeholder="Enter Email" value="<?php echo $email; ?>" id="email" name="email"
                       required>
                <?php echo $emailerror; ?>
                <label for="oldpassword" style="margin-top: 10px"><b>Old Password</b></label>
                <input type="password" placeholder="Enter Password" name="oldpassword" id="oldpassword" required>
                <?php echo $passworderrorold; ?>

                <label for="password" style="margin-top: 10px"><b>New Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
               <?php echo $passworderror; ?>
                <label for="password" style="margin-top: 10px"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="confirmpassword" id="confirmpassword" required>
                <?php echo $passworderrorsame; ?>

                <button type="submit" class="btn btn-success btn-mr" name="submit">Submit</button>
                <?php
                if ($error != '') {
                    echo $error;
                }
                if ($message != '') {
                    echo $message;
                }
                ?>

            </form>
        </div>
    </div>

</section>
<?php
include_once "../footer.php";
?>
</body>
    </html><?php
