<?php
if (isset($_POST['submit'])) {
    $name = $_POST['fullName'];       // Full Name
    $phone = $_POST['phoneNumber'];   // Phone Number
    $email = $_POST['email'];         // Email Address
    $message = $_POST['message'];     // Message

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "thespiceofsouth";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert contact data
    $sql = "INSERT INTO contact (name, phone, email, message) 
            VALUES ('$name', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Spice of South</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Font (Playfair Display) -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Optional: jQuery (only if you need it for other custom scripts) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 JS (bundle includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white custom-navbar">
        <div class="container d-flex align-items-center">

            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="nav.png" alt="The Spice of South Logo" class="logo-img"
                    style="height: 18vh; width: 18vw; padding: 2px;" />
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item mr-10">
                        <a class="nav-link active text-highlight" href="#">Contact</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a href="#" class="btn btn-reserve">Make a Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="about-section">
        <div class="about-overlay">
            <div class="row">
                <div class="col-2"></div>

                <div class="col-8" style="color: white;">
                    <center>
                        <h1 style="margin-bottom: 15px;">Contact Us</h1>
                    </center>
                    <p>
                        Feel free to send us a message if you have any questions.
                        We’re always happy to hear from you and will get back to you as soon as possible.
                        Whether it’s feedback, suggestions, or just to say hello, we value your thoughts.
                    </p>
                </div>

                <div class="col-2"></div>
            </div>
        </div>
    </section>

    <section class="contact-info">
        <div class="container h-100 d-flex align-items-center">
            <div class="row text-center text-md-left w-100">

                <!-- Opening Time -->
                <div class="col-md-4 mb-4">
                    <h4 class="font-weight-bold mb-3">Opening Time</h4>
                    <p>Working Days <span class="float-right">9:00AM – 6:00PM</span></p>
                    <hr>
                    <p>Saturday <span class="float-right">11:00AM – 5:00PM</span></p>
                    <hr>
                    <p>Sunday <span class="float-right">Closed</span></p>
                </div>

                <!-- Get Direction -->
                <div class="col-md-4 mb-4 get-direction">
                    <h4 class="font-weight-bold mb-3">Get Direction</h4>
                    <p>85 Bay Meadows Drive Woodstock,<br>GA 300188 United States</p>
                    <a href="#" class="btn btn-burnt-orange mt-3">View On Map</a>
                </div>

                <!-- Get In Touch -->
                <div class="col-md-4 mb-4">
                    <h4 class="font-weight-bold mb-3">Get In Touch</h4>
                    <p>+123 456 7890</p>
                    <p>info@example.com</p>
                    <div>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="talk-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- Image Column -->
                <div class="col-md-6 p-0">
                    <img src="https://i.pinimg.com/1200x/7e/3a/4f/7e3a4f62c8a9f17e31d177d8e2ebf764.jpg" alt="Delicious Dish" class="talk-img" style="height: 550px; width: 500px;">
                </div>

                <!-- Form Column -->
                <div class="col-md-6 talk-form-box">
                    <h2 class="talk-title">Let's Have a Talk</h2>
                    <p class="talk-text">
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking.
                    </p>

                    <!-- FIXED FORM -->
                    <form method="POST" action="">
                        <input type="text" name="fullName" id="fullname" placeholder="Full Name" class="talk-input mb-3" required>
                        <input type="text" name="phoneNumber" id="phonenumber" placeholder="Phone Number" class="talk-input mb-3" required>
                        <input type="email" name="email" placeholder="Your Email Address" class="talk-input mb-3" required>
                        <textarea name="message" placeholder="Message" rows="4" class="talk-input mb-3" required></textarea>
                        <button type="submit" name="submit" class="talk-btn">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container text-center py-5">
            <h2 class="text-white font-weight-bold">Get News & Offers</h2>
            <p class="text-white">It is a long established fact that a reader will be distracted by the readable content
                of a
                page when looking at its layout.</p>
            <a href="#" class="btn btn-warning mt-3 px-4">Contact Us</a>
        </div>
    </section>
    <!-- Footer -->
    <footer class="site-footer text-center py-4">
        <div class="container">
            <p class="mb-0 text-white">Copyright © 2025
                <a href="#" class="text-light">thespiceofsouth</a>
            </p>
        </div>
    </footer>

    <script>
        // Restrict name to only alphabets + spaces
        document.getElementById('fullname').addEventListener('input', function() {
            this.value = this.value.replace(/[^A-Za-z\s]/g, '');
        });

        // Restrict phone to only numbers
        document.getElementById('phonenumber').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>

</body>

</html>