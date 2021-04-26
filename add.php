<?php
// Database connection
   include_once 'additional_files/db_connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/main.css">
   <title>Scandiweb Junior dev test</title>
</head>
<body>
   <div class="nav-container">
      <h1>Add product</h1>
   </div>

   <div class="add-container">
      <form method="GET">
         <label for="sku">SKU:</label>
         <input type="text" name="SKU" id="sku" placeholder="SKU (up to 20 characters)">

         <label for="pname">Name: </label>
         <input type="text" name="Name" id="pname" placeholder="Product name (up to 20 characters)">

         <label for="price">Price: </label>
         <input type="number" name="Price" id="price" placeholder="Price in dollars ($)">

         <label for="type">Choose type: </label>
         <select name="type" id="type">
            <option value="none">None</option>
            <option value="DVD">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
         </select>

         <div id="dvdOptions">
            <label for="size">Size: </label>
            <input type="number" name="Size" id="size" placeholder="Size in (MB)">
         </div>
         <div id="bookOptions">
            <label for="weight">Weight: </label>
            <input type="number" name="Weight" id="weight" placeholder="Weight in (KG)">
         </div>
         <div id="furnitureOptions">
            <label for="height">Height: </label>
            <input type="number" name="Height" id="height" placeholder="Height in (CM)">
            <label for="width">Width: </label>
            <input type="number" name="Width" id="size" placeholder="Width in (CM)">
            <label for="length">Length: </label>
            <input type="number" name="Length" id="length" placeholder="Length in (CM)">
         </div>

         <input type="submit" value="Save" class="btn">
         <button class="btn" id="cancelBtn">Cancel</button>
      </form>
   </div>

   <footer class="footer">
      <p>Website pages:&nbsp&nbsp</p>
      <a href="index.php">Product List Page</a>
      <p>&nbsp|&nbsp</p>
      <a href="add.php">Product Add Page</a>
   </footer>

   <script src="https://kit.fontawesome.com/b3a213eb66.js" crossorigin="anonymous"></script>
<!-- PHP code start ============================================== -->
   <?php

   ?>
</body>
</html>