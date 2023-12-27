<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have form validation and sanitation in place

$name = $conn->real_escape_string($_POST["name"]);
$email = $conn->real_escape_string($_POST["email"]);
$regno = $conn->real_escape_string($_POST["regno"]);
$fname = $conn->real_escape_string($_POST["fname"]);
$date = $conn->real_escape_string($_POST["date"]);
$degree = $conn->real_escape_string($_POST["degree"]);
$tel = $conn->real_escape_string($_POST["tel"]);
$photo = $conn->real_escape_string($_POST["photo"]);

$sql = "INSERT INTO regform (name, regno, fname, date_of_birth, email, degree, tel, photo) VALUES ('$name','$regno','$fname','$date','$email','$degree','$tel','$photo')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
