<?php
$conn=null;
session_start();
include_once "../connection.php";
$error = '';
$message = '';
if ($_SESSION["data"]['role'] != "Admin") {
    header("location:adminhome.php");
    exit();
}
if (isset($_POST['btndel'])) {
    $userid = $_POST["userid"];
    $query = "delete from users where id=$userid";
    if (mysqli_query($conn, $query)) {
        $message = "User Deleted Successfully";
    } else {
        $error = "unable to delete";
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

    <table class="table">
        <thead>
        <tr>
            <th>Srno</th>
            <th>Email</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once "../connection.php";
        $query = "select * from users where id !=" . $_SESSION["data"]['id'];
        $result = mysqli_query($conn, $query);
        $srno = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row['emailid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <form onsubmit="return confirm('Are you sure to delete ?')" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="userid" id="userid">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" class="btnred" value="Delete" name="btndel" id="btndel">
                    </form>
                </td>
            </tr>

            <?php
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
