<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biceps Exercises - FitTrack</title>
    <link rel="stylesheet" href="work.css">
   
   
</head>
<body>
    <header>
        <h1>Biceps Exercises - FitTrack</h1>
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
            <li><a href="/j/public/workouts.php">Back to Workouts</a></li>
            <li><a href="#biceps">Biceps</a></li>
        </ul>
    </nav>

    <main>
        <section id="biceps">
            <h2>Biceps Exercises</h2>
            <p>Strengthen your biceps with these exercises:</p>

            <!-- Exercise 1: Barbell Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/1.jpg" alt="Barbell Curl">
                </div>
                <div class="exercise-details">
                    <strong>Barbell Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Barbell Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer1">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn1">Start</button>
                        <button id="stopBtn1" class="stop" disabled>Stop</button>
                        <button id="restartBtn1" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 2: Dumbbell Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/2.jpg" alt="Dumbbell Curl">
                </div>
                <div class="exercise-details">
                    <strong>Dumbbell Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/2.2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Dumbbell Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer2">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn2">Start</button>
                        <button id="stopBtn2" class="stop" disabled>Stop</button>
                        <button id="restartBtn2" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 3: Hammer Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/3.jpg" alt="Hammer Curl">
                </div>
                <div class="exercise-details">
                    <strong>Hammer Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Hammer Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 4: Concentration Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/4.jpg" alt="Concentration Curl">
                </div>
                <div class="exercise-details">
                    <strong>Concentration Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Concentration Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer4">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn4">Start</button>
                        <button id="stopBtn4" class="stop" disabled>Stop</button>
                        <button id="restartBtn4" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 5: Preacher Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/5.jpg" alt="Preacher Curl">
                </div>
                <div class="exercise-details">
                    <strong>Preacher Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/5.5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Preacher Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer5">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn5">Start</button>
                        <button id="stopBtn5" class="stop" disabled>Stop</button>
                        <button id="restartBtn5" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 6: Incline Dumbbell Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/biceps/6.jpg" alt="Incline Dumbbell Curl">
                </div>
                <div class="exercise-details">
                    <strong>Incline Dumbbell Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/biceps/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Incline Dumbbell Curl -->
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

    <script>
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
});

</script>

</body>
</html>
