<?php
header('Content-Type: application/json');

$logFile = 'data.txt';
file_put_contents($logFile,'');


$servername = "sql110.infinityfree.com";
$username = "if0_37146109";
$password = "vikkyfrom2005";
$dbname = "if0_37146109_waterirrigation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$response = [];

//$ultrasonic = $conn->query("SELECT * FROM ultrasonic");


$cmforus = $conn->query("SELECT * FROM cmforus");//1
$switch = $conn->query("SELECT * FROM switch");  //1
$moisturecontrol = $conn->query("SELECT * FROM moisturecontrol"); // 2
$irrigationcontrol = $conn->query("SELECT * FROM irrigationcontrol"); //1


    if($moisturecontrol->num_rows > 0) {
        while($row = $moisturecontrol->fetch_assoc()) {
        $response['Minm'] = $row["min"];
        $response['Maxm'] = $row["max"];
        }
    }

    if($cmforus->num_rows > 0) {
        while($row = $cmforus->fetch_assoc()) {
        $response['Min'] = $row["Minimum"];
        $response['Max'] = $row["Maximum"];
        }
    }

if ($switch->num_rows > 0) {
        while($row = $switch->fetch_assoc()) {
            $response['flag'] = $row["flag"];
        }
}

if ($irrigationcontrol->num_rows > 0 ) {
    while($row = $irrigationcontrol->fetch_assoc()) {
        $response['irrigat'] = $row["irrigation"];
        }
}
echo ($response['Min']);

file_put_contents($logFile, $response['Minm'].",".$response['Maxm'].",".$response['Max'].",".$response['flag'].",".$response['irrigat']);
$conn->close();




//if ($ultrasonic->num_rows > 0 ) {
//     while($row = $ultrasonic->fetch_assoc()) {
//         $response['ultrasonic'] = $row["ultrasonicsence"];
//         }
// }
?>