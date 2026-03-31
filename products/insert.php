<?php
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products->insertOne([
        "name" => $_POST['name'],
        "price" => (int)$_POST['price'],
        "stock" => (int)$_POST['stock']
    ]);

    header("Location: view.php");
    exit(); // stop further execution
} else {
    echo "Invalid request. <a href='add.php'>Go Back</a>";
}