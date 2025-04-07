<?php
print_r($_FILES);

print "<br>";
print_r($_FILES['fileToUpload']['name']);

$path = $_FILES['fileToUpload']['name'];
echo $path;
$target_dir = "uploads/";
$target_file = $target_dir . basename($path);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
    echo "<br>File uploaded successfully.";
} else {
    echo "<br>Error uploading file.";
}
?>
