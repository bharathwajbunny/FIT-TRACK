<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3: Legs Workout - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/daybyday/day.css">
</head>
<body>
    <header>
        <h1>Day 3: Legs Workout - FitTrack</h1>
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
            <li><a href="#morning-quads">Morning - Quads Focus</a></li>
            <li><a href="#evening-hamstrings-calves">Evening - Hamstrings and Calves Focus</a></li>
        </ul>
    </nav>

    <main>
        <section id="morning-quads">
            <h2>Morning - Quads Focus</h2>
            <p>Focus on strengthening your quads with these exercises:</p>

            <!-- Exercise 1: Squats (Barbell or Smith Machine) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Squats (Barbell or Smith Machine)</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 6-8</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/wed/1.jpg" alt="Squats" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/wed/1.1.mp4" type="video/mp4">
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

            <!-- Exercise 2: Leg Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Leg Press</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 10</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/wed/2.jpg" alt="Leg Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/wed/2.2.mp4" type="video/mp4">
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

            <!-- Exercise 3: Lunges (Dumbbells or Barbell) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Lunges (Dumbbells or Barbell)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 12 per leg</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/wed/3.jpg" alt="Lunges" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/wed/3.3.mp4" type="video/mp4">
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

        <section id="evening-hamstrings-calves">
            <h2>Evening - Hamstrings and Calves Focus</h2>
            <p>Focus on strengthening your hamstrings and calves with these exercises:</p>

            <!-- Exercise 1: Leg Curls (Hamstring machine) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Leg Curls (Hamstring machine)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/wed/4.jpg" alt="Leg Curls" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/wed/4.4.mp4" type="video/mp4">
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

            <!-- Exercise 2: Leg Extension -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Leg Extension</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/wed/5.jpg" alt="Leg Extension" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/web/5.5.mp4" type="video/mp4">
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

            <!-- Exercise 3: Seated Calf Raises -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Seated Calf Raises</strong>
                    <ul>
                        <li>Sets: 4</li>
                        <li>Reps: 15-20</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/web/6.jpg" alt="Seated Calf Raises" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/web/6.6.mp4" type="video/mp4">
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
