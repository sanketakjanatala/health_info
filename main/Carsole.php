<?php require '../connection/connection.php';
    $rows=mysqli_query($con,"select * from fruitname");
?>
<div class="row back slider mt-2 mb-2">
    <?php while($col=mysqli_fetch_assoc($rows)){
        echo "<div class='col w-100 p-3'>";
        echo "<img src='../fruit_image/{$col['fr_image_name']}' class='rounded' style='width: 100px;height:100px'>";
        echo "<h5 class='card-title'>{$col['fr_name']}</h5>";
        echo "</div>";
    } ?>    
</div>
