<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM tools ORDER BY tool_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
</head>
<body>
    <?php include "../nav.php"; ?>
    <h1>Tools</h1>
    <p>This is the tools list page.</p>
    <a href="tools_add.php">+Add Tool</a><br><br>
    <table border="1" cellpadding="8">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity Total</th>
                <th>Quantity Available</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['tool_id']; ?></td>
                <td><?php echo $row['tool_name']; ?></td>
                <td><?php echo $row['quantity_total']; ?></td>
                <td><?php echo $row['quantity_available']; ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>