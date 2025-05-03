<?php
// Function to calculate BMI (in kg/m^2)
function calculate_bmi($weight, $height_ft) {
    if ($height_ft > 0) {
        // Convert height from feet to meters (1 foot = 0.3048 meters)
        $height_m = $height_ft * 0.3048;
        return $weight / ($height_m * $height_m);
    }
    return 0;
}

// Function to classify BMI
function classify_bmi($bmi) {
    if ($bmi < 16) {
        return "Severe Thinness";
    } elseif ($bmi >= 16 && $bmi < 17) {
        return "Moderate Thinness";
    } elseif ($bmi >= 17 && $bmi < 18.5) {
        return "Mild Thinness";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        return "Normal";
    } elseif ($bmi >= 25 && $bmi < 30) {
        return "Overweight";
    } elseif ($bmi >= 30 && $bmi < 35) {
        return "Obese Class I";
    } elseif ($bmi >= 35 && $bmi < 40) {
        return "Obese Class II";
    } else {
        return "Obese Class III";
    }
}

// Check if form is submitted to calculate BMI
$bmi_result = '';
$bmi_category = '';
$diet_link = '';
$button_redirect_url = 'diet.php'; // Diet page URL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = isset($_POST['weight']) ? floatval($_POST['weight']) : 0;
    $height_ft = isset($_POST['height']) ? floatval($_POST['height']) : 0;
    
    // Calculate BMI if valid data is entered
    if ($weight > 0 && $height_ft > 0) {
        $bmi = calculate_bmi($weight, $height_ft);
        $bmi_category = classify_bmi($bmi);
        $bmi_result = number_format($bmi, 2);  // Format BMI to 2 decimal places

        // Determine diet plan based on BMI category
        if ($bmi < 18.5) {
            $diet_link = '<a href="diet/bulk-up-diet.html">Bulk Up Diet Plan</a>';
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $diet_link = '<a href="diet/beginner-diet.html">Beginner Diet Plan</a>';
            
        } else {
            $diet_link = '<a href="diet/weight-loss-diet.html">Weight Loss Diet Plan</a>';
        }
    } else {
        $bmi_result = "Please enter valid weight and height.";
    }
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTrack - BMI Calculator</title> <!-- Dynamic title -->
    <link rel="stylesheet" href="styles.css">

    <style>
       #collaborate-gyms {
    margin-top: 40px;
    padding: 40px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
}

#collaborate-gyms h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.gym-list {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Only two items per row */
    gap: 20px;
}

.gym-item {
    padding: 60px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.gym-item h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.gym-item p {
    font-size: 1.1em;
}

.gym-item a {
    color: #007bff;
    text-decoration: none;
}

.gym-item a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .gym-list {
        grid-template-columns: 1fr; /* On smaller screens, show one gym per row */
    }
}


        .bmi-classification {
            margin-top: 30px;
            padding: 20px;
            background: #28a745;
            border: 1px solid #ccc;
        }

        .bmi-classification h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: white;
        }

        .bmi-classification table {
            width: 100%;
            border-collapse: collapse;
        }

        .bmi-classification table, .bmi-classification th, .bmi-classification td {
            border: 1px solid #ddd;
        }

        .bmi-classification th, .bmi-classification td {
            padding: 8px;
            text-align: center;
            color: white;
        }

        .bmi-classification th {
            background-color: rgb(0, 0, 0);
        }

        .diet-link {
            margin-top: 20px;
            font-size: 1.2em;
        }

        .diet-link a {
            text-decoration: none;
            color: #28a745;
            font-weight: bold;
        }

        .diet-button {
            display: block;
            width: 200px;
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            border: none;
            cursor: pointer;
        }

        .diet-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>FitTrack Dashboard</h1>
        <nav>
            <ul>
                <li><a href="login.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="diet.php">Diet</a></li>
                <li><a href="expenses/expenses.php">Expenses</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Your Fitness Overview</h2>
            <p>Monitor your fitness goals, track your progress, and stay motivated!</p>
        </section>

        <!-- BMI Calculator Form -->
        <section>
            <h2>Body Mass Index (BMI) Calculator</h2>
            <form method="POST" action="">
                <label for="weight">Weight (kg):</label>
                <input type="number" name="weight" id="weight" step="0.1" required>

                <label for="height">Height (feet):</label>
                <input type="number" name="height" id="height" step="0.1" required>

                <button type="submit">Calculate BMI</button>
            </form>

            <?php if ($bmi_result): ?>
                <div class="bmi-result">
                    <h3>Your BMI:</h3>
                    <p><?php echo $bmi_result; ?></p>
                    <h4>BMI Category:</h4>
                    <p><?php echo $bmi_category; ?></p>

                    <!-- Diet Link Based on BMI -->
                    <div class="diet-link">
                        <h4>Suggested Diet Plan:</h4>
                        <p><?php echo $diet_link; ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </section>
        <section>
            <a href="diet.php">
                <button class="diet-button">More Diet Plans</button>
            </a>
        </section>
        <!-- BMI Classification Box -->
        <section class="bmi-classification">
            <h3>BMI Classification</h3>
            <table>
                <tr>
                    <th>Classification</th>
                    <th>BMI Range (kg/m²)</th>
                </tr>
                <tr>
                    <td>Severe Thinness</td>
                    <td>&lt; 16</td>
                </tr>
                <tr>
                    <td>Moderate Thinness</td>
                    <td>16 - 17</td>
                </tr>
                <tr>
                    <td>Mild Thinness</td>
                    <td>17 - 18.5</td>
                </tr>
                <tr>
                    <td>Normal</td>
                    <td>18.5 - 25</td>
                </tr>
                <tr>
                    <td>Overweight</td>
                    <td>25 - 30</td>
                </tr>
                <tr>
                    <td>Obese Class I</td>
                    <td>30 - 35</td>
                </tr>
                <tr>
                    <td>Obese Class II</td>
                    <td>35 - 40</td>
                </tr>
                <tr>
                    <td>Obese Class III</td>
                    <td>&gt; 40</td>
                </tr>
            </table>
        </section>

        <!-- More Diet Plans Button -->
        <section id="gym-info">
            <h2>Explore Our Workouts</h2>
            <div class="gym-gallery">
                <div class="gym-item">
                <a href="workouts.php">
                    <img src="images/gym2.jpg" alt="Gym Image 1">
            </a>
                    <h3>Any Equipment</h3>
                   
                </div>
            </div>
            </section>
            <section id="gym-info">
            <h2>Explore Our Diets</h2>
            <div class="gym-gallery">
                <div class="gym-item">

                    <a href="diet.php">
                    <img src="images/dite1.jpg" alt="Gym Image 1">
                    </a>
                </div>
            </div>
            </section>
