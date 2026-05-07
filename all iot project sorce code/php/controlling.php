<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOT Platform</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; box-sizing: border-box; background-color: #f0f0f0;">

    <div style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px;">
        <!-- Navigation Bar -->
        <nav style="display: flex; justify-content: space-between; align-items: center; background-color: #333; padding: 10px; color: white;">
            <div class="logo" style="font-size: 24px; font-weight: bold;">CODE X MECH</div>
            <ul class="menu" style="list-style: none; display: flex; margin: 0; padding: 0;">
                <li style="margin-right: 15px;"><a href="index.html" style="text-decoration: none; color: white;"><p style="height: 30px; margin: 0;">Home</p></a></li>
                <li><a href="https://chat.whatsapp.com/FfCM9EBo7Kd9SQqMin4tZ4"><img style="height: 50px; width: 50px;" src="whatsapp.png" alt="WhatsApp"></a></li>
            </ul>
        </nav>

        <!-- Form Section -->
        <form action="https://iot-projects-101.wuaze.com/insertcontrol.php" method="get" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); margin-top: 20px;">
            <div style="margin-bottom: 15px;">
                <label for="date" style="font-size: 18px; margin-bottom: 5px; display: block;">Select Date:</label>
                <input type="date" name="date" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="min" style="font-size: 18px; margin-bottom: 5px; display: block;">Minimum:</label>
                <input type="number" name="min" value="25" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="max" style="font-size: 18px; margin-bottom: 5px; display: block;">Maximum:</label>
                <input type="number" name="max" value="75" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="irriga" style="font-size: 18px; margin-bottom: 5px; display: block;">Irrigation:</label>
                <input type="number" name="irriga" value="9999999" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div>
                <input type="submit" value="Submit" style="width: 100%; padding: 10px; background-color: #333; color: white; border: none; border-radius: 4px; cursor: pointer;">
            </div>
        </form>
    </div>

</body>
</html>
