<?php
session_start();
if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
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
    <style>
        .coro-img{
            height:500px;
        }
        .img-style{
            height:50px;
            width:120px;
            margin:10px 0px;
        }
        .card-img-top{
            height:200px;
        }
        .row{
            margin:10px 0px;
        }
    </style>

</head>
<body>
    <?php include_once "navbar.php";?>
<div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto d-none d-md-block">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/biryani/Ambur-Chicken-Biryani.jpg" class="d-block w-100 coro-img" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Biryani</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/chicken/Chicken_roast.jpg" class="d-block w-100 coro-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Chicken</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/chinese/cabbage-momos-.jpg" class="d-block w-100 coro-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Chinese</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/paneer/Matar-Paneer.jpg" class="d-block w-100 coro-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Paneer Masala</h5>
      </div>
    </div><div class="carousel-item">
      <img src="images/south indian/Butter-Masala-Dosa.png" class="d-block w-100 coro-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">South Indian</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/vegetable/navratan-korma_-vegetable.png" class="d-block w-100 coro-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Vegetable curry</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions coro-img" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
    <h1 class="text-center" id="biryani">Biriyani</h1>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/Ambur-Chicken-Biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Ambur Chicken Biryani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/Chicken-Biryani-hyd.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Hyderabadi Chicken Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/egg-biryani.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Egg Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/goan-fish-biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Fish Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/hyd-Mutton-Biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Hyderabadi Mutton Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">300.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/kamrupi-biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Kamrupi Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">320.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/kashmiri.pulao.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Kashmiri Pulao</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">340.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/memonibiryani.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Memoni Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">360.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/biryani/mughlai-biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Mughlai Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">380.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>

    <h1 class="text-center" id="chicken">Chicken</h1>

    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Chicken_roast.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Roast Chiken</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Chicken-Curry.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chicken Curry</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Chicken-do-Pyaza.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chicken do Pyaza</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Chicken-Masala.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Masala Chicken</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Handi-chicken.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chicken Handi</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">300.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Murgh-Musallam.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Murgh-Musallam</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">320.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    

    <h1 class="text-center" id="chinese">Chinese</h1>

    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/cabbage-momos-.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">cabbage momos</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/ChickenManchurian.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chicken Manchurian</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/Chili-Chicken.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chili Chicken</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/chowmin.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chowmin</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/mmos.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Momos</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">300.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/spring-rolls.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Spring rolls</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/szechuan-chicken.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Szechuan-chicken</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chinese/veg-fried-rice.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Veg-fried-rice</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
    </div>
    </div>

    <h1 class="text-center" id="paneer">Paneer</h1>
    
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/Matar-Paneer.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Matar Paneer</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/palak-paneer.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Palak Paneer</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/paneer-butter-masala.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Paneer Butter Masala</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div> 
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/Paneer-Do-Pyaza.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Paneer do Pyaza</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/Paneer-Hyderabadi.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Chicken </h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">300.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/paneer-lababdar.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Paneer Lababdar </h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">320.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>    
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/shahi-paneer.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Shahi Paneer</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">340.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/paneer/vegetable-curry.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Curry</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">350.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/chicken/Paneer-Butter-Masala.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center"> Paneer Butter Masala</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">340.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>     
    </div>
    </div>

    <h1 class="text-center" id="south">South Indian</h1>

    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/Butter-Masala-Dosa.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Butter Masala Dosa </h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark ">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/idli-with-rice-flour.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Idli with Rice Flour</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/masala-dosa.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Masala Dosa</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>    
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/mysore-bonda.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Mysore Bonda</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">300.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/onion-uttapam.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Onion Uttapam</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/plain-dosa.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Plain Dosa</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div> 
    <div class="row">   
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/Rava-Uttapam.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Rava -Uttapam</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/south indian/sambhar-vada.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Sambhar Vada</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">210.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    <div class="col"></div>
    </div>

    <h1 class="text-center" id="vegetable">Vegetable Curry</h1>

    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/navratan-korma_-vegetable.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Navaratan korma </h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">250.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark ">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/VEG-JALFREZI.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Jalfrezi </h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/vegetable-biryani.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Biriyani</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">280.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>    
    </div>
    <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/vegetable-curry.jpeg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Curry</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">220.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/vegetable-kolhapuri.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Kolhapuri</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">240.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
        <img src="images/vegetable/vegetable-masala.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">Vegetable Masala</h5>
            <h6 class="card-text text-primary text-center">Rs-<span class="card-price">260.00</span></h6>
            <img src="images/rating.jpg" class="img-style">
            <a href="#" class="btn btn-dark">Add to cart</a>
        </div>
        </div>    
    </div>
    </div>     

</div>  
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="home_functionalities.js"></script>
    <?php include "footer.php"?>
</body>

</html>
<?php
?>