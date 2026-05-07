<?php 
$servername = "sql110.infinityfree.com";
$username = "if0_37146109";
$password = "vikkyfrom2005";
$dbname = "if0_37146109_waterirrigation";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$battery = "SELECT percentage FROM battery";
$cmforus = "SELECT Minimum, Maximum FROM cmforus";
$switch = "SELECT flag FROM switch";
$ultrasonicdata="SELECT ultrasonicsence FROM ultrasonic";


$b = $conn->query($battery);
$c = $conn->query($cmforus);
$s = $conn->query($switch);
$u = $conn->query($ultrasonicdata);


$ultrasonic = $_GET['ultrasonic'];
$moisture = $_GET['moisture'];
$dateirrigation = $_GET['dateandirrigation'];
$switchflag = $_GET['switchflag'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOT Platform</title>
     <style>


     .tank {
    position: relative;
    width: 10px;
    height: 230px;
    border: 1px solid #333;
    border-radius: 5px;
    overflow: hidden;
    background: linear-gradient(to bottom, #eee, #ccc);
}

.water {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 
    <?php
    if($u->num_rows > 0) {
        while($row = $u->fetch_assoc()) {
        $result= $row["ultrasonicsence"];
        }
    } else {
        $result= 0;
    }
    echo $result."%;";
    ?>

    %;
    background: linear-gradient(to top, #00bfff, #0099cc);
    border-top: 2px solid #333;
}

.meter-label {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #333;
    font-size: 24px;
    font-weight: bold;
}


        .battery {
            width: 100px;
            height: 40px;
            border: 2px solid #000;
            border-radius: 5px;
            position: relative;
            margin: 40px 40px 40px 40px;
        }

        .battery::after {
            content: '';
            width: 10px;
            height: 20px;
            background-color: #000;
            position: absolute;
            right: -12px;
            top: 10px;
            border-radius: 2px;
        }

        .level {
            height: 100%;
            width:
            <?php 
            if ($b->num_rows > 0) {
                while($row = $b->fetch_assoc()) {
                    $z =$row["percentage"];
                    }
            } else {
                $z = 0;
                }
                echo $z ;
?>%;
              /* Adjust this percentage to simulate battery level */
            background-color: #34abeb;
            border-radius: 3px;
    </style>
    <link rel="stylesheet" href="css/projectpage.css">
</head>





<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="logo">CODE X MECH</div>
            <ul class="menu">
                <li ><a href="index.html" ><p style="height: 30px;">Home</p></a></li>
                <li><a href="https://chat.whatsapp.com/FfCM9EBo7Kd9SQqMin4tZ4"><img style="height: 50px; width: 50px;" src="image/whatsapp.png"></a></li>
            </ul>
        </nav>
                <section class="hero">
            <h1 class="hero-title">Smart Irrigation System For Precision Farming</h1>
        </section>
        <section class="bandonoff" style="display :flex;">
        <div>
             <div class="battery">
                <div class="level"></div>
            </div>
            <p style="margin:0px 0px 0px 40px;  font-family: 'Arial', sans-serif; font-size:20px";>Moisture Reading</p>
        </div>


            <div style="margin:40px;">
        <form method="post"> 
            <input type="submit" name="button1" class="button" value="ON" style="height:1.5cm; width:2cm; background-color:#77e319; border-radius: 20px;transition: background-color 0.3s ease;" /> 
          
            <input type="submit" name="button2" class="button" value="OFF" style="height:1.5cm; width:2cm; background-color:#f20f0f;border-radius:20px;" /> 
        </form>
            <br>
            <span class="dot" style=" 
                margin:3px 0px 0px 1.7cm;
                height: 30px;
                width: 30px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                background-color:
                <?php 
                 if ($s->num_rows > 0){
                while($row =$s->fetch_assoc()){$flag= $row["flag"];}
            }else{echo "blue";}
                if(array_key_exists('button1', $_POST)) 
                {
                    $flag=1;
                    $sql = "INSERT INTO switch (flag) VALUES (".$flag.")";
                    if ($conn->query($sql) === TRUE) {
                            echo "";
                            sleep(3); 
                        } else {
                            echo "";
                            }
                      } 
                    else if(array_key_exists('button2', $_POST)) {
                        $flag=0;
                    $sqlg = "INSERT INTO switch (flag) VALUES (".$flag.")";
                    if ($conn->query($sqlg) === TRUE) {
                        echo "";
                        sleep(4);
                    } else {
                         echo "";
                    }}
            if ($flag==0){echo "#f20f0f";}else{echo "#77e319";}
       ?>
                ;"></span>
            </div>


            <div style="margin:40px;"> <section style="display:flex;">
            <div style="margin:10px;">
            <div class="tank">
            <div class="water"></div>
            </div>
        </div>
     <div style="margin:10px; font-size:11px">
     ___<br>
     100%<br>
     ___<br>
     90%<br>
     ___<br>
     80%<br>
     ___<br>
     70%<br>
     ___<br>
     60%<br>
     ___<br>
     50%<br>
     ___<br>
     40%<br>
     ___<br>
     30%<br>
     ___<br>
     20%<br>
     ___<br>
     10%<br><br><br>

     </div>
     </section>
     </div>
    </section>
    <p align="right" style="margin:0px 20px 0px 0px;">UltraSonic Reading</p>


        <section class="curved-boxes">
            <a href="php/controlling.php"><div class="box">Control</div></a>
           <!-- <a href=""><div class="box"></div></a>-->
        </section>
    </div>
</body>
</html>
