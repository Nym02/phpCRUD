<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <style>
    form {
        width: 30%;
        margin: 0 auto;
    }
    </style>
</head>

<body>
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
    }

    ?>
</body>

</html>