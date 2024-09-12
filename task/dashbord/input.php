<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     -->

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Registration Form</h1>
        <!-- action="dashboad.php" method="post" enctype="multipart/form-data" -->
        <form id="registerform" action="./HOMEPAGE.php" method="post">
            <fieldset>
                <legend>Personal Information</legend>
                <label for="first-name">Full Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Full Name" required name="fname">

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>

            <fieldset>
                <legend>Contact Details</legend>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@domain.com" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="1234567899" min"10" max="10" required>

                <label for="address">Address:</label>
                <textarea id="address" name="address" placeholder="123 Main St, City, Country" rows="4" required class="txtaare"></textarea>
            </fieldset>

            <fieldset>
                <legend>Professional Details</legend>
                <label for="profession">Skill</label>
                <textarea id="profession" name="profession" rows="4" placeholder="Enter Skill" required></textarea>
            </fieldset>

            <button type="submit" id="btnsubmit">Register</button>
        </form>
    </div>
</body>

<script>
    let regform = document.querySelector("#registerform");
    let fname = document.querySelector("#first-name");

    regform.addEventListener("submit", function() {
        console.log(fname.value);
    });
</script>

</html>