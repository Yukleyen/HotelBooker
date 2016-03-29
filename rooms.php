<html>
<head>
<title>Hotel Booker Rooms</title>
</head>
<body>

<h1>Add a room:</h1> 
  <form action="rooms.php" method="post">
    <p>
        Floor:<br>
        <input type="number" name="floor">
    </p>

    <p>
        Room number:<br>
        <input type="number" name="room_number">
    </p>

    <input type="submit" name="submit">
  </form>

<?php

  include "database.php";


  if (isset($_POST['submit'])){
    $sql_string = "INSERT INTO rooms (id, floor, room_number) VALUES ('$_POST[id]','$_POST[floor]','$_POST[room_number]')";
    $result = mysql_query($sql_string);
  }
  /*else if(isset($_POST['update'])){
    $sql_string = "UPDATE rooms SET (id, floor, room_number) VALUES ('$record[id]','$_POST[floor]','$_POST[room_number]')";
    $result = mysql_query($sql_string);
  }*/
  else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_string =  "DELETE FROM rooms WHERE id = '$id' ";
    mysql_query($sql_string);
  }

  $sql_string = "SELECT * FROM rooms";
  $roomData = mysql_query($sql_string,$con);


  echo "<table>";
  echo "<tr>";
  echo "<th>" . "floor" . "</th>";
  echo "<th>" . "room number" . "</th>";
  echo "</tr>";

  while ($record = mysql_fetch_array($roomData)) {
    echo "<tr>";
    echo "<td>" . $record['floor'] . "</td>"; 
    echo "<td>" . $record['room_number'] . "</td>";
    echo "<td>" . "<a href='rooms.php?id=" . $record['id'] . " ' name='delete'> delete  </a>" . "</td>";
    echo "<td>" . "<a href='update.php?id=" . $record['id'] . "&floor=" . $record['floor'] . "&room_number=" . $record['room_number'] . " ' name='update'> edit </a>" . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  mysql_close($con);
?>
</body>
</html>