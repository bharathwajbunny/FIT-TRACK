<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Body Exercises - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/work.css">
    <style>
        /* Add any specific styles for this page here */
    </style>
</head>
<body>
    <header>
        <h1>Full Body Exercises - FitTrack</h1>
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
            <li><a href="/j/public/workouts/beginner/beginner.php">Back to Workouts</a></li>
            <li><a href="#fullbody">Full Body</a></li>
        </ul>
    </nav>

    <main>
        <section id="fullbody">
            <h2>Full Body Exercises</h2>
            <p>Strengthen your full body with these exercises:</p>

            <!-- Exercise 1: Pull-ups or Chin-ups -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/1.jpg" alt="Pull-ups or Chin-ups">
                </div>
                <div class="exercise-details">
                    <strong>Pull-ups or Chin-ups</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 6-10</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Pull-ups -->
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
                    <img src="/j/public/workouts/beginner/3and4week/2.jpg" alt="Dumbbell Curl">
                </div>
                <div class="exercise-details">
                    <strong>Dumbbell Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/2.2.mp4" type="video/mp4">
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

            <!-- Exercise 3: Push-Ups -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/3.jpg" alt="Push-Ups">
                </div>
                <div class="exercise-details">
                    <strong>Push-Ups</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 15-25</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Push-ups -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 4: Squats (Without Dumbbell or Barbell) -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/4.jpg" alt="Squats (Without Dumbbell or Barbell)">
                </div>
                <div class="exercise-details">
                    <strong>Squats (Without Dumbbell or Barbell)</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 6-10</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Squats -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer4">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn4">Start</button>
                        <button id="stopBtn4" class="stop" disabled>Stop</button>
                        <button id="restartBtn4" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 5: Triceps Pushdowns -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/5.jpg" alt="Triceps Pushdowns">
                </div>
                <div class="exercise-details">
                    <strong>Triceps Pushdowns</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/5.5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Triceps Pushdowns -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer5">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn5">Start</button>
                        <button id="stopBtn5" class="stop" disabled>Stop</button>
                        <button id="restartBtn5" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 6: Reverse Fly (Rear Delt Fly) -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/6.jpg" alt="Reverse Fly (Rear Delt Fly)">
                </div>
                <div class="exercise-details">
                    <strong>Reverse Fly (Rear Delt Fly)</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Reverse Fly -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer6">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn6">Start</button>
                        <button id="stopBtn6" class="stop" disabled>Stop</button>
                        <button id="restartBtn6" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 7: Deadlifts -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/7.jpg" alt="Deadlifts">
                </div>
                <div class="exercise-details">
                    <strong>Deadlifts</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 4-6</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/7.7.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Deadlifts -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer7">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn7">Start</button>
                        <button id="stopBtn7" class="stop" disabled>Stop</button>
                        <button id="restartBtn7" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 8: Preacher Curl -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/8.jpg" alt="Preacher Curl">
                </div>
                <div class="exercise-details">
                    <strong>Preacher Curl</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/8.8.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Preacher Curl -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer8">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn8">Start</button>
                        <button id="stopBtn8" class="stop" disabled>Stop</button>
                        <button id="restartBtn8" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 9: Dumbbell Bench Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/9.jpg" alt="Dumbbell Bench Press">
                </div>
                <div class="exercise-details">
                    <strong>Dumbbell Bench Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/9.9.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Dumbbell Bench Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer9">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn9">Start</button>
                        <button id="stopBtn9" class="stop" disabled>Stop</button>
                        <button id="restartBtn9" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 10: Leg Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/10.jpg" alt="Leg Press">
                </div>
                <div class="exercise-details">
                    <strong>Leg Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/10.10.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Leg Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer10">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn10">Start</button>
                        <button id="stopBtn10" class="stop" disabled>Stop</button>
                        <button id="restartBtn10" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 11: Planks -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/beginner/3and4week/11.jpg" alt="Planks">
                </div>
                <div class="exercise-details">
                    <strong>Planks</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/beginner/3and4week/11.11.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Planks -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer11">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn11">Start</button>
                        <button id="stopBtn11" class="stop" disabled>Stop</button>
                        <button id="restartBtn11" disabled>Restart</button>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>

    <script>
        // Timer functions for Full Body Exercises (same as your previous code)
        let alarmSound;

        function playAlarm() {
            alarmSound = new Audio('/j/public/sounds/alarm.mp3');
            alarmSound.play();
        }

        function stopAlarm() {
            if (alarmSound) {
                alarmSound.pause();
                alarmSound.currentTime = 0;
            }
        }

        function startTimer(timerId, startBtnId, stopBtnId, restartBtnId) {
            let timer = 60; // Timer duration for each exercise (60 seconds)
            let interval;
            const timerElement = document.getElementById(timerId);
            const startBtn = document.getElementById(startBtnId);
            const stopBtn = document.getElementById(stopBtnId);
            const restartBtn = document.getElementById(restartBtnId);

            startBtn.disabled = true;
            stopBtn.disabled = false;
            restartBtn.disabled = false;

            interval = setInterval(function () {
                if (timer <= 0) {
                    clearInterval(interval);
                    playAlarm();
                    stopBtn.disabled = true;
                    restartBtn.disabled = false;
                } else {
                    timer--;
                    timerElement.textContent = formatTime(timer);
                }
            }, 1000);

            stopBtn.addEventListener('click', function () {
                clearInterval(interval);
                stopAlarm();
                startBtn.disabled = false;
            });

            restartBtn.addEventListener('click', function () {
                timer = 60; // Reset the timer
                timerElement.textContent = formatTime(timer);
                startBtn.disabled = false;
                stopBtn.disabled = true;
                restartBtn.disabled = true;
            });
        }

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
        }

        // Assign timers to buttons
        startTimer('timer1', 'startBtn1', 'stopBtn1', 'restartBtn1');
        startTimer('timer2', 'startBtn2', 'stopBtn2', 'restartBtn2');
        startTimer('timer3', 'startBtn3', 'stopBtn3', 'restartBtn3');
        startTimer('timer4', 'startBtn4', 'stopBtn4', 'restartBtn4');
        startTimer('timer5', 'startBtn5', 'stopBtn5', 'restartBtn5');
        startTimer('timer6', 'startBtn6', 'stopBtn6', 'restartBtn6');
        startTimer('timer7', 'startBtn7', 'stopBtn7', 'restartBtn7');
        startTimer('timer8', 'startBtn8', 'stopBtn8', 'restartBtn8');
        startTimer('timer9', 'startBtn9', 'stopBtn9', 'restartBtn9');
        startTimer('timer10', 'startBtn10', 'stopBtn10', 'restartBtn10');
        startTimer('timer11', 'startBtn11', 'stopBtn11', 'restartBtn11');
    </script>
</body>
</html>
