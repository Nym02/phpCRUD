<?php include('header.php'); ?>

<?php
if (isset($_GET['update'])) {
    $user = $_GET['update'];

    $sql = "SELECT * from users WHERE ID = '$user'";
    $userInfo = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($userInfo)) {
        $id = $row['ID'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $uname = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
        $joinDate = $row['join_date'];






?>
<form action="" method="POST">
    <h4 class="mt-2 mb-4">Update User</h4>
    <div class="form-group">
        <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname ?>">
    </div>
    <div class="form-group">
        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname ?>">
    </div>
    <div class="form-group">
        <input type="text" name="uname" class="form-control" placeholder="UserName" value="<?php echo $uname ?>">
    </div>

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
    </div>
    <div class="form-group">
        <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $phone ?>">
    </div>
    <div class="form-group">
        <input type="hidden" name="userID" value="<?php echo $id; ?>">
        <input type="submit" name="submit" class="btn btn-success" value="Update">
    </div>


</form>
<?php

    }
} ?>

<?php
if (isset($_POST['submit'])) {
    $userID = $_POST['userID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET firstname='$fname', lastname='$lname', username='$uname', email='$email', phone='$phone' WHERE ID = '$userID'";

    $updateInfo = mysqli_query($db, $sql);

    if ($updateInfo) {
        header("Location: viewUsers.php");
    } else {
        die("Connection Error" . mysqli_error($db));
    }
}

?>


<?php include('footer.php'); ?>