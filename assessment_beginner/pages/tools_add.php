<?php
include "../db.php";

if (isset($_POST['tool_name']) && isset($_POST['quantity_total']) && isset($_POST['quantity_available'])) {
    $tool_name = $_POST['tool_name'];
    $quantity_total = $_POST['quantity_total'];
    $quantity_available = $_POST['quantity_available'];

    $sql = "INSERT INTO tools (tool_name, quantity_total, quantity_available) VALUES ('$tool_name', '$quantity_total', '$quantity_available')";
    if (mysqli_query($conn, $sql)) {
        header("Location: tools_list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tools</title>
</head>
<body>
    <?php include "../nav.php"; ?>
    <h1>Add Tools</h1>
    <form method="post" action="tools_add.php">
        <label for="tool_name">Tool Name:</label><br>
        <input type="text" id="tool_name" name="tool_name" required><br><br>

        <label for="quantity_total">Quantity Total:</label><br>
        <input type="number" id="quantity_total" name="quantity_total" required><br><br>

        <label for="quantity_available">Quantity Available:</label><br>
        <input type="number" id="quantity_available" name="quantity_available" required><br><br>

        <input type="submit" value="Add Tool">
    </form>
</body>
</html>

