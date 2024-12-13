<?php
include 'db.php';

$sql = "SELECT * FROM calendar ORDER BY appointment_date, appointment_time";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
</head>
<body>
    <h1>Appointment Calendar</h1>
    <table border="1">
        <tr>
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['doctor_name']; ?></td>
                <td><?php echo $row['patient_name']; ?></td>
                <td><?php echo $row['appointment_date']; ?></td>
                <td><?php echo $row['appointment_time']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
