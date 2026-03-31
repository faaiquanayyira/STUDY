<?php
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['products'])) {

    $items = [];
    $grandTotal = 0;

    foreach ($_POST['products'] as $index => $productId) {
        $product = $products->findOne([
            "_id" => new MongoDB\BSON\ObjectId($productId)
        ]);

        $qty = (int)$_POST['qty'][$index];
        $total = $product['price'] * $qty;

        $items[] = [
            "product_id" => $product['_id'],
            "name" => $product['name'],
            "qty" => $qty,
            "price" => $product['price'],
            "total" => $total
        ];

        $grandTotal += $total;
    }

    $bills->insertOne([
        "customer_id" => new MongoDB\BSON\ObjectId($_POST['customer']),
        "items" => $items,
        "grand_total" => $grandTotal,
        "date" => date("Y-m-d")
    ]);

    header("Location: view.php");
    exit();
} else {
    echo "No products selected! <a href='create.php'>Back</a>";
}
?>