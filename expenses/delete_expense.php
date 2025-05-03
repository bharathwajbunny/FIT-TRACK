<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";
$dbname = "fittrack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is sent via POST
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM expenses WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Expense deleted successfully";
    } else {
        echo "Error deleting expense: " . $conn->error;
    }
}

$conn->close();
?>
