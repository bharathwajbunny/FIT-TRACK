<?php
// Optional: Any PHP code for dynamic functionality or session handling could be placed here
// For example, start the session if you are using user login functionality
// session_start(); 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts - FitTrack</title>
    <link rel="stylesheet" href="workouts.css">
    <style>
       .workout-image {
    margin-top: 20px;
    display: flex;
     /* Centers content vertically */
    text-align: left;
    justify-content: flex-start; /* Ensures content aligns to the right of the image */
}

.workout-image img {
    max-width: 40%; /* Limits image width to 40% */
    height: 300px; 
    width: 650px;
    margin-left: 20px;  /* Adds space between image and text */
   
}

.workout-image .content {
    flex: 1;  /* Ensures the paragraph takes up the remaining space */
    margin-right:200px ;
    text-align: center;
 /* Centers the text vertically within the content */
  
}

.workout-image h3 {
    font-size: 2em;
    margin-top: 10px;
    text-align: center; /* Centers the heading text */
}

.workout-image p {
    font-size: 1em;
    margin-top: 10px;
    color: #555; /* Subtle text color for the paragraph */
   
}

    </style>
</head>
<body>
    <header>
        <h1>Workouts - FitTrack</h1>
        <nav>
            <ul>
                <li><a href="login.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="diet.php">Diet</a></li>
                <li><a href="expenses/expenses.php">Expenses</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- New Navigation Bar for Workout Sections -->
    <nav class="workout-nav">
        <ul>
            <li><a href="/j/public/workouts/back.php">Back</a></li>
            <li><a href="/j/public/workouts/triceps.php">Triceps</a></li>
            <li><a href="/j/public/workouts/biceps.php">Biceps</a></li>
            <li><a href="/j/public/workouts/chest.php">Chest</a></li>
            <li><a href="/j/public/workouts/shoulders.php">Shoulders</a></li>
            <li><a href="/j/public/workouts/legs.php">Legs</a></li>
            <li><a href="/j/public/workouts/core.php">Core</a></li>
            <li><a href="/j/public/workouts/forearms.php">Forearms</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Your Workout Plans</h2>
            <p>Plan and track your workout routines here. Stay fit and focused!</p>

            <!-- Timer -->
            <div class="timer" id="timer">01:00</div>
            <div class="buttons">
                <button id="startButton" onclick="startTimer()">Start</button>
                <button id="stopButton" onclick="stopTimer()">Stop</button>
                <button id="resetButton" onclick="resetTimer()">Restart</button>
            </div>
        </section>

        <!-- Workout Images with Descriptions -->
        <section class="workout-image">
        <a href="/j/public/workouts/daybyday/daybyday.php">
            <img src="/j/public/workouts/3.jpg" alt="Day By Day Workouts"></a>
            <div class="content">
                <h3>Day By Day Workouts</h3>
                <p>Our Day By Day workouts are designed for those who want a structured and consistent approach to improving their fitness. Each day targets different muscle groups with progressive intensity.</p>
            </div>
        </section>

        <section class="workout-image">
        <a href="/j/public/workouts/beginner/beginner.php">
            <img src="/j/public/workouts/1.jpg" alt="Beginner Workouts"></a>
            <div class="content">
                <h3>Beginner Workouts</h3>
                <p>If you're just starting your fitness journey, this workout plan will guide you through simple and effective exercises that build strength and endurance at a comfortable pace.</p>
            </div>
        </section>

        <section class="workout-image">
        <a href="/j/public/workouts/regular/regular.php">
            <img src="/j/public/workouts/2.jpg" alt="Regular Workouts"></a>
            <div class="content">
                <h3>Regular Workouts</h3>
                <p>The Regular Workouts program is perfect for those who have some experience with fitness and want to elevate their performance. It includes exercises that target all major muscle groups for balanced development.</p>
            </div>
        </section>

        <section class="workout-image">
        <a href="/j/public/workouts/professional/professional.php">
            <img src="/j/public/workouts/4.png" alt="Professional Workouts"></a>
            <div class="content">
                <h3>Professional Workouts</h3>
                <p>This program is for advanced fitness enthusiasts. Designed to push your limits, these workouts incorporate high-intensity exercises, complex movements, and heavier loads to maximize muscle growth and strength.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>

    <!-- Alarm Sound -->
    <audio id="alarmSound" src="/j/public/sounds/alarm.mp3" preload="auto"></audio>

    <script>
        let timer;
        let currentTime = 60; // 60 seconds
        let isRunning = false;
        let isStopped = false;
        const timerElement = document.getElementById('timer');
        const alarmSound = document.getElementById('alarmSound');
        
        function startTimer() {
            if (!isRunning && currentTime > 0) {
                isRunning = true;
                timer = setInterval(function() {
                    if (currentTime > 0) {
                        currentTime--;
                        updateTimerDisplay();
                    } else {
                        alarmSound.play(); // Play the alarm when the timer reaches 0
                        clearInterval(timer); // Stop the timer
                    }
                }, 1000);
            }
        }

        function stopTimer() {
            if (isRunning) {
                clearInterval(timer); // Stop the timer
                isRunning = false;
                isStopped = true;
            }
            alarmSound.pause(); // Stop the alarm sound if it's playing
            alarmSound.currentTime = 0; // Reset alarm sound to the beginning
        }

        function resetTimer() {
            clearInterval(timer); // Stop the timer
            isRunning = false;
            currentTime = 60; // Reset the timer to 60 seconds
            updateTimerDisplay();
            alarmSound.pause(); // Stop the alarm sound if it's playing
            alarmSound.currentTime = 0; // Reset alarm sound to the beginning
        }

        function updateTimerDisplay() {
            const minutes = Math.floor(currentTime / 60);
            const seconds = currentTime % 60;
            timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }

        // Initial display update
        updateTimerDisplay();
    </script>
</body>
</html>
