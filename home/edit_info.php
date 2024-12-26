<?php
session_start();
require_once "../database/userfunction.php";
$res=getUserDetails($_SESSION['user_id']);
$result=$res->fetch_assoc();
// echo $result['password'];
// echo $_SESSION['user_id'];

$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];
// if($password==$_SESSION['password']){
if($password==$result['password']){

    $response=profileUpdate($_SESSION['user_id'],$name,$email,$mobile,$address);
    if($response){
        echo json_encode(["status"=>1,"msg"=>"Your changes are updated."]);
    }else{
        echo json_encode(["status"=>0,"msg"=>"No changes done."]);
    }
}
else{
    echo json_encode(["status"=>0,"msg"=>"Password is wrong."]);
}

?>