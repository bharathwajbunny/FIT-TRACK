<?php
@include 'config.php';


session_start();

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $password = $_POST['password']; 

   // Query the database to check for matching credentials
   $select = "SELECT * FROM user_form WHERE name = '$name' && password = '$password'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      // Set session for successful login
      $_SESSION['user_name'] = $row['name'];

      // Redirect to home page
      header('location:login.php'); // Replace with your actual home page URL
   } else {
      $error[] = 'Incorrect username or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitTrack</title>
    <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS -->
</head>
<body>

<header>
    <h1>FitTrack Login</h1>
</header>

<main>
    <section class="login-section">
        <h2>Login to Your Account</h2>
        
        <form action="" method="post" class="login-form">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" required placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>

            <button type="submit" name="submit" class="login-btn">Login</button>
        </form>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>

        <!-- Signup Button -->
        <p>Don't have an account? <a href="signup.php" class="signup-btn">Sign Up</a></p>

    </section>
</main>

<footer>
    <p>&copy; 2025 FitTrack. All rights reserved.</p>
</footer>

</body>
</html>
