// console.log("HEllo");
$(".btn").click(function(e) {
    e.preventDefault();
    // console.log("clicked");
    // $(this).text("Added to cart");
    // $(this).css("background-color","gray");
    // $(this).setAttribute("disabled");
    let card = $(this).closest('.card');
    let imageSrc = card.find('.card-img-top').attr('src');
    let itemName = card.find('.card-title').text();
    let itemPrice = card.find('.card-price').text();
    itemPrice=parseFloat(itemPrice);
    console.log(itemPrice);
    $.ajax({
        url: "insertcart.php",
        method: "POST",
        data: {
            "src": imageSrc,
            "name": itemName,
            "price": itemPrice
        },
        success: function(data) {
            console.log("Item added to cart");
            // console.log(data);     
        },
        error: function(xhr, status, error) {
            console.log("Error: " + error);
        }
    }); 
})
