<?php
include 'config1.php';

$sql = "SELECT * FROM expenses ORDER BY created_at DESC";
$result = $conn->query($sql);

$expenses = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $expenses[] = $row;
    }
}

echo json_encode($expenses);

$conn->close();
?>
