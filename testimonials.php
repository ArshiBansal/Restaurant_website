<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];        // Full Name
    $contact = $_POST['contact'];  // Contact (phone/email)
    $visit_date = $_POST['visit_date'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "thespiceofsouth";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert feedback data
    $sql = "INSERT INTO feedback (name, contact, visit_date, rating, message) 
            VALUES ('$name', '$contact', '$visit_date', '$rating', '$message')";

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

    <link rel="stylesheet" href="testimonials.css">
    <style>
        /* Section background */
        .feedback-section {
            position: relative;
            background: url('https://i.pinimg.com/736x/4d/b7/d3/4db7d318d6437d172b6c98766ea4fb38.jpg') center center/cover no-repeat;
            height: 100vh;
            /* full screen */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .feedback-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1;
        }

        /* Ensure content is above overlay */
        .feedback-section .container {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        /* Header text */
        .feedback-header {
            flex: 0 0 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Form wrapper */
        .feedback-form-wrapper {
            flex: 0 0 50%;
            /* form occupies 60vh of section */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Feedback form box */
        .feedback-form {
            background-color: #f88379;
            height: 480px;
            /* exactly 60vh */
            width: 375px;
            border-radius: 8px;
            padding: 20px;
            overflow-y: hidden;
        }

        /* Labels inline with inputs */
        .feedback-form .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group {
            width: 315px;
        }

        /* Labels */
        .feedback-form .form-label {
            color: #fff;
            font-weight: 500;
            width: 120px;
            /* fixed label width */
            margin-right: 10px;
            text-align: left;
        }

        /* Inputs + Textareas */
        .feedback-form .form-control {
            background-color: #f88379;
            border: 2px solid #fff;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            outline: none;
        }

        /* Placeholder styling */
        .feedback-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Focus effect */
        .feedback-form .form-control:focus {
            border-color: #fff;
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
        }

        /* Submit button */
        .feedback-form button {
            margin-top: 15px;
        }
    </style>
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
                        <a class="nav-link active text-highlight" href="#">Testimonials</a>
                    </li>
                    <li class="nav-item mr-10">
                        <a class="nav-link" href="contact.php">Contact</a>
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
                        <h1 style="margin-bottom: 15px;">Testimonials</h1>
                    </center>
                    <p>
                        Words of praise from our customers who have loved our menus.Our guests often tell us how
                        unforgettable
                        their experience was. We pride ourselves on exceptional flavors and warm hospitality. From
                        intimate
                        dinners to family celebrations, we've served them all. Discover what keeps our loyal customers
                        coming back for more.
                    </p>
                </div>

                <div class="col-2"></div>
            </div>
        </div>
    </section>
    <center>
        <h1 style="margin-top: 50px; font-size:40px; font-weight:400;">What Our Client Says</h1>
    </center>
    <section>
        <div class="container-fluid" style="margin-top: 175px; margin-bottom: 75px;">

            <!-- Row 1 -->
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/8c/5e/9d/8c5e9dd58ecd175df019b09f6bac72b6.jpg"
                            alt="David Richard" class="testimonial-img">
                        <h5 class="mt-3">A Truly Flavorful Experience</h5>
                        <p class="text-muted">“Every bite was a burst of flavor! The chefs really outdid themselves.”
                        </p>
                        <div class="testimonial-name">Peter Roy</div>
                        <div class="testimonial-role">Managing Director, Zenith Corp</div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/36/af/73/36af73ef3cd451d1e60d45899ee15043.jpg"
                            alt="Jennie Lee" class="testimonial-img">
                        <h5 class="mt-3">Delicious & Memorable</h5>
                        <p class="text-muted">“I haven’t stopped thinking about the dessert since our visit!”</p>
                        <div class="testimonial-name">Jennie Lee</div>
                        <div class="testimonial-role">Executive Chef, Fine Dine Group</div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/c4/d8/f8/c4d8f8f64e1f00a5ca02253f5ecc27d0.jpg"
                            alt="Mark Hudson" class="testimonial-img">
                        <h5 class="mt-3">Warm and Welcoming</h5>
                        <p class="text-muted">“Fantastic ambiance and service that made our dinner special.”</p>
                        <div class="testimonial-name">Mark Hudson</div>
                        <div class="testimonial-role">CEO, Horizon Group</div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/76/07/75/760775dfd783a04a3251e384b1a591eb.jpg"
                            alt="Thomas Grey" class="testimonial-img">
                        <h5 class="mt-3">Feels Like Home</h5>
                        <p class="text-muted">“The comfort food vibe was just what we needed after a long day.”</p>
                        <div class="testimonial-name">Thomas Grey</div>
                        <div class="testimonial-role">Marketing Head, Elevate Inc.</div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/95/14/91/951491846e356ed46400276ad1420c23.jpg"
                            alt="Emma Wilson" class="testimonial-img">
                        <h5 class="mt-3">Incredible Service</h5>
                        <p class="text-muted">“Staff was attentive and friendly, making the whole experience better.”
                        </p>
                        <div class="testimonial-name">Emma Wilson</div>
                        <div class="testimonial-role">Brand Manager, Lumina Studio</div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/55/0d/a6/550da6ebca90b57d6981cbfa9663a156.jpg"
                            alt="Sophie Trent" class="testimonial-img">
                        <h5 class="mt-3">Fresh and Flavorful</h5>
                        <p class="text-muted">“You can taste the quality in every ingredient. Highly recommended.”</p>
                        <div class="testimonial-name">Sophie Trent</div>
                        <div class="testimonial-role">Project Manager, Visionary Tech</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Feedback Section -->
    <section class="feedback-section">
        <div class="feedback-overlay"></div>
        <div class="container text-center text-white d-flex flex-column justify-content-between">

            <!-- Heading + Intro -->
            <div class="feedback-header">
                <h2 class="font-weight-medium">We Value Your Feedback</h2>
                <p class="feedback-intro">Share your thoughts and help us improve your café experience.</p>
                <p class="feedback-intro mb-2">Your comments and suggestions mean a lot to us.</p>
            </div>

            <!-- Feedback Form -->
            <div class="feedback-form-wrapper d-flex justify-content-center">
                <form class="feedback-form p-4 mb-5" method="POST" action="" novalidate>

                    <!-- Name -->
                    <div class="form-group d-flex align-items-center mb-3">
                        <label for="name" class="form-label me-3" style="width: 150px;">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Enter your full name"
                            pattern="[A-Za-z\s]+" title="Only letters and spaces allowed" required>
                    </div>

                    <!-- Contact -->
                    <div class="form-group d-flex align-items-center mb-3">
                        <label for="contact" class="form-label me-3" style="width: 150px;">Contact</label>
                        <input type="text" id="contact" name="contact" class="form-control"
                            placeholder="Phone (10 digits)"
                            pattern="[0-9]{10}" title="Enter a valid 10-digit phone number" required>
                    </div>

                    <!-- Visit Date -->
                    <div class="form-group d-flex align-items-center mb-3">
                        <label for="visit-date" class="form-label me-3" style="width: 150px;">Visit Date</label>
                        <input type="date" id="visit-date" name="visit_date" class="form-control" required>
                    </div>

                    <!-- Overall Rating -->
                    <div class="form-group d-flex align-items-center mb-3">
                        <label for="rating" class="form-label me-3" style="width: 150px;">Overall Rating</label>
                        <select id="rating" name="rating" class="form-control" required>
                            <option value="">Select</option>
                            <option value="1">1 - Poor</option>
                            <option value="2">2 - Fair</option>
                            <option value="3">3 - Good</option>
                            <option value="4">4 - Very Good</option>
                            <option value="5">5 - Excellent</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="form-group d-flex align-items-start mb-3">
                        <label for="message" class="form-label me-3" style="width: 150px;">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="3"
                            placeholder="Write your feedback here" required></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit" name="submit" class="btn btn-light btn-block font-weight-bold">
                        Submit Feedback
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19817.81452869725!2d-0.1195433!3d51.503324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b1de1c1c21%3A0x42a5dd86e9b8f52a!2sLondon%20Eye!5e0!3m2!1sen!2suk!4v1691681888888"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <!-- INFO SECTION -->
    <section class="info-section">
        <div class="info-container">

            <!-- Block 1 -->
            <div class="info-block info-dark">
                <h4>Planning To Visit?</h4>
                <p>
                    We're here to assist you in planning your visit. Whether you have questions or need directions, feel
                    free to
                    reach out anytime.
                </p>
                <a href="#" class="btn-contact">Contact Us</a>
            </div>

            <!-- Block 2 -->
            <div class="info-block info-light">
                <h4>Opening Time</h4>
                <p><strong>Working Days</strong><br>9:00AM – 6:00PM</p>
                <hr>
                <p><strong>Saturday</strong><br>11:00AM – 5:00PM</p>
                <hr>
                <p><strong>Sunday</strong><br>Closed</p>
            </div>

            <!-- Block 3 -->
            <div class="info-block info-light">
                <h4>Get In Touch</h4>
                <p>+123 456 7890<br>info@example.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
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

    <!-- Validation Script -->
    <script>
        // Restrict name to only alphabets + spaces
        document.getElementById('name').addEventListener('input', function() {
            this.value = this.value.replace(/[^A-Za-z\s]/g, '');
        });

        // Restrict phone to only numbers
        document.getElementById('contact').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>

</body>

</html>