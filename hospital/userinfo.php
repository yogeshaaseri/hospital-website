<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'yc');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$date = $_POST['date'];
$doctor = $_POST['doctor'];

$query = " insert into user (name, mobile, email, date, doctor) values ('$name','$mobile','$email','$date', '$doctor')";
mysqli_query($con, $query );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="popup">
            <img src="404-tick.png" alt="">
            <h2>Thank You!</h2>
            <h3>Your Appointment has been Successfully Done</h3>
            <br>
            <h1>Thanks!</h1>
            <a href="index.html" > <button type="button" class="btn" id="button">ok</button></a>
        </div>
    </div>
</body>
</html>
