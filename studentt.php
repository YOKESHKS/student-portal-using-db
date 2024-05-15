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
$user_name = $_GET["name"];
$id = $_GET["id"];
$pass = $_GET["pass"];
$usn = $_GET["usn"];
$fathername = $_GET["fathername"];
$sem = $_GET["semm"];
$cgpa = $_GET["cgpa"];
$back = $_GET["back"];
$mobile = $_GET["phone"];
$SUB1 = $_GET["sub1"];
$SUB2 = $_GET["sub2"];
$SUB3 = $_GET["sub3"];
$SUB4 = $_GET["sub4"];
$SUB5 = $_GET["sub5"];
$SUB6 = $_GET["sub6"];
$SUB7 = $_GET["sub7"];
$f1 = $_GET["f1"];
$f2 = $_GET["f2"];
$f3 = $_GET["f3"];
$f4 = $_GET["f4"];
$f5 = $_GET["f5"];
$s1 = $_GET["s1"];
$s2 = $_GET["s2"];
$s3 = $_GET["s3"];
$s4 = $_GET["s4"];
$s5 = $_GET["s5"];
$s6 = $_GET["s6"];
$s7 = $_GET["s7"];
$s8 = $_GET["s8"];
$L1 = $_GET["L1"];
$L2 = $_GET["L2"];
$L3 = $_GET["L3"];
$L4 = $_GET["L4"];
$L5 = $_GET["L5"];

$sql = "INSERT INTO users (id, user_name, password, name) VALUES ('$id', '$user_name', '$pass', '$name')";
$conn->query($sql);
$sql = "INSERT INTO user (name, usn, fathername, sem, cgpa, back, mobile) VALUES ('$name', '$usn', '$fathername', '$sem', '$cgpa', '$back', '$mobile')";
if ($conn->query($sql) === TRUE) {
  header("Location: home3.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO userresult (sub1, sub2, sub3, sub4, sub5, sub6, sub7, name) VALUES ('$SUB1', '$SUB2', '$SUB3', '$SUB4', '$SUB5', '$SUB6', '$SUB7', '$name')";
$conn->query($sql);

$sql = "INSERT INTO userfees (name, f1, f2, f3, f4, f5) VALUES ('$name', '$f1', '$f2', '$f3', '$f4', '$f5')";
$conn->query($sql);

$sql = "INSERT INTO useratt (name, s1, s2, s3, s4, s5, s6, s7, s8) VALUES ('$name', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8')";
$conn->query($sql);

$sql = "INSERT INTO libb (L1, L2, L3, L4, L5, name) VALUES ('$L1', '$L2', '$L3', '$L4', '$L5', '$name')";
$conn->query($sql);

$conn->close();
?>