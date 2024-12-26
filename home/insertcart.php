<?php
session_start();
if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
require_once "../database/dbconnect.php";
// require_once "../database/cartfunctions.php";
if (isset($_POST['src']) && isset($_POST['name']) && isset($_POST['price'])) {
    // echo $_POST['price'];
    $imgSrc = $_POST['src'];
    $itemName = $_POST['name'];
    $itemPrice = $_POST['price'];
    $userid=$_SESSION['user_id'];
    $sql = "INSERT INTO cart (img, fname, fprice,user_id) VALUES (?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $imgSrc, $itemName, $itemPrice,$userid);
    if ($stmt->execute()) {
        echo "Item added to cart!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    header("location:dashboard.php");
}
?>