<!-- Collaborate Gyms Section -->
<section id="collaborate-gyms">
    <h2>Collaborate with Our Partner Gyms</h2>
    <div class="gym-list">
        <!-- Gym 1 -->
        <div class="gym-item">
            <h3>Barbells & Plates Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 5:30 AM - 10:00 PM</p>
            <p><strong>Sunday Timings:</strong> 8:00 AM - 6:00 PM</p>
            <p><strong>Price:</strong> ₹1500/month | ₹4500/3 months | ₹6000/6 months | ₹10000/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/52BrnUHeCcyd5unH8?g_st=aw" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 967*****51</p>
            <p><strong>Email:</strong> <a href="mailto:barbells@gym.com">barbells@gym.com</a></p>
        </div>
        
        <!-- Gym 2 -->
        <div class="gym-item">
            <h3>Raptor Fitness Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 5:30 AM - 9:00 PM</p>
            <p><strong>Sunday Timings:</strong> 8:00 AM - 5:00 PM</p>
            <p><strong>Price:</strong> ₹3000/month | ₹5000/3 months | ₹7000/6 months | ₹11500/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/1EjxknhrW7CQssCC8?g_st=aw" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 8794****64</p>
            <p><strong>Email:</strong> <a href="mailto:raptor@gym.com">raptor@gym.com</a></p>
        </div>

        <!-- Gym 3 -->
        <div class="gym-item">
            <h3>Virtue Fitness Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 7:00 AM - 11:00 PM</p>
            <p><strong>Sunday Timings:</strong> 8:00 AM - 7:00 PM</p>
            <p><strong>Price:</strong> ₹2000/month | ₹5500/3 months | ₹6000/6 months | ₹10500/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/UZmXmZUxYaoZcAKh7?g_st=aw" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 8749****94</p>
            <p><strong>Email:</strong> <a href="mailto:Virtue@gym.com">Virtue@gym.com</a></p>
        </div>

        <!-- Gym 4 -->
        <div class="gym-item">
            <h3>Beast Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 6:30 AM - 10:30 PM</p>
            <p><strong>Sunday Timings:</strong> 8:00 AM - 6:00 PM</p>
            <p><strong>Price:</strong> ₹1500/month | ₹4500/3 months | ₹6500/6 months | ₹11000/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/NFVWLsWpoibXhUWH6?g_st=aw" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 7854****99</p>
            <p><strong>Email:</strong> <a href="mailto:beast@gym.com">beast@gym.com</a></p>
        </div>

        <!-- Gym 5 -->
        <div class="gym-item">
            <h3>Evolution Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 5:00 AM - 9:30 PM</p>
            <p><strong>Sunday Timings:</strong> 8:00 AM - 4:00 PM</p>
            <p><strong>Price:</strong> ₹1500/month | ₹4000/3 months | ₹5000/6 months | ₹9000/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/wHYkc7garLCJTdjN7?g_st=aw" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 8877****45</p>
            <p><strong>Email:</strong> <a href="mailto:evolution@gym.com">evolution@gym.com</a></p>
        </div>

        <!-- Gym 6 -->
        <div class="gym-item">
            <h3>Alpha Gym</h3>
            <p><strong>Mon-Sat Timings:</strong> 7:00 AM - 9:00 PM</p>
            <p><strong>Sunday Timings:</strong> 9:00 AM - 4:00 PM</p>
            <p><strong>Price:</strong> ₹1400/month | ₹4200/3 months | ₹5200/6 months | ₹10800/12 months</p>
            <p><strong>Location:</strong> <a href="https://maps.app.goo.gl/zuKEc7Wjm3PYHsG46" target="_blank">Click Me</a></p>
            <p><strong>Phone:</strong> +91 9784****44</p>
            <p><strong>Email:</strong> <a href="mailto:alpha@gym.com">alpha@gym.com</a></p>
        </div>
    </div>
</section>
<section class="contact-details">
    <h2>For More Details</h2>
    <div class="details">
        <p><strong>Email:</strong> <a href="mailto:fittrack@email.com"> fittrack@email.com</a></p>
        <p><strong>Phone Number:</strong> +91 9998****77</p>
        <p><strong>Address:</strong> Hyderabad, Telangana, India</p>
    </div>
</section>
    </main>
    
    <footer>
        <p>&copy; 2025 FitTrack. All rights reserved.</p>
    </footer>
</body>
</html>
