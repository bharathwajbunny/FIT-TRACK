<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triceps Exercises - FitTrack</title>
    <link rel="stylesheet" href="work.css">
    <style>
        /* Style for the container holding each exercise */
    </style>
</head>
<body>
    <header>
        <h1>Triceps Exercises - FitTrack</h1>
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
            <li><a href="#triceps">Triceps</a></li>
        </ul>
    </nav>

    <main>
        <section id="triceps">
            <h2>Triceps Exercises</h2>
            <p>Strengthen your triceps with these exercises:</p>

            <!-- Exercise 1: Triceps Dips -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/triceps/1.jpg" alt="Triceps Dips">
                </div>
                <div class="exercise-details">
                    <strong>Triceps Dips</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Triceps Dips -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer1">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn1">Start</button>
                        <button id="stopBtn1" class="stop" disabled>Stop</button>
                        <button id="restartBtn1" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 2: Close-Grip Bench Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/triceps/2.jpg" alt="Close-Grip Bench Press">
                </div>
                <div class="exercise-details">
                    <strong>Close-Grip Bench Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/2.2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Close-Grip Bench Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer2">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn2">Start</button>
                        <button id="stopBtn2" class="stop" disabled>Stop</button>
                        <button id="restartBtn2" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 3: Skull Crushers -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/triceps/3.jpg" alt="Skull Crushers">
                </div>
                <div class="exercise-details">
                    <strong>Skull Crushers (Lying Tricep Extensions)</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Skull Crushers -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 4: Overhead Triceps Extension -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/triceps/4.jpg" alt="Overhead Triceps Extension">
                </div>
                <div class="exercise-details">
                    <strong>Overhead Triceps Extension</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Overhead Triceps Extension -->
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
                    <img src="/j/public/workouts/triceps/5.jpg" alt="Triceps Pushdowns">
                </div>
                <div class="exercise-details">
                    <strong>Triceps Pushdowns</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/5.5.mp4" type="video/mp4">
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

            <!-- Exercise 6: Diamond Push-ups -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/triceps/6.jpg" alt="Diamond Push-ups">
                </div>
                <div class="exercise-details">
                    <strong>Diamond Push-ups</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-20</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/triceps/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Diamond Push-ups -->
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
        // Timer functions for Triceps Exercises
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
                timer--;
                const minutes = Math.floor(timer / 60);
                const seconds = timer % 60;
                timerElement.innerHTML = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

                if (timer === 0) {
                    clearInterval(interval);
                    playAlarm();
                    stopBtn.disabled = true;
                    restartBtn.disabled = false;
                }
            }, 1000);

            stopBtn.addEventListener("click", function () {
                clearInterval(interval);
                stopAlarm();
                startBtn.disabled = false;
                stopBtn.disabled = true;
            });

            restartBtn.addEventListener("click", function () {
                clearInterval(interval);
                timer = 60; // Reset timer to 1 minute
                timerElement.innerHTML = "01:00";
                startBtn.disabled = false;
                stopBtn.disabled = true;
                restartBtn.disabled = true;
                stopAlarm();
            });
        }

        // Attach the timers for each triceps exercise
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
