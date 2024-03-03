<?php require '../connection/connection.php';
    $rows=mysqli_query($con,"select * from fruitname");
?>
<div class="row headcon mt-2 mb-2 me-1 ms-1 border border-dark cack">
<?php while($col=mysqli_fetch_assoc($rows)){
        echo "<div class='col-3'><h3>{$col['fr_name']}</h3><hr>";
        echo "<p>{$col['fr_desc']}";
        echo "</p></div>";
    } ?>    
</div>