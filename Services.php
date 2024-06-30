<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Style/Style.css">
</head>
<body>
  <center>
  <div class="center">
    <h1>Travel To Anywhere</h1>
    <p>The simplest way to book your bus tickets in Sri Lanka</p>
    <hr class="new5">
    <ul class="nav">
      <li class="list"><a href="Homepage.html">home</a></li>
      <li class="list"><a href="#">Services</a></li>
    </ul>
    <hr>
    <form action="appointment.php" method="post" >
      <label class="sign" for="sp">FROM</label>
      <select class="sign" name="startpoint" id="sp">
        <option value="colombo" name="startpoint">Colombo</option>
        <option value="gampaha" name="startpoint">Gampaha</option>
        <option value="Kadawata" name="startpoint">Kadawata</option>
        <option value="kaduwela" name="startpoint">Kaduwela</option>
        <option value="Ragama" name="startpoint">Ragama</option>
        <option value="Maradhana" name="startpoint">Maradhana</option>
        <option value="Kollupitiya" name="startpoint">Kollupitiya</option>
        <option value="Borella" name="startpoint">Borella</option>
        <option value="Kalaniya" name="startpoint">Kalaniya</option>
        <option value="Kottawa" name="startpoint">Kottawa</option>
      </select>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <label class="sign" for="ep">TO</label>
      <select class="sign" name="endpoint" id="ep">
        <option value="kandy"  name="endpoint">Kandy</option>
        <option value="nuwaraeliya"  name="endpoint">Nuwaraeliya</option>
        <option value="Badulla"  name="endpoint">Badulla</option>
        <option value="jaffna"  name="endpoint">Jaffna</option>
        <option value="Galle"  name="endpoint">Galle</option>
        <option value="Mathara"  name="endpoint">Mathara</option>
        <option value="Anuradhapura"  name="endpoint">Anuradhapura</option>
        <option value="Polonnaruwa"  name="endpoint">Polonnaruwa</option>
        <option value="Trincomalee"  name="endpoint">Trincomalee</option>
        <option value="Dambulla"  name="endpoint">Dambulla</option>
      </select>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <label class="sign" for="ti">Journey Date</label>
      <input type="date" name="time">
      </select>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="submit" value="Submit" class="sign">
    </form>
  </div>
  <br>
  <li ><a href="../Src/Schedule.html" style= "text-align:right; color: black;  padding: 5px;background-color:#ADD8E6; border-radius:12px;">Go to the schedule page</a></li>
</center>
  <div class="center">
    <center>
      <h1>My Bookings</h1>
</center>
      <table>
        <tr>
          <th>Start Point</th>
          <th>End Point</th>
          <th>Journey Date</th>
        </tr>
  
        <?php
        // Create connection
        $conn = mysqli_connect('localhost', 'root', '', 'bus_ticket_booking_system');
  
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
  
        $sql = "SELECT startpoint, endpoint, time FROM route";
        $result = $conn->query($sql);
  
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["startpoint"]."</td>
                    <td>".$row["endpoint"]."</td>
                    <td>".$row["time"]."</td>
                  </tr>";
          }
        } else {
          echo "0 results";
        }
  
        $conn->close();
        ?>
      </table>
    </div>


    <?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'bus_ticket_booking_system');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Route_id, startpoint, endpoint, time FROM route";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["startpoint"]."</td>
                <td>".$row["endpoint"]."</td>
                <td>".$row["time"]."</td>
                <td>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name='Route_id' value='".$row["Route_id"]."'>
                        <input type='submit' value='Delete' class='delete-btn'>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>
