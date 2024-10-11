<?php

include 'connect.php';

if (isset($_REQUEST['submit'])) {
  $admission_no = $_REQUEST['admission_no'];
  $u_name = $_REQUEST['u_name'];
  $u_mono = $_REQUEST['u_mono'];
  $u_email = $_REQUEST['u_email'];
  $u_password = $_REQUEST['u_password'];

  $insert = "INSERT INTO users_data (admission_no, u_name, u_mono, u_email, u_password) VALUES ('$admission_no', '$u_name', '$u_mono', '$u_email', '$u_password')";

  // if (mysqli_query($connection, $insert)) {
  //     echo "insert sucessfull";
  // } else {
  //     // echo "Insert error: " . mysqli_error($connection);
  //     $error_code = mysqli_errno($connection);
  //     switch ($error_code) {
  //         case 1062: // Duplicate entry error code
  //             echo "Error: The admission number, mobile number, or email address already exists. Please use a different value.";
  //             break;
  //         default:
  //             echo "Insert error: " . mysqli_error($connection);
  //             break;
  //     }
  // }

  // Use try-catch to handle exceptions
  try {
    if (mysqli_query($connection, $insert)) {
      echo "<script>alert('Insert successful!');</script>";
      header("Location: display.php");
    }
  } catch (mysqli_sql_exception $e) {
    // Customize error messages based on the error code
    if (mysqli_errno($connection) == 1062) { // Duplicate entry error code
      if (strpos(mysqli_error($connection), 'admission_no') !== false) {
        echo "Error: The admission number '$admission_no' already exists. Please use a different number.";
      } elseif (strpos(mysqli_error($connection), 'u_mono') !== false) {
        echo "Error: The mobile number '$u_mono' already exists. Please use a different number.";
      } elseif (strpos(mysqli_error($connection), 'u_email') !== false) {
        echo "Error: The email address '$u_email' already exists. Please use a different email.";
      }
    } else {
      echo "Insert error: " . mysqli_error($connection); // Generic error message
    }
  }
}

mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Form Design</title>
  <!-- Bootstrap 5 CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <style>
    body {
      background-color: #f4f7f6;
      font-family: Arial, sans-serif;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-custom {
      background-color: #007bff;
      color: #fff;
      border-radius: 30px;
      padding: 10px 20px;
    }

    .btn-custom:hover {
      background-color: #0056b3;
    }

    .container {
      max-width: 600px;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <div class="container">
    <a href="display.php">
      <button class="btn btn-primary">
        display
      </button>
    </a>
    <div class="card p-4">
      <!-- <h2 class="text-center mb-4">Register User</h2> -->

      <!-- Professional Bootstrap Form -->
      <form action="#" method="POST">
        <div class="mb-3">
          <label for="admission_no" class="form-label">Admission No</label>
          <input
            type="number"
            class="form-control"
            id="admission_no"
            name="admission_no"
            placeholder="Enter Admission No"
            required
            autocomplete="off" />
        </div>

        <div class="mb-3">
          <label for="u_name" class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            id="u_name"
            name="u_name"
            placeholder="Enter Your Name"
            required
            autocomplete="off" />
        </div>

        <div class="mb-3">
          <label for="u_mono" class="form-label">Mobile No</label>
          <input
            type="text"
            class="form-control"
            id="u_mono"
            name="u_mono"
            placeholder="Enter Mobile No"
            required
            autocomplete="off" />
        </div>

        <div class="mb-3">
          <label for="u_email" class="form-label">Email address</label>
          <input
            type="email"
            class="form-control"
            id="u_email"
            name="u_email"
            placeholder="Enter Email"
            required
            autocomplete="off" />
        </div>

        <div class="mb-3">
          <label for="u_password" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="u_password"
            name="u_password"
            placeholder="Enter Password"
            required
            autocomplete="off" />
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-custom" name="submit">
            Submit
          </button>

        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap 5 JS and dependencies (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>