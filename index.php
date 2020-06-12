<?php include('header.php'); ?>
<form action="" method="POST">
    <h4 class="mt-2 mb-4">User Registration</h4>
    <div class="form-group">
        <input type="text" name="fname" class="form-control" placeholder="First Name">
    </div>
    <div class="form-group">
        <input type="text" name="lname" class="form-control" placeholder="Last Name">
    </div>
    <div class="form-group">
        <input type="text" name="uname" class="form-control" placeholder="UserName">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="Registration">
    </div>


</form>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $hashedPass = sha1($password);


    $query = "INSERT INTO users(firstname, lastname, username, password, email, phone, join_date) values('$fname', '$lname', '$uname', '$hashedPass', '$email', '$phone', now())";

    $sql = mysqli_query($db, $query);

    if ($sql) {
        header("Location: viewUsers.php");
    } else {
        echo "Connection Error";
    }
}

?>
</body>

</html>