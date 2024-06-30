<?php 
 include 'connection.php';
 
if (isset($_GET['deleteemail'])) {
    $email = $_GET['deleteemail'];

    $sql = "DELETE FROM `registration` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: userRegistration_Read.php');
        exit;
    } else {
        die(mysqli_error($conn));
}
}
?>