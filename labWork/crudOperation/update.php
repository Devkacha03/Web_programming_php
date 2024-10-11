<?php
include 'connect.php';

//fetch id
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    //DISPLAY SELECTED ID RECORD
    $select_id_record = "SELECT *FROM users_data WHERE id=$id";
    $execute_query = mysqli_query($connection, $select_id_record);

    if (mysqli_num_rows($execute_query) > 0) {
        $row = mysqli_fetch_assoc($execute_query);
    } else {
        // No records found
        echo "No records found.";
        exit; // Stop the script execution if no records
    }
}

if (isset($_POST['submit'])) {
    $admission_no = $_POST['admissionno'];
    $nm = $_POST['name'];
    $mono = $_POST['mono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update_query = "UPDATE users_data SET admission_no='$admission_no', u_name='$nm', u_mono='$mono', u_email='$email', u_password='$password' WHERE id='$id'";

    if (mysqli_query($connection, $update_query)) {
        echo "<script>update ✅</script>";
        header("Location: display.php");
        exit(); // Stop further script execution after redirect
    } else {
        echo "Update error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Professional Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- Display form only if records are found -->
        <?php if (isset($row)) { ?>
            <form method="POST" class="form">
                <div class="form-group">
                    <!-- Dynamically add readonly attribute if $isReadOnly is true -->
                    <input type="hidden" id="id" name="id" placeholder="ID" required value="<?php echo $row['id']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="admission_no">Admission No</label>
                    <input type="text" id="admission_no" name="admissionno" placeholder="Admission No" required value=<?php echo $row['admission_no']; ?>>
                </div>

                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" id="name" name="name" placeholder="name" required value="<?php echo $row['u_name']; ?>">
                </div>

                <div class="form-group">
                    <label for="mono">mobile no</label>
                    <input type="number" id="mono" name="mono" placeholder="mono" required value="<?php echo $row['u_mono']; ?>">
                </div>

                <div class=" form-group">
                    <label for="email">email</label>
                    <input type="email" id="email" name="email" placeholder="email" required value="<?php echo $row['u_email']; ?>">
                </div>

                <div class=" form-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" placeholder="password" required value="<?php echo $row['u_password']; ?>">
                </div>

                <div class=" form-group">
                    <button type="submit" name="submit" class="btn-submit">Submit</button>
                </div>
            </form>

        <?php
        } else {
            echo "No Records Found";
            echo "<a href='form.php'><button class='btn-submit'>Add User</button></a>";
        } ?>
    </div>
</body>

</html>