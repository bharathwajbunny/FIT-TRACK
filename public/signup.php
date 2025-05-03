<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $password = mysqli_real_escape_string($conn, $_POST['password']); 
   $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

   // Check if passwords match
   if ($password !== $confirm_password) {
      $error[] = 'Passwords do not match!';
   } else {
      // Check if username already exists
      $check_user = "SELECT * FROM user_form WHERE name = '$name'";
      $result = mysqli_query($conn, $check_user);

      if (mysqli_num_rows($result) > 0) {
         $error[] = 'Username already exists!';
      } else {
         // Store password as plain text
         $insert = "INSERT INTO user_form (name, password) VALUES ('$name', '$password')";
         mysqli_query($conn, $insert);

         // Redirect to login page after successful signup
         header('Location: home.php');
         exit();
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - FitTrack</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>FitTrack Signup</h1>
</header>

<main>
    <section class="signup-section">
        <h2>Create an Account</h2>
        
        <form action="" method="post" class="signup-form">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" required placeholder="Choose a username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter a password">
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password">
            </div>

            <button type="submit" name="submit" class="signup-btn">Sign Up</button>
        </form>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>

        <!-- Link to Login Page -->
        <p>Already have an account? <a href="home.php" class="login-link">Login here</a></p>

    </section>
</main>

<footer>
    <p>&copy; 2025 FitTrack. All rights reserved.</p>
</footer>

</body>
</html>
