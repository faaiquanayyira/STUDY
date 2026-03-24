<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require '../db.php';

$customerData = $customers->find();
$productData = $products->find();
?>

<h2>Create Bill</h2>

<form action="save.php" method="POST">

<select name="customer">
<?php
foreach ($customerData as $c) {
    echo "<option value='".$c['_id']."'>".$c['name']."</option>";
}
?>
</select>

<h3>Products</h3>

<?php
foreach ($productData as $p) {
    echo "
    <input type='checkbox' name='products[]' value='".$p['_id']."'>
    ".$p['name']." (₹".$p['price'].")
    Qty: <input type='number' name='qty[]' value='1'><br>
    ";
}
?>

<button>Create Bill</button>
</form>