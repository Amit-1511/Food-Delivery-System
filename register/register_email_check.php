<?php
require_once "../database/userfunction.php";
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];
$cpassword=$_POST['conf_password']; 
// insertUser($name,$gender,$email,$mobile,$address,$password);
if(check_email($email)){
    echo json_encode(["message"=>"Email is already exist","status"=>"text-danger text-center"]);
}else{
    insertUser($name,$gender,$email,$mobile,$address,$password);
    echo json_encode(["message"=>"You have succcessfully created an account.","status"=>"text-success text-center"]);
    }
?>