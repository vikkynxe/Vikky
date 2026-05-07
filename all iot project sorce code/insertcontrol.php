<?php 
$servername = "sql110.infinityfree.com";
$username = "if0_37146109";
$password = "vikkyfrom2005";
$dbname = "if0_37146109_waterirrigation";


 $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date =$_GET['date'];
$min =$_GET['min'];
$max =$_GET['max'];
$irriga=$_GET['irriga'];

$minmaxus = "INSERT INTO cmforus (Minimum, Maximum) VALUES ('".$min."', '".$max."')";
$inirri = "INSERT INTO irrigationcontrol (irrigation) VALUES ('".$irriga."')";

if ($conn->query($minmaxus) === TRUE) {
  echo "New record created successfully (".$min.",".$max.")<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($inirri) === TRUE) {
  echo "New record created successfully (".$irriga.")<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$newdate = date("dmY", strtotime($date));

sleep(3);
$getdate="SELECT `Date`, `irrigation` FROM `dateandirrigation` ";
$gd = $conn->query($getdate);

if ($gd->num_rows >0){
      while($row = $gd->fetch_assoc()) {
             $Date=$row["Date"];
             $newDate=date("dmY",strtotime($Date));
             if ($newDate == $newdate){
                 echo $Date."<br>".$row["irrigation"]." ___Litters<br>";
                 }
                 else{
                     echo "";
                     }
         }
      }
 else{
     echo "_";
     }
     ?>