<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
if (move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file)) {
    $files = basename ($_FILES["upload"]["name"]);
} else {
    echo "Gagal";
}

?>

<center><img src="uploads/<?php echo $files; ?>" alt="" width = 50%;></center>
