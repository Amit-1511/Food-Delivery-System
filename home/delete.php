<?php
session_start();
$id=$_SESSION['user_id'];
require_once "../database/userfunction.php";
$response= deleteAccount($id);
if($response){
    echo json_encode(["status"=>true]);
}else{
    echo json_encode(["status"=>false]);
}
?>