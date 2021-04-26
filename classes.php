<?php
include_once 'db_connect.php';


// CLASSES
class Functions {
   // Properties

   //Sitas ari man liekas nepareizi, es kipa taisu objektus un klases bet izmantoju tos ta pat ka parastu kodu, obviously es kautko daru nepareizi tikai nezinu ko
   // Methods
   public function load_all_objects($conn, $dvds, $furniture, $books) {
      $dvds->load_dvds($conn);
      $furniture->load_furniture($conn);
      $books->load_books($conn);
   }

   // Seit bija domats kautka sortot izmantojot tos name no checkboxes, un man liekas es zinu ka to var darit, partaisot to string, kur ir piemeram D-24, par int, tad pazustu tas 'D-' un paliktu 24, tada man ideja, bet es saubos ka tas ir pietiekami object oriented solution

   // sito bija domats passot forEach loop
   // public function sort_delete_obj($id) {
   //    $first_letter = $id[0];
   //    if ($first_letter == 'D') {
   //       // delete Dvd
   //    } elseif ($first_letter == 'B') {
   //       // Delete Books
   //    } elseif ($first_letter == 'F') {
   //       // Delete Furniture
   //    }
   // }


}

class Dvds {
   // Properties
   public $id;
   public $sku;
   public $name;
   public $sizeMb;

   // Methods
   public function load_dvds($conn) {
      $sql = "SELECT * FROM dvds;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
            echo '
            <div class="list-item">
               <input onclick="isSelected()" type="checkbox" class="selectBox" name="D-'.$row['id'].'">
               <i class="fas fa-compact-disc"></i>
               <p>
                  '.$row['sku'].'<br>
                  '.$row['name'].'<br>
                  '.$row['price'].'$<br>
                  '.$row['sizeMb'].'MB
               </p>
            </div>
            ';
         }
      }
   }
}
class Furniture {
   // Properties
   public $id;
   public $sku;
   public $name;
   public $heightCm;
   public $widthCm;
   public $lengthCm;

   // Methods
   public function load_furniture($conn) {
      $sql = "SELECT * FROM furnitures";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
            echo '
            <div class="list-item">
               <input onclick="isSelected()" type="checkbox" class="selectBox" name="product-select" id="F-'.$row['id'].'">
               <i class="fas fa-couch"></i>
               <p>
                  '.$row['sku'].'<br>
                  '.$row['name'].'<br>
                  '.$row['price'].'$<br>
                  '.$row['heightCm'].'cm<br>
                  '.$row['widthCm'].'cm<br>
                  '.$row['lenghtCm'].'cm
               </p>
            </div>
            ';
         }
      }
   }
}
class Books {
   // Properties
   public $id;
   public $sku;
   public $name;
   public $weightKg;

   // Methods
   public function load_books($conn) {
      $sql = "SELECT * FROM books;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
            echo '
            <div class="list-item">
               <input onclick="isSelected()" type="checkbox" class="selectBox" name="product-select" id="B-'.$row['id'].'">
               <i class="fas fa-book"></i>
               <p>
                  '.$row['sku'].'<br>
                  '.$row['name'].'<br>
                  '.$row['price'].'$<br>
                  '.$row['weightKg'].'Kg
               </p>
            </div>
            ';
         }
      }
   }
}