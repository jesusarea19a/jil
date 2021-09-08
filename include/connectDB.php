<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jil_data";

$dsn = 'mysql:host=localhost;dbname=jil_data';


try {
    $db = new pdo($dsn, $username, $password);
} catch (PDOException $e) {
    alert(error_log);
    exit();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  alert(error_log);
  exit();
} else {
  echo "connection Good";
}

$sql = "SELECT user_me, pass_me, lname_me, fname_me FROM jiltableuser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "User: " . $row["user_me"]. " - Name: " . $row["lname_me"]. " " . $row["fname_me"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>