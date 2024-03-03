<?php require '../connection/connection.php';
    $rows=mysqli_query($con,"select * from fruitname");
?>

<div class="row row-cols-1  row-cols-md-2 g-4">
  <?php
    while($col=mysqli_fetch_assoc($rows)){
      echo "<div class='col'>";
      echo "<div class='card goods'>";
      echo "<div class='goods card-header'>{$col['fr_name']}</div>";
      echo "<img src='../fruit_image/{$col['fr_image_name']}' class='m-2 card-img-top rounded' style='width: 100px;height:100px'>";
      echo "<div class='card-body '>";
      echo "<h5 class='card-title'>{$col['fr_name']}</h5>";
      echo "<p class='card-text'>{$col['fr_desc']}</p>";
      echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
      echo "</div>";
      echo"<div class='card-footer'>";
      echo "<small class='text-muted'>Last updated {$col['fr_sr']} mins ago</small>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    
      
  }
  ?>
</div>