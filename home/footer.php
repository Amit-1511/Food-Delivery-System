<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery App Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .footer {
            background-color: #222;
            color: white;
            padding: 50px 0;
        }
        .footer .footer-heading {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .footer .social-icons i {
            font-size: 24px;
            color: white;
            margin: 0 10px;
        }
        .footer .social-icons i:hover {
            color: #ff6347; /* Tomato color on hover */
        }
        .footer .quick-links a {
            color: #bbb;
            text-decoration: none;
        }
        .footer .quick-links a:hover {
            color: #ff6347;
        }
        .footer .newsletter input[type="email"] {
            width: 100%;
            padding: 10px;
            border: none;
            margin-right: 10px;
            border-radius: 5px;
        }
        .footer .newsletter button {
            padding: 10px 20px;
            background-color: #ff6347;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer .newsletter button:hover {
            background-color: #e55347;
        }
    </style>
</head>
<body>
    
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-3">
                    <h4 class="footer-heading">About Us</h4>
                    <p>We provide fast and delicious food delivered straight to your door. Enjoy your favorite meals anytime, anywhere!</p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Order Now</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Contact Information -->
                <div class="col-md-3">
                    <h4 class="footer-heading">Contact Information</h4>
                    <p><strong>Phone:</strong> +1 234 567 890</p>
                    <p><strong>Email:</strong> support@fooddelivery.com</p>
                    <p><strong>Address:</strong> 123 Food Street, New York, USA</p>
                </div>
                <!-- Newsletter Subscription -->
                <div class="col-md-3">
                    <h4 class="footer-heading">Subscribe to Our Newsletter</h4>
                    <div class="newsletter">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </div>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 FoodDelivery. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
