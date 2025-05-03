<?php
// Optional: Any PHP code for dynamic functionality or session handling can go here
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Workouts - FitTrack</title>
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
        <h1>Regular Workouts - FitTrack</h1>
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
            <h2>Your Regular Workout Plan</h2>
            <p>Click on a day to see your workout for that day!</p>

            <!-- Workout Days Container -->
            <div class="workout-container">
                <!-- Monday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day1/day1.php">
                        <img src="/j/public/workouts/regular/1.jpg" alt="Monday Workout">
                        <h3>DAY 1</h3>
                    </a>
                </section>

                <!-- Tuesday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day2/day2.php">
                        <img src="/j/public/workouts/regular/2.jpg" alt="Tuesday Workout">
                        <h3>DAY 2</h3>
                    </a>
                </section>

                <!-- Wednesday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day3/day3.php">
                        <img src="/j/public/workouts/regular/3.jpg" alt="Wednesday Workout">
                        <h3>DAY 3</h3>
                    </a>
                </section>

                <!-- Thursday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day4/day4.php">
                        <img src="/j/public/workouts/regular/4.jpg" alt="Thursday Workout">
                        <h3>DAY 4</h3>
                    </a>
                </section>

                <!-- Friday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day5/day5.php">
                        <img src="/j/public/workouts/regular/5.jpg" alt="Friday Workout">
                        <h3>DAY 5</h3>
                    </a>
                </section>

                <!-- Saturday -->
                <section class="workout-image">
                    <a href="/j/public/workouts/regular/day6/day6.php">
                        <img src="/j/public/workouts/regular/6.jpg" alt="Saturday Workout">
                        <h3>DAY 6</h3>
                    </a>
                </section>
            </div>
        </section>

        <section>
            <a href="/j/public/workouts/daybyday/daybyday.php">
                <h1>You Can Also Follow Day By Day Workouts </h1>
            </a>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>
</body>
</html>
