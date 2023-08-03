<?php
include '../includes/connect.php';


$uploads_dir = './uploads';
$tmp_name = $_FILES["imageUpload"]["tmp_name"];
$name = basename($_FILES["imageUpload"]["name"]);
$imageFileType = pathinfo($uploads_dir, PATHINFO_EXTENSION);

if (move_uploaded_file($tmp_name, "$uploads_dir/$name")) {
    echo "The file has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
$imagePath = basename($_FILES["imageUpload"]["name"], ".$imageFileType"); // used to store the filename in a variable
$name = $_POST['name'];
$price = $_POST['price'];
$sql = "INSERT INTO items (name, price, productImage) VALUES ('$name', $price,'$imagePath')";
$con->query($sql);
header("location: ../admin-page.php");
