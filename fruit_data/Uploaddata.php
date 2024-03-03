<?php

require '../connection/connection.php';
if (isset($_POST['save'])) {
    $name = $_POST['fr_name'];
    $desc = $_POST['desc'];
    $vitamin = $_POST['vitamin'];
    echo "<h1>Hello</h1>";
    echo $name, $vitamin;
    if ($_FILES['image']['error'] === 4) {
        echo
        "<script>
                alert('data not save successfully..');
            </script>";
    } else {
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $tmpname = $_FILES['image']['tmp_name'];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
        } else if ($filesize > 10000000) {
            echo
            "<script>
                alert('Image size is large');
            </script>";
        } else {
            // $newImagename=uniqid();
            // $newImagename .='.' . $imageExtension;
            move_uploaded_file($tmpname, '../fruit_image/' . $filename);
            $query = "insert into fruitname(fr_name,fr_desc,vit_name,fr_image_name) values('{$name}','{$desc}','{$vitamin}','{$filename}')";
            mysqli_query($con, $query);
            echo
            "<script>
                alert('data save successfully..');
            </script>";
        }
    }
}
?>
<?php
$rows = mysqli_query($con, "select * from fruitname");
while ($row = mysqli_fetch_assoc($rows)) {
    echo "{$row['fr_image_name']}" . "<hr>";
}
?>




