<?php

require_once "../function.php";

$sql = $function->addplanet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Planet - Admin</title>
</head>
<body>
    <h2>Add New Planet</h2>
    <form action="addplanet.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="discovered_date">Discovered Date:</label>
        <input type="date" id="discovered_date" name="discovered_date"><br><br>
        <label for="size">Size:</label>
        <input type="text" id="size" name="size"><br><br>
        <label for="atmosphere">Atmosphere:</label>
        <input type="text" id="atmosphere" name="atmosphere"><br><br>
        <label for="distance_sun">Distance from Sun:</label>
        <input type="text" id="distance_sun" name="distance_sun" step="0.01"><br><br>
        <label for="distance_earth">Distance from Earth:</label>
        <input type="number" id="distance_earth" name="distance_earth" step="0.01"><br><br>
        <input type="submit" value="Add Planet">
    </form>
</body>
</html>
