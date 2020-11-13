<?php
$conn = null;
session_start();
include_once "../connection.php";
$error = '';
$message = '';
//if ($_SESSION["data"]['role'] != "Admin") {
//    header("location:adminhome.php");
//    exit();
//}
if (isset($_POST['btndel'])) {
    $userid = $_POST["userid"];
    $query = "delete from users where id=$userid";
    if (mysqli_query($conn, $query)) {
        $message = "<div class='successmsg'>User Deleted Successfully</div>";
    } else {
        $error = "<div class='errormsg'>unable to delete</div>";
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
include_once "userheader.php";
?>
<div class="container">

    <?php
    if ($error != '') {
        echo $error;
    }
    if ($message != '') {
        echo $message;
    }
    ?>
    <div class="clear-fix"></div>

    <table class="table">
        <thead>
        <tr>
            <th>Srno</th>
            <th>Email</th>
            <th>Name</th>
            <th>Resume</th>
            <th>Department</th>
            <th>AreaofInterest</th>
            <th>Recruit</th>
            <th>Departmentapproval</th>
            <th>Applieddate</th>
            <th>Applied date</th>
            <th>Date of Allocation</th>
            <th>Job Details</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once "../connection.php";
        $query = "select * from volunteers";
        $result = mysqli_query($conn, $query);
        $srno = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $icon = "pdf";
            if (strpos(strtoupper(pathinfo($row['resume'], PATHINFO_EXTENSION)), 'pdf')) {
                $icon = "pdf.png";
            } else {
                $icon = "doc.png";
            }
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><a href="<?php echo $row['resume']; ?>" target="_blank"><img src="../icon/<?php echo $icon; ?>"
                                                                                alt=""> Resume</a></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <form onsubmit="return confirm('Are you sure to delete ?')"
                          action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="userid" id="userid">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" class="btnred" value="Delete" name="btndel" id="btndel">
                    </form>
                    <form action="edituser.php">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="userid" id="userid">
                        <input type="submit" class="btnorange" value="Edit" name="btnedit" id="btnedit">
                    </form>
                </td>
            </tr>
            <?php
            $srno++;
        }
        ?>
        </tbody>
    </table>
</div>
<?php
include_once "../footer.php";
?>
</body>
    </html><?php
