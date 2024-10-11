<?php

include 'connect.php';

$select_Data = "SELECT *FROM users_data";

$result = mysqli_query($connection, $select_Data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Custom styling for better appearance */
        body {
            background-color: #f8f9fa;
        }

        .table th,
        .table td {
            vertical-align: middle;
            /* Center align content vertically */
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <h2 class="text-center">Records</h2>

        <a href="form.php"><button class="btn btn-primary mb-2">Add User</button></a>

        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Admission No</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['admission_no']; ?></td>
                            <td><?php echo $row['u_name']; ?></td>
                            <td><?php echo $row['u_mono']; ?></td>
                            <td><?php echo $row['u_email']; ?></td>
                            <td><?php echo str_repeat('*', strlen(md5($row['u_password']))); ?></td>
                            <td><a href="update.php"><button class="btn-primary">Update</button></a>
                                <a href="delete.php?deleteid=<?php echo $row['id']; ?>"><button class="btn-danger">delete</button></a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-warning text-center">No records found.</div>
        <?php } ?>

        <?php
        // Free result set
        mysqli_free_result($result);
        // Close connection
        mysqli_close($connection);
        ?>

    </div>
</body>

</html>