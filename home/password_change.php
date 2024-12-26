<?php
session_start();
require_once "../database/userfunction.php";
$res=getUserDetails($_SESSION['user_id']);
$result=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once "navbar.php";?>
    <form class="w-25 border bg-light mx-auto mt-2 p-1" method="post">
        <div class="mb-3">
            <label for="">Old Password</label>
            <input type="password" class="form-control" name="old_pass" >
        </div>
        <div class="mb-3">
            <label  class="form-label">New Password</label>
            <input type="password" class="form-control" name="new_pass" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="conf_pass"  >
        </div>
        <div class="text-center">
            <input type="submit" class="form-control btn btn-primary" name="change" >
        </div> 
    </form>

<script src="../bootstrap/bootstrap.bundle.min.js"></script>

    
</body>
</html>
<?php
    if(isset($_POST['change'])){
        // echo $_SESSION['password'];
        $old_pass=$_POST['old_pass'];
        $new_pass=$_POST['new_pass'];
        $conf_pass=$_POST['conf_pass'];
        if($old_pass!=$result['password']){
            echo '<p class="text-center text-danger">Old password is wrong</p>';
        }else if($new_pass!=$conf_pass){
            echo '<p class="text-center text-danger">Password is not same.</p>';
        }else{
            $response=passwordUpdate($_SESSION['user_id'],$new_pass);
            if($response){?>
                <script>alert("Password is updated.")</script>
            <?php }
        }
            
    }
    ?>