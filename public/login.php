<?php
// Optional: Any PHP code for dynamic functionality or session handling could be placed here
// For example, start the session if you are using user login functionality
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - FitTrack</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to FitTrack</h1>
        <nav>
            <ul>
                <li><a href="login.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="diet.php">Diet</a></li>
                <li><a href="/j/public/expenses/expenses.php">Expenses</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Main Section with Call to Action -->
        <section>
            <h2>Track Your Fitness Journey</h2>
            <p>Stay on top of your workouts, diet, and expenses all in one place.</p>
            <!-- Corrected the button -->
            <button onclick="window.location.href='workouts.php';">Get Started</button>
        </section>

        <!-- Gym Images and Details Section -->
        <section id="gym-info">
            <h2>Explore Our Website</h2>
            <div class="gym-gallery">
                <div class="gym-item">
                    <img src="images/gym1.jpg" alt="Gym Image 1">
                    <h3>Any Equipment</h3>
                    <p>Our Website is equipped with the latest fitness videos to help you reach your fitness goals faster.</p>
                </div>
                <div class="gym-item">
                    <img src="images/gym2.jpg" alt="Gym Image 2">
                    <h3>Weights</h3>
                    <p>Work with Any Weights.</p>
                </div>
                <div class="gym-item">
                    <img src="images/gym3.jpg" alt="Gym Image 3">
                    <h3>Anywhere</h3>
                    <p>Workout From Anywhere.</p>
                </div>
            </div>
        </section>
        <section class="contact-details">
    <h2>Contact Details</h2>
    <div class="details">
    <p><strong>Email:</strong> <a href="mailto:fittrack@email.com"> fittrack@email.com</a></p>
        <p><strong>Phone Number:</strong> +91 9998****77</p>
        <p><strong>Address:</strong> Hyderabad, Telangana, India</p>
    </div>
</section>

    </main>

    <!-- Footer Section (optional) -->
    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>

</body>
</html>
