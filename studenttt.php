<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentlogin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_GET["name"];
$sql = "DELETE FROM users where user_name='$name'";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    header("Location: home3.html");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>