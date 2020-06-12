<?php include('header.php'); ?>
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
                            <a href="" class="btn btn-danger btn-small" data-toggle="modal"
                                data-target="#deleteUser<?php echo $id; ?>">Delete</a>
                        </div>
                    </td>

                </tr>
                <!-- Modal -->
                <div class="modal fade" id="deleteUser<?php echo $id; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this user?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="btn-group">
                                    <a href="viewUsers.php?delete=<?php echo $id; ?>"
                                        class="btn btn-success btn-small">Yes</a>
                                    <a href="" class="btn btn-danger btn-small" data-dismiss="modal">No</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                    $i++;
                }
                ?>

            </tbody>
        </table>

        <?php
        if (isset($_GET['delete'])) {
            $delID = $_GET['delete'];


            $delQuery = "DELETE FROM users WHERE ID = '$delID'";

            $delUser = mysqli_query($db, $delQuery);


            if ($delUser) {
                header("Location: viewUsers.php");
            } else {
                die("Connection Error" . mysqli_error($db));
            }
        }

        ?>

    </div>
</div>
<?php
include('footer.php');

?>