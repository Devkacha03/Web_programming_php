<?php

$connection = mysqli_connect("localhost", "root", "", "db_demo") or die("connection error" . mysqli_connect_error());

if ($connection) {
    echo "<script> console.log('database connection ✅');</script>";
    
} else {
    die(mysqli_connect_errno($connection));
}

if(isset($_REQUEST['submit'])){
    $nm=$_REQUEST['name'];
    $ag=$_REQUEST['age'];
    $cours=$_REQUEST['course'];

    $insert="INSERT INTO db_stud (name,age,course) values('$nm','$ag','$cours')";
    if(mysqli_query($connection,$insert)){
        echo "<script>alert('insert 👍');</script>";
		//echo "insert sucess full";
    }
}


$select_Data = "SELECT *FROM db_stud";

$result = mysqli_query($connection, $select_Data);

?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Display</title>
    <style>
        /* Reset and Basic Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Form Styles */
        .form-container {
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Data</h1>
        
        <!-- Data Table -->
		<?php if(mysqli_num_rows($result)>0) {?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data -->
				<?php while($row=mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['course']; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
		<?php} else { ?>
            <!-- <div class="alert alert-warning text-center">No records found.</div> -->
        <?php } ?>

        <!-- Input Form -->
        <div class="form-container">
            <h2>Add New Student</h2>
            <form id="studentForm" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>
                
                <button type="submit" name="submit">Add Student</button>
            </form>
        </div>
    </div>
</body>
</html>
