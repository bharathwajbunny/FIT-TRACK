<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thursday Workout - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/daybyday/day.css">
</head>
<body>
    <header>
        <h1>Thursday Workout - FitTrack</h1>
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
            <li><a href="/j/public/workouts/daybyday/daybyday.php">Back to DAY BY DAY</a></li>
            <li><a href="#morning-shoulders">Morning - Shoulders</a></li>
            <li><a href="#evening-abs">Evening - Abs</a></li>
        </ul>
    </nav>

    <main>
        <section id="morning-shoulders">
            <h2>Morning - Shoulders Exercises</h2>
            <p>Focus on strengthening your shoulders with these exercises:</p>

            <!-- Exercise 1: Overhead Barbell Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Overhead Barbell Press</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 6-8</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/1.jpg" alt="Overhead Barbell Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/1.1.mp4" type="video/mp4">
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

            <!-- Exercise 2: Dumbbell Lateral Raises -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Dumbbell Lateral Raises</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/2.jpg" alt="Dumbbell Lateral Raises" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/2.2.mp4" type="video/mp4">
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

            <!-- Exercise 3: Arnold Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Arnold Press</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 8-10</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/3.jpg" alt="Arnold Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/3.3.mp4" type="video/mp4">
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

            <!-- Exercise 4: Reverse Fly -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Reverse Fly</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 8-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/4.jpg" alt="Reverse Fly" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/4.4.mp4" type="video/mp4">
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
        </section>

        <section id="evening-abs">
            <h2>Evening - Abs Exercises</h2>
            <p>Focus on strengthening your abs with these exercises:</p>

            <!-- Exercise 1: Planks -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Planks</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Hold for: 30-60 seconds</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/5.jpg" alt="Planks" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/5.5.mp4" type="video/mp4">
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

            <!-- Exercise 2: Russian Twists -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Russian Twists</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 20 twists</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/6.jpg" alt="Russian Twists" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/6.6.mp4" type="video/mp4">
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

            <!-- Exercise 3: Crunches -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Crunches</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 20 sides</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/7.jpg" alt="Crunches" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/7.7.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer7">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn7">Start</button>
                        <button id="stopBtn7" class="stop" disabled>Stop</button>
                        <button id="restartBtn7" disabled>Restart</button>
                    </div>
                </div>
            </div>

            <!-- Exercise 4: Cable Woodchoppers -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Cable Woodchoppers</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 12 per side</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/thur/8.jpg" alt="Cable Woodchoppers" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/thur/8.8.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="timer-container">
                    <p class="timer">Time: <span id="timer8">00:00</span></p>
                    <div class="buttons">
                        <button id="startBtn8">Start</button>
                        <button id="stopBtn8" class="stop" disabled>Stop</button>
                        <button id="restartBtn8" disabled>Restart</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Timer and alarm functions from previous script can be reused
        let alarmSound; // Variable to store the alarm sound object

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

        // Attach timers for each exercise
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
        document.getElementById('startBtn7').addEventListener('click', function() {
            startTimer('timer7', 'startBtn7', 'stopBtn7', 'restartBtn7');
        });
        document.getElementById('startBtn8').addEventListener('click', function() {
            startTimer('timer8', 'startBtn8', 'stopBtn8', 'restartBtn8');
        });
    </script>
</body>
</html>
