
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require '../db.php';

echo "<h2>Products</h2>";
echo "<a href='add.php'>Add Product</a><br><br>";

$data = $products->find();

foreach ($data as $row) {
    echo $row['name'] . " - ₹" . $row['price'] . " - Stock: " . $row['stock'];
    echo "<br>";
}
?>