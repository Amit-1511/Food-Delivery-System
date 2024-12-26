<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
      <img src="images/nav-logo.png" alt="" width="70" height="50" class="d-inline-block align-text-top">
      <span >FOODPOPS</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link ms-3" aria-current="page" href="dashboard.php"><i class="fa-solid fa-house"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dashboard.php#biryani">Biriyani</a></li>
            <li><a class="dropdown-item" href="dashboard.php#chicken">Chicken</a></li>
            <li><a class="dropdown-item" href="dashboard.php#chinese">Chinese</a></li>
            <li><a class="dropdown-item" href="dashboard.php#paneer">Paneer</a></li>
            <li><a class="dropdown-item" href="dashboard.php#south">South Indian</a></li>
            <li><a class="dropdown-item" href="dashboard.php#vegetable">Vegetable Curry</a></li>
          </ul>
        </li>
        <li class="nav-item ">
            <a href="addtocart.php" class=" nav-link">  <i class="fa-solid fa-cart-shopping"></i> Cart </a>    
        </li>
        <li class="nav-item ">
          <a href="profile.php" class=" nav-link mx-3"><i class="fa-solid fa-user"></i> Profile  </a>
        </li>   
        <li class="nav-item ">
          <a href="edit_profile.php" class=" nav-link me-3"><i class="fa-solid fa-pen-to-square"></i>Edit Profile </a>
        </li> 
        <li class="nav-item ">
          <a href="password_change.php" class=" nav-link "><i class="fa-solid fa-key"></i>New Password</a>
        </li> 
        <li class="nav-item ">
        <a href="../register/login.php" class="btn btn-warning ms-5" id="logout"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
        </li> 
      </ul>
    </div>    
  </div>
</nav>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $("#logout").click(function(e){
        e.preventDefault();
        if(confirm("Are you sure to log out your acoount?")){
            <?php session_abort();?>
            window.location.href="../register/login.php";
        }
    });
</script>
