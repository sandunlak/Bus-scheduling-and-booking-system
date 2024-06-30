<?php
include 'connection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startpoint = $_POST['startpoint'];
    $endpoint = $_POST['endpoint'];
    $time = $_POST['time'];

    $sql = "INSERT INTO route (startpoint, endpoint, time) VALUES ('$startpoint', '$endpoint', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
