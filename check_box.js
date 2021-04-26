var selected = false;

// Function checks if product list checkboxes are selected and enables or disables the 'Mass Delete' button
function isSelected(selCount) {
   var checkboxes = document.querySelectorAll('.selectBox');
   var selCount = 0;
   var arrLenNegative = checkboxes.length * -1;
   var delBtn = document.getElementById('massDel-btn');

   checkboxes.forEach(item => {
      if (item.checked == true) {
         selCount = selCount + 1;
      } else {
         selCount = selCount - 1;  
      }
   });
   if (selCount > arrLenNegative) {
      delBtn.removeAttribute('disabled');
   } else {
      delBtn.setAttribute('disabled', 'true');
   }
}

