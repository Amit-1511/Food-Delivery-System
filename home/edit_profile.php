<?php
session_start();

if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
require_once "../database/userfunction.php";

// echo '<h3 class="text-center">Welcome '.$_SESSION['name'].'</h3>';
$res=getUserDetails($_SESSION['user_id']);
$result=$res->fetch_assoc();
// print_r($result);
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
<div class="text-center"><img src="images/edit.png" height="70px" class="rounded-circle"></div>
    <form class="w-25 border bg-light mx-auto mt-2 p-1" method="post">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $result['name'] ?>"   >
        </div>
        <div class="mb-3">
            <label  class="form-label">Gender</label>
            <input type="text"  name="gender" id="gender" value="<?php echo $result['gender'] ?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $result['email'] ?>"   >
        </div>
        <div class="mb-3">
            <label  class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $result['mobile'] ?>"  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="<?php echo $result['address'] ?>" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required >
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" name="edit" value="Edit">
        </div>
        <p id="msg" class="text-center text-danger"></p>
    </form>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $("form").submit(function(e){
            e.preventDefault();
            let name=$("#name").val();
            let gender=$("#gender").val();
            let email=$("#email").val();
            let mobile=$("#mobile").val();
            let address=$("#address").val();
            let password=$("#password").val();
            $.ajax({
            url:"edit_info.php",
            method:"POST",
            data:{
                "name":name,
                "gender":gender,
                "email":email,
                "mobile":mobile,
                "address":address,
                "password":password,
                // "conf_password":conf_password
            },
            success:function(data) {
                data=JSON.parse(data);
                console.log(data);
                if(data.status==1){
                    alert(data.msg);
                }else{                   
                    $("#msg").text(data.msg);
                }
            }
            });
        });
    </script>
</body>
</html>