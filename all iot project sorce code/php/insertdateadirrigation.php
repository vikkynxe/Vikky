<?php
$servername = "sql110.infinityfree.com";
$username = "if0_37146109";
$password = "vikkyfrom2005";
$dbname = "if0_37146109_waterirrigation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$da = 0;
$date = date("d-m-Y");
$da = $_GET['d1']; // Or $_GET['d1'] if using GET

$sql = "INSERT INTO dateandirrigation (`Date`, `irrigation`) VALUES ('$date', '$da')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
