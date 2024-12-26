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
// echo $_SESSION['user_id'];
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
<div class="text-center"><img src="images/profile.jpg" height="100px"></div>
<h2 class="text-center ">Welcome </h2>
    <form class="w-25 border bg-light mx-auto mt-2 p-1">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $result['name'] ?>" readonly  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Gender</label>
            <input type="text"  name="gender" value="<?php echo $result['gender'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $result['email'] ?>" readonly  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $result['mobile'] ?>" readonly >
        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="<?php echo $result['address'] ?>" readonly  >
        </div>
        <div class="text-center">
            <a href="../register/login.php" class="btn btn-danger" id="delete"><i class="fa-solid fa-trash"></i>Delete Account</a>
        </div>
        
    </form>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $("#delete").click(function(e){
        e.preventDefault();
        if(confirm("Are you sure to delete your acoount?")){
            $.ajax({
            url:"delete.php",
            method:"GET",
            success:function(data){
                data=JSON.parse(data)
                if(data['status']==true){
                    <?php session_abort();?>
                    window.location.href="../register/login.php";
                }
            }
        })
    }
    });
        
</script>
</body>
</html>