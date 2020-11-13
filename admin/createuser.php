<?php
session_start();
include_once "../connection.php";
if ($_SESSION["data"]['role'] != "Admin") {
    header("location:adminhome.php");
    exit();
}
$passworderror = '';
$error = '';
$message = '';
$emailerror = '';
$email = $name = $role = $password = '';
if (isset($_POST['submit'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $name = mysqli_escape_string($conn, $_POST['name']);
    $role = mysqli_escape_string($conn, $_POST['role']);
    $password = mysqli_escape_string($conn, $_POST['password']);
    $department=mysqli_escape_string($conn, $_POST['department']);

    $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
    if (!(preg_match($pattern, $password))) {
        $passworderror = "<span style='color:red;display: block;'> Password must be atleast 8 Characters, atleast 1 special characters and numbers</span>";
    } else {

        $selectQuery = "select * from users where emailid='$email'";
        $data = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($data) == 0) {
            $insertQuery = "INSERT INTO `users`(`id`, `emailid`, `name`, `password`, `role`,`department`) 
             VALUES (null,'$email','$name','$password','$role','$department')";

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
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
    <style>
        .dept-hide {
            display: none;
        }

        .dept-show {
            display: block;
        }
    </style>
    <script>
        function changediv(obj) {
            if (obj == 'Professor' || obj == 'Department') {
                document.getElementById("deptdiv").className = "dept-show";
                document.getElementById("department").setAttribute("required",'')
            } else {
                document.getElementById("deptdiv").className = "dept-hide";
                document.getElementById("department").removeAttribute("required")
            }
        }
    </script>
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


                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" value="<?php echo $email; ?>" id="email" name="email"
                       required>
                <?php echo $emailerror; ?>

                <label for="password" style="margin-top: 10px"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <?php echo $passworderror; ?>
                <label for="name" style="margin-top: 10px"><b>Name</b></label>
                <input type="text" placeholder="Enter name" value="<?php echo $name; ?>" name="name" id="name" required>

                <label for="role" style="margin-top: 10px"><b>Role</b></label>
                <select name="role" id="role" required onchange="changediv(this.value)">
                    <option value="">Select Role</option>
                    <option value="Admin" <?php if ($role == "Admin") {
                        echo 'selected';
                    } ?>>Admin
                    </option>
                    <option value="Professor" <?php if ($role == "Professor") {
                        echo 'selected';
                    } ?>>Professor
                    </option>
                    <option value="Department" <?php if ($role == "Department") {
                        echo 'selected';
                    } ?>>Department
                    </option>
                </select>
                <div class="dept-hide" id="deptdiv">
                    <label for="department" style="margin-top: 10px"><b>Department</b></label>
                    <select name="department" id="department" >
                        <option value="">Select Department</option>
                        <option value="Arts & Social Sciences">Arts & Social Sciences</option>
                        <option value="Economics & Business">Economics & Business</option>
                        <option value="Engineering & Technology">Engineering & Technology</option>
                        <option value="Life Sciences">Life Sciences</option>
                        <option value="Physical Education">Physical Education</option>
                        <option value="Visual Art & Performing Arts">Visual Art & Performing Arts</option>
                        <option value="AGRICULTURE & FORESTRY">AGRICULTURE & FORESTRY</option>
                    </select>
                </div>
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
