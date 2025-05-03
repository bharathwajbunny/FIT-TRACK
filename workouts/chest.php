<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chest Exercises - FitTrack</title>
    <link rel="stylesheet" href="work.css">
</head>
<body>
    <header>
        <h1>Chest Exercises - FitTrack</h1>
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
            <li><a href="#chest">Chest</a></li>
        </ul>
    </nav>

    <main>
        <section id="chest">
            <h2>Chest Exercises</h2>
            <p>Build your chest with these exercises:</p>

            <!-- Barbell Bench Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/1.jpg" alt="Barbell Bench Press">
                </div>
                <div class="exercise-details">
                    <strong>Barbell Bench Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 6-10</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Barbell Bench Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer1">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn1">Start</button>
                        <button id="stopBtn1" class="stop" disabled>Stop</button>
                        <button id="restartBtn1" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Dumbbell Bench Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/2.jpg" alt="Dumbbell Bench Press">
                </div>
                <div class="exercise-details">
                    <strong>Dumbbell Bench Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/2.2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Dumbbell Bench Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer2">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn2">Start</button>
                        <button id="stopBtn2" class="stop" disabled>Stop</button>
                        <button id="restartBtn2" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Incline Dumbbell Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/3.jpg" alt="Incline Dumbbell Press">
                </div>
                <div class="exercise-details">
                    <strong>Incline Dumbbell Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Incline Dumbbell Press -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Chest Fly -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/4.jpg" alt="Chest Fly (Dumbbell or Cable)">
                </div>
                <div class="exercise-details">
                    <strong>Chest Fly (Dumbbell or Cable)</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Chest Fly -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer4">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn4">Start</button>
                        <button id="stopBtn4" class="stop" disabled>Stop</button>
                        <button id="restartBtn4" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Push-Ups -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/5.jpg" alt="Push-Ups">
                </div>
                <div class="exercise-details">
                    <strong>Push-Ups</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 15-25</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/5.5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Push-Ups -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer5">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn5">Start</button>
                        <button id="stopBtn5" class="stop" disabled>Stop</button>
                        <button id="restartBtn5" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Cable Chest Press -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/chest/6.jpg" alt="Cable Chest Press">
                </div>
                <div class="exercise-details">
                    <strong>Cable Chest Press</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 10-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/chest/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Cable Chest Press -->
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
        // Timer functions from biceps page
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
            let timer = 60;
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
                timer = 60;
                timerElement.innerHTML = "01:00";
                startBtn.disabled = false;
                stopBtn.disabled = true;
                restartBtn.disabled = true;
                stopAlarm();
            });
        }

        // Attach the timers for each chest exercise
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
