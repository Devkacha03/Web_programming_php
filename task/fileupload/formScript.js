const form = document.getElementById("uploadForm");
const productList = document.getElementById("productList");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  // Retrieve data from the form
  const fileInput = document.getElementById("productImage");
  const file = fileInput.files[0];
  const productName = document.getElementById("productName").value;
  const productDescription =
    document.getElementById("productDescription").value;
  const productPrice = document.getElementById("productPrice").value;

  // Check that all fields are filled
  if (file && productName && productDescription && productPrice) {
    const reader = new FileReader();

    // Convert image file to a Data URL for display
    reader.onload = function (e) {
      const productDiv = document.createElement("div");
      productDiv.classList.add("product");

      // Insert image and product details into the new div
      productDiv.innerHTML = `
          <img src="${e.target.result}" alt="${productName}">
          <div class="product-details">
              <h3>${productName}</h3>
              <p>${productDescription}</p>
              <p class="price">$${productPrice}</p>
          </div>
      `;

      // Append the productDiv to productList to display the new product
      productList.appendChild(productDiv);
    };

    // Read the image file as a Data URL
    reader.readAsDataURL(file);

    // Clear form after submission
    form.reset();
  } else {
    alert("Please fill out all fields.");
  }
});
