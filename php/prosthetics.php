<?php
include 'db.php';

$sql = "SELECT * FROM prosthetics";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prosthetics Management</title>
</head>
<body>
    <h1>Prosthetics Management</h1>
    <table border="1">
        <tr>
            <th>Prosthetic Name</th>
            <th>Patient Name</th>
            <th>Payment Status</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['prosthetic_name']; ?></td>
                <td><?php echo $row['patient_name']; ?></td>
                <td><?php echo $row['payment_status']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
