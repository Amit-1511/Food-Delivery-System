
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>
<body>
    <?php include_once "icon.php"?>
    <h2 class="text-center " >Sign up</h2>
    <form class="w-25 border bg-light mx-auto mt-2 p-1" method="post">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Gender</label>
            <input type="radio"  name="gender" value="male" required>Male
            <input type="radio"  name="gender" value="female">Female
            <input type="radio"  name="gender" value="others" >Others
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="mobile" id="mobile" required  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address"required  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required >
        </div>
        <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="conf_password" id="conf_password" required >
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success " name="register" value="Register">
        </div>
        <p id="msg"></p>
    </form>
    <p class="text-center">or already have an account ?<a href="login.php">Login here</a></p>


    
    <scrip src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../jquery-3.7.1.min.js"></script>
    <script>
        $("form").submit(function(e){
            e.preventDefault();
            let name=$("#name").val();
            let gender=$("input[name='gender']").val();
            let email=$("#email").val();
            let mobile=$("#mobile").val();
            let address=$("#address").val();
            let password=$("#password").val();
            let conf_password=$("#conf_password").val();
            // console.log(name,gender,email,mobile,address,password,conf_password); 
            if(password !== conf_password){
                $("#msg").html('<p class="text-center text-danger">password is not same</p>');
            }else{
                $.ajax({
                url:"register_email_check.php",
                method:"POST",
                data:{
                    "name":name,
                    "gender":gender,
                    "email":email,
                    "mobile":mobile,
                    "address":address,
                    "password":password,
                    "conf_password":conf_password
                },
                success:function(data) {
                    data=JSON.parse(data);
                    console.log(data); 
                    $("#msg").removeClass();
                    $("#msg").text(data.message);
                    $("#msg").addClass(data.status);
                }
                });
            }
        });
    </script>
</body>
</html>

 <?php
require_once "../database/userfunction.php";
// if(isset($_POST['register'])){
//     $name=$_POST['name'];
//     $gender=$_POST['gender'];
//     $email=$_POST['email'];
//     $mobile=$_POST['mobile'];
//     $address=$_POST['address'];
//     $password=$_POST['password'];
//     $cpassword=$_POST['conf_password']; 
//     // insertUser($name,$gender,$email,$mobile,$address,$password);
//     if($password!=$cpassword){
//         echo '<p class="text-center text-danger">password is not same</p>';
//     }
//     if($password==$cpassword){ 
//         if(check_email($email)){
//             echo '<p class="text-center text-danger">Email is already exist.</p>';
//         }else{
//             if($gender){
//                 insertUser($name,$gender,$email,$mobile,$address,$password);
//                 echo '<p class="text-center text-success">You have succcessfully created an account.</p>';
//             }else{
//                 echo '<p class="text-center text-danger">Gender is required</p>';             
//             }
                
//         }
//     } 
//  }
?>




