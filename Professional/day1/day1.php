<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 Workout - Chest & Triceps - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/daybyday/day.css">
</head>
<body>
    <header>
        <h1>Day 1 Workout - Chest & Triceps - FitTrack</h1>
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

    <nav class="workout-nav">
        <ul>
            <li><a href="/j/public/workouts/professional/professional.php">Back to DAY BY DAY</a></li>
            <li><a href="#morning-chest">Morning - Chest</a></li>
            <li><a href="#evening-triceps">Evening - Triceps</a></li>
        </ul>
    </nav>

    <main>
        <section id="morning-chest">
            <h2>Morning - Chest Exercises</h2>
            <p>Focus on strengthening your chest with these exercises:</p>

            <!-- Exercise 1: Barbell Bench Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Barbell Bench Press</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 6-8</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/1.jpg" alt="Barbell Bench Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer1">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn1">Start</button>
                        <button id="stopBtn1" class="stop" disabled>Stop</button>
                        <button id="restartBtn1" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 2: Incline Dumbbell Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Incline Dumbbell Press</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 8-10</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/2.jpg" alt="Incline Dumbbell Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/2.2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer2">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn2">Start</button>
                        <button id="stopBtn2" class="stop" disabled>Stop</button>
                        <button id="restartBtn2" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 3: Chest Fly (Machine or Dumbbells) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Chest Fly (Machine or Dumbbells)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/3.jpg" alt="Chest Fly" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="evening-triceps">
            <h2>Evening - Triceps Exercises</h2>
            <p>Focus on strengthening your triceps with these exercises:</p>

            <!-- Exercise 1: Tricep Dips -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Tricep Dips</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 8-10</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/4.jpg" alt="Tricep Dips" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer4">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn4">Start</button>
                        <button id="stopBtn4" class="stop" disabled>Stop</button>
                        <button id="restartBtn4" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 2: Overhead Tricep Extensions (Dumbbell) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Overhead Tricep Extensions (Dumbbell)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/5.jpg" alt="Overhead Tricep Extensions" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/5.5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer5">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn5">Start</button>
                        <button id="stopBtn5" class="stop" disabled>Stop</button>
                        <button id="restartBtn5" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 3: Tricep Pushdowns (Cable) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Tricep Pushdowns (Cable)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/professional/day1/6.jpg" alt="Tricep Pushdowns" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/professional/day1/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer6">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn6">Start</button>
                        <button id="stopBtn6" class="stop" disabled>Stop</button>
                        <button id="restartBtn6" disabled>Restart</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>
    <script >
        // Function to play the alarm sound when timer reaches zero
let alarmSound; // Variable to store the alarm sound object

function playAlarm() {
    alarmSound = new Audio('/j/public/sounds/alarm.mp3'); // Provide the correct path to the alarm sound file
    alarmSound.play();
}

// Function to stop the alarm sound
function stopAlarm() {
    if (alarmSound) {
        alarmSound.pause(); // Stop the sound
        alarmSound.currentTime = 0; // Reset the sound to the beginning
    }
}

// Timer functions for each exercise
function startTimer(timerId, startBtnId, stopBtnId, restartBtnId) {
    let timer = 60; // Set the initial time in seconds (e.g., 60 seconds)
    let interval;
    const timerElement = document.getElementById(timerId);
    const startBtn = document.getElementById(startBtnId);
    const stopBtn = document.getElementById(stopBtnId);
    const restartBtn = document.getElementById(restartBtnId);

    startBtn.disabled = true;
    stopBtn.disabled = false;
    restartBtn.disabled = false;

    interval = setInterval(function () {
        timer--;
        const minutes = Math.floor(timer / 60);
        const seconds = timer % 60;
        timerElement.innerHTML = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        // If the timer reaches zero, stop the interval and play the alarm
        if (timer === 0) {
            clearInterval(interval);
            playAlarm();  // Play alarm sound

            stopBtn.disabled = true;
            restartBtn.disabled = false;
        }
    }, 1000);

    stopBtn.addEventListener("click", function () {
        clearInterval(interval); // Stop the timer
        stopAlarm(); // Stop the alarm sound
        startBtn.disabled = false;
        stopBtn.disabled = true;
    });

    restartBtn.addEventListener("click", function () {
        clearInterval(interval); // Stop the timer
        timer = 60;  // Reset the timer to the starting time (60 seconds)
        timerElement.innerHTML = "01:00"; // Reset display to 60 seconds
        startBtn.disabled = false;
        stopBtn.disabled = true;
        restartBtn.disabled = true;
        stopAlarm(); // Stop the alarm sound if restarted
    });
}

// Attach the timers for each exercise
document.getElementById('startBtn1').addEventListener('click', function() {
    startTimer('timer1', 'startBtn1', 'stopBtn1', 'restartBtn1');
});
document.getElementById('startBtn2').addEventListener('click', function() {
    startTimer('timer2', 'startBtn2', 'stopBtn2', 'restartBtn2');
});
document.getElementById('startBtn3').addEventListener('click', function() {
    startTimer('timer3', 'startBtn3', 'stopBtn3', 'restartBtn3');
});
document.getElementById('startBtn4').addEventListener('click', function() {
    startTimer('timer4', 'startBtn4', 'stopBtn4', 'restartBtn4');
});
document.getElementById('startBtn5').addEventListener('click', function() {
    startTimer('timer5', 'startBtn5', 'stopBtn5', 'restartBtn5');
});
document.getElementById('startBtn6').addEventListener('click', function() {
    startTimer('timer6', 'startBtn6', 'stopBtn6', 'restartBtn6');
});</script>
</body>
</html>
