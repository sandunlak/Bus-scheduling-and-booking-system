<?php
include 'connection.php'
?>

<!DOCTYPE html>
<html>
<head></head>

<body>
	<div>
		<div>
					<div >
						<h2 >Passenger Details</h2>
					</div><br>
					
					<div>
						<table border="1" width="70%">
						<tr>
					<th>Full Name</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>Address</th>
					<th>Email</th>
                    <th>Phone number</th>
                    <th>Password</th>
                    <th>Update</th>
					<th>Delete</th>
				</tr>

                <?php
					
                    $conn = mysqli_connect("localhost", "root", "", "obbs");
                    $mysql = "SELECT *from registration";
                    $result = $conn->query($mysql);
					if($result){   
					while($row=mysqli_fetch_assoc($result)){
                        
                        $full_name = $row["full_name"];
                        $gender = $row["gender"];
                        $birthday = $row["birthday"];
                        $address = $row["address"];
                        $email = $row["email"];
                        $phone = $row["phone"];
                        $password = $row["password"];
					
					?>
					<tr>

					<td> <?php echo $row['full_name']; ?> </td>
					<td> <?php echo $row['gender']; ?> </td>
					<td> <?php echo $row['birthday']; ?> </td>
					<td> <?php echo $row['address']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['phone']; ?> </td>
                    <td> <?php echo $row['password']; ?> </td>
					<td> <?php
					
					
							echo '<a href="userRegistration_Update.php? updateemail='.$email.'">
								<button  
									style="color:white;
									background-color:darkgreen; 
									width:70px; 
									height:30px; 
									border-radius:8px; 
									cursor: pointer;
									border: none;
									font-size: 100%; 
									margin-left:10px;  ">Edit
								</button></a>'
							?> </td>

							<td> <?php

							echo '<a href="userRegistration_Delete.php? deleteemail='.$email.'">
								<button  
									style="color:white; 
									background-color:green; 
									width:70px; 
									height:30px; 
									border-radius:8px; 
									cursor: pointer;
									border: none;
									font-size: 100%; 
									margin-left:10px;  ">Remove
								</button></a>'
					
							?> </td>
						</tr>
						<?php
					}
					
					}
					
					?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>