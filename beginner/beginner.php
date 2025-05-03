<?php
// Optional: Any PHP code for dynamic functionality or session handling can go here
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Workouts - FitTrack</title>
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
        <h1>Beginner Workouts - FitTrack</h1>
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
            <h2>Your Beginner Workout Plan</h2>
            <p>Click on a day to see your workout for that day!</p>

            <!-- Workout Days Container -->
            <div class="workout-container">
                <!-- Monday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/beginner/1and2week/12.php">
                        <img src="/j/public/workouts/beginner/1.jpg" alt="Monday Workout">
                        <h3>FIRST AND SECOND WEEK</h3>
                    </a>
                </section>

                <!-- Tuesday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/beginner/3and4week/34.php">
                        <img src="/j/public/workouts/beginner/2.jpg" alt="Tuesday Workout">
                        <h3>THIRD AND FOURTH WEEK</h3>
                    </a>
                </section>
            </div>
        </section>
        <section>
        <a href="/j/public/workouts/daybyday/daybyday.php">
            <h1>You Should Follow Day By Day Workouts After One Mounth</h1></a>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>
</body>
</html>
