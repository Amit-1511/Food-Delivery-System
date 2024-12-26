<?php
session_start();
if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
require_once "../database/dbconnect.php";
global $conn;
$userid=$_SESSION['user_id'];
try{
    $qry="SELECT * FROM cart where user_id=?";
    $stmt=$conn->prepare($qry);
    $stmt->bind_param("i",$userid);
    $stmt->execute();
    $res=$stmt->get_result();
    if($res->num_rows>0){
        $res=$res->fetch_all(MYSQLI_ASSOC);
        echo json_encode($res);
    }else{
        return NULL;
    }
}catch(Exception $e){
    die($e->getMessage());
}finally{
    $conn->close();
} 
?>