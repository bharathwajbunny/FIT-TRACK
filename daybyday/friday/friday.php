<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friday Workout - FitTrack</title>
    <link rel="stylesheet" href="/j/public/workouts/daybyday/day.css">
</head>
<body>
    <header>
        <h1>Friday Workout - FitTrack</h1>
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
            <li><a href="#morning-fullbody">Morning - Full Body Strength</a></li>
            <li><a href="#evening-cardio">Evening - Cardio/Conditioning</a></li>
        </ul>
    </nav>

    <main>
        <section id="morning-fullbody">
            <h2>Morning - Full Body Strength Exercises</h2>
            <p>Focus on full body strength with the following exercises:</p>

            <!-- Exercise 1: Bench Press -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Bench Press</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/1.jpg" alt="Bench Press" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/friday/1.1.mp4" type="video/mp4">
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

            <!-- Exercise 2: Pull Ups -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Pull Ups</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: To Failure</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/2.jpg" alt="Pull Ups" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/friday/2.2.mp4" type="video/mp4">
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

            <!-- Exercise 3: Triceps Dips -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Triceps Dips</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: To Failure</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/3.jpg" alt="Triceps Dips" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/friday/3.3.mp4" type="video/mp4">
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

            <!-- Exercise 4: Hammer Curl -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Hammer Curl</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 10-12</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/4.jpg" alt="Hammer Curl" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/friday/4.4.mp4" type="video/mp4">
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

            <!-- Exercise 5: Crunches -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Crunches</strong>
                    <ul>
                        <li>Sets: 3</li>
                        <li>Reps: 15-20 per side</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/5.jpg" alt="Crunches" width="320" height="240">
                    <video width="320" height="240" controls>
                        <source src="/j/public/workouts/daybyday/friday/5.5.mp4" type="video/mp4">
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
        </section>

        <section id="evening-cardio">
            <h2>Evening - Cardio/Conditioning</h2>
            <p>For your cardio/conditioning, follow the instructions below:</p>

            <!-- Exercise 1: Walk or Jog for 60 seconds -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Walk or Jog for 60 seconds (repeat for 20 minutes)</strong>
                    <ul>
                        <li>Duration: 20 minutes</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/6.jpg" alt="Walk or Jog" width="320" height="240">
                  
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

            <!-- Exercise 2: Sprint for 30 seconds -->
            <div class="exercise-container">
                <div class="exercise-details">
                    <strong>Sprint for 30 seconds</strong>
                    <ul>
                        <li>Duration: 30 seconds</li>
                    </ul>
                    <img src="/j/public/workouts/daybyday/friday/7.jpg" alt="Sprint" width="320" height="240">
                    
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
    </script>
</body>
</html>
