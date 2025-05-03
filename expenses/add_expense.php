<?php
include 'config1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST["item"];
    $price = $_POST["price"];
    $category = $_POST["category"];

    // Check if all values are valid
    if (!empty($item) && is_numeric($price) && $price > 0 && !empty($category)) {
        
        // Prepare the SQL statement to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO expenses (item, price, category) VALUES (?, ?, ?)");
        
        // Bind parameters (s for string, d for double, i for integer)
        $stmt->bind_param("sss", $item, $price, $category);

        // Execute the query
        if ($stmt->execute()) {
            echo "Expense added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Invalid input!";
    }
}

$conn->close();
?>
