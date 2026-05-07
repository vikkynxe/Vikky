<?php
// Database connection details
$servername = "sql110.infinityfree.com";
$username = "if0_37146109";
$password = "vikkyfrom2005";
$dbname = "if0_37146109_waterirrigation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete all records from battery and switch tables
$batterydel = "DELETE FROM battery";
$switchdel = "DELETE FROM switch";

$conn->query($batterydel);
$conn->query($switchdel);

// Get values from URL parameters and cast as needed
$ultrasonic = (int) $_GET['ultrasonic'];
$moisture = (int) $_GET['moisture'];
$switchflag = (int) $_GET['switchflag'];

// $solinoid = (int) $_GET['solinoid'];  // Assuming solenoid is also needed later

// Prepare and execute SQL queries to insert new records
$insertultrasonic = "INSERT INTO ultrasonic (ultrasonicsence) VALUES ($ultrasonic)";
$insertbattery = "INSERT INTO battery (percentage) VALUES ($moisture)";
$insertswitch = "INSERT INTO switch (flag) VALUES ($switchflag)";

// Execute the insert queries and provide feedback
if ($conn->query($insertbattery) === TRUE) {
    echo "New battery record created successfully\n";
} else {
    echo "Error inserting battery: " . $conn->error . "\n";
}

if ($conn->query($insertswitch) === TRUE) {
    echo "New switch record created successfully\n";
} else {
    echo "Error inserting switch: " . $conn->error . "\n";
}

if ($conn->query($insertultrasonic) === TRUE) {
    echo "New ultrasonic record created successfully\n";
} else {
    echo "Error inserting ultrasonic: " . $conn->error . "\n";
}

// Close the connection
$conn->close();
?>
