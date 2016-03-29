<html>
<head>
<title>Hotel Booker Rooms</title>
</head>
<body>

<h1>Edit your room:</h1> 
  <form action="rooms.php" method="post">
    <p>
        Floor:<br>
        <input type="number" name="floor" placeholder="<?php echo $_GET['floor']; ?>">
    </p>

    <p>
        Room number:<br>
        <input type="number" name="room_number" placeholder="<?php echo $_GET['room_number']; ?>">
    </p>

    <input type="submit" name="update" value="update">
  </form>

<?php

  include "database.php";

/*
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_string =  "DELETE FROM rooms WHERE id = '$id' ";
    mysql_query($sql_string);
  }
*/

?>
</body>
</html>