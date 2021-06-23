

<?php  
//include header.php
 include('header.php');
?>
    <div class="container">
      
      <?php  
      // include collection
      include('template/collection.php');
      ?>
      <?php  
      // include latest
      include('template/latest.php');
      ?>
      <?php  
      // include category
      include('template/category.php');
      ?>

      

      
    </div>

    <?php  
      // include cart
      include('cart.php');
      ?>

  <?php 
  //inlude footer.php file
   include('footer.php');
  ?>


