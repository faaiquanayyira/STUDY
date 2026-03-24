<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require '../db.php';

echo "<h2>Bills</h2>";

$data = $bills->find();

foreach ($data as $bill) {

    echo "<h3>Total: ₹".$bill['grand_total']."</h3>";

    foreach ($bill['items'] as $item) {
        echo $item['name'] . " - Qty: " . $item['qty'] . " - ₹" . $item['total'];
        echo "<br>";
    }

    echo "<hr>";
}
?>
