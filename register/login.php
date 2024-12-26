
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

    <h2 class="text-center mt-5">Log In</h2>
    
    <form class="w-25 border bg-light mx-auto mt-5" method="post">
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" name="login">
        </div>
    </form>
    <p class="text-center">Don't have an account?<a href="register.php">Create</a></p>
    
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../jquery-3.7.1.min.js"></script>
    <script>
        $("form").submit(function(e){
            e.preventDefault();
            let email=$("#email").val();
            let pass=$("#password").val();
            
            $.ajax({
                url: "login_email_check.php",  // Path to PHP script
                method: "POST",
                data: { 'email': email, 'password': pass },
                dataType: "json", // Expect JSON response from PHP
                success: function(data) {
                    if (data.status === "success") {
                        // On success, redirect to dashboard
                        alert(data.message); // Optionally show a message
                        window.location = "../home/dashboard.php"; // Redirect to dashboard
                    } else {
                        // Show error message if login fails
                        alert(data.message);
                    }
                },
            });
        });
        
    </script>
</body>
</html>

