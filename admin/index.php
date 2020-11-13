<?php
session_start();
include_once "../connection.php";
$error = '';
if (isset($_POST['admin_login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Query = "select * from users where emailid='$email' ";
    $result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['password'] == $password) {
            $_SESSION["data"]=$row;
            header("location:adminhome.php");
        } else {
            $error = "Invalid Password";
        }
    } else {
        $error = "Invalid Username";
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
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "../header.php";
?>
<div>
    <section id="aboutus">
        <div class="col-5" style="margin: auto">
            <div class="form-outer">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div style="text-align: center">
                        <img class="img-fluid-f" style="width: 7em;border-radius: 50%" src="../images/3.jfif"
                             alt="Avatar">
                    </div>


                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Username" name="email" required>

                    <label for="password" style="margin-top: 10px"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <button type="submit" name="admin_login" class="btn btn-success btn-mr">Login</button>
                    <br/>

                    <div class="row">

                        <div class="col-5">
                            <?php
                            echo "<div style='color: red'>$error</div>";
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>

<?php
include_once "../footer.php";
?>

</body>
    </html><?php
