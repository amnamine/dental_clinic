<?php
include 'db.php';

$sql = "SELECT * FROM stock";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Stock Management</title>
</head>
<body>
    <h1>Stock Management</h1>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Expiration Date</th>
            <th>Supplier</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { 
            $status = "";
            if ($row['quantity'] < 5) {
                $status = "Low stock!";
            } elseif (strtotime($row['expiration_date']) - time() < 30 * 86400) {
                $status = "Near expiration!";
            }
        ?>
            <tr>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['expiration_date']; ?></td>
                <td><?php echo $row['supplier']; ?></td>
                <td><?php echo $status; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
