<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saturday Workout - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/daybyday/day.css">
</head>
<body>
    <header>
        <h1>Saturday Workout - FitTrack</h1>
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
            <li><a href="#yoga">Yoga - Active Recovery</a></li>
            <li><a href="#Light Cardio">Light Cardio - Active Recovery</a></li>
        </ul>
    </nav>

    <main>
        <section id="yoga">
            <h2>Yoga - Active Recovery</h2>
            <p>For your active recovery day, engage in some light stretching and yoga poses to relax your muscles and promote flexibility:</p>

            <!-- Exercise 1: Child's Pose (Balasana) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Child's Pose (Balasana)</strong>
                    <ul>
                        <li>Hold for 30 seconds to 1 minute</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/1.jpg" alt="Child's Pose" width="320" height="240">
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

            <!-- Exercise 2: Downward-Facing Dog (Adho Mukha Svanasana) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Downward-Facing Dog (Adho Mukha Svanasana)</strong>
                    <ul>
                        <li>Hold for 30 seconds to 1 minute</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/2.jpg" alt="Downward-Facing Dog" width="320" height="240">
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

            <!-- Exercise 3: Pigeon Pose (Eka Pada Rajakapotasana) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Pigeon Pose (Eka Pada Rajakapotasana)</strong>
                    <ul>
                        <li>Hold for 30 seconds to 1 minute per side</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/3.jpg" alt="Pigeon Pose" width="320" height="240">
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

            <!-- Exercise 4: Reclining Bound Angle Pose (Supta Baddha Konasana) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Reclining Bound Angle Pose (Supta Baddha Konasana)</strong>
                    <ul>
                        <li>Hold for 1 to 3 minutes</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/4.jpg" alt="Reclining Bound Angle Pose" width="320" height="240">
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

            <section id="Light Cardio">
            <h2>Light Cardio - Active Recovery</h2>
            <p>For your active recovery day, engage in some light stretching :</p>

            <!-- Exercise 1: Leg Curls (Hamstring machine) -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Leg Curls (Hamstring machine)</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/5.jpg" alt="Leg Curls" width="320" height="240">
                   
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

            <!-- Exercise 2: Leg Extension -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Leg Extension</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/saturday/6.jpg" alt="Leg Extension" width="320" height="240">
                    
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
