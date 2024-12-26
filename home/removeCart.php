<?php
session_start();
if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
require_once "../database/dbconnect.php";
global $conn;
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => false, 'message' => 'User not logged in']);
    exit;
}
$userid = $_SESSION['user_id'];
$img = $_POST['img'];
try {
    $qry = "DELETE FROM cart WHERE img=? AND user_id=?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("si", $img, $userid); 
    $stmt->execute();
    if ($conn->affected_rows > 0) {
        echo json_encode(['status' => true]);
    } else {
        echo json_encode(['status' => false, 'message' => 'Item not found or already removed']);
    }
} catch (Exception $e) {
    echo json_encode(['status' => false, 'message' => $e->getMessage()]);
} finally {
    $conn->close();
}
?>
