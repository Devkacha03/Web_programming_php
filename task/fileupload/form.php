<?php

$connection = mysqli_connect("localhost", "root", "", "db_demo");
// print_r($connection);
if (!$connection) {
  echo "<script>alert('data base not connected 🥺');</script>";
} else {
  echo "<script>console.log('data base connected 😀✅');</script>";

  if (isset($_REQUEST['submit'])) {
    $pronm = $_REQUEST['productnm'];
    $prodesc = $_REQUEST['productdesc'];
    $proprice = $_REQUEST['productprice'];

    $filefolder = "uploads/";
    $fullfile = $filefolder . basename($_FILES['fileToUpload']['name']);
    // print_r($fullfile);

    if (file_exists($fullfile)) {
      echo "<script>alert('Sorry, file already exists.');</script>";
    } else {

      if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fullfile)) {
        $filemsg = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
        echo "<script>alert('The file {$filemsg} has been uploaded.');</script>";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }

      $insert = "INSERT INTO file_upload(file_path,product_name,product_description,product_price) VALUES('$fullfile','$pronm','$prodesc','$proprice')";
      if (mysqli_query($connection, $insert)) {
        echo "<script>console.log('insert successfull...')</script>";
      } else {
        echo "<script>console.log('insert error...')</script>";
      }
    }


    $display = "SELECT *FROM file_upload";
    $result = mysqli_query($connection, $display);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Upload and Display</title>
  <link rel="stylesheet" href="formcss.css" />

</head>

<body>
  <div class="container">
    <h1>Upload Product</h1>

    <!-- Upload Form -->
    <form id="uploadForm" method="post" action="form.php" enctype="multipart/form-data">
      <label for="productImage">Upload Product Image:</label>
      <input type="file" id="productImage" name="fileToUpload" accept="image/*" required />

      <label for="productName">Product Name:</label>
      <input
        type="text"
        id="productName"
        placeholder="Enter Product Name"
        name="productnm"
        required />

      <label for="productDescription">Product Description:</label>
      <input
        type="text"
        id="productDescription"
        placeholder="Enter Product Description"
        name="productdesc"
        required />

      <label for="productPrice">Product Price:</label>
      <input
        type="text"
        id="productPrice"
        placeholder="Enter Product Price"
        name="productprice"
        required />

      <button type="submit" name="submit">Upload Product</button>
    </form>
  </div>

  <h2>Product List</h2>
  <?php if (isset($result) && mysqli_num_rows($result) > 0) { ?>
    <!-- <div id="productList" class="product-list"> -->

    <div class="product">
      <div class="product-row">
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>

          <div class="product-static">
            <img src="<?php echo $row['file_path']; ?>" alt="<?php echo $row['product_name']; ?>">
            <h3><?php echo $row['product_name']; ?></h3>
            <p><?php echo $row['product_description']; ?></p>
            <p class="price">Price: Rs.<?php echo $row['product_price']; ?></p>

          </div>
        <?php  } ?>
      </div>
    </div>

    <!-- </div> -->
  <?php } ?>

  <!-- </div> -->

  <!-- <h1>Static Product Display</h1>
  <div class="product-row">
    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 1" />
      <h3>Product 1</h3>
      <p>Description for Product 1</p>
      <p class="price">$10.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 2" />
      <h3>Product 2</h3>
      <p>Description for Product 2</p>
      <p class="price">$20.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 3" />
      <h3>Product 3</h3>
      <p>Description for Product 3</p>
      <p class="price">$30.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 4" />
      <h3>Product 4</h3>
      <p>Description for Product 4</p>
      <p class="price">$40.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 5" />
      <h3>Product 5</h3>
      <p>Description for Product 5</p>
      <p class="price">$50.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 6" />
      <h3>Product 6</h3>
      <p>Description for Product 6</p>
      <p class="price">$60.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 7" />
      <h3>Product 7</h3>
      <p>Description for Product 7</p>
      <p class="price">$70.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 8" />
      <h3>Product 8</h3>
      <p>Description for Product 8</p>
      <p class="price">$80.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 9" />
      <h3>Product 9</h3>
      <p>Description for Product 9</p>
      <p class="price">$90.00</p>
    </div>

    <div class="product-static">
      <img src="https://via.placeholder.com/100" alt="Product 10" />
      <h3>Product 10</h3>
      <p>Description for Product 10</p>
      <p class="price">$100.00</p>
    </div>

  </div> -->

  <!-- <script src="formScript.js"></sct> -->
</body>

</html>