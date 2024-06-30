<?php
include 'connection.php';

    $email = $_GET['updateemail'];
    $sql = "SELECT * FROM `registration` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

        $full_name = $row["full_name"];
        $gender = $row["gender"];
        $birthday = $row["birthday"];
        $address = $row["address"];
        $email = $row["email"];
        $phone = $row["phone"];
        $password = $row["password"];


            if (isset($_POST['submit'])) {
                $full_name = $_POST["full_name"];
                $gender = $_POST["gender"];
                $birthday = $_POST["birthday"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $password = $_POST["password"];
                

        $sql = "UPDATE `registration` 
                SET full_name='$full_name', gender='$gender', birthday='$birthday', address='$address', email='$email', phone='$phone', password='$password'   
                WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
            if ($result) {
                header('location: userRegistration_Read.php');
                exit;
             } 
            else {
                die(mysqli_error($conn));
             }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/register_css.css">
    <script src="js/reg_js.js"></script>
    <title>Bus Booking Registration</title>
</head>
<body>
    <div class="container">
        <div class="left-half">
            <img src="image/bus.jpg" alt="Bus Image">
        </div>
        <div class="right-half">
            <style>
                body {
                    background-image: url('image/bg.jpg'); 
                    background-size: cover; 
                    background-repeat: no-repeat; 
                }
            </style>
            <div class="registration-form">
                <h2>Bus Booking Registration</h2>
                <form id="registration-form" action="userRegistration_Create.php" method="POST">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" placeholder="full name" id="full-name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="radio-buttons">
                            <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="female">Female</label>
                            <input type="radio" id="female" name="gender" value="female">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date of Birth:</label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" placeholder="address" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="email@gmail.com" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" placeholder="+94*********" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" placeholder="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confrmpassword">Re-Enter Password</label>
                        <input type="password" placeholder="re-enter password" id="confrmpassword" name="confrmpassword" required>
                    </div>

                    <input type="checkbox" id="checkbox" onclick="enableButton()">Accept Privacy Policy And Terms<br>

                    <div class="button-container">
                        <button type="submit" id="submit-button" class="submit-button">Submit</button>
                        <button type="reset" class="reset-button">Reset</button>
                        <button type="button" class="cancel-button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

