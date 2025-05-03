<?php
// Optional: Any PHP code for dynamic functionality or session handling can go here
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day by Day Workouts - FitTrack</title>
    <link rel="stylesheet" href="/j/public/diet/beginner.css">
    <style>
        .workout-image {
            margin-top: 20px;
            text-align: center; /* Centers the text and images */
        }

        .workout-image img {
            max-width: 80%; /* Limits the image width to 80% of the container */
            height: 300px;
            border-radius: 8px;
            cursor: pointer;
        }

        .workout-image h3 {
            margin-top: 10px;
            font-size: 1.5em;
        }

        /* Optional styling for the container */
        .workout-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Day by Day Workouts - FitTrack</h1>
        <nav>
            <ul>
            <li><a href="/j/public/login.php">Home</a></li>
                <li><a href="/j/public/dashboard.php">Dashboard</a></li>
                <li><a href="/j/public/workouts.php">Workouts</a></li>
                <li><a href="/j/public/diet.php">Diet</a></li>
                <li><a href="/j/public/expenses/expenses.php">Expenses</a></li>
                <li><a href="/j/public/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Your Day by Day Workout Plan</h2>
            <p>Click on a day to see your workout for that day!</p>

            <!-- Workout Days Container -->
            <div class="workout-container">
                <!-- Monday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/monday/monday.php">
                        <img src="/j/public/workouts/daybyday/1.jpg" alt="Monday Workout">
                        <h3>Monday</h3>
                    </a>
                </section>

                <!-- Tuesday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/tuesday/tuesday.php">
                        <img src="/j/public/workouts/daybyday/2.jpg" alt="Tuesday Workout">
                        <h3>Tuesday</h3>
                    </a>
                </section>

                <!-- Wednesday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/wed/wednesday.php">
                        <img src="/j/public/workouts/daybyday/3.jpg" alt="Wednesday Workout">
                        <h3>Wednesday</h3>
                    </a>
                </section>

                <!-- Thursday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/thur/thursday.php">
                        <img src="/j/public/workouts/daybyday/4.jpg" alt="Thursday Workout">
                        <h3>Thursday</h3>
                    </a>
                </section>

                <!-- Friday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/friday/friday.php">
                        <img src="/j/public/workouts/daybyday/5.jpg" alt="Friday Workout">
                        <h3>Friday</h3>
                    </a>
                </section>

                <!-- Saturday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/daybyday/saturday/saturday.php">
                        <img src="/j/public/workouts/daybyday/6.jpg" alt="Saturday Workout">
                        <h3>Saturday</h3>
                    </a>
                </section>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>
</body>
</html>
