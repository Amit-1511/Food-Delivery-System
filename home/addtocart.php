<?php
session_start();
if(!$_SESSION['user_id']){
    header("location:../register/login.php");
}
// echo ($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once "navbar.php"?>
    <div id="cart-box"></div>
    <!-- <hr> -->
    <h3  class="text-center text-primary">Total Price=<span id="total-cost">0</span></h3>
    
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../jquery-3.7.1.min.js"></script>
    <script>
        let tot_price=0.0;
        $(document).ready(function(){
            $.ajax({
                url:"getCartItem.php",
                method:"GET",
                success:function(data){
                    let data1=JSON.parse(data);
                    // console.log(data1);
                    let content="";
                    
                    for(let i=0;i<data1.length;i++){
                        content+=`<div class="container d-flex justify-content-between  align-item-center w-50 border border-dark mt-2">
                        <span id="item-no" class="my-auto mx-0">${i+1}</span>
                        <img src="${data1[i].img}" style="height:70px; width:70px;" >
                        <div class="my-auto mx-0">
                        <span id="item-name" style="width:100px">${data1[i].fname}</span><br>
                        <span >Rs-<span class="item-price">${data1[i].fprice}<span></span>
                        </div>     
                        <div class="add-sub d-flex justify-content-center align-item-center my-auto mx-0" style="height:30px; width:30px;">
                        <button class="add-item">+</button>
                        <span class="item-count" style="margin:0px 10px;" >1</span>
                        <button class="sub-item">-</button>
                        </div>  
                        <button class="remove-btn bg-danger my-auto mx-0" style="height: 30px;">remove<i class="fa-solid fa-trash"></i></button>     
                        </div>`;
                        tot_price+=data1[i].fprice;
                    }
                    $("#cart-box").html(content);
                    $("#total-cost").text(tot_price);                  
                }
            });
               
        });
        $(document).on('click', '.add-item', function() {
            let cart = $(this).closest('.container');
            let itemCount = cart.find('.item-count');
            let itemPrice = cart.find('.item-price');
            let price=parseFloat(itemPrice.text());
            let count = Number(itemCount.text());
            price=price/count;
            // console.log(price);          
            if (count < 10) {
                count++;
                itemCount.text(count);
                let totalPrice = (price*count).toFixed(2);
                itemPrice.text(totalPrice);
                tot_price+=price;
                // console.log(tot_price);
                $("#total-cost").text(tot_price);
            }
        });

        $(document).on('click', '.sub-item', function() {
            let cart = $(this).closest('.container');
            let itemCount = cart.find('.item-count');
            let itemPrice = cart.find('.item-price');
            let price=parseFloat(itemPrice.text());
            let count = Number(itemCount.text());
            price=price/count;
            
            
            // console.log(price);          
            if (count > 1) {
                count--;
                itemCount.text(count);
                let totalPrice = (price*count).toFixed(2);
                itemPrice.text(totalPrice);
                tot_price-=price;
                // console.log(tot_price);
                $("#total-cost").text(tot_price);
            }
        });
        $(document).on('click', '.remove-btn', function() {
            // Find the closest container to the clicked remove button
            let card = $(this).closest('.container');
            let img = card.find("img"); 
            let src = img.attr('src'); 

            $.ajax({
                url: "removeCart.php",      
                method: "POST",            
                data: { 'img': src },       
                success: function(data) {
                    let data1 = JSON.parse(data);  
                    console.log(data1); 
                    if (data1.status === true) {                       
                        alert("Item removed successfully.");
                        window.location.reload();
                    } else {
                        
                        alert("Error: " + (data1.message || "Item could not be removed"));
                    }
                },
                error: function() {
                    alert("An error occurred while removing the item.");
                }
            });
        });

        
    </script>
</body>
</html>