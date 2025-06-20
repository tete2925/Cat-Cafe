<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "catcafe";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$nrc = $_POST['nrc'];
$email = $_POST['email'];
$visit_date = $_POST['visit_date'];
$visit_time = $_POST['visit_time'];
$hours = $_POST['hours'];
$guests = $_POST['guests'];
$special_requests = $_POST['special_requests'];
$total_cost = $hours * 5000;

// Insert into database
$sql = "INSERT INTO reservations (name, nrc, email, visit_date, visit_time, hours, guests, total_cost, special_requests)
        VALUES ('$name', '$nrc', '$email', '$visit_date', '$visit_time', $hours, $guests, $total_cost, '$special_requests')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Reservation Successful!</h2><p>We can't wait to see you, $name! 🐾</p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
