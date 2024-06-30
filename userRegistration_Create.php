<?php 
 include 'connection.php';
 ?>

<?php

    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Insert data into the database
    $sql = "INSERT INTO registration(full_name, gender, birthday, address, email, phone, password) 
            VALUES ('$full_name', '$gender', $birthday, '$address', '$email', $phone, '$password')";

    if ($conn->query($sql) === true) {
        header("location:userRegistration_Read.php"); 
        echo "Account Create successfully";
    } 
    else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

?>