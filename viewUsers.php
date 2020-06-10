<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users || CRUD App</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">






</head>

<body>

    <div class="row mt-4 ">

        <div class=" m-auto" style="width:90%">
            <h3 class="text-center mx-4">Members List</h3>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#SL.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Join Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * from users";
                    $allUsers = mysqli_query($db, $sql);

                    $i = 1;

                    while ($row = mysqli_fetch_assoc($allUsers)) {
                        $id = $row['ID'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $uname = $row['username'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $joinDate = $row['join_date'];



                    ?>
                    <tr>
                        <td><?php echo $i ?></td>

                        <td><?php echo $fname ?></td>
                        <td><?php echo $lname ?></td>
                        <td><?php echo $uname ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $joinDate ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="updateUser.php?update=<?php echo $id; ?>"
                                    class="btn btn-success btn-small">Update</a>
                                <a href="" class="btn btn-danger btn-small">Delete</a>
                            </div>
                        </td>

                    </tr>
                    <?php
                        $i++;
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <!-- JS, Popper.js, and jQuery -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="app.js"></script>
</body>

</html>