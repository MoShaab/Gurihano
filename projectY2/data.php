<?php
require 'server.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/data.css">

   
  
  </head>
  <body>
  
  <div class = "row">
      <div class = "mainResultsSection col-md-3">
      <?php
     
     $rows = mysqli_query($db, "SELECT * FROM house ");
      ?>
    

      <?php foreach ($rows as $row) : ?>
        
        <div class = "results">
          <img  src="img/<?php echo $row["image"];?>" >
          <?php echo $row["house_name"]. ","; ?>
          <?php echo $row["street"]; ?>
          <br>
          <?php echo $row["description"]; ?>
          <br>
          <?php echo "Ksh ". $row["monthly_rent"]." per month"; ?>
          
          </div>
      <?php endforeach; ?>
      
      </div>
      
      
     
      
      
      
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  </body>
</html>
