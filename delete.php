<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'bus_ticket_booking_system');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Route_id'])) {
        $Route_id = $_POST['Route_id'];

        // Perform delete query
        $sql = "DELETE FROM route WHERE Route_id = '$Route_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

$conn->close();
?>
