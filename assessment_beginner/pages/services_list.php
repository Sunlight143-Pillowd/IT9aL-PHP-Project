<?php
include "db.php";
 
$services = mysqli_fetch_assoc(mysqli_query($conn, "SELECT service_name AS name FROM services"))['name'];
$description = mysqli_fetch_assoc(mysqli_query($conn, "SELECT description FROM services"))['description'];
$rate = mysqli_fetch_assoc(mysqli_query($conn, "SELECT rate FROM services"))['rate'];
$revRow = mysqli_fetch_assoc(mysqli_query($conn, "SELECT IFNULL(SUM(amount_paid),0) AS s FROM payments"));
$revenue = $revRow['s'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>