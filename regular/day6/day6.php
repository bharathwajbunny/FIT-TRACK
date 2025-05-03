<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Exercises - Day 6 - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/work.css">
</head>
<body>
    <header>
        <h1>Core Exercises - Day 6 - FitTrack</h1>
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
            <li><a href="/j/public/workouts/regular/regular.php">Back to Workouts</a></li>
            <li><a href="#core">Core</a></li>
        </ul>
    </nav>

    <main>
        <section id="core">
            <h2>Core Exercises - Day 6</h2>
            <p>Strengthen your core with these exercises for Day 6:</p>

            <!-- Planks -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/1.jpg" alt="Planks">
                </div>
                <div class="exercise-details">
                    <strong>Planks</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/1.1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Planks -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer1">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn1">Start</button>
                        <button id="stopBtn1" class="stop" disabled>Stop</button>
                        <button id="restartBtn1" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Russian Twists -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/2.jpg" alt="Russian Twists">
                </div>
                <div class="exercise-details">
                    <strong>Russian Twists</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 15-20 per side</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/2.2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Russian Twists -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer2">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn2">Start</button>
                        <button id="stopBtn2" class="stop" disabled>Stop</button>
                        <button id="restartBtn2" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Leg Raises -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/3.jpg" alt="Leg Raises">
                </div>
                <div class="exercise-details">
                    <strong>Leg Raises</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 12-15</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/3.3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Leg Raises -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer3">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn3">Start</button>
                        <button id="stopBtn3" class="stop" disabled>Stop</button>
                        <button id="restartBtn3" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Bicycle Crunches -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/4.jpg" alt="Bicycle Crunches">
                </div>
                <div class="exercise-details">
                    <strong>Crunches</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 15-20 per side</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/4.4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Bicycle Crunches -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer4">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn4">Start</button>
                        <button id="stopBtn4" class="stop" disabled>Stop</button>
                        <button id="restartBtn4" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Cable Woodchoppers -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/5.jpg" alt="Cable Woodchoppers">
                </div>
                <div class="exercise-details">
                    <strong>Cable Woodchoppers</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 12-15 per side</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/5.5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Cable Woodchoppers -->
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer5">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn5">Start</button>
                        <button id="stopBtn5" class="stop" disabled>Stop</button>
                        <button id="restartBtn5" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Mountain Climbers -->
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="/j/public/workouts/regular/day6/6.jpg" alt="Mountain Climbers">
                </div>
                <div class="exercise-details">
                    <strong>Mountain Climbers</strong>
                    <ul>
                        <li>Sets: 3-4</li>
                        <li>Reps: 20-30 per side</li>
                    </ul>
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/regular/day6/6.6.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Timer for Mountain Climbers -->
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
        // Timer functions for Core Exercises
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
            let timer = 90;
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
                timer = duration;
                timerElement.innerHTML = "01:00";
                startBtn.disabled = false;
                stopBtn.disabled = true;
                restartBtn.disabled = true;
                stopAlarm();
            });
        }

        // Attach the timers for each core exercise
        document.getElementById('startBtn1').addEventListener('click', function() {
            startTimer('timer1', 'startBtn1', 'stopBtn1', 'restartBtn1', 60); // Planks - 1 minute timer
        });
        document.getElementById('startBtn2').addEventListener('click', function() {
            startTimer('timer2', 'startBtn2', 'stopBtn2', 'restartBtn2', 60); // Russian Twists - 1 minute timer
        });
        document.getElementById('startBtn3').addEventListener('click', function() {
            startTimer('timer3', 'startBtn3', 'stopBtn3', 'restartBtn3', 60); // Leg Raises - 1 minute timer
        });
        document.getElementById('startBtn4').addEventListener('click', function() {
            startTimer('timer4', 'startBtn4', 'stopBtn4', 'restartBtn4', 60); // Bicycle Crunches - 1 minute timer
        });
        document.getElementById('startBtn5').addEventListener('click', function() {
            startTimer('timer5', 'startBtn5', 'stopBtn5', 'restartBtn5', 60); // Cable Woodchoppers - 1 minute timer
        });
        document.getElementById('startBtn6').addEventListener('click', function() {
            startTimer('timer6', 'startBtn6', 'stopBtn6', 'restartBtn6', 60); // Mountain Climbers - 1 minute timer
        });
    </script>

</body>
</html>
