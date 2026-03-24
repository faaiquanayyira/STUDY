<?php
require '../db.php';

echo "<h2>Customers</h2>";
echo "<a href='add.php'>Add Customer</a><br><br>";

$data = $customers->find();

foreach ($data as $row) {
    echo $row['name'] . " - " . $row['phone'] . " - " . $row['city'];
    echo "<br>";
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">