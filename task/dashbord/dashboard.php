<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Dashboard</title>
  <!-- Add Bootstrap CSS Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <style>
    /* Global Styles */
    body {
      font-family: "Arial", sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    #header {
      background: linear-gradient(135deg, #001f3f, #1f3278);
      color: #fff;
      padding: 20px;
    }

    #header h1 {
      font-size: 28px;
      margin: 0;
      font-weight: bold;
    }

    /* Responsive Button Styles */
    .gradient-button {
      border: none;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
      /* Full width on smaller screens */
      transition: all 0.3s ease-in-out;
      font-size: 16px;
      /* Default font size */
    }

    .ocean-blue-button {
      background: linear-gradient(135deg, #006a88, #0091ad);
      color: #fff;
    }

    .sunset-orange-button {
      background: linear-gradient(135deg, #ff8c42, #ffbc3b);
      color: #fff;
    }

    .spring-green-button {
      background: linear-gradient(135deg, #72b01d, #97cc11);
      color: #fff;
    }

    .royal-purple-button {
      background: linear-gradient(135deg, #7c53c3, #a44bc5);
      color: #fff;
    }

    .ruby-red-button {
      background: linear-gradient(135deg, #cb1e52, #de6b4b);
      color: #fff;
    }

    .goldenrod-yellow-button {
      background: linear-gradient(135deg, #ffbf3f, #ffb344);
      color: #fff;
    }

    /* Responsive Button Adjustments */
    @media (max-width: 767.98px) {
      .gradient-button {
        width: 100%;
        /* Full-width buttons on small screens */
        font-size: 14px;
        /* Smaller font size */
        padding: 12px;
        /* Adjust padding */
      }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      .gradient-button {
        width: 48%;
        /* Two buttons per row on tablets */
        font-size: 15px;
        padding: 15px;
      }
    }

    @media (min-width: 992px) {
      .gradient-button {
        width: auto;
        /* Default width on large screens */
        font-size: 16px;
        /* Larger font size */
        padding: 10px 20px;
        /* Default padding */
      }
    }

    /* Hover Effects for Buttons */
    .gradient-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    #sidebar {
      background: #343a40;
      color: #fff;
      padding: 20px;
    }

    #sidebar ul {
      list-style: none;
      padding: 0;
    }

    #sidebar li {
      margin-bottom: 10px;
    }

    #sidebar li a {
      color: #fff;
      text-decoration: none;
    }

    #sidebar .list-group-item {
      background: transparent;
      border: none;
      color: #fff;
    }

    #sidebar .list-group-item:hover {
      background: #212529;
    }

    #main-content {
      padding: 20px;
    }

    .section-title {
      background: linear-gradient(135deg, #001f3f, #1f3278);
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    .dashboard-item {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
      background: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #footer {
      background: linear-gradient(135deg, #001f3f, #1f3278);
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    .footer_logo {
      border-radius: 50px;
    }

    /* Button Styles */
    .ocean-blue-button {
      background: linear-gradient(135deg, #006a88, #0091ad);
      color: #fff;
    }

    .sunset-orange-button {
      background: linear-gradient(135deg, #ff8c42, #ffbc3b);
      color: #fff;
    }

    .spring-green-button {
      background: linear-gradient(135deg, #72b01d, #97cc11);
      color: #fff;
    }

    .royal-purple-button {
      background: linear-gradient(135deg, #7c53c3, #a44bc5);
      color: #fff;
    }

    .ruby-red-button {
      background: linear-gradient(135deg, #cb1e52, #de6b4b);
      color: #fff;
    }

    .goldenrod-yellow-button {
      background: linear-gradient(135deg, #ffbf3f, #ffb344);
      color: #fff;
    }

    .gradient-button {
      border: none;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    /* Responsive Design */
    @media (max-width: 767.98px) {
      #sidebar {
        text-align: center;
      }

      #header h1 {
        font-size: 20px;
      }

      .footer_logo {
        width: 80px;
      }

      .dashboard-item {
        margin-bottom: 15px;
      }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      #header h1 {
        font-size: 24px;
      }

      .footer_logo {
        width: 90px;
      }

      .dashboard-item {
        padding: 15px;
      }
    }

    @media (min-width: 992px) {
      #header h1 {
        font-size: 28px;
      }

      .footer_logo {
        width: 100px;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-12 col-md-3">
        <h2>
          <?php
          $title = $_REQUEST['title'];
          if (isset($title)) {
            echo $title;
          } else {
            echo "sidebar is not set";
          }
          ?>
        </h2>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">Menu 1</a></li>
          <li class="list-group-item"><a href="#">Menu 2</a></li>
          <li class="list-group-item"><a href="#">Menu 3</a></li>
        </ul>
        <h2>My Social Profiles</h2>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="https://sites.google.com/view/dev-kacha" target="_blank">Google Site</a>
          </li>
          <li class="list-group-item">
            <a href="https://www.linkedin.com/in/dev-kacha-3bb3a1263?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a>
          </li>
          <li class="list-group-item">
            <a href="https://www.blog.com" target="_blank">Blog</a>
          </li>
          <li class="list-group-item">
            <a href="https://github.com/devkacha03" target="_blank">GitHub</a>
          </li>
        </ul>
      </nav>
      <!-- Main content -->
      <main class="col-12 col-md-9">
        <div id="header">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1>
                  <?php
                  $title = $_REQUEST['title'];
                  if (isset($title)) {
                    echo $title;
                  } else {
                    echo "title is not set";
                  }
                  ?>
                </h1>
              </div>
              <div class="col-md-6 text-right"">
                <img src=" logo.jpg" alt="Logo" width="100" class="img-fluid footer_logo" />
            </div>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="dashboard-item">
        <div id="about-me" class="section-title">
          <h2>About Me</h2>
        </div>
        <p>
          <?php
          $name = $_REQUEST['first-name'];
          $gender = $_REQUEST['gender'];
          $mail = $_REQUEST['email'];
          $phone = $_REQUEST['phone'];
          $address = $_REQUEST['address'];

          echo "Name :" . $name . "<br>" .
            "Gender :" . $gender . "<br>" .
            "Email :" . $mail . "<br>" .
            "Phone no :" . $phone . "<br>" .
            "Address :" . $address;
          ?>
        </p>
      </div>
      <div class="dashboard-item">
        <div id="my-skillset" class="section-title">
          <h2>My Skillset</h2>
        </div>
        <p><?php
            $profession = $_REQUEST['profession'];
            echo $profession;
            ?></p>
      </div>
      <div class="dashboard-item">
        <div id="assignments" class="section-title">
          <h2>Assignments</h2>
        </div>
        <div class="btn-group flex-wrap">
          <button class="ocean-blue-button gradient-button">Task 1</button>
          <button class="sunset-orange-button gradient-button">Task 2</button>
          <button class="spring-green-button gradient-button">Task 3</button>
          <button class="royal-purple-button gradient-button">Task 4</button>
          <button class="ruby-red-button gradient-button">Task 5</button>
          <button class="goldenrod-yellow-button gradient-button">Minor Project Module</button>
          <button class="spring-green-button gradient-button">Database Module</button>
        </div>

      </div>
      <div class="dashboard-item">
        <div id="project-details" class="section-title">
          <h2>My Project Details</h2>
        </div>
        <p>Details about your projects go here.</p>
      </div>
    </div>
    </main>
  </div>
  </div>

  <div id="footer">
    <h3>
      <?php
      $title = $_REQUEST['title'];
      if (isset($title)) {
        echo $title;
      } else {
        echo "title is not set";
      }
      ?>
    </h3>
    <img src="logo.jpg" alt="Footer Logo" width="100" class="img-fluid footer_logo" />
  </div>

  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>