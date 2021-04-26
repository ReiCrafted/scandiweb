<?php
// Database connection
   include_once 'additional_files/db_connect.php';
   include_once 'additional_files/classes.php'
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
   <div class="bg">
      <!-- Nav ================================== -->
      <div class="nav-container nav1">
         <h1>Product List</h1>
         <nav>
            <a href="add.php" id="add-btn" class="btn">Add</a>
            <button type="submit" form="product-container" disabled id="massDel-btn" class="btn">Delete Selected</button>
         </nav>
      </div>
      <!-- Product list ========================= -->
      <form action = "additional_files/delete.php" method="post" id="product-container">
         <div class="product-list">
            <?php
               $dvds = new Dvds();
               $furniture = new Furniture();
               $books = new Books();
               $functions = new Functions();

               $functions->load_all_objects($conn, $dvds, $furniture, $books);
            ?>        
         </div>
      </form>
      <!-- Footer =============================== -->
      <footer class="footer">
         <p>Website pages:&nbsp&nbsp</p>
         <a href="index.php">Product List Page</a>
         <p>&nbsp|&nbsp</p>
         <a href="add.php">Product Add Page</a>
      </footer>
   </div>
   <script src="additional_files/check_box.js"></script>
   <script src="https://kit.fontawesome.com/b3a213eb66.js" crossorigin="anonymous"></script>


</body>
</html>