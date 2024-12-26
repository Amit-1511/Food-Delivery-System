<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        .about-header {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }
        .about-header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .about-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .about-section {
            padding: 60px 0;
        }
        .about-section h2 {
            font-size: 2rem;
            font-weight: bold;
        }
        .about-section p {
            font-size: 1rem;
            color: #495057;
            line-height: 1.6;
        }
        .mission-section {
            background-color: #f1f1f1;
            padding: 60px 0;
        }
        .mission-section h2 {
            font-size: 2rem;
            font-weight: bold;
        }
        .mission-section p {
            font-size: 1.1rem;
            color: #495057;
            line-height: 1.6;
        }
        .team-section {
            padding: 60px 0;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .team-member h4 {
            margin-top: 15px;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .team-member p {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"?>
    <!-- Header Section -->
    <section class="about-header">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to Food Delivery App - your go-to platform for quick, reliable, and tasty meals delivered straight to your doorstep.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2>Who We Are</h2>
            <p>At Food Delivery App, our goal is to bring delicious and freshly prepared meals from your favorite restaurants directly to you. Whether you’re in the mood for comfort food, fast food, or something healthy, we’ve got you covered. Our easy-to-use app lets you explore various cuisines, place an order, and track it all in real-time.</p>
            <p>Our team is passionate about food and customer service, and we strive to make each meal delivery experience fast, safe, and enjoyable. We partner with local restaurants and delivery drivers to bring you the best options in town.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="container">
            <h2>Our Mission</h2>
            <p>We aim to revolutionize the food delivery experience by offering convenience, speed, and quality. Our mission is to make it easier for you to enjoy your favorite meals without leaving the comfort of your home. We work tirelessly to ensure timely deliveries and ensure that each meal arrives fresh and hot.</p>
            <p>With a focus on customer satisfaction, we are continuously improving our services and expanding our network of local restaurants to offer you even more choices.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Meet Our Team</h2>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="images/profile.jpg" alt="Team Member 1">
                        <h4>Amit Kumar rath</h4>
                        <p>Creator</p>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="images/profile.jpg" alt="Team Member 2">
                        <h4>Nrusinga Sethi</h4>
                        <p>Reporter</p>
                    </div>
                </div>
                <!-- Team Member 3 -->
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
